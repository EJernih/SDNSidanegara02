<nav class="navbar navbar-expand-lg bg-white shadow shadow-sm fixed-top py-3">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">
            <img src="assets/img/logo.jpeg" class="logosek" alt="">
            <span class="primary">SD NEGERI</span> SIDANEGARA 02
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link fw-bolder {{ Request::is('/') ? 'active' : '' }}" href="/">Beranda</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link fw-bolder dropdown-toggle {{ Request::is('profil') || Request::is('tentang_sekolah') || Request::is('visi_misi') || Request::is('tendik') || Request::is('sarpras') || Request::is('prestasi') || Request::is('ekskul') ? 'active' : '' }}" href="profil" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Profil
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="tentang_sekolah">Kata Sambutan</a></li>
                        <li><a class="dropdown-item" href="visi_misi">Visi Misi</a></li>
                        <li><a class="dropdown-item" href="tendik">Tenaga Pendidik</a></li>
                        <li><a class="dropdown-item" href="sarpras">Sarana dan Prasarana</a></li>
                        <li><a class="dropdown-item" href="prestasi">Prestasi</a></li>
                        <li><a class="dropdown-item" href="ekskul">Ekstrakulikuler</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link fw-bolder {{ Request::is('ppdb') ? 'active' : '' }}" href="ppdb">PPDB</a></li>
                <li class="nav-item"><a class="nav-link fw-bolder {{ Request::is('galeri') ? 'active' : '' }}" href="galeri">Galeri</a></li>
                <li class="nav-item"><a class="nav-link fw-bolder {{ Request::is('berita') ? 'active' : '' }}" href="berita">Berita</a></li>
                <li class="nav-item"><a class="nav-link fw-bolder {{ Request::is('kontak') ? 'active' : '' }}" href="kontak">Kontak</a></li>
            </ul>
        </div>
    </div>
</nav>