@php
    use Illuminate\Support\Str;
@endphp
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
                <h2>Berita</h2>
                <ol class="d-flex list-unstyled mb-0">
                    <li>Beranda</li>
                    <li>Berita</li>
                </ol>
            </div>
        </div>
     </div>
     <!-- end breadcumbs -->


        <!-- Berita -->
<div class="Berita mt-2 bg-light py-4 pb-5">
    <div class="container">
        <div class="title-container text-center">
            <h2 class="fw-bold">Berita</h2>
        </div>
        
        <div class="row mt-5 row-cols-1 row-cols-md-3">
            @foreach ($beritas as $berita)
            <div class="col">
                <div class="card">
                    @if (isset($berita->image))
                    <img src="{{asset ('image/berita/'. $berita->image)}}" class="card-img-top" alt="{{ $berita->title }}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $berita->title }}</h5>
                        <p class="card-text">{!! Markdown::convertToHtml(Str::limit($berita->description, 100)) !!}</p>
                        <a href="/detailberita/{{ $berita->id }}">Read More <i class="fa-solid fa-greater-than"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- end Berita -->




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