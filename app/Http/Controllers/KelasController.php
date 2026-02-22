<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class KelasController extends Controller
{
    //
    public function index()
    {
        $kelas = Kelas::orderBy('nama_kelas')->get();

        return view('armada.index', compact('kelas'));
    }
}
