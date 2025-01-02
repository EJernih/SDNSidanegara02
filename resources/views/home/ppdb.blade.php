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
                <h2>PPDB</h2>
                <ol class="d-flex list-unstyled mb-0">
                    <li>Beranda</li>
                    <li>PPDB</li>
                </ol>
            </div>
        </div>
     </div>
     <!-- end breadcumbs -->


        <!-- ppdb -->

        <div class="profil mt-5 pb-5">
          <div class="container">
                          @foreach ($ppdbs as $ppdb)
            <div class="title-container">
              <h2 class="text-center fw-bold">{{ $ppdb->title }}</h2>
            </div>

            <div class="row mt-5">
                <div class="col-md-6 d-flex align-items-center" data-aos="fade-right">
                  @if (isset($ppdb->image))
                  <img src="{{asset ('image/ppdb/'. $ppdb->image)}}" class="img-fluid max-height-50" alt="{{ $ppdb->name }}">
                  @endif
              </div>
              <div class="col-md-6" data-aos="fade-left">
                <p>
                  {{ $ppdb->description }}
                </p>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex align-items-start">
                    <i class="fa-solid fa-calendar-days primary me-3"></i>
                    <div class="d-flex flex-column">
                      <div class="d-flex">
                        <span>Tanggal</span>
                        <span class="ms-auto">: {{ $ppdb->start_date }} - {{ $ppdb->end_date }}</span>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item d-flex align-items-start">
                    <i class="fa-solid fa-school primary me-3"></i>
                    <div class="d-flex flex-column">
                      <div class="d-flex">
                        <span>Tempat</span>
                        <span class="ms-auto">: {{ $ppdb->place }}</span>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item d-flex align-items-start">
                    <i class="fa-solid fa-key primary me-3"></i>
                    <div class="d-flex flex-column">
                      <div class="d-flex">
                        <span>Syarat Pendaftaran</span>
                        <span class="ms-auto">:</span>
                      </div>
                    <ol class="ms-3">
                      <li>{{$ppdb->sk_1}}</li>
                      <li>{{ $ppdb->sk_2 }}</li>
                      <li>{{ $ppdb->sk_3 }}</li>
                      <li>{{ $ppdb->sk_4 }}</li>
                    </ol>
                    </div>
                  </li>
                                @endforeach
                  <li class="list-group-item d-flex align-item-start">
                    <div class="d-flex flex-column">

                    </div>
                  </li>
                </ul>
                <td>
                    <!-- Tombol dinamis untuk daftar -->
                    @if ($ppdb->link)
                        <a href="{{ $ppdb->link }}" target="_blank" class="btn btn-primary">Daftar Sekarang</a>
                    @else
                        <span>Link belum tersedia</span>
                    @endif
                </td>
              </div>
            </div>
          </div>
        </div>

        <!-- end ppdb -->






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