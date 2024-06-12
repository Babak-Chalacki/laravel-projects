<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', [ContactController::class, 'index']);
Route::post('/new_contact', [ContactController::class, 'add']);
Route::get('/remove', [ContactController::class, 'remove']);