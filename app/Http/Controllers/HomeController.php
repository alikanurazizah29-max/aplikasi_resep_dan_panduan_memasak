<?php

namespace App\Http\Controllers;

use App\Models\Resep;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index ()
    {
        $dataresep = Resep::all();
        return view ('user.index', [
            'dataresep' => $dataresep
        ]);
    }
}
