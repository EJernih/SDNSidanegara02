<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- bootsstrap css -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    />



    <!-- font awesome -->
    <link rel="stylesheet" href="assets/vendor/fontawesome/css/all.min.css" />

    <!-- aos -->
     <link rel="stylesheet" href="assets/vendor/aos/dist/aos.css">

    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />


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
                <h2>Berita</h2>
                <ol class="d-flex list-unstyled mb-0">
                    <li>Beranda</li>
                    <li>Berita</li>
                </ol>
            </div>
        </div>
     </div>
     <!-- end breadcumbs -->
<!-- Halaman Berita Selengkapnya -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card shadow-sm border-light">
                <img src="{{ asset('image/berita/' . $berita->image) }}" class="card-img-top" alt="{{ $berita->title }}" style="height: 400px; object-fit: cover;">
                <div class="card-body">
                    <h2 class="card-title fw-bold">{{ $berita->title }}</h2>
                    <p class="text-muted">{{ $berita->created_at->format('d M Y') }}</p>
                    <p class="card-text">{{ $berita->description }}</p>
                    <hr>
                    <div class="content">
                        {!! $berita->content !!} <!-- Menampilkan konten lengkap -->
                    </div>
                </div>
                <div class="card-footer text-muted d-flex justify-content-between align-items-center">
                    <a href="/berita" class="btn btn-primary">Kembali ke Berita</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end Halaman Berita Selengkapnya -->
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