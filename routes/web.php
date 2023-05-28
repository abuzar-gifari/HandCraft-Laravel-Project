<?php

use App\Http\Controllers\Front\AuthController;
use App\Http\Controllers\Front\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\Admin\AdminProfileController;


Route::get('/', function () {
    return view('front.index');
})->name('home');

Route::get('/about', function () {
    return view('front.about');
})->name('about');

Route::get('/login',[AuthController::class,'login'])->name('login');
Route::get('/registration',[AuthController::class,'registration'])->name('registration');
Route::get('/products',[CartController::class,'products'])->name('products');
Route::get('/cart',[CartController::class,'cart'])->name('cart');
Route::get('/checkout',[CartController::class,'checkout'])->name('checkout');
Route::get('admin/home',[AdminHomeController::class,'index'])->name('admin_home')->middleware('admin:admin');
Route::get('admin/login',[AdminLoginController::class,'index'])->name('admin_login');
Route::post('/login/submit',[AdminLoginController::class,'login_submit'])->name('admin_login_submit');
Route::get('admin/logout',[AdminLoginController::class,'logout'])->name('admin_logout');
Route::get('/admin/edit-profile', [AdminProfileController::class, 'index'])->name('admin_profile');
Route::post('/admin/edit-profile-submit', [AdminProfileController::class, 'profile_submit'])->name('admin_profile_submit');


Route::get('/admin/product/view', [AdminProductController::class, 'index'])->name('admin_product_view');
Route::get('/admin/product/add', [AdminProductController::class, 'add'])->name('admin_product_add');
Route::post('/admin/product/store', [AdminProductController::class, 'store'])->name('admin_product_store');
Route::get('/admin/product/edit/{id}', [AdminProductController::class, 'edit'])->name('admin_product_edit');
Route::post('/admin/product/update/{id}', [AdminProductController::class, 'update'])->name('admin_product_update');
Route::get('/admin/product/delete/{id}', [AdminProductController::class, 'delete'])->name('admin_product_delete');


Route::post('/add-cart', [CartController::class, 'addcart'])->name('addcart');
Route::get('/add-cart/{id}', [CartController::class, 'addcartremove'])->name('addcartremove');


Route::post('/registration-submit', [AuthController::class, 'registration_submit'])->name('registration-submit');
Route::post('/login-submit', [AuthController::class, 'login_submit'])->name('login-submit');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');