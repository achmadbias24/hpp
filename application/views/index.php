<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Aplikasi Penghitung HPP</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="<?= base_url('assets/images/logo/logo 2.png') ?>">

  <!-- page css -->

  <!-- Core css -->
  <link href="<?= base_url('assets/css/app.min.css') ?>" rel="stylesheet">

</head>

<body>
  <div class="app">
    <div class="container-fluid">
      <div class="d-flex full-height p-v-15 flex-column justify-content-between">
        <div class="d-none d-md-flex p-h-40">
          <img src="<?= base_url('assets/images/logo/logo.png') ?>" alt="logo galuhsurabayan" style="height: 70px;">
        </div>
        <div class="container">
          <div class="judul text-center">
            <h2>Aplikasi Penghitungan HPP</h2>
          </div>
          <div class="row align-items-center">
            <div class="col-md-5">
              <div class="card">
                <div class="card-body">
                  <?= $this->session->flashdata('error'); ?>
                  <h2 class="m-t-20">Sign In</h2>
                  <p class="m-b-30">Masukkan Username dan Password</p>
                  <form method="POST" action="<?= site_url('Auth/login'); ?>">
                    <div class="form-group">
                      <label class="font-weight-semibold" for="userName">Username:</label>
                      <div class="input-affix">
                        <i class="prefix-icon anticon anticon-user"></i>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="font-weight-semibold" for="password">Password:</label>
                      <div class="input-affix m-b-10">
                        <i class="prefix-icon anticon anticon-lock"></i>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="d-flex align-items-center justify-content-between">
                        <button class="btn btn-primary">Login</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="offset-md-1 col-md-6 d-none d-md-block">
              <img class="img-fluid" src="<?= base_url('assets/images/logo/logo 1.png') ?>" alt="">
            </div>
          </div>
        </div>
        <div class="d-none d-md-flex  p-h-40 justify-content-between">
          <span class="">© 2022 Galuh Surabayan</span>
        </div>
      </div>
    </div>
  </div>


  <!-- Core Vendors JS -->
  <script src="<?= base_url('assets/js/vendors.min.js') ?>"></script>

  <!-- page js -->

  <!-- Core JS -->
  <script src="<?= base_url('assets/js/app.min.js') ?>"></script>

</body>

</html>