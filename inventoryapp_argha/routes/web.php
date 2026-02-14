<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\CategoriesController;

Route::get('/', [DashboardController::class, 'awal']);
Route::get('/daftar', [FormController::class, 'signup']);
Route::post('/welcome', [FormController::class, 'submit']);


Route::get('/categories/create', [CategoriesController::class, 'create']);
Route::post('/categories', [CategoriesController::class, 'store']);

Route::get('/categories', [CategoriesController::class, 'index']);
Route::get('/categories/{id}', [CategoriesController::class, 'show']);
