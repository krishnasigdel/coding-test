<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
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
    return view('home');
});

Route::resource('user', UserController::class);


Route::get('category', [ProductCategoryController::class, 'index']);
Route::get('category/create', [ProductCategoryController::class, 'create']);
Route::post('category', [ProductCategoryController::class, 'store']);
Route::get('category/{category}/edit', [ProductCategoryController::class, 'edit']);
Route::put('category/{category}', [ProductCategoryController::class, 'update']);
Route::delete('category/{category}', [ProductCategoryController::class, 'destroy']);


Route::get('product', [ProductController::class, 'index'])->name('product.index');
Route::get('product/create', [ProductController::class, 'create']);
Route::post('product', [ProductController::class, 'store']);
Route::get('product/{product}/edit', [ProductController::class, 'edit']);
Route::put('product/{product}', [ProductController::class, 'update']);
Route::delete('product/{product}', [ProductController::class, 'destroy']);


Route::get('register', [AuthController::class, 'registerView']);
Route::get('login', [AuthController::class, 'loginView']);
Route::post('login', [AuthController::class, 'login'])->name('user.login');
Route::get('logout', [AuthController::class, 'logout'])->name('user.logout');
