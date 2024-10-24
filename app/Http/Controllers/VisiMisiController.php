<?php

namespace App\Http\Controllers;

use App\Models\VisiMisi;
use Illuminate\Http\Request;

class VisiMisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $visimisis = VisiMisi::all();

        return view('visi-misi.index', compact('visimisis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('visi-misi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'visi' => 'required',
            'misi' => 'required',
        ]);

        $input = $request->all();

        VisiMisi::create($input);

        return redirect('/visimisis')->with('message', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(VisiMisi $visiMisi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VisiMisi $visimisi)
    {
        return view('visi-misi.edit', compact('visimisi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, visimisi $visimisi)
    {
        $request->validate([
            'visi' => 'required',
           'misi' => 'required',
        ]);

        $input = $request->all();

        $visimisi->update($input);

        return redirect('/visimisis')->with('message', 'Data berhasil diubah');
    }

    /*
     * Remove the specified resource from storage.
     */
    public function destroy(visimisi $visimisi)
    {
        $visimisi->delete(); 

        return redirect('/visimisis')->with('message', 'Data berhasil dihapus');
    }
}
