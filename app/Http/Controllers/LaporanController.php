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
    public function cetakLaporan(Request $request, $txtTglAwal, $txtTglAkhir)
    {

        $validation = $request->validate([
            'txtTglAwal' => $request->txtTglAwal,
            'txtTglAkhir' => $request->txtTglAkhir,
        ]);

        $lap = Cetak::with('dispensasi', 'guru')->whereBetween('created_at', [$txtTglAwal, $txtTglAkhir])->latest()->get();

        return view('pages.laporan.cetak', compact('lap', 'validation'));
    }
}
