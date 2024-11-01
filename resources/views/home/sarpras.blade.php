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

                <div class="row mt-5">
                  @foreach ($sarpras as $sarpra)
                      
                  <div class="col-md-6 mt-4" data-aos="fade-right">
                      <div class="card border-0 shadow shadow-sm ">
                          <div class="card-body testimonial-item p-5">
                              <img src="{{asset('image/sarpras/'. $sarpra->image)}}" alt="{{ $sarpra->name }}" class="img-testimonial float-start me-3">
                              <strong class="d-block">{{ $sarpra->judul }} {{ $sarpra->name }}</strong>
                              <smal class="text-muted">{{ $sarpra->jumlah }}</smal>
                              <p class="fst-italic mt-3 fs-5">
                                  <i class="fa fa-quote-left"></i>
                                  {{ $sarpra->deskripsi }}
                              <i class="fa fa-quote-right"></i></p>
                          </div>
                      </div>
                  </div>
              </div>
                  @endforeach
            </div>
      </div>
     <!-- end sarpras -->



    

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