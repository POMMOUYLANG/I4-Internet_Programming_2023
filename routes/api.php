<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//===================================>>User
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::middleware('auth:api')->get('/test', function () {
//     return "Test page";
// });

Route::middleware(['auth:api'])->group(function(){

    Route::controller(CategoryController::class)->group(function(){
        Route::get('/categories',"getCategories");
        Route::post('/category',"createCategory");
        Route::get('/category/{categoryId}',"getCategory");
        Route::post('/category/{categoryId}',"updateCategory");
        Route::delete('/category/{categoryId}',"deleteCategory");
    });

    Route::controller(ProductController::class)->group(function(){
        Route::get('/products',"getProducts");
        Route::post('/product',"createProduct");
        Route::get('/product/{productId}',"getProduct");
        Route::post('/product/{productId}',"updateProduct");
        Route::delete('/product/{productId}',"deleteProduct");
    });

});

//===================================>>AuthController

Route::post('/register',[AuthController::class, "register"]);

Route::post('/login',[AuthController::class, "login"]);

Route::get('/send-test-email', function () {
    $user = [
        'name' => 'POM MOUYLANG',
        'email' => 'mouylangpom@gmail.com',
    ];
    Mail::to($user['email'])->send(new TestMail($user));

    return "Test email sent!";
});


//===================================>>Categories

// Route::get('/hihi', function (Request $request) {
//     return "Welcome To Page\n";
// });

// Route::middleware('auth:api')->get('/categories', function (Request $request) {
//     return "Get all categories\n";
// });

// Route::post('/categories', function (Request $request) {
//     return "Create 1 category\n";
// });

// Route::get('/categories/{categoryID}', function (Request $request) {
//     return "Get 1 category by categoryID\n";
// });

// Route::patch('/categories/{categoryID}', function (Request $request) {
//     return "Update 1 category\n";
// });

// Route::delete('/categories/{categoryID}', function (Request $request) {
//     return "Delete 1 category\n";
// });


//===================================>>Products

// Route::get('/products', function (Request $request) {
//     return "Get all products\n";
// });

// Route::post('/products', function (Request $request) {
//     return "Create 1 product\n";
// });

// Route::get('/products/{productID}', function (Request $request) {
//     return "Get 1 product\n";
// });

// Route::patch('/products/{productID}', function (Request $request) {
//     return "Update 1 product\n";
// });

// Route::delete('/products/{productID}', function (Request $request) {
//     return "Delete 1 product\n";
// });

// Route::get('/categories/{categoryID}/products', function (Request $request) {
//     return "Get all products belong to categoryID\n";
// });


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


