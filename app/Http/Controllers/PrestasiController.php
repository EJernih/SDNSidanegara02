<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class PrestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prestasis = Prestasi::all();
        return view('prestasi.index', compact('prestasis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('prestasi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'date' => 'required',
            'description' => 'required',
            'image' => 'required|image',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/prestasi/';
            $imageName = "prestasi_". date('YmdHis') . Str::random(8) . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = "$imageName";
        }

        Prestasi::create($input);

        return redirect('/prestasis')->with('message', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Prestasi $prestasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prestasi $prestasi)
    {
        return view('prestasi.edit', compact('prestasi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prestasi $prestasi)
    {
         $request->validate([
            'title' => 'required',
            'date' => 'required',
            'description' => 'required',
            'image' => 'image',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/prestasi/';
            $imageName = "prestasi_". date('YmdHis') . Str::random(8) . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }else{
            unset($input['image']);
        }

        $prestasi->update($input);

        return redirect('/prestasis')->with('message', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prestasi $prestasi)
    {
        // Cek apakah file gambar ada di folder
    $imagePath = public_path('image/prestasi/' . $prestasi->image);  // Path lengkap ke file gambar

    if (file_exists($imagePath)) {
        // Hapus file gambar dari folder
        unlink($imagePath);
    }

    // Hapus data prestasi dari database
    $prestasi->delete();

    // Redirect ke halaman prestasis dengan pesan sukses
    return redirect('/prestasis')->with('message', 'Data dan gambar berhasil dihapus');
    }
}
