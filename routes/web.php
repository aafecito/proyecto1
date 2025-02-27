<?php

use Illuminate\Support\Facades\Route;

Route::view("/", "home");
Route::view("/welcome", "welcome");
Route::get('/index', [App\Http\Controllers\Controller::class, 'index'])->name('index');
