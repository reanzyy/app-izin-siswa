<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Dispensasi;
use App\Models\JamPelajaran;
use App\Models\Jurusan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DispensasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $dispensasi = Dispensasi::with('kelas', 'jurusan', 'jammulai', 'jamkembali')->orderby('id', 'desc')->get();

        return view('pages.dispensasi.index', compact('dispensasi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kelas = Kelas::get();
        $jam = JamPelajaran::get();
        $jurusan = Jurusan::get();

        return view('formulir', compact('kelas', 'jam', 'jurusan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        Dispensasi::create([
            'nama_siswa' => $request->nama_siswa,
            'id_kelas' => $request->id_kelas,
            'id_jurusan' => $request->id_jurusan,
            'jam_mulai' => $request->jam_mulai,
            'jam_kembali' => $request->jam_kembali,
            'keperluan' => $request->keperluan,
            'email' => $request->email,
            'plat_no' => $request->plat_no,
            // 'status' => $request->status,
        ]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dispensasi $dispensasi)
    {
        return view('pages.dispensasi.show', compact('dispensasi'));
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
    public function destroy(Dispensasi $dispensasi)
    {
        Dispensasi::where('id', $dispensasi->id)->delete();

        return redirect('dispensasi');
    }

    public function statusDiterima(Dispensasi $dispensasi)
    {
        $data = Dispensasi::where('id', $dispensasi->id)->first();

        $status_sekarang = $data->status;

        if ($status_sekarang == 2) {
            Dispensasi::where('id', $dispensasi->id)->update([
                'status' => 1
            ]);
        }

        return back();
    }

    public function statusDitolak(Dispensasi $dispensasi)
    {
        $data = Dispensasi::where('id', $dispensasi->id)->first();

        $status_sekarang = $data->status;

        if ($status_sekarang == 2) {
            Dispensasi::where('id', $dispensasi->id)->update([
                'status' => 0
            ]);
        }

        return back();
    }
}
