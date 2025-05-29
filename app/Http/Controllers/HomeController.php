<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil 4 berita terbaru
        $beritas = Berita::latest()->take(4)->get();

        return view('home', compact('beritas'));
    }
}