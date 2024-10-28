<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- bootsstrap css -->
    <link
      rel="stylesheet"
      href="assets/vendor/bootstrap/dist/css/bootstrap.min.css"
    />

    <!-- font awesome -->
    <link rel="stylesheet" href="assets/vendor/fontawesome/css/all.min.css" />

    <!-- aos -->
     <link rel="stylesheet" href="assets/vendor/aos/dist/aos.css">

    <!-- custom css -->
    <link rel="stylesheet" href="assets/css/style.css" />

    <title>SDN02CLP</title>
  </head>

  <body>
    <!-- navbar -->
    <nav
      class="navbar navbar-expand-lg bg-white shadow shadow-sm fixed-top py-3"
    >
      <div class="container">
        <a class="navbar-brand fw-bold" href="#"
          ><span class="primary">SD NEGERI</span> SIDANEGARA 02</a
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
              <a class="nav-link fw-bolder" href="/">Beranda</a>
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
              <a class="nav-link fw-bolder active" href="galeri">Galeri</a>
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
    <!-- end navbar -->

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



    <!-- Galeri -->
    <div class="galeri mt-5">
      <div class="container">
        <div class="title-container">
          <h2 class="text-center fw-bold">GALERI</h2>
        </div>
        <div class="row mt-4">
          <div class="col-md-12 d-flex justify-content-center">
            <ul class="list-unstyled d-flex galeri-filters">
              <li data-filter="*" class="py-2 px-4 filter-active text-white">ALL</li>
              <li data-filter=".filter-web" class="py-2 px-4">Web</li>
              <li data-filter=".filter-design" class="py-2 px-4">Design</li>
              <li data-filter=".filter-photo" class="py-2 px-4">Photography</li>
            </ul>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-md-12">
            <div class="mansory galeri-container">
              <div class="mansory-sizer"></div>
              <div class="mansory-item m-2 galeri-item filter-web">
                <img src="/assets/img/b1.jpg" alt="" class="img-fluid" />
              </div>
              <div class="mansory-item m-2 galeri-item filter-photo">
                <img src="/assets/img/b2.jpg" alt="" class="img-fluid" />
              </div>
              <div class="mansory-item m-2 galeri-item filter-design">
                <img src="/assets/img/b3.jpg" alt="" class="img-fluid" />
              </div>
              <div class="mansory-item m-2 galeri-item filter-design">
                <img src="/assets/img/b4.jpg" alt="" class="img-fluid" />
              </div>
              <div class="mansory-item m-2 galeri-item filter-photo">
                <img src="/assets/img/b5.jpg" alt="" class="img-fluid" />
              </div>
              <div class="mansory-item m-2 galeri-item filter-web">
                <img src="/assets/img/b6.jpg" alt="" class="img-fluid" />
              </div>
              <div class="mansory-item m-2 galeri-item filter-design">
                <img src="/assets/img/b7.jpg" alt="" class="img-fluid" />
              </div>
              <div class="mansory-item m-2 galeri-item filter-design">
                <img src="/assets/img/b8.jpg" alt="" class="img-fluid" />
              </div>
             
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end Galeri -->



    

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

   <!-- top -->
    <a href="#" class="btn-to-top p-3">
        <i class="fa fa-chevron-up"></i>
    </a>
   <!-- end to top -->

    <script src="assets/vendor/jquery/jquery-3.7.1.min.js"></script>
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/fontawesome/js/all.min.js"></script>
    <script src="assets/vendor/mansory/masonry.pkgd.min.js"></script>
    <script src="assets/vendor/aos/dist/aos.js"></script>
    <script src="assets/vendor/isotope/isotope.pkgd.min.js"></script>
    <script src="assets/js/app.js"></script>
  </body>
</html>