<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RumahMakan;

class RMController extends Controller
{
    //
    public function index(){
        $rumahMakan = RumahMakan::all();
        return view('rumah-makan', compact('rumahMakan'));
    }
}
