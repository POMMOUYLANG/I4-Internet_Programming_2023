<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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
//===================================>>HomeController
Route::get('/', [HomeController::class, 'renderHome']);

//===================================>>Welcome
Route::get('/', function () {
    return view('welcome');
});

//===================================>>Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//===================================>>Auth
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

// Route::resource('categories','App\Http\Controllers\CategoryController');
// Route::resource('products','App\Http\Controllers\ProductController');

//===================================>>Category
Route::get('/categories', [CategoryController::class,'getCategories']);
Route::get('/categories', [CategoryController::class,'createCategories']);
Route::get('/categories/{categoryId}', 'App\Http\Controllers\CategoryController@getCategory');
Route::get('/categories/{categoryId}/edit', [CategoryController::class,'updateCategory']);
Route::get('/categories/{categoryId}/delete', [CategoryController::class,'deleteCategory']);
Route::get('/categories/{categoryId}/products', [ProductController::class,'getCategoryProducts']);

//===================================>>Product
Route::get('/products', [ProductController::class,'getProducts']);
Route::get('/products', [ProductController::class,'createProduct']);
Route::get('/products/{product}', [ProductController::class,'getProduct']);
Route::get('/products/{product}/edit', [ProductController::class,'updateProduct']);
Route::get('/products/{product}/delete', [ProductController::class,'deleteProduct']);
