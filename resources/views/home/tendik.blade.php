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
                <h2>Tenaga Pendidik</h2>
                <ol class="d-flex list-unstyled mb-0">
                    <li>Beranda</li>
                    <li>Tenaga Pendidik</li>
                </ol>
            </div>
        </div>
     </div>
     <!-- end breadcumbs -->



     <!-- tendik -->
     <div class="teams bg-light py-5">
            <div class="container">
                <div class="title-container">
                    <h2 class="text-center fw-bold">Guru dan Tenaga Pendidik</h2>
                </div>

                <div class="row">
                  @foreach ($tendiks as $tendik)
                      
                  <div class="col-md-3 mb-4" data-aos="fade-up"> 
                      <div class="card" style="width: 18rem;">
                        @if (isset($tendik->image))
                        <img src="{{asset ('image/tendik/'. $tendik->image)}}" class="card-img-top" alt="{{ $tendik->nama }}">
                        @endif
                  <div class="card-body text-center">
                      <h5 class="card-title fw-bold">{{ $tendik->nama }}</h5>
                      <p class="card-text text-mute">{{ $tendik->pelajaran }}</p>
                  </div>
                  </div>
                  </div>

                  @endforeach
                    </div>
                    </div>
                    </div>
                </div>
            </div>
      </div>
     <!-- end tendik -->



    

    <!-- footer -->
    @include('partials.footer')
    <!-- end footer -->

   <!-- top -->
    <a href="#" class="btn-to-top rounded-circle p-3">
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