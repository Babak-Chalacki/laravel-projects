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

Route::get('/', [HomeController::class, "index"]);
Route::get('/products', [ProductController::class, "get"]);
// user profile
Route::get("/profile", [UserController::class, "profile"])->middleware("auth");
// user profile
Route::get('/', [ProductController::class, "get_all"]);
Route::get('/products/{id}', [ProductController::class, "show_product"]);
Route::get('/admin', [AdminController::class, "index"])->middleware("auth");
// admin/city
Route::get('/admin/cities', [CitiesController::class, "get_all"])->middleware("auth");
Route::get("/admin/cities/add", [CitiesController::class, "add_get"])->middleware("auth");
Route::post("/admin/cities/add", [CitiesController::class, "add_post"])->middleware("auth");

Route::get("/admin/cities/edit/{id}", [CitiesController::class, "edit_get"])->middleware("auth");
Route::post("/admin/cities/edit/{id}", [CitiesController::class, "edit_post"])->middleware("auth");

Route::get("/admin/cities/delete/{id}", [CitiesController::class, "delete"])->middleware("auth");
// admin city
// admin user
Route::get("/admin/user", [UserController::class, "show_users"])->middleware("auth");
Route::get("/admin/user/delete/{id}", [UserController::class, "delete"])->middleware("auth");
// admin user
// admin order
Route::get("/admin/order", [OrderController::class, "show_orders"])->middleware("auth");
// admin order
// admin product
Route::get("/admin/product", [ProductController::class, "admin_get"])->middleware("auth");
Route::get("/admin/product/insert", [ProductController::class, "admin_insert_product"])->middleware("auth");
Route::post("/admin/product/add", [ProductController::class, "admin_add_product"])->middleware("auth");

Route::post("/admin/product/edit/{id}", [ProductController::class, "admin_product_edit"])->middleware("auth");
Route::get("/admin/product/edits/{id}", [ProductController::class, "admin_get_prosuct"])->middleware("auth");

Route::get("/admin/product/delete/{id}", [ProductController::class, "admin_delete_prosuct"])->middleware("auth");
// admin product
// admin comment
Route::get("/admin/comment", [CommentController::class, "get_all"])->middleware("auth");
Route::get("/admin/comment/delete/{id}", [CommentController::class, "admin_delete"])->middleware("auth");
// admin comment
// admin login
Route::get("/admin/login", [AdminController::class, "login_get"]);
Route::post("/admin/login", [AdminController::class, "login_post"]);
// admin login
// user login
Route::get("/login", [UserController::class, "login_get"]);
Route::post("/login", [UserController::class, "login_post"]);
// user login
// user register
Route::get("/register", [UserController::class, "register_get"]);
Route::post("/register", [UserController::class, "register_post"]);
// user register
// user logout
Route::get("/logout", [UserController::class, "logout"])->middleware("auth");
// user logout


// file_manager need
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
// file_manager need

// user comment
Route::post("/add_comment/{id}", [CommentController::class, "add_comment"]);
// Route::post('/add-comment', [CommentController::class, "add_comment"])->name('add-comment');// user comment