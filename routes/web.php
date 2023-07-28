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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'indexAction']);


Route::get('/category/{id?}', [\App\Http\Controllers\HomeController::class, 'indexAction']);


Route::post('/createPost', [\App\Http\Controllers\HomeController::class, 'createPostAction']);


Route::post('/deletePost', [\App\Http\Controllers\HomeController::class, 'deletePostAction']);


Route::post('/single/editPost', [\App\Http\Controllers\SingleController::class, 'editPostAction']);


Route::get('/single/{id}', [\App\Http\Controllers\SingleController::class, 'indexAction']);
