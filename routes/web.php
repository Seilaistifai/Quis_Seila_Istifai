<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KampusController;

Route::get('/', [KampusController::class, 'home']);

Route::get('/tentang', [KampusController::class, 'tentang']);