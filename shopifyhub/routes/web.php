<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CitiesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CommentController;
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

// Route::get('/', [HomeController::class, "index"]);
Route::get('/products', [ProductController::class, "get"]);
Route::get('/', [ProductController::class, "get_all"]);
Route::get('/products/{id}', [ProductController::class, "show_product"]);
Route::get('/admin', [AdminController::class, "index"]);
// admin/city
Route::get('/admin/cities', [CitiesController::class, "get_all"]);
Route::get("/admin/cities/add", [CitiesController::class, "add_get"]);
Route::post("/admin/cities/add", [CitiesController::class, "add_post"]);

Route::get("/admin/cities/edit/{id}", [CitiesController::class, "edit_get"]);
Route::post("/admin/cities/edit/{id}", [CitiesController::class, "edit_post"]);

Route::get("/admin/cities/delete/{id}", [CitiesController::class, "delete"]);
// admin city
// admin user
Route::get("/admin/user", [UserController::class, "show_users"]);
Route::get("/admin/user/delete/{id}", [UserController::class, "delete"]);
// admin user
// admin order
Route::get("/admin/order", [OrderController::class, "show_orders"]);
// admin order
// admin product
Route::get("/admin/product", [ProductController::class, "admin_get"]);
Route::get("/admin/product/insert", [ProductController::class, "admin_insert_product"]);
Route::post("/admin/product/add", [ProductController::class, "admin_add_product"]);

Route::post("/admin/product/edit/{id}", [ProductController::class, "admin_product_edit"]);
Route::get("/admin/product/edits/{id}", [ProductController::class, "admin_get_prosuct"]);

Route::get("/admin/product/delete/{id}", [ProductController::class, "admin_delete_prosuct"]);
// admin product
// admin comment
Route::get("/admin/comment", [CommentController::class, "get_all"]);
Route::get("/admin/comment/delete/{id}", [CommentController::class, "admin_delete"]);
