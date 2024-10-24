<?php

namespace App\Http\Controllers;

use App\Models\Tendik;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class TendikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tendiks = Tendik::all();
        return view('tendik.index', compact('tendiks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tendik.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $request->validate([
            'nama' => 'required',
            'pelajaran' => 'required',
            'image' => 'required|image',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/tendik/';
            $imageName = "tendik_". date('YmdHis') . Str::random(8) . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = "$imageName";
        }

        Tendik::create($input);

        return redirect('/tendiks')->with('message', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tendik $tendik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tendik $tendik)
    {
        return view('tendik.edit', compact('tendik'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tendik $tendik)
    {
        $request->validate([
            'nama' => 'required',
            'pelajaran' => 'required',
            'image' => 'image',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/tendik/';
            $imageName = "tendik_". date('YmdHis') . Str::random(8) . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }else{
            unset($input['image']);
        }

        $tendik->update($input);

        return redirect('/tendiks')->with('message', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tendik $tendik)
    {
        // Cek apakah file gambar ada di folder
    $imagePath = public_path('image/tendik/' . $tendik->image);  // Path lengkap ke file gambar

    if (file_exists($imagePath)) {
        // Hapus file gambar dari folder
        unlink($imagePath);
    }

    // Hapus data slider dari database
    $tendik->delete();

    // Redirect ke halaman sliders dengan pesan sukses
    return redirect('/tendiks')->with('message', 'Data dan gambar berhasil dihapus');
    }
}
