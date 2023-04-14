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
            'jam' => $request->jam,
        ]);

        return redirect('jam');
    }

    /**
     * Display the specified resource.
     */
    public function show(JamPelajaran $jam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JamPelajaran $jam)
    {
        return view('pages.jampelajaran.edit', compact('jam'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JamPelajaran $jam)
    {

        JamPelajaran::where('id', $jam->id)->update([
            'jam' => $request->jam,
        ]);

        return redirect('jam');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JamPelajaran $jam)
    {
        JamPelajaran::where('id', $jam->id)->delete();

        return redirect('jam');
    }
}
