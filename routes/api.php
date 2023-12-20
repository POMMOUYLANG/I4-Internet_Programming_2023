<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


//Categories

Route::get('/categories', function (Request $request) {
    return "Get all categories\n";
});

Route::post('/categories', function (Request $request) {
    return "Create 1 category\n";
});

Route::get('/categories/{categoryID}', function (Request $request) {
    return "Get 1 category by categoryID\n";
});

Route::patch('/categories/{categoryID}', function (Request $request) {
    return "Update 1 category\n";
});

Route::delete('/categories/{categoryID}', function (Request $request) {
    return "Delete 1 category\n";
});


//Products

Route::get('/products', function (Request $request) {
    return "Get all products\n";
});

Route::post('/products', function (Request $request) {
    return "Create 1 product\n";
});

Route::get('/products/{productID}', function (Request $request) {
    return "Get 1 product\n";
});

Route::patch('/products/{productID}', function (Request $request) {
    return "Update 1 product\n";
});

Route::delete('/products/{productID}', function (Request $request) {
    return "Delete 1 product\n";
});

Route::get('/categories/{categoryID}/products', function (Request $request) {
    return "Get all products belong to categoryID\n";
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});