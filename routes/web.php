<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\iranyitasController;

Route::get('/', [iranyitasController::class,"index"]);

