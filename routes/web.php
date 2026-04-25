<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DiemController;

Route::get('/', [DiemController::class, 'index']);
