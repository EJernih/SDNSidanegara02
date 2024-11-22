<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Kontak;
use App\Models\Ppdb;
use App\Models\Prestasi;
use App\Models\Slider;
use App\Models\Sambutan;
use App\Models\Sarpra;
use App\Models\VisiMisi;
use App\Models\Tendik;
use Illuminate\Http\Request;

class HomeController extends Controller
{
     public function index()
    {
        $sliders = Slider::all();
        $sambutan = Sambutan::all()->first();
        $beritas = Berita::latest()->take(3)->get();
        $prestasis = Prestasi::latest()->take(3)->get();
        $galeris = Galeri::all();
        $filters = Galeri::select('filter_id as item')->distinct()->get();
        return view('home.index', compact('sliders', 'sambutan','beritas','prestasis','galeris','filters'));
    }

    public function tentang_sekolah()
    {
        $sambutans = Sambutan::all();
        return view('home.tentang_sekolah', compact('sambutans'));
    }

    public function galeri()
    {
        $galeris = Galeri::all();
        $filters = Galeri::select('filter_id as item')->distinct()->get();

        return view('home.galeri', compact('galeris','filters'));
    }

    public function kontak()
    {
        $kontaks = Kontak::all();

        return view('home.kontak', compact('kontaks'));
    }

    public function ppdb()
    {
        $ppdbs = Ppdb::all();

        return view('home.ppdb', compact('ppdbs'));
    }

    public function prestasi()
    {
        $prestasis = Prestasi::all();
        return view('home.prestasi', compact('prestasis'));
    }

    public function tendik()
    {
        $tendiks = Tendik::all();
        return view('home.tendik', compact('tendiks'));
    }

    public function visi_misi()
    {
        $visimisis = VisiMisi::all();

        return view('home.visi_misi', compact('visimisis'));
    }

    public function sarpras()
    {
        $sarpras = Sarpra::all();

        return view('home.sarpras', compact('sarpras'));
    }

    public function berita()
    {
        $beritas = Berita::all();

        return view('home.berita', compact('beritas'));
    }

    public function berita_detail($id)
    {
        $berita = Berita::find($id);

        return view('home.detailberita', compact('berita'));
    }
}           
    
