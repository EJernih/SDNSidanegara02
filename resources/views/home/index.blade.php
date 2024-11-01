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

    <!-- fav icon di tab, nanti diganti sama logo sekolah -->
    <link rel="shortcut icon" href="assets/img/Logo_Kemendikbud.svg" type="image/x-icon">
    <!-- fav icon di tab, nanti diganti sama logo sekolah -->

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">


  </head>

  <body>

    <!-- navbar -->

    @include('partials.navbar')

    <!-- end navbar -->

   <!-- carousel -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        @foreach($sliders as $key => $slider)
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}" aria-current="true" aria-label="Slide {{ $key + 1 }}"></button>
        @endforeach
    </div>
    <div class="carousel-inner">
        @foreach($sliders as $key => $slider)
        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
            <img src="{{ asset('image/slider/' . $slider->image) }}" class="d-block w-100 carousel-img" alt="Slide {{ $key + 1 }}">
            <div class="carousel-caption d-none d-md-block">
                <h5>{{ $slider->title }}</h5>
                <p>{{ $slider->description }}</p>
            </div>
        </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- end carousel -->

   <!-- Section Pengumuman dan Sambutan Kepala Sekolah -->
<section id="pengumuman-dan-sambutan" class="py-25">
  <div class="container mt-5">
    <div class="row">
      
      <!-- Box Pengumuman -->
      <div class="col-md-5 mb-4 mb-md-0"> <!-- Add margin-bottom for small screens -->
        <div class="card shadow border-0 pengumuman">
          <div class="card-header text-white">
            <h4 class="mb-0">Pengumuman</h4>
          </div>
          <div class="card-body">
            <ul class="list-group list-group-flush">
              <li class="list-group-item fw-bold">
                <a href="#">PENILAIAN TENGAH SEMESTER GANJIL T.P. 2024/2025</a>
              </li>
              <li class="list-group-item fw-bold">
                <a href="#">REV. JADWAL KBM SEMESTER GANJIL TP. 2024/2025</a>
              </li>
              <li class="list-group-item fw-bold">
                <a href="#">PENGUMUMAN PEMBAGIAN KELAS X/FASE E</a>
              </li>
              <li class="list-group-item fw-bold">
                <a href="#">KALENDER PENDIDIKAN SMA NEGERI 1 YOGYAKARTA</a>
              </li>
              <li class="list-group-item fw-bold">
                <a href="#">PENGUMUMAN LOLOS SELEKSI KELAS CAMBRIDGE</a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Sambutan Kepala Sekolah -->
      <div class="col-md-7 sambutan-container"> <!-- Add custom class sambutan-container -->
        <div class="row">
          <div class="col-md-12">
            <img src="assets/img/g11.jpg" class="gambar-sambutan mb-4" alt="Thumb">
            <h4>Sambutan Kepala Sekolah</h4>
            <p><em>Bismillahirrohmanirrahim</em></p>
            <p><em>Assalamu‘alaikum Wr. Wb.</em></p>
            <p>
              Segala puji hanya untuk Allah SWT dan shalawat serta salam semoga tercurah atas nabi Muhammad SAW, begitu pula atas keluarga, para sahabat, dan para pengikutnya. Alhamdulillahi robbil alamin, kami panjatkan kehadirat Tuhan Allah SWT...
              <a href="tentang_sekolah">Read More <i class="fa-solid fa-angles-right"></i></a>
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- End Section Pengumuman dan Sambutan Kepala Sekolah -->



   

    <!-- Berita -->
    <div class="Berita mt-5 bg-light py-5">
      <div class="container">
        <div class="title-container text-center">
          <h2 class="fw-bold">Berita</h2>
        </div>
        
        <div class="row mt-5">
          <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
              <div class="card">
                <img src="assets/img/b2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <a href="berita.html">Read More <i class="fa-solid fa-greater-than"></i></a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="assets/img/b5.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <a href="berita.html">Read More <i class="fa-solid fa-greater-than"></i></a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="assets/img/b7.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                  <a href="berita.html">Read More <i class="fa-solid fa-greater-than"></i></a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="assets/img/b1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <a href="berita.html">Read More <i class="fa-solid fa-greater-than"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end Berita -->


    <!-- Ekskul -->
    <div id="ekskul" class="Ekskul mt-5 bg-light py-5">
      <div class="container">
        <div class="title-container text-center">
          <h2 class="fw-bold">Ekstrakulikuler</h2>
        </div>
        <p class="text-center mt-4">
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero atque
          et, eaque itaque officiis magni aperiam, nostrum quidem voluptate ab
          facilis beatae sapiente quo ad aut, quasi minima perferendis
          reprehenderit!
        </p>
        <div class="row mt-5">
          <div class="col-md-4">
            <div class="card border-0 text-center p-4 mt-3" data-aos="zoom-in">
              <div class="card-body">
                <div class="card-icon">
                  <i class="fa-solid fa-book-quran fa-3x"></i>
                </div>
                <div class="card-title fw-bolder mt-4">BTQ</div>
                <p class="card-description mt-3">
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                  Placeat nihil facere eligendi quam quo repellendus.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card border-0 text-center p-4 mt-3" data-aos="zoom-in">
              <div class="card-body">
                <div class="card-icon">
                  <i class="fa-solid fa-golf-ball-tee fa-3x"></i>
                </div>
                <div class="card-title fw-bolder mt-4">Bulutangkis</div>
                <p class="card-description mt-3">
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                  Placeat nihil facere eligendi quam quo repellendus.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card border-0 text-center p-4 mt-3" data-aos="zoom-in">
              <div class="card-body">
                <div class="card-icon">
                  <i class="fa-solid fa-drum fa-3x"></i>
                </div>
                <div class="card-title fw-bolder mt-4">
                  <a href="ekskul.html" style="text-decoration: none; color: inherit;">Drumband</a>
                </div>
                <p class="card-description mt-3">
                  Pembimbing: Dyah Surya Nur Wibi
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card border-0 text-center p-4 mt-3" data-aos="zoom-in">
              <div class="card-body">
                <div class="card-icon">
                  <i class="fa-solid fa-campground fa-3x"></i>
                </div>
                <div class="card-title fw-bolder mt-4">Pramuka</div>
                <p class="card-description mt-3">
                  Pembimbing: Dyah Surya Nur Wibi
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card border-0 text-center p-4 mt-3" data-aos="zoom-in">
              <div class="card-body">
                <div class="card-icon">
        <i class="fa-solid fa-music fa-3x"></i>
                </div>
                <div class="card-title fw-bolder mt-4">Seni Vokal</div>
                <p class="card-description mt-3">
                  Pembimbing: Dyah Surya Nur Wibi
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card border-0 text-center p-4 mt-3" data-aos="zoom-in">
              <div class="card-body">
                <div class="card-icon">
                  <i class="fa-solid fa-palette fa-3x"></i>
                </div>
                <div class="card-title fw-bolder mt-4">Seni Lukis</div>
                <p class="card-description mt-3">
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                  Placeat nihil facere eligendi quam quo repellendus.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card border-0 text-center p-4 mt-3" data-aos="zoom-in">
              <div class="card-body">
                <div class="card-icon">
                  <i class="fa-solid fa-table-tennis-paddle-ball fa-3x"></i>
                </div>
                <div class="card-title fw-bolder mt-4">Tenis</div>
                <p class="card-description mt-3">
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                  Placeat nihil facere eligendi quam quo repellendus.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end Ekskul -->

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

    <!-- Clients -->
    <div class="clients mt-5">
      <div class="container">
        <div class="title-container">
          <h2 class="text-center fw-bold">CLIENTS</h2>
        </div>
        <div class="row mt-4">
          <div class="col-md-3 pt-4 text-center" data-aos="zoom-in">
            <img
              src="assets/img/Logo_Kemendikbud.svg"
              class="img-fluid brand-image"
              alt=""
            />
          </div>
          <div class="col-md-3 pt-4 text-center" data-aos="zoom-in">
            <img
              src="assets/img/Logo_Komisi_Perlindungan_Anak_Indonesia.png"
              class="img-fluid brand-image"
              alt=""
            />
          </div>
          <div class="col-md-3 pt-4 text-center" data-aos="zoom-in">
            <img
              src="assets/img/Logo_komnas_perlindungan_anak.png"
              class="img-fluid brand-image"
              alt=""
            />
          </div>
          <div class="col-md-3 pt-4 text-center" data-aos="zoom-in">
            <img
              src="assets/img/logo-header-ditpsd.png"
              class="img-fluid brand-image"
              alt=""
            />
          </div>
        </div>
      </div>
    </div>
    <!-- end Clients -->

    <!-- footer -->
    @include('partials.footer')
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
