<?php

namespace App\Http\Controllers;

use App\Models\Sekolah;
use Illuminate\Http\Request;

class SekolahController extends Controller
{

    public function index()
    {

        // return view('pages.sekolah.index', compact('sekolah'));
    }

    public function edit(Sekolah $sekolah)
    {
        $sekolah = Sekolah::get();

        return view('pages.sekolah.edit', compact('sekolah'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sekolah $sekolah)
    {
        Sekolah::where('id', $sekolah->id)->update([
            'nama_sekolah' => $request->nama_sekolah,
            'alamat_sekolah' => $request->alamat_sekolah,
            'telepon_sekolah' => $request->telepon_sekolah
        ]);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sekolah $sekolah)
    {
        //
    }
}