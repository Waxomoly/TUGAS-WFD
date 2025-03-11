<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'viewHome'])->name('home');
Route::get('/about-us', [MainController::class, 'viewAboutUs'])->name('about.us');
Route::get('/location', [MainController::class, 'viewLocation'])->name('location');
