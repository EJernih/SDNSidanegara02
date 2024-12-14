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
                <h2>Kontak</h2>
                <ol class="d-flex list-unstyled mb-0">
                    <li>Beranda</li>
                    <li>Kontak</li>
                </ol>
            </div>
        </div>
     </div>
     <!-- end breadcumbs -->


     <!-- kontak -->
      <div class="kontak mb-5">
        <div class="maps">

          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d494.2068857319077!2d109.01405690049492!3d-7.7201063496835935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e651296921182f7%3A0xa6f9bc5b83c53588!2sSD%20Negeri%20Sidanegara%2002!5e0!3m2!1sid!2sid!4v1730296521762!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          
  </div>



<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow shadow-sm">
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            @foreach ($kontaks as $kontak)
                                <div class="col-md-4">
                                    <i class="fa fa-map-marker-alt fa-2x primary float-start me-4"></i>
                                    <h4 class="fw-bolder">Lokasi</h4>
                                    <!-- Alamat link ke Google Maps -->
                                    <p class="ms-5">
                                        <a href="https://www.google.com/maps?q={{ urlencode($kontak->address) }}" target="_blank" class="text-decoration-none">
                                            {{ $kontak->address }}
                                        </a>
                                    </p>
                                </div> 
                                <div class="col-md-4">
                                    <i class="fa fa-envelope fa-2x primary float-start me-4"></i>
                                    <h4 class="fw-bolder">Email</h4>
                                    <p class="ms-5">
                                        <a href="mailto:{{ $kontak->email }}" class="text-decoration-none">{{ $kontak->email }}</a>
                                    </p>
                                </div> 
                                <div class="col-md-4">
                                    <i class="fa fa-phone fa-2x primary float-start me-4"></i>
                                    <h4 class="fw-bolder">Telepon</h4>
                                    <p class="ms-5">
                                        <a href="tel:{{ $kontak->phone }}" class="text-decoration-none">{{ $kontak->phone }}</a>
                                    </p>
                                </div> 
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

      </div>
     <!-- end kontak -->


 



    

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