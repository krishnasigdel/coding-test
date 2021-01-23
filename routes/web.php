<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('user', UserController::class);


Route::get('category', [ProductCategoryController::class, 'index']);
Route::get('category/create', [ProductCategoryController::class, 'create']);
Route::post('category', [ProductCategoryController::class, 'store']);
Route::get('category/{category}/edit', [ProductCategoryController::class, 'edit']);
Route::put('category/{category}', [ProductCategoryController::class, 'update']);
Route::delete('category/{category}', [ProductCategoryController::class, 'destroy']);


Route::get('product/create', [ProductController::class, 'create']);
