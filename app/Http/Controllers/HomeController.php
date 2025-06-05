<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $beritas = Berita::latest()->get();
        $prestasis = Berita::where('kategori', 'prestasi')->latest()->get();

        return view('home', compact('beritas', 'prestasis'));
    }

}