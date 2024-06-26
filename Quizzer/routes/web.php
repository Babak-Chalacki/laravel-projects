<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuizzController;
use App\Http\Controllers\AddController;
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

Route::get('/', [HomeController::class,"index"]);
Route::get("/question/{id}",[QuizzController::class, "index"]);
Route::post("/check-answer",[QuizzController::class, "check"]);
Route::get("/add",[HomeController::class, "add"]);
Route::post("/add_new",[AddController::class,"add_new"]);