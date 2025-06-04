<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Prestasi; // Tambahkan ini

class HomeController extends Controller
{
    public function index()
    {
        $berita = Berita::latest()->limit(5)->get();
        $prestasi = Prestasi::all(); // Ambil data prestasi
        return view('home', compact('berita', 'prestasi')); // Kirim kedua variabel
    }
}