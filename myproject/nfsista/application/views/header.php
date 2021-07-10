<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Simple Sidebar - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url()?>public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url()?>public/css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">SISTA-NF</div>
      <div class="list-group list-group-flush">
        <a href="<?php echo base_url('index.php/dashboard/')?>" class="list-group-item list-group-item-action bg-light">Dashboard</a>
        <a href="<?php echo base_url('index.php/seminar_ta/')?>" class="list-group-item list-group-item-action bg-light">Jadwal Seminar</a>
        <a href="<?php echo base_url('index.php/peserta_seminar/')?>" class="list-group-item list-group-item-action bg-light">Peserta Seminar</a>
        <a href="<?php echo base_url('index.php/dosen/')?>" class="list-group-item list-group-item-action bg-light">Dosen</a>
        <a href="<?php echo base_url('index.php/detail_penilaian/')?>" class="list-group-item list-group-item-action bg-light">Penilaian</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a href="<?php echo base_url('index.php/kategori_seminar/')?>" class="nav-link">Kategori Seminar</a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('index.php/penilaian/')?>" class="nav-link">Tipe Penilaian</a>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid">