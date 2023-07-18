<!-- <!DOCTYPE html>
<html>
<head>
    <title>Print Ijazah</title>
    <style>
        @media print {
          @page {
            size: legal portrait;
            margin: 1cm;
          }
          
          body {
            font-family: 'Bookman Old Style', serif;
            font-size: 11pt;
            margin: 0;
            padding: 0;
          }

          h1 {
            font-size: 26pt;
          }

          h2 {
            font-family: 'Calibri', sans-serif;
            font-size: 11pt;
          }

          .date {
            font-family: 'Bookman Old Style', serif;
            font-size: 11pt;
          }
        }

    </style>
</head>
<body>
    <h2>Ijazah Details</h2>
    <p><strong>Taruna:</strong> <?php echo $ijazah->Taruna; ?></p>
    <p><strong>Program Studi:</strong> <?php echo $ijazah->Program_Studi; ?></p>
    <p><strong>Tanggal Ijazah:</strong> <?php echo $ijazah->Tanggal_Ijazah; ?></p>
    <p><strong>Tanggal Pengesahan:</strong> <?php echo $ijazah->Tanggal_Pengesahan; ?></p>
    <p><strong>Gelar Akademik:</strong> <?php echo $ijazah->Gelar_Akademik; ?></p>
    <p><strong>Nomor SK:</strong> <?php echo $ijazah->Nomor_SK; ?></p>
    <p><strong>Wakil Direktur:</strong> <?php echo $ijazah->Wakil_Direktur; ?></p>
    <p><strong>Direktur:</strong> <?php echo $ijazah->Direktur; ?></p>
    <p><strong>Nomor Ijazah:</strong> <?php echo $ijazah->Nomor_Ijazah; ?></p>
    <p><strong>Nomor Seri:</strong> <?php echo $ijazah->Nomor_Seri; ?></p>
    <p><strong>Tanggal Yudisium:</strong> <?php echo $ijazah->Tanggal_Yudisium; ?></p>
    <p><strong>Judul KKW:</strong> <?php echo $ijazah->Judul_KKW; ?></p>

    <script>
        window.onload = function() {
            window.print();
        };
    </script>
</body>
</html>
 -->

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Print Ijazah</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url('skydash/vendors/feather/feather.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('skydash/vendors/ti-icons/css/themify-icons.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('skydash/vendors/css/vendor.bundle.base.css'); ?>">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="<?php echo base_url('skydash/vendors/datatables.net-bs4/dataTables.bootstrap4.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('skydash/vendors/ti-icons/css/themify-icons.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('skydash/js/select.dataTables.min.css'); ?>">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url('skydash/css/vertical-layout-light/style.css'); ?>">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url('skydash/images/favicon.png'); ?>" />
  <!-- global styling -->
  <style>
    @media print {
      @page {
        size: legal landscape;
        margin: 1cm;
      }

      body {
        margin: 0;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #1F1F1F;
        text-align: left;
        background-color: #fff;
      }

      .container-scroller {
        overflow: hidden;
      }

      .container,
      .container-fluid,
      .container-sm,
      .container-md,
      .container-lg,
      .container-xl {
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
      }

      .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid #e3e3e3;
        border-radius: 20px;
      }

      .card>hr {
        margin-right: 0;
        margin-left: 0;
      }

      .card>.list-group {
        border-top: inherit;
        border-bottom: inherit;
      }

      .card>.list-group:first-child {
        border-top-width: 0;
        border-top-left-radius: calc(0.25rem - 1px);
        border-top-right-radius: calc(0.25rem - 1px);
      }

      .card>.list-group:last-child {
        border-bottom-width: 0;
        border-bottom-right-radius: calc(0.25rem - 1px);
        border-bottom-left-radius: calc(0.25rem - 1px);
      }

      .card>.card-header+.list-group,
      .card>.list-group+.card-footer {
        border-top: 0;
      }

      .card-body {
        flex: 1 1 auto;
        min-height: 1px;
        padding: 1.25rem;
      }

      .card-title {
        margin-bottom: 0.75rem;
      }

      .card-subtitle {
        margin-top: -0.375rem;
        margin-bottom: 0;
      }

      .card-text:last-child {
        margin-bottom: 0;
      }

      .card-link:hover {
        text-decoration: none;
      }

      .card-link+.card-link {
        margin-left: 1.25rem;
      }

      .card-header {
        padding: 0.75rem 1.25rem;
        margin-bottom: 0;
        background-color: rgba(0, 0, 0, 0.03);
        border-bottom: 1px solid #e3e3e3;
      }

      .card-header:first-child {
        border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0;
      }

      .card-footer {
        padding: 0.75rem 1.25rem;
        background-color: rgba(0, 0, 0, 0.03);
        border-top: 1px solid #e3e3e3;
      }

      .card-footer:last-child {
        border-radius: 0 0 calc(0.25rem - 1px) calc(0.25rem - 1px);
      }

      .card-header-tabs {
        margin-right: -0.625rem;
        margin-bottom: -0.75rem;
        margin-left: -0.625rem;
        border-bottom: 0;
      }

      .card-header-pills {
        margin-right: -0.625rem;
        margin-left: -0.625rem;
      }

      .card-img-overlay {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        padding: 1.25rem;
        border-radius: calc(0.25rem - 1px);
      }

      .card-img,
      .card-img-top,
      .card-img-bottom {
        flex-shrink: 0;
        width: 100%;
      }

      .card-img,
      .card-img-top {
        border-top-left-radius: calc(0.25rem - 1px);
        border-top-right-radius: calc(0.25rem - 1px);
      }

      .card-img,
      .card-img-bottom {
        border-bottom-right-radius: calc(0.25rem - 1px);
        border-bottom-left-radius: calc(0.25rem - 1px);
      }

      .card-deck .card {
        margin-bottom: 15px;
      }

      .page-body-wrapper {
        min-height: calc(100vh - 60px);
        display: -webkit-flex;
        display: flex;
        -webkit-flex-direction: row;
        flex-direction: row;
        padding-left: 0;
        padding-right: 0;
        padding-top: 60px;
      }

      .page-body-wrapper.full-page-wrapper {
        width: 100%;
        min-height: 100vh;
        padding-top: 0;
      }

      .main-panel {
        transition: width 0.25s ease, margin 0.25s ease;
        width: calc(100% - 235px);
        min-height: calc(100vh - 60px);
        display: -webkit-flex;
        display: flex;
        -webkit-flex-direction: column;
        flex-direction: column;
      }

      /* Utilities */
      .grid-margin {
        margin-bottom: 2.5rem;
      }

      .stretch-card {
        display: -webkit-flex;
        display: flex;
        -webkit-align-items: stretch;
        align-items: stretch;
        -webkit-justify-content: stretch;
        justify-content: stretch;
      }

      .stretch-card>.card {
        width: 100%;
        min-width: 100%;
      }

      .content-wrapper {
        background: #F5F7FF;
        padding: 2.375rem 2.375rem;
        width: 100%;
        -webkit-flex-grow: 1;
        flex-grow: 1;
      }

      .font-weight-bold {
        font-weight: 700 !important;
      }

      .text-primary,
      .list-wrapper .completed .remove {
        color: #4B49AC !important;
      }

      a.text-primary:hover,
      .list-wrapper .completed a.remove:hover,
      a.text-primary:focus,
      .list-wrapper .completed a.remove:focus {
        color: #343276 !important;
      }

      @media (min-width: 576px) {

        .container,
        .container-sm {
          max-width: 540px;
        }
      }

      @media (min-width: 768px) {

        .container,
        .container-sm,
        .container-md {
          max-width: 720px;
        }
      }

      @media (min-width: 992px) {

        .container,
        .container-sm,
        .container-md,
        .container-lg {
          max-width: 960px;
        }
      }

      @media (min-width: 1200px) {

        .container,
        .container-sm,
        .container-md,
        .container-lg,
        .container-xl {
          max-width: 1140px;
        }
      }

      .row {
        display: flex;
        flex-wrap: wrap;
        margin-right: -15px;
        margin-left: -15px;
      }

      .no-gutters {
        margin-right: 0;
        margin-left: 0;
      }

      .no-gutters>.col,
      .no-gutters>[class*="col-"] {
        padding-right: 0;
        padding-left: 0;
      }

      .col-1,
      .col-2,
      .col-3,
      .col-4,
      .col-5,
      .col-6,
      .lightGallery .image-tile,
      .col-7,
      .col-8,
      .col-9,
      .col-10,
      .col-11,
      .col-12,
      .col,
      .col-auto,
      .col-sm-1,
      .col-sm-2,
      .col-sm-3,
      .col-sm-4,
      .col-sm-5,
      .col-sm-6,
      .col-sm-7,
      .col-sm-8,
      .col-sm-9,
      .col-sm-10,
      .col-sm-11,
      .col-sm-12,
      .col-sm,
      .col-sm-auto,
      .col-md-1,
      .col-md-2,
      .col-md-3,
      .col-md-4,
      .col-md-5,
      .col-md-6,
      .col-md-7,
      .col-md-8,
      .col-md-9,
      .col-md-10,
      .col-md-11,
      .col-md-12,
      .col-md,
      .col-md-auto,
      .col-lg-1,
      .col-lg-2,
      .col-lg-3,
      .col-lg-4,
      .col-lg-5,
      .col-lg-6,
      .col-lg-7,
      .col-lg-8,
      .col-lg-9,
      .col-lg-10,
      .col-lg-11,
      .col-lg-12,
      .col-lg,
      .col-lg-auto,
      .col-xl-1,
      .col-xl-2,
      .col-xl-3,
      .col-xl-4,
      .col-xl-5,
      .col-xl-6,
      .col-xl-7,
      .col-xl-8,
      .col-xl-9,
      .col-xl-10,
      .col-xl-11,
      .col-xl-12,
      .col-xl,
      .col-xl-auto {
        position: relative;
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
      }

      .col {
        flex-basis: 0;
        flex-grow: 1;
        max-width: 100%;
      }

      .row-cols-1>* {
        flex: 0 0 100%;
        max-width: 100%;
      }

      .row-cols-2>* {
        flex: 0 0 50%;
        max-width: 50%;
      }

      .row-cols-3>* {
        flex: 0 0 33.33333%;
        max-width: 33.33333%;
      }

      .row-cols-4>* {
        flex: 0 0 25%;
        max-width: 25%;
      }

      .row-cols-5>* {
        flex: 0 0 20%;
        max-width: 20%;
      }

      .row-cols-6>* {
        flex: 0 0 16.66667%;
        max-width: 16.66667%;
      }

      .col-auto {
        flex: 0 0 auto;
        width: auto;
        max-width: 100%;
      }

      .col-1 {
        flex: 0 0 8.33333%;
        max-width: 8.33333%;
      }

      .col-2 {
        flex: 0 0 16.66667%;
        max-width: 16.66667%;
      }

      .col-3 {
        flex: 0 0 25%;
        max-width: 25%;
      }

      .col-4 {
        flex: 0 0 33.33333%;
        max-width: 33.33333%;
      }

      .col-5 {
        flex: 0 0 41.66667%;
        max-width: 41.66667%;
      }

      .col-6,
      .lightGallery .image-tile {
        flex: 0 0 50%;
        max-width: 50%;
      }

      .col-7 {
        flex: 0 0 58.33333%;
        max-width: 58.33333%;
      }

      .col-8 {
        flex: 0 0 66.66667%;
        max-width: 66.66667%;
      }

      .col-9 {
        flex: 0 0 75%;
        max-width: 75%;
      }

      .col-10 {
        flex: 0 0 83.33333%;
        max-width: 83.33333%;
      }

      .col-11 {
        flex: 0 0 91.66667%;
        max-width: 91.66667%;
      }

      .col-12 {
        flex: 0 0 100%;
        max-width: 100%;
      }

      .order-first {
        order: -1;
      }

      .order-last {
        order: 13;
      }

      .order-0 {
        order: 0;
      }

      .order-1 {
        order: 1;
      }

      .order-2 {
        order: 2;
      }

      .order-3 {
        order: 3;
      }

      .order-4 {
        order: 4;
      }

      .order-5 {
        order: 5;
      }

      .order-6 {
        order: 6;
      }

      .order-7 {
        order: 7;
      }

      .order-8 {
        order: 8;
      }

      .order-9 {
        order: 9;
      }

      .order-10 {
        order: 10;
      }

      .order-11 {
        order: 11;
      }

      .order-12 {
        order: 12;
      }

      .offset-1 {
        margin-left: 8.33333%;
      }

      .offset-2 {
        margin-left: 16.66667%;
      }

      .offset-3 {
        margin-left: 25%;
      }

      .offset-4 {
        margin-left: 33.33333%;
      }

      .offset-5 {
        margin-left: 41.66667%;
      }

      .offset-6 {
        margin-left: 50%;
      }

      .offset-7 {
        margin-left: 58.33333%;
      }

      .offset-8 {
        margin-left: 66.66667%;
      }

      .offset-9 {
        margin-left: 75%;
      }

      .offset-10 {
        margin-left: 83.33333%;
      }

      .offset-11 {
        margin-left: 91.66667%;
      }

      @media (min-width: 576px) {
        .col-sm {
          flex-basis: 0;
          flex-grow: 1;
          max-width: 100%;
        }

        .row-cols-sm-1>* {
          flex: 0 0 100%;
          max-width: 100%;
        }

        .row-cols-sm-2>* {
          flex: 0 0 50%;
          max-width: 50%;
        }

        .row-cols-sm-3>* {
          flex: 0 0 33.33333%;
          max-width: 33.33333%;
        }

        .row-cols-sm-4>* {
          flex: 0 0 25%;
          max-width: 25%;
        }

        .row-cols-sm-5>* {
          flex: 0 0 20%;
          max-width: 20%;
        }

        .row-cols-sm-6>* {
          flex: 0 0 16.66667%;
          max-width: 16.66667%;
        }

        .col-sm-auto {
          flex: 0 0 auto;
          width: auto;
          max-width: 100%;
        }

        .col-sm-1 {
          flex: 0 0 8.33333%;
          max-width: 8.33333%;
        }

        .col-sm-2 {
          flex: 0 0 16.66667%;
          max-width: 16.66667%;
        }

        .col-sm-3 {
          flex: 0 0 25%;
          max-width: 25%;
        }

        .col-sm-4 {
          flex: 0 0 33.33333%;
          max-width: 33.33333%;
        }

        .col-sm-5 {
          flex: 0 0 41.66667%;
          max-width: 41.66667%;
        }

        .col-sm-6 {
          flex: 0 0 50%;
          max-width: 50%;
        }

        .col-sm-7 {
          flex: 0 0 58.33333%;
          max-width: 58.33333%;
        }

        .col-sm-8 {
          flex: 0 0 66.66667%;
          max-width: 66.66667%;
        }

        .col-sm-9 {
          flex: 0 0 75%;
          max-width: 75%;
        }

        .col-sm-10 {
          flex: 0 0 83.33333%;
          max-width: 83.33333%;
        }

        .col-sm-11 {
          flex: 0 0 91.66667%;
          max-width: 91.66667%;
        }

        .col-sm-12 {
          flex: 0 0 100%;
          max-width: 100%;
        }

        .order-sm-first {
          order: -1;
        }

        .order-sm-last {
          order: 13;
        }

        .order-sm-0 {
          order: 0;
        }

        .order-sm-1 {
          order: 1;
        }

        .order-sm-2 {
          order: 2;
        }

        .order-sm-3 {
          order: 3;
        }

        .order-sm-4 {
          order: 4;
        }

        .order-sm-5 {
          order: 5;
        }

        .order-sm-6 {
          order: 6;
        }

        .order-sm-7 {
          order: 7;
        }

        .order-sm-8 {
          order: 8;
        }

        .order-sm-9 {
          order: 9;
        }

        .order-sm-10 {
          order: 10;
        }

        .order-sm-11 {
          order: 11;
        }

        .order-sm-12 {
          order: 12;
        }

        .offset-sm-0 {
          margin-left: 0;
        }

        .offset-sm-1 {
          margin-left: 8.33333%;
        }

        .offset-sm-2 {
          margin-left: 16.66667%;
        }

        .offset-sm-3 {
          margin-left: 25%;
        }

        .offset-sm-4 {
          margin-left: 33.33333%;
        }

        .offset-sm-5 {
          margin-left: 41.66667%;
        }

        .offset-sm-6 {
          margin-left: 50%;
        }

        .offset-sm-7 {
          margin-left: 58.33333%;
        }

        .offset-sm-8 {
          margin-left: 66.66667%;
        }

        .offset-sm-9 {
          margin-left: 75%;
        }

        .offset-sm-10 {
          margin-left: 83.33333%;
        }

        .offset-sm-11 {
          margin-left: 91.66667%;
        }
      }

      @media (min-width: 768px) {
        .col-md {
          flex-basis: 0;
          flex-grow: 1;
          max-width: 100%;
        }

        .row-cols-md-1>* {
          flex: 0 0 100%;
          max-width: 100%;
        }

        .row-cols-md-2>* {
          flex: 0 0 50%;
          max-width: 50%;
        }

        .row-cols-md-3>* {
          flex: 0 0 33.33333%;
          max-width: 33.33333%;
        }

        .row-cols-md-4>* {
          flex: 0 0 25%;
          max-width: 25%;
        }

        .row-cols-md-5>* {
          flex: 0 0 20%;
          max-width: 20%;
        }

        .row-cols-md-6>* {
          flex: 0 0 16.66667%;
          max-width: 16.66667%;
        }

        .col-md-auto {
          flex: 0 0 auto;
          width: auto;
          max-width: 100%;
        }

        .col-md-1 {
          flex: 0 0 8.33333%;
          max-width: 8.33333%;
        }

        .col-md-2 {
          flex: 0 0 16.66667%;
          max-width: 16.66667%;
        }

        .col-md-3,
        .lightGallery .image-tile {
          flex: 0 0 25%;
          max-width: 25%;
        }

        .col-md-4,
        .lightGallery .image-tile {
          flex: 0 0 33.33333%;
          max-width: 33.33333%;
        }

        .col-md-5 {
          flex: 0 0 41.66667%;
          max-width: 41.66667%;
        }

        .col-md-6 {
          flex: 0 0 50%;
          max-width: 50%;
        }

        .col-md-7 {
          flex: 0 0 58.33333%;
          max-width: 58.33333%;
        }

        .col-md-8 {
          flex: 0 0 66.66667%;
          max-width: 66.66667%;
        }

        .col-md-9 {
          flex: 0 0 75%;
          max-width: 75%;
        }

        .col-md-10 {
          flex: 0 0 83.33333%;
          max-width: 83.33333%;
        }

        .col-md-11 {
          flex: 0 0 91.66667%;
          max-width: 91.66667%;
        }

        .col-md-12 {
          flex: 0 0 100%;
          max-width: 100%;
        }

        .order-md-first {
          order: -1;
        }

        .order-md-last {
          order: 13;
        }

        .order-md-0 {
          order: 0;
        }

        .order-md-1 {
          order: 1;
        }

        .order-md-2 {
          order: 2;
        }

        .order-md-3 {
          order: 3;
        }

        .order-md-4 {
          order: 4;
        }

        .order-md-5 {
          order: 5;
        }

        .order-md-6 {
          order: 6;
        }

        .order-md-7 {
          order: 7;
        }

        .order-md-8 {
          order: 8;
        }

        .order-md-9 {
          order: 9;
        }

        .order-md-10 {
          order: 10;
        }

        .order-md-11 {
          order: 11;
        }

        .order-md-12 {
          order: 12;
        }

        .offset-md-0 {
          margin-left: 0;
        }

        .offset-md-1 {
          margin-left: 8.33333%;
        }

        .offset-md-2 {
          margin-left: 16.66667%;
        }

        .offset-md-3 {
          margin-left: 25%;
        }

        .offset-md-4 {
          margin-left: 33.33333%;
        }

        .offset-md-5 {
          margin-left: 41.66667%;
        }

        .offset-md-6 {
          margin-left: 50%;
        }

        .offset-md-7 {
          margin-left: 58.33333%;
        }

        .offset-md-8 {
          margin-left: 66.66667%;
        }

        .offset-md-9 {
          margin-left: 75%;
        }

        .offset-md-10 {
          margin-left: 83.33333%;
        }

        .offset-md-11 {
          margin-left: 91.66667%;
        }
      }

      @media (min-width: 992px) {
        .col-lg {
          flex-basis: 0;
          flex-grow: 1;
          max-width: 100%;
        }

        .row-cols-lg-1>* {
          flex: 0 0 100%;
          max-width: 100%;
        }

        .row-cols-lg-2>* {
          flex: 0 0 50%;
          max-width: 50%;
        }

        .row-cols-lg-3>* {
          flex: 0 0 33.33333%;
          max-width: 33.33333%;
        }

        .row-cols-lg-4>* {
          flex: 0 0 25%;
          max-width: 25%;
        }

        .row-cols-lg-5>* {
          flex: 0 0 20%;
          max-width: 20%;
        }

        .row-cols-lg-6>* {
          flex: 0 0 16.66667%;
          max-width: 16.66667%;
        }

        .col-lg-auto {
          flex: 0 0 auto;
          width: auto;
          max-width: 100%;
        }

        .col-lg-1 {
          flex: 0 0 8.33333%;
          max-width: 8.33333%;
        }

        .col-lg-2 {
          flex: 0 0 16.66667%;
          max-width: 16.66667%;
        }

        .col-lg-3,
        .lightGallery .image-tile {
          flex: 0 0 25%;
          max-width: 25%;
        }

        .col-lg-4 {
          flex: 0 0 33.33333%;
          max-width: 33.33333%;
        }

        .col-lg-5 {
          flex: 0 0 41.66667%;
          max-width: 41.66667%;
        }

        .col-lg-6 {
          flex: 0 0 50%;
          max-width: 50%;
        }

        .col-lg-7 {
          flex: 0 0 58.33333%;
          max-width: 58.33333%;
        }

        .col-lg-8 {
          flex: 0 0 66.66667%;
          max-width: 66.66667%;
        }

        .col-lg-9 {
          flex: 0 0 75%;
          max-width: 75%;
        }

        .col-lg-10 {
          flex: 0 0 83.33333%;
          max-width: 83.33333%;
        }

        .col-lg-11 {
          flex: 0 0 91.66667%;
          max-width: 91.66667%;
        }

        .col-lg-12 {
          flex: 0 0 100%;
          max-width: 100%;
        }

        .order-lg-first {
          order: -1;
        }

        .order-lg-last {
          order: 13;
        }

        .order-lg-0 {
          order: 0;
        }

        .order-lg-1 {
          order: 1;
        }

        .order-lg-2 {
          order: 2;
        }

        .order-lg-3 {
          order: 3;
        }

        .order-lg-4 {
          order: 4;
        }

        .order-lg-5 {
          order: 5;
        }

        .order-lg-6 {
          order: 6;
        }

        .order-lg-7 {
          order: 7;
        }

        .order-lg-8 {
          order: 8;
        }

        .order-lg-9 {
          order: 9;
        }

        .order-lg-10 {
          order: 10;
        }

        .order-lg-11 {
          order: 11;
        }

        .order-lg-12 {
          order: 12;
        }

        .offset-lg-0 {
          margin-left: 0;
        }

        .offset-lg-1 {
          margin-left: 8.33333%;
        }

        .offset-lg-2 {
          margin-left: 16.66667%;
        }

        .offset-lg-3 {
          margin-left: 25%;
        }

        .offset-lg-4 {
          margin-left: 33.33333%;
        }

        .offset-lg-5 {
          margin-left: 41.66667%;
        }

        .offset-lg-6 {
          margin-left: 50%;
        }

        .offset-lg-7 {
          margin-left: 58.33333%;
        }

        .offset-lg-8 {
          margin-left: 66.66667%;
        }

        .offset-lg-9 {
          margin-left: 75%;
        }

        .offset-lg-10 {
          margin-left: 83.33333%;
        }

        .offset-lg-11 {
          margin-left: 91.66667%;
        }
      }

      @media (min-width: 1200px) {
        .col-xl {
          flex-basis: 0;
          flex-grow: 1;
          max-width: 100%;
        }

        .row-cols-xl-1>* {
          flex: 0 0 100%;
          max-width: 100%;
        }

        .row-cols-xl-2>* {
          flex: 0 0 50%;
          max-width: 50%;
        }

        .row-cols-xl-3>* {
          flex: 0 0 33.33333%;
          max-width: 33.33333%;
        }

        .row-cols-xl-4>* {
          flex: 0 0 25%;
          max-width: 25%;
        }

        .row-cols-xl-5>* {
          flex: 0 0 20%;
          max-width: 20%;
        }

        .row-cols-xl-6>* {
          flex: 0 0 16.66667%;
          max-width: 16.66667%;
        }

        .col-xl-auto {
          flex: 0 0 auto;
          width: auto;
          max-width: 100%;
        }

        .col-xl-1 {
          flex: 0 0 8.33333%;
          max-width: 8.33333%;
        }

        .col-xl-2 {
          flex: 0 0 16.66667%;
          max-width: 16.66667%;
        }

        .col-xl-3,
        .lightGallery .image-tile {
          flex: 0 0 25%;
          max-width: 25%;
        }

        .col-xl-4 {
          flex: 0 0 33.33333%;
          max-width: 33.33333%;
        }

        .col-xl-5 {
          flex: 0 0 41.66667%;
          max-width: 41.66667%;
        }

        .col-xl-6 {
          flex: 0 0 50%;
          max-width: 50%;
        }

        .col-xl-7 {
          flex: 0 0 58.33333%;
          max-width: 58.33333%;
        }

        .col-xl-8 {
          flex: 0 0 66.66667%;
          max-width: 66.66667%;
        }

        .col-xl-9 {
          flex: 0 0 75%;
          max-width: 75%;
        }

        .col-xl-10 {
          flex: 0 0 83.33333%;
          max-width: 83.33333%;
        }

        .col-xl-11 {
          flex: 0 0 91.66667%;
          max-width: 91.66667%;
        }

        .col-xl-12 {
          flex: 0 0 100%;
          max-width: 100%;
        }

        .order-xl-first {
          order: -1;
        }

        .order-xl-last {
          order: 13;
        }

        .order-xl-0 {
          order: 0;
        }

        .order-xl-1 {
          order: 1;
        }

        .order-xl-2 {
          order: 2;
        }

        .order-xl-3 {
          order: 3;
        }

        .order-xl-4 {
          order: 4;
        }

        .order-xl-5 {
          order: 5;
        }

        .order-xl-6 {
          order: 6;
        }

        .order-xl-7 {
          order: 7;
        }

        .order-xl-8 {
          order: 8;
        }

        .order-xl-9 {
          order: 9;
        }

        .order-xl-10 {
          order: 10;
        }

        .order-xl-11 {
          order: 11;
        }

        .order-xl-12 {
          order: 12;
        }

        .offset-xl-0 {
          margin-left: 0;
        }

        .offset-xl-1 {
          margin-left: 8.33333%;
        }

        .offset-xl-2 {
          margin-left: 16.66667%;
        }

        .offset-xl-3 {
          margin-left: 25%;
        }

        .offset-xl-4 {
          margin-left: 33.33333%;
        }

        .offset-xl-5 {
          margin-left: 41.66667%;
        }

        .offset-xl-6 {
          margin-left: 50%;
        }

        .offset-xl-7 {
          margin-left: 58.33333%;
        }

        .offset-xl-8 {
          margin-left: 66.66667%;
        }

        .offset-xl-9 {
          margin-left: 75%;
        }

        .offset-xl-10 {
          margin-left: 83.33333%;
        }

        .offset-xl-11 {
          margin-left: 91.66667%;
        }
      }

      h1 {
        font-size: 26pt;
      }

      h2 {
        font-family: 'Calibri', sans-serif;
        font-size: 11pt;
      }

      .date {
        font-family: 'Bookman Old Style', serif;
        font-size: 11pt;
      }
    }
  </style>
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Ijazah Details</h4>
                <div class="row">
                  <div class="col-md-6">
                    <address>
                      <p class="font-weight-bold">Taruna:</p>
                      <p class="font-weight-bold">Program Studi:</p>
                      <p class="font-weight-bold">Tanggal Ijazah:</p>
                      <p class="font-weight-bold">Tanggal Pengesahan:</p>
                      <p class="font-weight-bold">Gelar Akademik:</p>
                      <p class="font-weight-bold">Nomor SK:</p>
                      <p class="font-weight-bold">Wakil Direktur:</p>
                      <p class="font-weight-bold">Direktur:</p>
                      <p class="font-weight-bold">Nomor Ijazah:</p>
                      <p class="font-weight-bold">Nomor Seri:</p>
                      <p class="font-weight-bold">Tanggal Yudisium:</p>
                      <p class="font-weight-bold">Judul KKW:</p>
                    </address>
                  </div>
                  <div class="col-md-6">
                    <address class="text-primary">
                      <p class="font-weight-bold">
                        <?php echo $ijazah->Taruna; ?>
                      </p>
                      <p class="font-weight-bold">
                        <?php echo $ijazah->Program_Studi; ?>
                      </p>
                      <p class="font-weight-bold">
                        <?php echo $ijazah->Tanggal_Ijazah; ?>
                      </p>
                      <p class="font-weight-bold">
                        <?php echo $ijazah->Tanggal_Pengesahan; ?>
                      </p>
                      <p class="font-weight-bold">
                        <?php echo $ijazah->Gelar_Akademik; ?>
                      </p>
                      <p class="font-weight-bold">
                        <?php echo $ijazah->Nomor_SK; ?>
                      </p>
                      <p class="font-weight-bold">
                        <?php echo $ijazah->Wakil_Direktur; ?>
                      </p>
                      <p class="font-weight-bold">
                        <?php echo $ijazah->Direktur; ?>
                      </p>
                      <p class="font-weight-bold">
                        <?php echo $ijazah->Nomor_Ijazah; ?>
                      </p>
                      <p class="font-weight-bold">
                        <?php echo $ijazah->Nomor_Seri; ?>
                      </p>
                      <p class="font-weight-bold">
                        <?php echo $ijazah->Tanggal_Yudisium; ?>
                      </p>
                      <p class="font-weight-bold">
                        <?php echo $ijazah->Judul_KKW; ?>
                      </p>
                    </address>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    window.onload = function() {
      window.print();
    };
  </script>
</body>

</html>