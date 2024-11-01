<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;


Route::get('/',[MovieController::class, "index"]);

Route::resource('movies', MovieController::class);
