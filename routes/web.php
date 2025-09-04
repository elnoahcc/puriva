<?php

use Illuminate\Support\Facades\Route;
use App\Models\News;

Route::get('/', function () {
    $news = News::latest()->take(6)->get(); // ambil 6 berita terbaru
    return view('index', compact('news'));
});

Route::get('/team', function () {
    return view('team');
});
