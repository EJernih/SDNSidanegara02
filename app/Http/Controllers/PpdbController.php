<?php

namespace App\Http\Controllers;

use App\Models\Ppdb;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PpdbController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ppdbs = Ppdb::all();
        return view('ppdb.index', compact('ppdbs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ppdb.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'place' => 'required',
            'sk_1' => 'required',
            'sk_2' => 'required',
            'sk_3' => 'required',
            'sk_4' => 'required',
            'image' => 'required|image',
            'link' => 'nullable|url',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/ppdb/';
            $imageName = "ppdb_". date('YmdHis') . Str::random(8) . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = "$imageName";
        }

        Ppdb::create($input);

        return redirect('/ppdbs')->with('message', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ppdb $ppdb)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ppdb $ppdb)
    {
        return view('ppdb.edit', compact('ppdb'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ppdb $ppdb)
    {
         $request->validate([
            'title' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'place' => 'required',
            'sk_1' => 'required',
            'sk_2' => 'required',
            'sk_3' => 'required',
            'sk_4' => 'required',
            'image' => 'image',
            'link' => 'nullable|url'
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/ppdb/';
            $imageName = "ppdb_". date('YmdHis') . Str::random(8) . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }else{
            unset($input['image']);
        }

        $ppdb->update($input);

        return redirect('/ppdbs')->with('message', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ppdb $ppdb)
    {
        // Cek apakah file gambar ada di folder
    $imagePath = public_path('image/ppdb/' . $ppdb->image);  // Path lengkap ke file gambar

    if (file_exists($imagePath)) {
        // Hapus file gambar dari folder
        unlink($imagePath);
    }

    // Hapus data ppdb dari database
    $ppdb->delete();

    // Redirect ke halaman ppdbs dengan pesan sukses
    return redirect('/ppdbs')->with('message', 'Data dan gambar berhasil dihapus');
    }
}

