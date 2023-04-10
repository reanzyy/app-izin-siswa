<?php

namespace App\Http\Controllers;

use App\Models\JamPelajaran;
use Illuminate\Http\Request;

class JamPelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jam = JamPelajaran::get();

        return view('pages.jampelajaran.index', compact('jam'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.jampelajaran.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        JamPelajaran::insert([
            'jam_pelajaran' => $request->jam_pelajaran,
        ]);

        return redirect('jampelajaran');
    }

    /**
     * Display the specified resource.
     */
    public function show(JamPelajaran $jamPelajaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JamPelajaran $jamPelajaran)
    {
        return redirect('jampelajaran', compact('jamPelajaran'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JamPelajaran $jamPelajaran)
    {

        JamPelajaran::insert([
            'jam_pelajaran' => $request->jam_pelajaran,
        ]);

        return redirect('jampelajaran', compact('jamPelajaran'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(JamPelajaran $jamPelajaran)
    {
        JamPelajaran::where('id', $jamPelajaran->id)->delete();

        return redirect('jampelajaran');
    }
}
