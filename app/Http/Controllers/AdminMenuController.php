<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminMenuController extends Controller
{
    public function index()
    {
        return view('admin.menu.index',[
            'type_menu' => 'resep-menu'
        ]);
    }

    public function create()
    {
        return view('admin.menu.create',[
            'type_menu' => 'resep-menu'
        ]);
    } 

    public function detail()
    {
        return view('admin.menu.detail',[
            'type_menu' => 'resep-menu'
        ]);
    }
}
