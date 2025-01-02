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

    <title>SD Negeri Sidanegara 02</title>

    <!-- fav icon di tab, nanti diganti sama logo sekolah -->
    <link rel="shortcut icon" href="assets/img/logo.jpeg" type="image/x-icon">
    <!-- fav icon di tab, nanti diganti sama logo sekolah -->

  </head>

  <body>

    <!-- navbar -->

    @include('partials.navbar')

    <!-- end navbar -->

    <!-- breadcumbs -->
     <div class="breadcumbs py-3">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center text-white">
                <h2>Prestasi</h2>
                <ol class="d-flex list-unstyled mb-0">
                    <li>Beranda</li>
                    <li>Prestasi</li>
                </ol>
            </div>
        </div>
     </div>
     <!-- end breadcumbs -->



     <!-- Prestasi -->
     <div class="teams bg-light py-5">
            <div class="container">
                <div class="title-container">
                    <h2 class="text-center fw-bold">Prestasi Terbaru</h2>
                </div>
                <div class="row mt-5">
                  
                  @foreach ($prestasis as $prestasi)
                  
                  <div class="col-md-12" data-aos="fade-right">
                    <div class="card border-0 shadow shadow-sm mb-3">
                    <div class="row g-0">
                      <div class="col-md-4">
                        @if (isset($prestasi->image))
                        <img src="{{asset ('image/prestasi/'. $prestasi->image)}}" width="300" height="200" alt="{{ $prestasi->title }}">
                        @endif
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">{{ $prestasi->title }}</h5>
                          <p class="card-text "><i class="fa-solid fa-calendar-days me-3"></i>{{ $prestasi->date }}</p>
                          <hr>
                          <p class="card-text fs-5"><small class="text-body-secondary">{{ $prestasi->description }}</small></p>
                        </div>
                      </div>
                    </div>
                    </div>
                    </div>
                </div>
                  @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
     <!-- end Prestasi -->



    

    <!-- footer -->
    @include('partials.footer')
    <!-- end footer -->



    <script src="assets/vendor/jquery/jquery-3.7.1.min.js"></script>
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/fontawesome/js/all.min.js"></script>
    <script src="assets/vendor/mansory/masonry.pkgd.min.js"></script>
    <script src="assets/vendor/aos/dist/aos.js"></script>
    <script src="assets/vendor/isotope/isotope.pkgd.min.js"></script>
    <script src="assets/js/app.js"></script>
  </body>
</html>