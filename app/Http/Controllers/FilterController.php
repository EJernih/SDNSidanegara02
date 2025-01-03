<?php

namespace App\Http\Controllers;

use App\Models\Filter;
use App\Models\Galeri;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galeris = Galeri::with('filter')->get();
        $filters = Filter::all();
        return view('galeriutama.filter.index', compact('filters', 'galeris'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('galeriutama.filter.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'filter' => 'required',
        ]);

        $input = $request->all();
        Filter::create($input);

        return redirect('/filters')->with('message', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Filter $filter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Filter $filter)
    {
        return view('galeriutama.filter.edit', compact('filter'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Filter $filter)
    {
        $request->validate([
            'filter' => 'required',
        ]);

        $filter->update($request->all());

        return redirect('/filters')->with('message', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Filter $filter)
    {
        //menemukan filter berdasarkan id
        $filter = Filter::findOrfail($filter->id);

        //membuat filter_id di galeri menjadi null
        Galeri::where('filter_id', $filter->id)->update(['filter_id' => null]);

        //menghapus filter
        $filter->delete();
        return redirect('/filters')->with('message', 'Data berhasil dihapus');
    }
}
