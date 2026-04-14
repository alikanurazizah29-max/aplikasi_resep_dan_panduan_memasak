<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function index()
    {
        return view('admin.user.index',[
            'type_menu' => 'master-data'
        ]);
    }

        public function create()
        {
            return view('admin.user.create',[
                'type_menu' => 'master-data'
            ]);
        }
}
