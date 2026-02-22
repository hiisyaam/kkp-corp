<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wilayah;

class AgenController extends Controller
{
    //
    public function index(){
        $wilayahs = Wilayah::with(['bagian.kota.agen'])->get();
        
        return view('Agen.index', compact('wilayahs'));
    }
}
