<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kelas = Kelas::with('jurusan')->get();

        return view('pages.kelas.index', compact('kelas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $jurusan = Jurusan::get();

        return view('pages.kelas.create', compact('jurusan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Kelas::insert([
            'nama_kelas' => $request->nama_kelas,
            'id_jurusan' => $request->id_jurusan,
        ]);

        return redirect('kelas');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kelas $kelas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kelas $kela)
    {

        $jurusan = Jurusan::get();

        return view('pages.kelas.edit', compact('kela', 'jurusan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kelas $kela)
    {

        Kelas::where('id', $kela->id)->update([
            'nama_kelas' => $request->nama_kelas,
            'id_jurusan' => $request->id_jurusan,
        ]);

        return redirect('kelas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kelas $kela)
    {
        Kelas::where('id', $kela->id)->delete();

        return redirect('kelas');
    }
}
