<?php

namespace App\Http\Controllers;

use App\Models\Cetak;
use App\Models\Kelas;
use App\Models\Dispensasi;
use App\Models\Guru;
use App\Models\JamPelajaran;
use App\Models\Jurusan;
use App\Models\Sekolah;
use Illuminate\Http\Request;

class DispensasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $dispensasi = Dispensasi::with('kelas', 'jurusan', 'jammulai', 'jamkembali')->latest()->get();

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

        $validate = $request->validate([
            'nama_siswa' => 'required|string|min:3',
            'id_kelas' => 'required',
            'id_jurusan' => 'required',
            'jam_mulai' => 'required',
            'jam_kembali' => 'required',
            'keperluan' => 'required|string|min:3',
            // 'plat_no' => '',
            // 'id_cetak' => 'required',
        ]);


        Dispensasi::create($validate);

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

    public function statusDitolak(Request $request, Dispensasi $dispensasi)
    {
        $data = Dispensasi::where('id', $dispensasi->id)->first();

        $status_sekarang = $data->status;

        if ($status_sekarang == 2) {
            Dispensasi::where('id', $dispensasi->id)->update([
                'status' => 0,
            ]);
        }

        return back();
    }

    public function formPilihGuru(Dispensasi $dispensasi)
    {

        $guru = Guru::all();

        return view('pages.dispensasi.formpilih', compact('guru', 'dispensasi'));
    }

    public function pilihGuru(Request $request, Dispensasi $dispensasi)
    {
        Cetak::create([
            'no_d' => $request->no_d,
            // 'sekolah_id' => $request->sekolah_id,
        ]);

        $data = Dispensasi::where('id', $dispensasi->id)->first();

        $guru = $data->id_guru;

        if ($guru == '') {
            Dispensasi::where('id', $dispensasi->id)->update([
                'id_guru' => $request->id_guru
            ]);
        }

        return back();
    }

    public function cetakSurat(Dispensasi $dispensasi, Cetak $cetak)
    {

        $sekolah = Sekolah::get();

        $cetak =  Cetak::with('dispensasi')->get();

        return view('pages.dispensasi.formcetak', compact('dispensasi', 'sekolah'));
    }
}
