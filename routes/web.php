<?php

use App\Http\Controllers\Guest\CRController;
use App\Http\Controllers\Guest\TPController;
use App\Http\Controllers\Guest\BFController;
use App\Http\Controllers\Guest\PaymentController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/credit-restoration', [CRController::class, 'index'])->name('cr.index');
Route::post('/credit-restoration', [CRController::class, 'store'])->name('cr.store');

Route::get('tax-preparation', [TPController::class, 'index'])->name('tp.index');

Route::get('business-formation', [BFController::class, 'index'])->name('bf.index');

Route::post('/payment', [PaymentController::class, 'index'])->name('payment.index');
require_once __DIR__ . '/jetstream.php';
