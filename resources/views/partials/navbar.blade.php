<nav class="navbar navbar-expand-lg bg-white shadow shadow-sm fixed-top py-3">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ url('/') }}">
            <img src="{{ asset('assets/img/logo.jpeg') }}" class="logosek" alt="">
            <span class="primary">SD NEGERI</span> SIDANEGARA 02
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link fw-bolder {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Beranda</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link fw-bolder dropdown-toggle {{ Request::is('profil') || Request::is('tentang_sekolah') || Request::is('visi_misi') || Request::is('tendik') || Request::is('sarpras') || Request::is('prestasi') || Request::is('ekskul') ? 'active' : '' }}" href="{{ url('profil') }}" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Profil
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ url('tentang_sekolah') }}">Kata Sambutan</a></li>
                        <li><a class="dropdown-item" href="{{ url('visi_misi') }}">Visi Misi</a></li>
                        <li><a class="dropdown-item" href="{{ url('tendik') }}">Tenaga Pendidik</a></li>
                        <li><a class="dropdown-item" href="{{ url('sarpras') }}">Sarana dan Prasarana</a></li>
                        <li><a class="dropdown-item" href="{{ url('prestasi') }}">Prestasi</a></li>
                        <li><a class="dropdown-item" href="{{ url('ekskul') }}">Ekstrakulikuler</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link fw-bolder {{ Request::is('ppdb') ? 'active' : '' }}" href="{{ url('ppdb') }}">PPDB</a></li>
                <li class="nav-item"><a class="nav-link fw-bolder {{ Request::is('galeri') ? 'active' : '' }}" href="{{ url('galeri') }}">Galeri</a></li>
                <li class="nav-item"><a class="nav-link fw-bolder {{ Request::is('berita', 'detailberita/* ') ? 'active' : '' }}" href="{{ url('berita') }}">Berita</a></li>
                <li class="nav-item"><a class="nav-link fw-bolder {{ Request::is('kontak') ? 'active' : '' }}" href="{{ url('kontak') }}">Kontak</a></li>
                <li class="nav-item">
                    @if (!auth()->check())
                        <a class="nav-link fw-bolder {{ Request::is('login') ? 'active' : '' }}" href="{{ url('login') }}">Login</a>
                    @else
                        <a class="nav-link" href="{{ url('dashboard') }}">Dashboard</a>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>
