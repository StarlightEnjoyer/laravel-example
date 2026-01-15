<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/new_first', [MainController::class, 'show_index']);

Route::get('/new_second', [MainController::class, 'show_array']);