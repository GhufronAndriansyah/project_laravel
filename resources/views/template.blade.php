<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">

  <meta name="author" content="">

  <title>Meja Ghufron Andriansyah</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
        </div>
        <div class="sidebar-brand-text mx-3">Selamat Datang {{ Session::get('username')}}</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="{{ URL::asset('/index') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>HOME</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>
      <!-- Nav Item - Tables -->
      <?php if(Session::get('username')=="admin"){?>
      <li class="nav-item">
        <a class="nav-link" href="{{ URL::asset('/kontak') }}">
          <i class="fas fa-fw fa-table"></i>
          <span>Data Kontak</span></a>
      </li>
      <?php } ?>
      <li class="nav-item">
        <a class="nav-link" href="{{ URL::asset('/CleaningService') }}">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ URL::asset('kontak/create') }}">
          <i class="fas fa-fw fa-table"></i>
          <span>Daftar Kontak</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ URL::asset('/barang') }}">
          <i class="fas fa-fw fa-table"></i>
          <span>Data Barang</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ URL::asset('/beli') }}">
          <i class="fas fa-fw fa-table"></i>
          <span>Data Pembelian</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ URL::asset('/jual') }}">
          <i class="fas fa-fw fa-table"></i>
          <span>Data Penjualan</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/logout')}}">
        <i class="material-icons">input</i>
          <span>Sign Out</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
        @yield('content')
        <!-- @yield('tab') -->

      </div>

</html>
