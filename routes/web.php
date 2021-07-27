<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShoppingCartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/admin/products', [ProductController::class, 'index']);
Route::get('/admin/products/create', [ProductController::class, 'create']);
Route::post('/admin/products', [ProductController::class, 'store']);

Route::get('/welcome', [WelcomeController::class, 'welcome']);

Route::get('/users/login', [UserController::class, 'login']);
Route::get('/users/detail/{id}', [UserController::class, 'getUserDetail']);

Route::get('/users/signup', [UserController::class, 'signup']);
Route::post('/users/signup', [UserController::class, 'processSignup']);

Route::get('/demo/page1', [LayoutController::class, 'page1']);
Route::get('/demo/page2', [LayoutController::class, 'page2']);
Route::get('/demo/page3', [LayoutController::class, 'page3']);

Route::get('/admin/index', [AdminController::class, 'showIndex']);
Route::get('/admin/list', [AdminController::class, 'showList']);
Route::get('/admin/form', [AdminController::class, 'showForm']);

Route::get('/cart/show', [ShoppingCartController::class, 'show']);
Route::get('/cart/add', [ShoppingCartController::class, 'add']);
Route::get('/cart/update', [ShoppingCartController::class, 'update']);
Route::get('/cart/remove', [ShoppingCartController::class, 'remove']);
