<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Kota;
use App\Models\Prodi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index')->with('mahasiswa', $mahasiswa);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $prodi = Prodi::all();
        $kota = Kota::all();
        return view('mahasiswa.create')->with('kota', $kota)->with('prodi', $prodi);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // dd($request);
        $val = $request->validate([
            'npm' => 'required|unique:mahasiswas',
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'kota_id' => 'required',
            'prodi_id' => 'required',
            'url_foto' => 'required|file|mimes:jpg,png,jpeg|max:5000'
        ]);

        // rename file, misalnya : 2327250001.jpg
        // ambil ext file
        $ext = $val['url_foto']->getClientOriginalExtension(); //png / jpg / jpeg
        $val['url_foto'] = $request->npm.'.'.$ext;
        //upload file bisa pakai move() atau store()
        $request->url_foto->move('foto', $val['url_foto']);
        //foto : folder tujuan public/foto


        Mahasiswa::create($val);
        return redirect()->route('mahasiswa.index') ->with('success', $val['nama'].' berhasil disimpan');



    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
       // dd($mahasiswa);

       return view('mahasiswa.show')->with('mahasiswa', $mahasiswa);







    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        //dd($mahasiswa);
        File::delete('foto/'.$mahasiswa->url_foto); //file dihapus
        $mahasiswa->delete(); // data dihapus
        return redirect()->route('mahasiswa.index') ->with('success', $mahasiswa->nama.' data berhasil dihapus');

    }
}
