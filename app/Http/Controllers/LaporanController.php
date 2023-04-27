<?php

namespace App\Http\Controllers;

use App\Models\Cetak;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        return view('pages.laporan.index');
    }
    public function cetakLaporan($txtTglAwal, $txtTglAkhir){
        // dd(["Awal : ".$txtTglAwal,"Akhir" .$txtTglAkhir]);

        $lap = Cetak::with('dispensasi', 'guru')->whereBetween('created_at',[$txtTglAwal, $txtTglAkhir])->get();

        return view('pages.laporan.cetak', compact('lap'));
    }
}
