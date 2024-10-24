<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\Sambutan;
use App\Models\VisiMisi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
     public function index()
    {
        $sliders = Slider::all();
        return view('home.index', compact('sliders'));
    }

    public function tentang_sekolah()
    {
        $sambutans = Sambutan::all();
        return view('home.tentang_sekolah', compact('sambutans'));
    }

    public function galeri()
    {
        return view('home.galeri');
    }

    public function kontak()
    {
        return view('home.kontak');
    }

    public function ppdb()
    {
        return view('home.ppdb');
    }

    public function prestasi()
    {
        return view('home.prestasi');
    }

    public function tendik()
    {
        return view('home.tendik');
    }

    public function visi_misi()
    {
        $visimisis = VisiMisi::all();

        return view('home.visi_misi', compact('visimisis'));
    }

    public function sarpras()
    {
        return view('home.sarpras');
    }

    public function berita()
    {
        return view('home.berita');
    }
}           
    
