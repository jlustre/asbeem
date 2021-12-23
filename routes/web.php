<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SellerController;

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
/* Admin Routes*/
Route::prefix('admin')->group(function(){
    Route::get('/login', [AdminController::class, 'Index'])->name('admin_login_from');
    Route::post('/login/owner', [AdminController::class, 'Login'])->name('admin.login');
    Route::post('/register/create', [AdminController::class, 'AdminRegisterCreate'])->name('admin_create');
    Route::get('/dashboard', [AdminController::class, 'Dashboard'])->name('admin_dashboard')->middleware('admin');
    Route::get('/logout', [AdminController::class, 'AdminLogout'])->name('admin_logout')->middleware('admin');
    Route::get('/register', [AdminController::class, 'AdminRegister'])->name('admin_register');
});

/* Seller Routes*/
Route::prefix('seller')->group(function(){
    Route::get('/login', [SellerController::class, 'Index'])->name('seller_login_from');
    Route::post('/login/owner', [SellerController::class, 'Login'])->name('seller.login');
    Route::post('/register/create', [SellerController::class, 'SellerRegisterCreate'])->name('seller_create');
    Route::get('/dashboard', [SellerController::class, 'Dashboard'])->name('seller_dashboard')->middleware('seller');
    Route::get('/logout', [SellerController::class, 'SellerLogout'])->name('seller_logout')->middleware('seller');
    Route::get('/register', [SellerController::class, 'SellerRegister'])->name('seller_register');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
