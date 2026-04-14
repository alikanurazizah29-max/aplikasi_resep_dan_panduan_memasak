<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminKategoriController extends Controller
{
    public function index()
    {
        return view('admin.kategori.index',[
            'type_menu' => 'master-data'
        ]);
    }

        public function create()
        {
            return view('admin.kategori.create',[
                'type_menu' => 'master-data'
            ]);
        }
}
