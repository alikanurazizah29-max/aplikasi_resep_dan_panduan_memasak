<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\Http\Request;

use function Symfony\Component\Clock\now;

class AdminKategoriController extends Controller
{
    public function index()
    {
        $data_kategori=kategori::all();
        return view('admin.kategori.index',[
            'type_menu' => 'master-data',
            'data_kategori'=> $data_kategori
        ]);
    }

        public function create()
        {
            return view('admin.kategori.create',[
                'type_menu' => 'master-data'
            ]);
        }

        public function proses_create(Request $request)
        {
            $request -> validate([
                'nama' => 'required'
            ]);

            kategori::create($request -> all());
            return redirect()-> route('admin.kategori');
        }

    public function edit($id)
    {
        $kategori=kategori::find($id);

        return view('admin.kategori.edit',[
                'type_menu' => 'master-data',
                'kategori'=>$kategori
            ]);
    
    }

    public function proses_edit(Request $request)
    {
        $request -> validate([
          'nama' => 'required'
         ]);

         $kategori=kategori::find($request-> id);

         $kategori -> nama= $request-> nama;
         $kategori -> updated_at = now();
         $kategori -> save();
         return redirect()-> route('admin.kategori');
    }

    public function delete($id)
    {
        $kategori=kategori::find($id);

        $kategori->delete();
        return redirect()-> route('admin.kategori');
    }

}

