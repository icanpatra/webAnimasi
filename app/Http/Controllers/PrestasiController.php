<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prestasi;

class PrestasiController extends Controller
{
public function index()
{
    $prestasi = Prestasi::all(); // Ambil semua data dari tabel prestasi
    return view('prestasi', compact('prestasi')); // Kirim data ke Blade
}
}
