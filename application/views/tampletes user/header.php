<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $judul;?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!--my css-->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/mycss/style.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
  <a class="navbar-brand">
      <img src="<?php echo base_url();?>assets/dist/img/tut.png" alt="sekolah Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8" width="40" height="40">
      <span class="brand-text font-weight-light">Data Sekolah</span>
    </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav ml-auto" >
      <a class="nav-item nav-link" href="<?=base_url(); ?>Homeuser">Dashboard<span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="<?=base_url(); ?>user">Data-siswa</a>
      <a class="nav-item nav-link" href="<?=base_url(); ?>userguru">Data-guru</a>
      <a class="nav-item nav-link active" href="<?=base_url(); ?>Auth/logout">LOG-OUT</a>
    </div>
  </div>
</nav>
<!--akhir navbar-->
