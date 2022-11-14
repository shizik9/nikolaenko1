<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/post', 'App\Http\Controllers\PostController@index');
use App\Http\Controllers\PostController;
Route::get('/post/{id}', [PostController::class, 'show']);
Route::post('/post', [PostController::class, 'store']);
Route::patch('/post/{post}', [PostController::class, 'update']);
Route::get('/post/{post}', [PostController::class, 'destroy']);

Route::get('/category','App\Http\Controllers\CategoryController@index');
use App\Http\Controllers\CategoryController;
Route::get('/category/{id}', [CategoryController::class, 'show']);
Route::post('/category', [CategoryController::class, 'store']);
Route::patch('/category/{post}', [CategoryController::class, 'update']);
Route::delete('/category/{post}', [CategoryController::class, 'destroy']);

Route::get('/request','App\Http\Controllers\RequestController@index');
use App\Http\Controllers\ApplicationController;
Route::get('/request/{id}', [ApplicationController::class, 'show']);
Route::post('/request', [ApplicationController::class, 'store']);
Route::patch('/request/{post}', [ApplicationController::class, 'update']);
Route::delete('/request/{post}', [ApplicationController::class, 'destroy']);

Route::get('/Division','App\Http\Controllers\DivisionController@index');
use App\Http\Controllers\DivisionController;
Route::get('/subdivision/{id}', [DivisionController::class, 'show']);
Route::post('/subdivision', [DivisionController::class, 'store']);
Route::patch('/subdivision/{post}', [DivisionController::class, 'update']);
Route::delete('/subdivision/{post}', [DivisionController::class, 'destroy']);

Route::get('/user','App\Http\Controllers\UserController@index');
use App\Http\Controllers\UserController;
Route::get('/user/{id}', [UserController::class, 'show']);
Route::post('/user', [UserController::class, 'store']);
Route::patch('/user/{post}', [UserController::class, 'update']);
Route::delete('/user/{post}', [UserController::class, 'destroy']);


