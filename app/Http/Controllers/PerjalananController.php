<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wilayah;

class PerjalananController extends Controller
{
    //
    // Menampilkan halaman utama (Daftar Wilayah)
    public function index()
    {
        // Mengambil semua data wilayah (bisa di-limit jika perlu)
        $wilayahs = Wilayah::all();
        return view('perjalanan', compact('wilayahs'));
    }

    // Menampilkan halaman detail rute berdasarkan Wilayah ID
    public function show($id)
    {
        // Eager loading: Tarik Wilayah beserta Line Induk, Detail Rute, dan Kelasnya
        $wilayah = Wilayah::with(['lineInduk.lineDetail.kelas'])->findOrFail($id);
        
        return view('perjalanan-detail', compact('wilayah'));
    }
}
