<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil news yang published dan urutkan berdasarkan tanggal publish terbaru
        $news = News::published()
                   ->latest('published_at')
                   ->take(6) // Ambil 6 berita terbaru
                   ->get();

        return view('index', compact('news'));
    }
}