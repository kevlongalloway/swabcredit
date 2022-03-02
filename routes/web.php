<?php

use App\Http\Controllers\Guest\CRController;
use App\Http\Controllers\Guest\TPController;
use App\Http\Controllers\Guest\BFController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\Guest\PaymentController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/services/{servicePath}', [ServicesController::class, 'index'])->name('guest.services')->middleware(['auth.subscribe','service.exists']);
Route::post('/checkout', [ServicesController::class, 'store'])->name('to.checkout');

Route::get('/upload-documents', [UploadController::class, 'index'])->name('upload.index');

require_once __DIR__ . '/jetstream.php';
