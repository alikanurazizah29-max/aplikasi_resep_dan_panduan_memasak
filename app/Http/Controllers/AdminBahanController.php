<?php

namespace App\Http\Controllers;

use App\Models\bahan;
use Illuminate\Http\Request;

class AdminBahanController extends Controller
{
    public function create($resepid)
    {
        return view('admin.resep.createbahan', [
            'type_menu' => 'master-data',
            'resepid' => $resepid,
        ]);
    }

    public function proses_create(Request $request)
    {
        $request->validate([
            'bahan' => 'required',
            'jumlah' => 'required',
            'resep_id' => 'required',
        ]);

        bahan::create($request -> all());
        return redirect() -> route('admin.resep.detail', $request -> resep_id); 
    }

    public function edit($id)
    {
        $bahan = bahan::findOrFail($id);

        return view('admin.resep.editbahan', [
            'type_menu' => 'master-data',
            'bahan' => $bahan
        ]);
    }

    public function proses_edit(Request $request)
    {
        $request->validate([
            'bahan' => 'required',
            'jumlah' => 'required',
            'resep_id' => 'required'
        ]);

        $bahan = bahan::findOrFail($request->id);
        $bahan->update($request->all());

        return redirect() -> route('admin.resep.detail', $request -> resep_id);
    }

    public function delete($id)
    {
        $bahan = bahan::findOrFail($id);

        $bahan->delete();
        return redirect() -> route('admin.resep.detail', $bahan -> resep_id);  
    }
}
