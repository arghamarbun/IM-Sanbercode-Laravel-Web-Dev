<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;

Route::get('/', [DashboardController::class, 'awal']);
Route::get('/daftar', [FormController::class, 'signup']);
Route::post('/welcome', [FormController::class, 'submit']);
