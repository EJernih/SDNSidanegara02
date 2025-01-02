<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>SD Negeri Sidanegara 02</title>

    <!-- fav icon di tab, nanti diganti sama logo sekolah -->
    <link rel="shortcut icon" href="{{ asset('assets/img/logo.jpeg')}}" type="image/x-icon">
    <!-- fav icon di tab, nanti diganti sama logo sekolah -->


    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />

    <!-- font awesome -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/fontawesome/css/all.min.css')}}" />

    <!-- aos -->
     <link rel="stylesheet" href="{{ asset('assets/vendor/aos/dist/aos.css')}}">


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
    <div class="container mt-5 pb-5">
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

    <!-- footer -->
    @include('partials.footer')
    <!-- end footer -->



    <script src="{('assets/vendor/jquery/jquery-3.7.1.min.js')}"></script>
    <script src="{('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}"></script>
    <script src="{('assets/vendor/fontawesome/js/all.min.js')}"></script>
    <script src="{('assets/vendor/mansory/masonry.pkgd.min.js')}"></script>
    <script src="{('assets/vendor/aos/dist/aos.js')}"></script>
    <script src="{('assets/vendor/isotope/isotope.pkgd.min.js')}"></script>
    <script src="{('assets/js/app.js')}"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

  </body>
</html>