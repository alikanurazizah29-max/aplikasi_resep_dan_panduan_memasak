<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use App\Models\Resep;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminResepController extends Controller
{
    public function index()
    {
        $data_resep = Resep::all();

        return view('admin.resep.index', [
            'type_menu' => 'resep-menu',
            'data_resep' => $data_resep,
        ]);
    }

    public function create()
    {
        $data_kategori = kategori::all();

        return view('admin.resep.create', [
            'type_menu' => 'resep-menu',
            'data_kategori' => $data_kategori,
        ]);
    }

    public function proses_create(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'gambar' => 'required|image|mimes:jpg,jpeg,png',
            'porsi' => 'required',
            'deskripsi' => 'required',
            'kategori_id' => 'required',
        ]);

        // upload gambar
        $path = $request->file('gambar')->store('resep', 'public');

        Resep::create([
            'nama' => $request->nama,
            'gambar' => $path,
            'porsi' => $request->porsi,
            'deskripsi' => $request->deskripsi,
            'kategori_id' => $request->kategori_id,
        ]);

        return redirect()->route('admin.resep');
    }

    public function edit($id)
    {
        $data_kategori = kategori::all();
        $resep = Resep::findOrFail($id);

        return view('admin.resep.edit', [
            'type_menu' => 'master-data',
            'resep' => $resep,
            'data_kategori' => $data_kategori,
        ]);
    }

    public function detail()
    {
        return view('admin.resep.detail', [
            'type_menu' => 'resep-menu',
        ]);
    }

    public function proses_edit(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'nama' => 'required',
            'gambar' => 'nullable',
            'porsi' => 'required',
            'deskripsi' => 'required',
            'kategori_id' => 'required',
        ]);

        $resep = Resep::findOrFail($request->id);

        // cek jika upload gambar baru
        if ($request->hasFile('gambar')) {

            // hapus gambar lama
            if ($resep->gambar && Storage::disk('public')->exists($resep->gambar)) {
                Storage::disk('public')->delete($resep->gambar);
            }

            // upload gambar baru
            $path = $request->file('gambar')->store('resep', 'public');

            $resep->gambar = $path;
        }

        $resep->nama = $request->nama;
        $resep->porsi = $request->porsi;
        $resep->deskripsi = $request->deskripsi;
        $resep->kategori_id = $request->kategori_id;
        $resep->updated_at = now();

        $resep->save();

        return redirect()->route('admin.resep');
    }

    public function delete($id)
    {
        $resep = Resep::findOrFail($id);

        // hapus gambar dari storage
        if ($resep->gambar && Storage::disk('public')->exists($resep->gambar)) {
            Storage::disk('public')->delete($resep->gambar);
        }

        $resep->delete();

        return redirect()->route('admin.resep');
    }
}
