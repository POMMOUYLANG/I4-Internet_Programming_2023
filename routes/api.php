<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\EloquentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('/author', [EloquentController::class, 'createAuthor']);
Route::post('/article', [EloquentController::class, 'createArticle']);
Route::post('/audience', [EloquentController::class, 'createAudience']);
Route::post('/subscribe', [EloquentController::class, 'subscribe']);
Route::post('/comment', [EloquentController::class, 'comment']);

Route::get('/articles/{name}', [EloquentController::class, 'getArticles']);
Route::get('/audience/{article}', [EloquentController::class, 'getAudience']);
Route::get('/author/{author}', [EloquentController::class, 'getAudienceByAuthor']);
Route::get('/comment/{audience}', [EloquentController::class, 'getCommentByA']);
Route::get('/comments/{topic}', [EloquentController::class, 'getComment']);

