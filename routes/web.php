<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\InquiryController;

/*
|--------------------------------------------------------------------------
| WEBSITE
|--------------------------------------------------------------------------
*/

Route::get('/', [ProductController::class, 'home']);

Route::get('/about', function () {

    return view('about');

});

Route::get('/products', [ProductController::class, 'products']);

Route::get('/product/{id}', [ProductController::class, 'show']);

Route::get('/services', function () {

    return view('services');

});

Route::get('/clients', function () {

    return view('clients');

});

Route::get('/contact', function () {

    return view('contact');

});

/*
|--------------------------------------------------------------------------
| INQUIRY
|--------------------------------------------------------------------------
*/

Route::post('/submit-inquiry', [InquiryController::class, 'store']);

/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
*/

Route::get('/admin-login', function () {

    return view('login');

});

Route::get('/itly-admin-panel', [AdminController::class, 'index']);

Route::get('/logout', function () {

    return redirect('/admin-login');

});

/*
|--------------------------------------------------------------------------
| PRODUCT MANAGEMENT
|--------------------------------------------------------------------------
*/

Route::post('/add-product', [ProductController::class, 'store']);

Route::get('/edit-product/{id}', [ProductController::class, 'edit']);

Route::post('/update-product/{id}', [ProductController::class, 'update']);

Route::get('/delete-product/{id}', [ProductController::class, 'delete']);

Route::get('/chat', [ChatController::class, 'index']);

Route::post('/ask-ai', [ChatController::class, 'ask']);
