<?php

namespace App\Http\Controllers;

use App\Models\langkah;
use Illuminate\Http\Request;

class AdminLangkahController extends Controller
{
    public function create($resepid)
        {
            return view('admin.resep.createlangkah',[
                'type_menu' => 'master-data',
                'resepid' => $resepid
            ]);
        }

    public function proses_create(Request $request)
    {
        $request->validate([
            'langkah' => 'required',
            'resep_id' => 'required',
        ]);

        langkah::create($request -> all());
        return redirect() -> route('admin.resep.detail', $request -> resep_id);   
    }

    public function edit($id)
    { 
        $langkah = langkah::findOrFail($id);

        return view('admin.resep.editlangkah', [
            'type_menu' => 'master-data',
            'langkah' => $langkah
        ]);
    }

    public function proses_edit(Request $request)
    {
        $request->validate([
            'langkah' => 'required',
            'resep_id' => 'required',
        ]);

        $langkah = langkah::findOrFail($request->id);
        $langkah->update($request->all());

        return redirect() -> route('admin.resep.detail', $request -> resep_id);   
    }
    
    public function delete($id)
    {
        $langkah = langkah::findOrFail($id);

        $langkah->delete();
        return redirect() -> route('admin.resep.detail', $langkah -> resep_id);  
    }
}
