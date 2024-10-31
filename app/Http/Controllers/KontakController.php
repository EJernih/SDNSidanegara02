<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kontaks = Kontak::all();
        return view('kontak.index', compact('kontaks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kontak.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'phone' => 'required',
            'email' => 'required|email',
            'address' => 'required',
        ]);

        $input = $request->all();
        Kontak::create($input);

        return redirect('/kontaks')->with('message', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kontak $kontak)
    {
        return view('kontak.show', compact('kontak'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kontak $kontak)
    {
        return view('kontak.edit', compact('kontak'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kontak $kontak)
    {
         $request->validate([
            'phone' => 'required',
            'email' => 'required|email',
            'address' => 'required',
        ]);

                $input = $request->all();

        $kontak->update($input);

        return redirect('/kontaks')->with('message', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kontak $kontak)
    {
        $kontak->delete();

        return redirect('/kontaks')->with('message', 'Data berhasil dihapus');
    }
}
