<nav class="navbar navbar-expand-lg bg-white shadow shadow-sm fixed-top py-3">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand fw-bold" href="{{ url('/') }}">
            <img src="{{ asset('assets/img/logo.jpeg') }}" class="logosek" alt="Logo SDN Sidanegara 02" />
            <span class="primary">SD NEGERI</span> SIDANEGARA 02
        </a>
        
        <!-- Toggler -->
        <button 
            class="navbar-toggler" 
            type="button" 
            data-bs-toggle="collapse" 
            data-bs-target="#navbarNav" 
            aria-controls="navbarNav" 
            aria-expanded="false" 
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- Navbar Menu -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <!-- Beranda -->
                <li class="nav-item">
                    <a class="nav-link fw-bolder {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Beranda</a>
                </li>

                <!-- Profil Dropdown -->
                <li class="nav-item dropdown">
                    <a 
                        class="nav-link fw-bolder dropdown-toggle {{ Request::is('profil*') || Request::is('tentang_sekolah') || Request::is('visi_misi') || Request::is('tendik') || Request::is('sarpras') || Request::is('prestasi') || Request::is('ekskul') ? 'active' : '' }}" 
                        href="#" 
                        id="navbarDropdown" 
                        role="button" 
                        data-bs-toggle="dropdown" 
                        aria-expanded="false">
                        Profil
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item {{ Request::is('tentang_sekolah') ? 'active' : '' }}" href="{{ url('tentang_sekolah') }}">Kata Sambutan</a></li>
                        <li><a class="dropdown-item {{ Request::is('visi_misi') ? 'active' : '' }}" href="{{ url('visi_misi') }}">Visi Misi</a></li>
                        <li><a class="dropdown-item {{ Request::is('tendik') ? 'active' : '' }}" href="{{ url('tendik') }}">Tenaga Pendidik</a></li>
                        <li><a class="dropdown-item {{ Request::is('sarpras') ? 'active' : '' }}" href="{{ url('sarpras') }}">Sarana dan Prasarana</a></li>
                        <li><a class="dropdown-item {{ Request::is('prestasi') ? 'active' : '' }}" href="{{ url('prestasi') }}">Prestasi</a></li>
                        <li><a class="dropdown-item {{ Request::is('ekskul') ? 'active' : '' }}" href="{{ url('ekskul') }}">Ekstrakurikuler</a></li>
                    </ul>
                </li>

                <!-- Other Nav Items -->
                <li class="nav-item"><a class="nav-link fw-bolder {{ Request::is('ppdb') ? 'active' : '' }}" href="{{ url('ppdb') }}">PPDB</a></li>
                <li class="nav-item"><a class="nav-link fw-bolder {{ Request::is('galeri') ? 'active' : '' }}" href="{{ url('galeri') }}">Galeri</a></li>
                <li class="nav-item"><a class="nav-link fw-bolder {{ Request::is('berita') ? 'active' : '' }}" href="{{ url('berita') }}">Berita</a></li>
                <li class="nav-item"><a class="nav-link fw-bolder {{ Request::is('kontak') ? 'active' : '' }}" href="{{ url('kontak') }}">Kontak</a></li>
                <li class="nav-item"><a class="nav-link fw-bolder {{ Request::is('login') ? 'active' : '' }}" href="{{ url('login') }}">Login</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Tambahkan Margin untuk Konten -->
<div style="margin-top: 70px;"></div>
