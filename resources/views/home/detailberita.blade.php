<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Detail Berita</title>

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
  </head>

  <body>
    <!-- Navbar -->
    @include('partials.navbar')
    <!-- End Navbar -->

    <!-- Breadcrumbs -->
    <div class="breadcrumbs py-3">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center text-white">
          <h2>Detail Berita</h2>
          <ol class="d-flex list-unstyled mb-0">
            <li><a href="/" class="text-white text-decoration-none">Beranda</a></li>
            <li class="ms-2">Berita</li>
          </ol>
        </div>
      </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Detail Berita -->
    <div class="container mt-5">
      @if($berita) <!-- Validasi bahwa $berita tidak null -->
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card shadow-sm border-light">
            <img
              src="{{ $berita->image ? asset('image/berita/' . $berita->image) : asset('assets/images/placeholder.png') }}"
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
      @else
      <!-- Jika data $berita null -->
      <div class="alert alert-danger text-center">
        Berita tidak ditemukan.
      </div>
      @endif
    </div>
    <!-- End Detail Berita -->

    <!-- Footer -->
    @include('partials.footer')
    <!-- End Footer -->

    <!-- Scroll to Top Button -->
    <a href="#" class="btn-to-top p-3">
      <i class="fa fa-chevron-up"></i>
    </a>
    <!-- End Scroll to Top Button -->

    <!-- Scripts -->
    <script src="{{ asset('assets/vendor/jquery/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  </body>
</html>
