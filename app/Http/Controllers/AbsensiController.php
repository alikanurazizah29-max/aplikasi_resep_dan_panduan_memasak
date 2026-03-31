<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Kelas;
use Illuminate\Http\Request;
class AbsensiController extends Controller
{
    public function index(){
        $dataAbsensi = Absensi::all();
        
        return view ('absensi.indek',  compact('dataAbsensi'));
    }
}
