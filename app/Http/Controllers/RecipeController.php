<?php

namespace App\Http\Controllers;

use App\Models\bahan;
use App\Models\langkah;
use App\Models\Resep;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    // public function index()
    // {
    //     return view ()
    // }

    public function detail($id)
    {
        $resep = Resep::findOrFail($id);
        $datalangkah = langkah::where('resep_id', $resep->id)->get();
        $databahan = bahan::where('resep_id', $resep->id)->get();

        return view ('user.receipe-post', [
            'resep' => $resep,
            'datalangkah' => $datalangkah,
            'databahan' => $databahan
        ]);
    }
}
