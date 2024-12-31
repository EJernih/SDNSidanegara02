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
                <h2>Visi Misi</h2>
                <ol class="d-flex list-unstyled mb-0">
                    <li>Beranda</li>
                    <li>Visi Misi</li>
                </ol>
            </div>
        </div>
     </div>
     <!-- end breadcumbs -->

     <!-- Visi Misi-->
     <div class="Visi Misi bg-light py-5">
            <div class="container">
<!-- ini visi -->
<div class="title-container">
    <h2 class="text-center fw-bold">Visi</h2>
</div>

<div class="text-center mt-4 d-flex justify-content-center">
    <ol class="text-start">
        @foreach ($visimisis as $visimisi)
            @if($visimisi->visi)
                <!-- Menampilkan visi dalam bentuk list jika tidak null -->
                <li>{{ $visimisi->visi }}</li>
            @else
                <!-- Jika visi null, tidak menampilkan angka atau list -->
                <li style="display: none;"></li>
            @endif
        @endforeach
    </ol>
</div>
<!-- end visi -->


              <!-- ini misi -->
                <div class="title-container">
                    <h2 class="text-center fw-bold">Misi</h2>
                </div>
          
                <div class="text-center mt-4 d-flex justify-content-center">
                  <ol class="text-start">
                    @foreach ($visimisis as $visimisi)
                    <li>{{ $visimisi->misi }}</li>
                    @endforeach
                  </ol>
                </div>
              <!-- end misi -->
            </div>
      </div>
     <!-- end Visi Misi -->



    

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