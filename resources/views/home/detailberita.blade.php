<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/fontawesome/css/all.min.css') }}" />

    <!-- AOS (Animate On Scroll) -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/aos/dist/aos.css') }}" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />

    <title>SDN02CLP</title>
  </head>

  <body>
    <!-- Navbar -->
    @include('partials.navbar')
    <!-- End Navbar -->

    <!-- Breadcrumbs -->
    <div class="breadcrumbs py-3">
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
    <!-- End Breadcrumbs -->

    <!-- Halaman Berita Selengkapnya -->
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card shadow-sm border-light">
            <img
              src="{{ asset('image/berita/' . $berita->image) }}"
              class="card-img-top"
              alt="{{ $berita->title }}"
              style="height: 400px; object-fit: cover;"
            />
            <div class="card-body">
              <h2 class="card-title fw-bold">{{ $berita->title }}</h2>
              <p class="text-muted">{{ $berita->created_at->format('d M Y') }}</p>
              <p class="card-text">{!! Markdown::convertToHtml($berita->description) !!}</p>
              <hr />
            </div>
            <div class="card-footer text-muted d-flex justify-content-between align-items-center">
              <a href="/berita" class="btn btn-primary">Kembali ke Berita</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Halaman Berita Selengkapnya -->

    <!-- Footer -->
    @include('partials.footer')
    <!-- End Footer -->

    <!-- Scroll to Top Button -->
    <a href="#" class="btn-to-top p-3">
      <i class="fa fa-chevron-up"></i>
    </a>
    <!-- End Scroll to Top Button -->

    <!-- jQuery -->
    <script src="{{ asset('assets/vendor/jquery/jquery-3.7.1.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Font Awesome -->
    <script src="{{ asset('assets/vendor/fontawesome/js/all.min.js') }}"></script>
    <!-- Masonry JS -->
    <script src="{{ asset('assets/vendor/masonry/masonry.pkgd.min.js') }}"></script>
    <!-- AOS (Animate On Scroll) JS -->
    <script src="{{ asset('assets/vendor/aos/dist/aos.js') }}"></script>
    <!-- Isotope JS -->
    <script src="{{ asset('assets/vendor/isotope/isotope.pkgd.min.js') }}"></script>
    <!-- Custom JS -->
    <script src="{{ asset('assets/js/app.js') }}"></script>
  </body>
</html>
