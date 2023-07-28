<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Aplikasi Manajemen Universitas</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url('skydash/vendors/feather/feather.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('skydash/vendors/ti-icons/css/themify-icons.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('skydash/vendors/css/vendor.bundle.base.css'); ?>">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="<?php echo base_url('skydash/vendors/datatables.net-bs4/dataTables.bootstrap4.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('skydash/vendors/mdi/css/materialdesignicons.min.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('skydash/js/select.dataTables.min.css'); ?>">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url('skydash/css/vertical-layout-light/style.css'); ?>">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url('skydash/images/logo.ico'); ?>" />
  <!-- global styling -->
  <!-- <style>
    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }

    table,
    th,
    td {
      border: 1px solid #ddd;
    }

    th,
    td {
      text-align: left;
      padding: 8px;
    }

    th {
      background-color: #f2f2f2;
    }
  </style> -->
</head>
<div class="container-scroller">
  <!-- partial:partials/_navbar.html -->
  <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center pl-4 navbar-brand-wrapper d-flex align-items-center justify-content-center">
      <a style="color: black;" class="navbar-brand brand-logo mr-5 judul" href="<?php echo base_url("./index.php"); ?>"><img src="<?php echo base_url('skydash/images/politeknik-merdeka.png') ?>" class="mr-2" alt="logo">Politeknik Merdeka</a>
      <a class="navbar-brand brand-logo-mini" href="<?php echo base_url("./index.php"); ?>"><img src="<?php echo base_url('skydash/images/politeknik-merdeka.png') ?>" alt="logo"></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
      <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="icon-menu"></span>
      </button>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="icon-menu"></span>
      </button>
    </div>
  </nav>
  <!-- partial -->
  <div class="container-fluid page-body-wrapper">
