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
    <div class="galeri mt-5">
      <div class="container">
        <div class="title-container">
          <h2 class="text-center fw-bold">GALERI</h2>
        </div>
        <div class="row mt-4">
          <div class="col-md-12 d-flex justify-content-center">
            <ul class="list-unstyled d-flex galeri-filters">
              <li data-filter="*" class="py-2 px-4 filter-active text-white">ALL</li>

              @foreach ($filters as $filter)
              <li data-filter=".filter-{{$filter->filter}}" class="py-2 px-4">
                {{ucfirst($filter->filter)}}
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
                  
              <div class="mansory-item m-2 galeri-item filter-{{ $galeri->title }}">
                <img src="{{ asset('image/galeri/'. $galeri->image) }}" alt="{{$galeri->title}}" class="img-fluid" />
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