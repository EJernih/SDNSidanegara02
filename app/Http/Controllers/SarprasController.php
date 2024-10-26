<?php

namespace App\Http\Controllers;

use App\Models\Sarpras;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class SarprasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sarpra = Sarpras::all();

        return view('sarpras.index', compact('sarpra'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sarpras.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/sarpras/';
            $imageName = "sarpras_". date('YmdHis') . Str::random(8) . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = "$imageName";
        }

        Sarpras::create($input);

        return redirect('/sarprases')->with('message', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sarpras $sarpras)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $sarpras = Sarpras::find($id);
        return view('sarpras.edit', compact('sarpras'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sarpras $sarpras)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/sarpras/';
            $imageName = "sarpras_". date('YmdHis') . Str::random(8) . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = "$imageName";
        }else{
            unset($input['image']);
        }

        $sarpras->update($input);

        return redirect('/sarprases')->with('message', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sarpras $sarpras)
    {
        // Cek apakah file gambar ada di folder
    $imagePath = public_path('image/sarpras/' . $sarpras->image);  // Path lengkap ke file gambar

    if (file_exists($imagePath)) {
        // Hapus file gambar dari folder
        unlink($imagePath);
    }

    // Hapus data slider dari database
    $sarpras->delete();

    // Redirect ke halaman sliders dengan pesan sukses
    return redirect('/sarprases')->with('message', 'Data dan gambar berhasil dihapus');
    }
}
