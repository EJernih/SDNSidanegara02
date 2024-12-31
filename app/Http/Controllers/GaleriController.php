<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\Filter;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galeris = Galeri::with('filter')->get();
        $filters = Filter::all();
        return view('galeriutama.galeri.index', compact('galeris', 'filters'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $filters = Filter::all();
        return view('galeriutama.galeri.create', compact('filters'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'filter_id' => 'nullable|exists:filters,id',
            'image' => 'required|image',
        ]);

        $input = $request->all();

        //logika jika filter tidak dipilih
        $filterId = $request->input('filter_id');
        if ($filterId) {//jika filter dipilih

        }else{
            $input['filter_id'] = null;
        }

        if ($image = $request->file('image')) {
            $destinationPath = 'image/galeri/';
            $imageName = "galeri_". date('YmdHis') . Str::random(8) . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = "$imageName";
        }

        Galeri::create($input);

        return redirect('/galeris')->with('message', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Galeri $galeri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Galeri $galeri)
    {
        $galeris = Galeri::all();
        $filters = Filter::all();

        return view('galeriutama.galeri.edit', compact('galeri', 'filters'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Galeri $galeri)
    {
         $request->validate([
            'title' => 'required',
            'filter_id' => 'nullable|exists:filters,id',
            'image' => 'image',
        ]);

        $input = $request->all();



        if ($image = $request->file('image')) {
            $destinationPath = 'image/galeri/';
            $imageName = "galeri_". date('YmdHis') . Str::random(8) . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }else{
            unset($input['image']);
        }

        $galeri->update($input);

        return redirect('/galeris')->with('message', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Galeri $galeri)
    {
        // Cek apakah file gambar ada di folder
    $imagePath = public_path('image/galeri/' . $galeri->image);  // Path lengkap ke file gambar

    if (file_exists($imagePath)) {
        // Hapus file gambar dari folder
        unlink($imagePath);
    }

    // Hapus data galeri dari database
    $galeri->delete();

    // Redirect ke halaman galeris dengan pesan sukses
    return redirect('/galeris')->with('message', 'Data dan gambar berhasil dihapus');
    }
}
