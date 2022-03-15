<?php

use App\Http\Controllers\Guest\CRController;
use App\Http\Controllers\Guest\TPController;
use App\Http\Controllers\Guest\BFController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\SuccessController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\Guest\ServicesController;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', [LandingController::class, 'index']);

Route::middleware(['auth:sanctum','upload.required' ,'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/success', [SuccessController::class, 'index'])->name('customer.success');

Route::get('/products', function () {
    return view('products');
})->name('products');

Route::get('/services/{servicePath}', [ServicesController::class, 'index'])->name('guest.services')->middleware('service.exists');
Route::post('/services/checkout', [ServicesController::class, 'store'])->name('to.checkout');
Route::post('/checkout', [PaymentController::class, 'store'])->name('checkout');


Route::get('/upload-documents', [UploadController::class, 'index'])->name('upload.index');
Route::post('/upload-documents', [UploadController::class, 'store'])->name('upload.store');

Route::get('/success/{type}', [SuccessController::class, 'index'])->name('success');


require_once __DIR__ . '/jetstream.php';
