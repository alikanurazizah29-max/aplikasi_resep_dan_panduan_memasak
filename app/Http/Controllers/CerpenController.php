<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CerpenController extends Controller
{
    public function index(){
        $dataCerpen = Cerpen::first();

        return view ('cerpen.indek', compact('dataCerpen'));
    }
}
