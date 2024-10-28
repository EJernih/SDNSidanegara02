<?php

namespace App\Http\Controllers;

use App\Models\Sarpra;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class SarpraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sarpras = Sarpra::all();
        return view('sarpras.index', compact('sarpras'));
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
            'judul' => 'required',
            'jumlah' => 'required',
            'deskripsi' => 'required',
            'image' => 'required|image',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/sarpras/';
            $imageName = "sarpras_". date('YmdHis') . Str::random(8) . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = "$imageName";
        }

        Sarpra::create($input);

        return redirect('/sarprasS')->with('message', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sarpra $sarpra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $sarpra = Sarpra::find($id);
        return view('sarpras.edit', compact('sarpra'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $request->validate([
            'judul' => 'required',
            'jumlah' => 'required',
            'deskripsi' => 'required',
            'image' => 'image',
        ]);

        $Sarpra = Sarpra::find($id);
        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/sarpras/';
            $imageName = "sarpras_". date('YmdHis') . Str::random(8) . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = "$imageName";
        }else{
            unset($input['image']);
        }

        $Sarpra->update($input);

        return redirect('/sarprasS')->with('message', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $Sarpra = Sarpra::find($id);
        if ($Sarpra->image != 'default.jpg') {
            unlink(public_path('image/sarpras/'. $Sarpra->image));
        }

        $Sarpra->delete();
        return redirect('/sarprasS')->with('message', 'Data berhasil dihapus');

    }
}
