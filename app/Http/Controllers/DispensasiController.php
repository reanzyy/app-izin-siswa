<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Dispensasi;
use App\Models\JamPelajaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DispensasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $dispensasi = Dispensasi::join('kelas', 'dispensasi.id_kelas', '=', 'kelas.id')
        //     ->join('jurusan', 'dispensasi.id_jurusan', '=', 'jurusan.id')
        //     ->join('jam_pelajaran', 'dispensasi.jam_mulai', '=', 'jam_pelajaran.id')
        //     ->join('jam_pelajaran', 'dispensasi.jam_kembali', '=', 'jam_pelajaran.id')
        //     ->get();

        $dispensasi = Dispensasi::with('kelas','jurusan','jammulai', 'jamkembali')->get();

        return view('pages.dispensasi.index', compact('dispensasi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kelas = Kelas::get();
        $jam = JamPelajaran::get();

        return view('formulir', compact('kelas', 'jam'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Dispensasi::insert([
            'nama_siswa' => $request->nama_siswa,
            'kelas' => $request->kelas,
            'jam_pelajaran' => $request->jam_pelajaran,
            'jam_mulai' => $request->jam_mulai,
            'jam_kembali' => $request->jam_kembali,
            'keperluan' => $request->keperluan,
            'waktu_input' => $request->waktu_input,
            'email' => $request->email,
            'plat_no' => $request->plat_no,
            'status' => $request->status,
            'id_kelas' => $request->id_kelas,
            'id_jurusan' => $request->id_jurusan,
        ]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
