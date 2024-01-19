<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// You can customize the URL path as needed
// Route::post('/verify_otp', [AuthController::class, 'verifyOTP']);

Route::get('/verify_otp', [AuthController::class, 'verifyOTP']);

Route::resource("/categories","App\Http\Controllers\CategoryController");

Route::resource("/products","App\Http\Controllers\ProductController");
