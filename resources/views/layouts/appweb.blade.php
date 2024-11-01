<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @include('partials.navbar') 
    
    <!-- Navbar -->
    <nav
      class="navbar navbar-expand-lg bg-white shadow shadow-sm fixed-top py-3"
    >
      <div class="container">
        <a class="navbar-brand fw-bold" href="#">
          <img src="assets/img/Logo_Kemendikbud.svg" class="logosek" alt="">
        <span class="primary">SD NEGERI</span> SIDANEGARA 02</a
        
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link fw-bolder active" href="/">Beranda</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link fw-bolder dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Profil
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="tentang_sekolah"
                    >Kata Sambutan</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="visi_misi">Visi Misi</a>
                </li>
                <li>
                  <a class="dropdown-item" href="tendik"
                    >Tenaga Pendidik</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="sarpras"
                    >Sarana dan Prasarana</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="prestasi">Prestasi</a>
                </li>
                <li>
                  <a class="dropdown-item" href="ekskul"
                    >Ekstrakulikuler</a
                  >
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bolder" href="ppdb">PPDB</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bolder" href="galeri">Galeri</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bolder" href="berita">Berita</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bolder" href="kontak">Kontak</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <main class="container mt-4">
        @yield('content') 
        
        <!-- Konten utama akan disisipkan di sini -->
            <!-- breadcumbs -->
     <div class="breadcumbs py-2">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center text-white">
                <h2>Galeri</h2>
                <ol class="d-flex list-unstyled">
                    <li>Beranda</li>
                    <li>Galeri</li>
                </ol>
            </div>
        </div>
     </div>
     <!-- end breadcumbs -->
    </main>

    @include('partials.footer') 
    
    <!-- Footer -->
        <!-- footer -->
    <footer class="mt-5">
      <div class="footer-top text-black p-5">
        <div class="container- fluid">
          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3">
              <h4 class="fw-bold">SD Negeri Sidanegara 02</h2>
              <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint
                facilis optio eos vitae, soluta nulla officia explicabo quidem.
                Quidem, suscipit.
              </p>
              <strong>Phone</strong> : <span>+6285326700147 </span>
              <br />
              <strong>Email</strong> : <span>info@company.org </span>
            </div>
            <div class="col-md-2">
              <h4 class="fw-bold">Our services</h2>
              <ul class="list-group list-unstyled">
                <li class="list-item">
                  <a href="" class="text-decoration-none text-black">
                    <i class="fa-solid fa-chevron-right primary"></i>
                    Profil
                  </a>
                </li>
                <li class="list-item">
                  <a href="" class="text-decoration-none text-black">
                    <i class="fa-solid fa-chevron-right primary"></i>
                    PPDB
                  </a>
                </li>
                <li class="list-item">
                  <a href="" class="text-decoration-none text-black">
                    <i class="fa-solid fa-chevron-right primary"></i>
                    Galeri
                  </a>
                </li>
                <li class="list-item">
                  <a href="" class="text-decoration-none text-black">
                    <i class="fa-solid fa-chevron-right primary"></i>
                    Berita
                  </a>
                </li>
                <li class="list-item">
                  <a href="" class="text-decoration-none text-black">
                    <i class="fa-solid fa-chevron-right primary"></i>
                    Kontak
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-md-2">
              <h4 class="fw-bold">Usefull Links</h2>
              <ul class="list-group list-unstyled">
                <li class="list-item">
                  <a href="" class="text-decoration-none text-black">
                    <i class="fa-solid fa-chevron-right primary"></i>
                    Home
                  </a>
                </li>
                <li class="list-item">
                  <a href="" class="text-decoration-none text-black">
                    <i class="fa-solid fa-chevron-right primary"></i>
                    About Us
                  </a>
                </li>
                <li class="list-item">
                  <a href="" class="text-decoration-none text-black">
                    <i class="fa-solid fa-chevron-right primary"></i>
                    Service
                  </a>
                </li>
                <li class="list-item">
                  <a href="" class="text-decoration-none text-black">
                    <i class="fa-solid fa-chevron-right primary"></i>
                    Portofolio
                  </a>
                </li>
                <li class="list-item">
                  <a href="" class="text-decoration-none text-black">
                    <i class="fa-solid fa-chevron-right primary"></i>
                    Contact
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-md-3">
              <h4 class="fw-bold">Join Our Newsletter</h2>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
              <div class="input-group">
                <input
                  type="text"
                  class="form-control"
                  placeholder="yourmail@example.com"
                />
                <button
                  class="btn btn-subscribe"
                  type="button"
                  id="inputGroupFileAddon04"
                >
                  Subscribe
                </button>
              </div>
              <div class="col-md-5"></div>
                    <div class="social-links mt-3">
                        <a href="" class="mx-2">
                            <i class="fab fa-facebook fa-2x"></i>
                        </a>
                        <a href="" class="mx-2">
                            <i class="fab fa-twitter fa-2x"></i>
                        </a>
                        <a href="" class="mx-2">
                            <i class="fab fa-instagram fa-2x"></i>
                        </a>
                        <a href="" class="mx-2">
                            <i class="fab fa-youtube fa-2x"></i>
                        </a>
                        <a href="" class="mx-2">
                            <i class="fab fa-linkedin fa-2x"></i>
                        </a>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-down bg-darker text-white px-5 py-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-5">
                   <div class="copyright">
                      &copy; Copyright <strong>Company</strong>. All Rights Reseved
                    </div>
                    <div class="credits">
                        Designed by Jerniiihh
                    </div>
                </div>
            </div>
        </div>
        
      </div>
    </footer>

    <!-- end footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>