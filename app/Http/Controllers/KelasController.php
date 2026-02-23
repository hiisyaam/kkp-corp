<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class KelasController extends Controller
{
    //
    public function index()
    {
        $kelas = Kelas::whereBetween('id', [1, 9])
              ->orderBy('id')
              ->get();

        return view('armada.index', compact('kelas'));
    }
}
