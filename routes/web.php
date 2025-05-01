<?php

use App\Http\Controllers\Backend\admin\dashboard\dashboardController;
use App\Http\Controllers\Backend\admin\dashboard\ProductController;
use App\Http\Controllers\Backend\User\UserProfileController;
use App\Http\Controllers\ContactController;

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

// Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'dash.'], function () {
Route::get('/dashboard', [dashboardController::class, 'index'])->middleware('auth')->name('index');

Route::get('/products', [ProductController::class, 'products'])->name('products');



Route::get('/addproduct', [ProductController::class, 'create'])->name('addproduct');
Route::post('/storeproduct', [ProductController::class, 'store'])->name('storeproduct');


Route::get('/editproduct/{id}', [ProductController::class, 'editProduct'])->name('editproduct');
Route::get('/updateproduct/{id}', [ProductController::class, 'edit'])->name('update.product');
Route::put('/updateproduct/{id}', [ProductController::class, 'update'])->name('update.product');


Route::get('/deleteproduct/{id}', [ProductController::class, 'delete'])->name('products.destroy');
Route::delete('/deleteproduct/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
Route::put('/product/status/{id}', [ProductController::class, 'status'])->name('products.status');

// });


Route::group(['middleware' => ['auth'], 'prefix' => 'user', 'as' => 'user.'], function () {
    // Route::get('/profile', [UserProfileController::class, 'profile'])->name('profile');
});

Route::group(['as' => 'f.'], function () {
    Route::get('/', [HomeController::class, 'home'])->name('home');
    Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
    Route::get('/index', [HomeController::class, 'index'])->name('index');
    Route::get('/about', [HomeController::class, 'about'])->name('about');
    Route::get('/blog',  [HomeController::class, 'blog'])->name('blog');
    Route::get('/contact',  [HomeController::class, 'contact'])->name('contact');
    Route::get('/product',  [HomeController::class, 'products'])->name('products');
    Route::get('/services',  [HomeController::class, 'services'])->name('services');
});



// Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::post('/send-email', [ContactController::class, 'sendEmail'])->name('send.email');

Route::group(['middleware' => ['auth'], 'as' => 'dash.'], function () {
    Route::get('/payment', [PaymentController::class, 'payment'])->name('payment');
});
