<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Kelas;
use Illuminate\Http\Request;
use PHPUnit\TextUI\XmlConfiguration\Logging\Junit;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $jurusan = Jurusan::get();

        return view('pages.jurusan.index', compact('jurusan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.jurusan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Jurusan::create([
            'nama_jurusan' => $request->nama_jurusan,
        ]);

        return redirect('jurusan')->with('store', 'Data berhasil dibuat');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jurusan $jurusan)
    {
        return view('pages.jurusan.edit', compact('jurusan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jurusan $jurusan)
    {

        Jurusan::where('id', $jurusan->id)->update([
            'nama_jurusan' => $request->nama_jurusan,
        ]);

        return redirect('jurusan')->with('update', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jurusan $jurusan)
    {
        Jurusan::where('id', $jurusan->id)->delete();

        return redirect('jurusan')->with('delete', 'Data berhasil dihapus');
    }
}
