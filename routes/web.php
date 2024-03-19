<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::resource('categories','App\Http\Controllers\CategoryController');
// Route::resource('products','App\Http\Controllers\ProductController');

Route::middleware(['auth:api','authorization:admin'])->group(function() {
    Route::get('/categories', [CategoryController::class,'getCategories']);
    Route::post('/categories', [CategoryController::class,'createCategories']);
    Route::get('/categories/{categoryId}', 'App\Http\Controllers\CategoryController@getCategory');
    Route::patch('/categories/{categoryId}/edit', [CategoryController::class,'updateCategory']);
    Route::delete('/categories/{categoryId}/delete', [CategoryController::class,'deleteCategory']);
    Route::get('/categories/{categoryId}/products', [ProductController::class,'getCategoryProducts']);
    
    Route::get('/products', [ProductController::class,'getProducts']);
    Route::post('/products', [ProductController::class,'createProduct']);
    Route::get('/products/{product}', [ProductController::class,'getProduct']);
    Route::patch('/products/{product}/edit', [ProductController::class,'updateProduct']);
    Route::delete('/products/{product}/delete', [ProductController::class,'deleteProduct']);
});


Route::get('/verify_otp',[AuthController::class, "verifyOTP"]);

require __DIR__.'/auth.php';