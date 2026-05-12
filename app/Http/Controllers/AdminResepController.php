<?php

namespace App\Http\Controllers;

use App\Models\resep;
use Illuminate\Http\Request;

class AdminResepController extends Controller
{
    public function index()
    {
        $data_resep=resep::all();
        return view('admin.resep.index',[
            'type_menu' => 'resep-menu',
            'data_resep'=> $data_resep
            ]);
    }

    public function create()
    {
        return view('admin.resep.create',[
            'type_menu' => 'resep-menu'
        ]);
    } 

    public function proses_create(Request $request)
    {
        $request -> validate([
            'kategori' => 'required',
            'bahan' => 'required',
            'langkah' => 'required'
        ]);
            
        resep::create($request -> all());
        return redirect()-> route('admin.resep');
    }

    public function edit($id)
    {
        $resep=resep::find($id, 'id');

        return view('admin.resep.edit',[
                'type_menu' => 'master-data',
                'resep'=>$resep
            ]);
    }

    public function detail()
    {
        return view('admin.resep.detail',[
            'type_menu' => 'resep-menu'
        ]);
    }

    public function proses_edit(Request $request)
    {
        $request -> validate([
          'kategori' => 'required',
          'bahan' => 'required',
          'langkah' => 'required'
         ]);

         $resep=resep::find($request-> id, 'id');

         $resep -> nama= $request-> nama;
         $resep -> updated_at = now();
         $resep -> save();
         return redirect()-> route('admin.resep');
    }

    public function delete($id)
        {
            $resep=resep::find($id, 'id');

            $resep->delete();
            return redirect()-> route('admin.resep');
        }
}
