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


    <style>
        .container-sarpras {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            gap: 20px;
        }

        .sarpras-item {
            width: calc(50% - 20px);
        }
    </style>
  </head>

  <body>

    <!-- navbar -->

    @include('partials.navbar')

    <!-- end navbar -->

    <!-- breadcumbs -->
     <div class="breadcumbs py-3">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center text-white">
                <h2>Sarana Prasarana</h2>
                <ol class="d-flex list-unstyled mb-0">
                    <li>Beranda</li>
                    <li>Sarana Prasarana</li>
                </ol>
            </div>
        </div>
     </div>
     <!-- end breadcumbs -->



     <!-- sarpras -->
     <div class="teams bg-light py-5">
            <div class="container">
                <div class="title-container">
                    <h2 class="text-center fw-bold">Fasilitas</h2>
                </div>
                <p class="text-center mt-4">Sarana adalah perlengkapan pembelajaran yang dapat dipindah-pindah. Prasarana adalah fasilitas dasar untuk menjalankan fungsi sekolah/madrasah.</p>

                <div class="mt-5 container-sarpras">
                  @foreach ($sarpras as $sarpra)
                  <div class="mt-4 sarpras-item" data-aos="fade-right">
                      <div class="card border-0 shadow">
                          <div class="card-body testimonial-item">
                                @if (isset($sarpra->image))
                                <img src="{{asset ('image/sarpras/'. $sarpra->image)}}" class="img-testimonial float-start me-3" alt="{{ $sarpra->name }}">
                                @endif
                              <strong class="d-block">{{ $sarpra->judul }} {{ $sarpra->name }}</strong>
                              <smal class="text-muted">{{ $sarpra->jumlah }}</smal>
                              <p class="fst-italic mt-3 fs-5">
                                  <i class="fa fa-quote-left"></i>
                                  {{ $sarpra->deskripsi }}
                              <i class="fa fa-quote-right"></i></p>
                          </div>
                      </div>
                  </div>
                  @endforeach
              </div>
            </div>
      </div>
     <!-- end sarpras -->



    

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