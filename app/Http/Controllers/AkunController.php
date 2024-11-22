<?php

namespace App\Http\Controllers;

use App\Models\Akun;
use Illuminate\Http\Request;

class AkunController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $akuns = Akun::all();
        return view('akun.index', compact('akuns'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('akun.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $input = $request->all();
        $input['password'] = bcrypt($request->password); // Hash password sebelum disimpan
        Akun::create($input);

        return redirect('/akuns')->with('message', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Akun $akun)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Akun $akun)
    {
        return view('akun.edit', compact('akun'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Akun $akun)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'nullable',
        ]);

            $input = $request->all();

            // Hash password hanya jika diisi
            if ($request->filled('password')) {
                $input['password'] = bcrypt($request->password);
            } else {
                unset($input['password']); // Jangan ubah password jika tidak diisi
            }

        $akun->update($input);

        return redirect('/akuns')->with('message', 'Data berhasil diedit');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Akun $akun)
    {
        $akun->delete();

        return redirect('/akuns')->with('message', 'Data berhasil dihapus');
    }
}
