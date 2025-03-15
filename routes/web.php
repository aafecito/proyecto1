<?php

use Illuminate\Support\Facades\Route;

Route::view("/", "home");
Route::view("/welcome", "welcome");
Route::get('/categoria', [App\Http\Controllers\Controller::class, 'indexCategoria'])->name('categoria');
Route::get('/alimento', [App\Http\Controllers\Controller::class, 'indexAlimento'])->name('alimento');
