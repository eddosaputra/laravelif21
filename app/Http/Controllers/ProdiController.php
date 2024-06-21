<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use App\Models\Fakultas; // Import the Fakultas model
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prodi = Prodi::all();
        return view('prodi.index')->with('prodi', $prodi);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $fakultas = Fakultas::all();
        return view('prodi.create')->with('fakultas', $fakultas);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->user()->cannot('create', Prodi::class)){
            abort (403, 'Anda tidak memiliki akses');
            //return redirect()->route('fakultas.index')->with('error', 'Anda tidak memiliki akses');
        }




        $val = $request->validate([
            'nama' => 'required|unique:prodis',
            'fakultas_id' => 'required'
        ]);

        Prodi::create($val);
        return redirect()->route('prodi.index') ->with('success', $val['nama'].' berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Prodi $prodi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prodi $prodi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prodi $prodi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prodi $prodi)
    {



        $prodi->delete();
        return redirect()->route('prodi.index') ->with('success', $prodi->nama.' data berhasil dihapus');

    }
}
