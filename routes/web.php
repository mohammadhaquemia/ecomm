<?php

use App\Http\Controllers\Backend\User\UserProfileController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

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
    Route::get('/products',  [HomeController::class, 'products'])->name('products');
    Route::get('/services',  [HomeController::class, 'services'])->name('services');

}); 