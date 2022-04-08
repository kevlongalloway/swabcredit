<?php

use App\Http\Controllers\Guest\CRController;
use App\Http\Controllers\Guest\TPController;
use App\Http\Controllers\Guest\BFController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\SuccessController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductsPageController;
use App\Http\Controllers\Guest\ServicesController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AffiliateController;
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
    if(auth()->user()->isAdmin()) {
        return view('dashboard', [
            'users' => \App\Models\User::all()
        ]);
    }
    return view('dashboard');
})->name('dashboard');
#route for admin to search users
Route::get('/dashboard/search', [AdminController::class, 'search'])->name('dashboard.search');


Route::get('/success', [SuccessController::class, 'index'])->name('customer.success');

Route::get('/products', [ProductsPageController::class, 'index'])->name('products');

Route::get('/services/{servicePath}', [ServicesController::class, 'index'])->name('guest.services')->middleware('service.exists');
Route::get('/checkout/{service}', [PaymentController::class, 'index'])->name('checkout')->middleware('auth');
Route::post('/checkout', [PaymentController::class, 'store'])->name('checkout');


Route::post('/services/checkout', [ServicesController::class, 'store'])->name('to.checkout');



Route::get('/upload-documents', [UploadController::class, 'index'])->name('upload.index');
Route::post('/upload-documents', [UploadController::class, 'store'])->name('upload.store');

Route::get('/success/{type}', [SuccessController::class, 'index'])->name('success');


Route::get('/users/{user}', [AdminController::class, 'customer'])->name('admin.customer');



Route::get('/affiliate/enroll', [AffiliateController::class, 'index'])->name('affiliate.index');
Route::get('/affiliate/register', [AffiliateController::class, 'join'])->name('affiliate.join');

Route::get('/affiliate/dashboard', [AffiliateController::class, 'dashboard'])->name('affiliate.dashboard')->middleware('affiliate');

Route::get('/admin/affiliates', [AdminController::class, 'affiliates'])->name('admin.affiliates');




require_once __DIR__ . '/jetstream.php';
