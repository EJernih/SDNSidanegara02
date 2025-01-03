<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/lte/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/lte/dist/css/adminlte.min.css">
  <!-- Tambahkan link Bootstrap CDN jika belum ada -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Style dan Script EasyMDE -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/easymde/dist/easymde.min.css">
  <script src="https://cdn.jsdelivr.net/npm/easymde/dist/easymde.min.js"></script>
  
  <!-- SweetAlert2 CDN -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

     
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="/lte/dist/img/sd2Logo.jpeg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SDN 02 Cilacap</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/lte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            {{-- disini buat nunjukin siapa yang login. user bisa email bisa juga nama yg udh konek db --}}
          <a href="#" class="d-block">{{ Auth::user()->email; }}</a> 
        </div>
      </div>

      

<!-- Sidebar Menu -->
<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Menu Dashboard -->
    <li class="nav-item">
      <a href="/dashboard" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>Dashboard</p>
      </a>
    </li>

    <!-- Menu Lihat Website -->
    <li class="nav-item">
      <a href="/" target="_blank" class="nav-link">
        <i class="nav-icon fa-solid fa-arrow-up-right-from-square"></i>
        <p>Lihat Website</p>
      </a>
    </li>

    <!-- Menu Halaman Beranda -->
    <li class="nav-item {{ Request::is('sliders*') ? 'menu-open' : 'menu-close' }}">
      <a href="#" class="nav-link {{ Request::is('sliders*') ? 'active' : '' }}">
        <i class="fa-solid fa-house"></i>
        <p>
          Halaman Beranda
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="/sliders" class="nav-link {{ Request::is('sliders') ? 'active' : '' }}">
            <i class="far fa-circle nav-icon"></i>
            <p>Data Sliders</p>
          </a>
        </li>
      </ul>
    </li>

    <!-- Menu Halaman Profil -->
    <li class="nav-item {{ Request::is('sambutans*', 'visimisis*', 'tendiks*', 'sarprasS*', 'prestasis*') ? 'menu-open' : 'menu-close' }}">
      <a href="#" class="nav-link {{ Request::is('sambutans*', 'visimisis*', 'tendiks*', 'sarprasS*', 'prestasis*') ? 'active' : '' }}">
          <i class="fa-solid fa-paperclip"></i>
        <p>
          Halaman Profil
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="/sambutans" class="nav-link {{ Request::is('sambutans') ? 'active' : '' }}">
            <i class="far fa-circle nav-icon"></i>
            <p>Data Sambutan</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/visimisis" class="nav-link {{ Request::is('visimisis') ? 'active' : '' }}">
            <i class="far fa-circle nav-icon"></i>
            <p>Data Visi Misi</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/tendiks" class="nav-link {{ Request::is('tendiks') ? 'active' : '' }}">
            <i class="far fa-circle nav-icon"></i>
            <p>Data Tenaga Pendidik</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/sarprasS" class="nav-link {{ Request::is('sarprasS') ? 'active' : '' }}">
            <i class="far fa-circle nav-icon"></i>
            <p>Data Sarana Prasarana</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/prestasis" class="nav-link {{ Request::is('prestasis') ? 'active' : '' }}">
            <i class="far fa-circle nav-icon"></i>
            <p>Data Prestasi</p>
          </a>
        </li>
      </ul>
    </li>

    <!-- Menu Halaman PPDB -->
    <li class="nav-item {{ Request::is('ppdbs*') ? 'menu-open' : 'menu-close' }}">
      <a href="#" class="nav-link {{ Request::is('ppdbs*') ? 'active' : '' }}">
          <i class="fa-solid fa-briefcase"></i>
        <p>
          Halaman PPDB
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="/ppdbs" class="nav-link {{ Request::is('ppdbs') ? 'active' : '' }}">
            <i class="far fa-circle nav-icon"></i>
            <p>Data PPDB</p>
          </a>
        </li>
      </ul>
    </li>

    <!-- Menu Halaman Galeri -->
    <li class="nav-item {{ Request::is('galeris*', 'filters*') ? 'menu-open' : 'menu-close' }}">
      <a href="#" class="nav-link {{ Request::is('galeris*', 'filters*') ? 'active' : '' }}">
          <i class="fa-solid fa-camera"></i>
        <p>
          Halaman Galeri
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="/galeris" class="nav-link {{ Request::is('galeris') ? 'active' : '' }}">
            <i class="far fa-circle nav-icon"></i>
            <p>Data Galeri</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/filters" class="nav-link {{ Request::is('filters') ? 'active' : '' }}">
            <i class="far fa-circle nav-icon"></i>
            <p>Data Filter</p>
          </a>
        </li>
      </ul>
    </li>

    <!-- Menu Halaman Berita -->
    <li class="nav-item {{ Request::is('beritas*') ? 'menu-open' : 'menu-close' }}">
      <a href="#" class="nav-link {{ Request::is('beritas*') ? 'active' : '' }}">
          <i class="fa-solid fa-pen"></i>
        <p>
          Halaman Berita
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="/beritas" class="nav-link {{ Request::is('beritas') ? 'active' : '' }}">
            <i class="far fa-circle nav-icon"></i>
            <p>Data Berita</p>
          </a>
        </li>
      </ul>
    </li>

    <!-- Menu Halaman Kontak -->
    <li class="nav-item {{ Request::is('kontaks*') ? 'menu-open' : 'menu-close' }}">
      <a href="#" class="nav-link {{ Request::is('kontaks*') ? 'active' : '' }}">
          <i class="fa-solid fa-envelope fa"></i>
        <p>
          Halaman Kontak
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="/kontaks" class="nav-link {{ Request::is('kontaks') ? 'active' : '' }}">
            <i class="far fa-circle nav-icon"></i>
            <p>Data Kontak</p>
          </a>
        </li>
      </ul>
    </li>

    <!-- Menu Akun (Role SuperAdmin) -->
    <li class="nav-item">
      @role('SuperAdmin')
      <a href="/users" class="nav-link {{ Request::is('users') ? 'active' : '' }}">
        <i class="nav-icon fa-solid fa-user"></i>
        <p>Akun</p>
      </a>
      @endrole
    </li>

    <!-- Menu Log Out -->
    <li class="nav-item">
      <a href="/logout" class="nav-link">
        <i class="nav-icon fa-solid fa-right-from-bracket"></i>
        <p>Log out</p>
      </a>
    </li>
  </ul>
</nav>
<!-- /.sidebar-menu -->

    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">@yield('title')</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
        
            

            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">@yield('title')</h5>
              </div>
              <div class="card-body">

                @yield('content')
                
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; {{ date('Y')}} <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="/lte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/lte/dist/js/adminlte.min.js"></script>
<script src="/assets/vendor/fontawesome/js/all.min.js"></script>
</body>
</html>
