<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Penghitung HPP</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="<?= base_url('assets/images/logo/logo 1.png'); ?>">

  <!-- Core css -->
  <link href="<?= base_url('assets/css/app.min.css'); ?>" rel="stylesheet">

  <!-- Js -->
  <script type="text/javascript" src="<?= base_url('assets/js/jquery-3.0.0.js'); ?>"></script>
  <script type="text/javascript" src="<?= base_url('assets/js/jQuery-Mask-Plugin-master/dist/jquery.mask.js'); ?>"></script>
</head>

<body>
  <div class="app">
    <div class="layout">
      <!-- Header START -->
      <div class="header">
        <div class="logo logo-dark">
          <a href="index.html">
            <img src="<?= base_url('assets/images/logo/logo.png'); ?>" alt="Logo" style="width: 120px;">
            <img class="logo-fold" src="<?= base_url('assets/images/logo/logo-fold.png'); ?>" alt="Logo">
          </a>
        </div>
        <div class="logo logo-white">
          <a href="index.html">
            <img src="<?= base_url('assets/images/logo/logo-white.png'); ?>" alt="Logo">
            <img class="logo-fold" src="<?= base_url('assets/images/logo/logo-fold-white.png'); ?>" alt="Logo">
          </a>
        </div>
        <div class="nav-wrap">
          <ul class="nav-left">
            <li class="desktop-toggle">
              <a href="javascript:void(0);">
                <i class="anticon"></i>
              </a>
            </li>
            <li class="mobile-toggle">
              <a href="javascript:void(0);">
                <i class="anticon"></i>
              </a>
            </li>
          </ul>
          <ul class="nav-right">
            <a href="<?= site_url('auth/logout'); ?>" class="btn btn-danger">Logout</a>
          </ul>
        </div>
      </div>
      <!-- Header END -->