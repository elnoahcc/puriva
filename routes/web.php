<?php

use Illuminate\Support\Facades\Route;
use App\Models\News;

use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');


Route::get('/team', function () {
    return view('team');
});
