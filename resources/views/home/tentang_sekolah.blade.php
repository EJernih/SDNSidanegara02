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
                <h2>Profil</h2>
                <ol class="d-flex list-unstyled mb-0">
                    <li>Beranda</li>
                    <li>Profil</li>
                </ol>
            </div>
        </div>
     </div>
     <!-- end breadcumbs -->

     <!-- kata sambutan -->
      <div class="katasambut bg-light py-5">
        <div class="container">
          <div class="title-container">
            <h2 class="text-center fw-bold">Kata Sambutan</h2>
          </div>
          <div class="text-center mt-4">

            @foreach ($sambutans as $sambutan)

            <div class="col-md-12 text-center">
                @if (isset($sambutan->image))
                <img src="{{asset ('image/sambutan/'. $sambutan->image)}}" class="gambar-sambutan img-fluid" alt="">
                @endif
            </div>
            <p><em>Bismillahirrohmanirrahim</em></p>
            <p><em>Assalamu‘alaikum Wr Wb</em></p>
            
            <p class="text-center" style="word-wrap: break-word; white-space: normal;">
                {{ $sambutan->description }}
              </p>
              @endforeach
          </div>
        </div>
      </div>
     <!-- end kata sambutan -->


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