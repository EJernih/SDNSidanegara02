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

    <!-- lightox2 -->
      <link rel="stylesheet" href="assets/vendor/lightbox2/dist/css/lightbox.min.css">


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
                <h2>Galeri</h2>
                <ol class="d-flex list-unstyled mb-0">
                    <li>Beranda</li>
                    <li>Galeri</li>
                </ol>
            </div>
        </div>
     </div>
     <!-- end breadcumbs -->



    <!-- Galeri -->
    <div class="galeri mt-5 pb-5">
      <div class="container">
        <div class="title-container">
          <h2 class="text-center fw-bold">GALERI</h2>
        </div>
        <div class="row mt-4">
          <div class="col-md-12 d-flex justify-content-center">
            <ul class="list-unstyled d-flex galeri-filters">
              <li data-filter="*" class="py-2 px-4 filter-active text-white">ALL</li>

              @foreach ($filters as $filter)
              <li data-filter=".filter-{{$filter->item}}" class="py-2 px-4">
                {{ucfirst(\App\Models\Filter::find($filter->item)->filter)}}
              </li>
              @endforeach
            </ul>
          </div>
        </div>

        <div class="row mt-5">
          <div class="col-md-12">
            <div class="mansory galeri-container">
              <div class="mansory-sizer"></div>
              @foreach ($galeris as $galeri)
                  
            <div class="mansory-item m-2 galeri-item filter-{{ $galeri->filter_id }}">
                @if (isset($galeri->image))
            <a href="{{asset ('image/galeri/'. $galeri->image)}}" data-lightbox="roadtrip" data-title="{{ $galeri->title }}">
                <img src="{{asset ('image/galeri/'. $galeri->image)}}" class="img-fluid" alt="{{$galeri->title}}">
            </a>
                @endif
            </div>
              @endforeach
             
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end Galeri -->



    

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
    <script src="assets/vendor/lightbox2/dist/js/lightbox.min.js"></script>
  </body>
</html>