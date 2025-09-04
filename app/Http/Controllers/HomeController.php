<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function profile()
    {
        $user = Auth::user(); // ambil data user yang login
        return view('profile', compact('user'));
    }
    public function index()
    {
        // Ambil 6 berita terbaru
        $news = News::latest('created_at')->take(6)->get();
        
        // Kirim data ke view index.blade.php
        return view('index', compact('news'));
    }
}
