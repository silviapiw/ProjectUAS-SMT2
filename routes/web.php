<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AuthController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/dashboard', [HomeController::class, 'dashboard']);

Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/create', [CategoryController::class, 'create']);
Route::post('/categories', [CategoryController::class, 'store']);
Route::delete('/categories/{category}', [CategoryController::class, 'destroy']);
Route::get('/categories/{category}/edit', [CategoryController::class, 'edit']);
Route::get('/categories/{category}/show', [CategoryController::class, 'show']);
Route::put('/categories/{category}', [CategoryController::class, 'update']);

Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/create', [ProductController::class, 'create']);
Route::post('/products', [ProductController::class, 'store']);
Route::delete('/products/{product}', [ProductController::class, 'destroy']);
Route::get('/products/{product}/edit', [ProductController::class, 'edit']);
Route::get('/products/{product}/show', [ProductController::class, 'show']);
Route::put('/products/{product}', [ProductController::class, 'update']);

Route::get('/orders', [OrderController::class, 'index']);
Route::get('/orders/create', [OrderController::class, 'create']);
Route::post('/orders', [OrderController::class, 'store']);
Route::delete('/orders/{order}', [OrderController::class, 'destroy']);
Route::get('/orders/{order}/edit', [OrderController::class, 'edit']);
Route::get('/orders/{order}/show', [OrderController::class, 'show']);
Route::put('/orders/{order}', [OrderController::class, 'update']);

Route::get('/users', [UserController::class, 'index']);
Route::get('/register', [AuthController::class, 'showRegistrationForm']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::delete('/users/{user}', [UserController::class, 'destroy']);
