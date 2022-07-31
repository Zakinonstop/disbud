<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Disbud-DIY</title>
  <link href='https://fonts.googleapis.com/css?family=ZCOOL XiaoWei' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Assistant' rel='stylesheet'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link href="<?= base_url('assets/css/style.css'); ?>" rel="stylesheet">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" />
  <link rel="stylesheet" type="text/css" href="slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />

  <!-- Make sure you put this AFTER Leaflet's CSS -->
  <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>
</head>
<style>
  .form-control {
    border: none;
  }

  .form-label {
    font-size: 16px;
  }

  .form-control:focus {
    border: none;
    border-color: none;
    -webkit-box-shadow: none;
    box-shadow: inset;
  }

  .form-control::-webkit-input-placeholder {
   font-size: 16px;
  }

  a.btn-auth {
    color: #007367;
    font-weight: bold;
    text-decoration: none;
  }

  .card {
    border: none;
  }
</style>

<body style="background-color: #F8F9FA;">

  <section class="h-100">
    <div id="login" class="container py-5 position-absolute top-50 start-50 translate-middle">
      <div class="row h-50">
        <div class="d-flex justify-content-center align-items-center">
          <div class="card shadow rounded-3" style="width: 640px;height: 460px; ;background-image: url(<?= base_url('assets/img/hero_login.png'); ?>); background-position-x: right; background-size: 60% 100%;background-repeat: no-repeat;">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body mx-3">

                  <header class="d-flex flex-wrap justify-content-center align-items-center pb-3 mb-1">
                    <a href="#" class="navbar-brand ">
                      <img src="<?= base_url('assets/img/logo_diy.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8" width="40px"></a>

                    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                      <svg class="bi me-2" width="40" height="32">
                        <use xlink:href="#bootstrap"></use>
                      </svg>
                      <!-- <span class="fs-4">Disbud DIY</span> -->
                    </a>
                  </header>

                  <form>
                    <div class="mb-1">
                      <label for="exampleFormControlInput1" class="form-label">Email</label>
                      <input type="email" class="form-control form-control-sm shadow-sm" name="nama" id="nama" placeholder="Masukkan email" style="font-size: 16px;">
                    </div>

                    <div class="mb-1">
                      <label for="exampleFormControlInput1" class="form-label">Password</label>
                      <div class="input-group">
                        <input type="text" class="form-control form-control-sm shadow-sm" style="border-radius: 2px; " name="nama" id="nama" placeholder="Masukkan password" style="font-size: 16px;">
                        <svg xmlns="http://www.w3.org/2000/svg" style="z-index: 3;color: #5D5D5D;" width="15" height="15" fill="currentColor" class="bi bi-eye-slash-fill position-absolute top-50 end-0 translate-middle" viewBox="0 0 16 16">
                          <path d="m10.79 12.912-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z" />
                          <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829zm3.171 6-12-12 .708-.708 12 12-.708.708z" />
                        </svg>
                      </div>
                    </div>
                    <div class="mb-1 text-end">
                      <a href="#" style="font-size: 16px;text-decoration: none; color: #5D5D5D;">Lupa password?</a>
                      
                    </div>
                    <div class="mb-3 mt-4">
                      <button class="btn btn-danger rounded-pill form-control" type="submit" id="save_profile">Masuk</button>
                    </div>
                    <div class="mb-1">
                      <button class="btn form-control" style="background-color:#EAEAEA; color: #909090;" type="submit" id="save_profile"><img src="<?= base_url('assets/img/icons_google.png') ?>" style="width: 30px;" alt="" srcset="">&nbsp;&nbsp;&nbsp;Daftar menggunakan Google </button>
                    </div>

                    <div class="align-items-center justify-content-center pt-2 pb-4 mt-2">
                      <p class="mb-0" style="font-size: 16px;">Sudah memiliki akun? <span>
                          <a class="btn-auth" href="">Masuk</a>
                        </span></p>
                    </div>

                  </form>

                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                <div class="container position-relative text-end">
                  <div class="position-absolute" style="top: -170px;right: 2rem;">
                    <h1 class="lh-1 mb-1 font-judul" style="font-size: 24px;">Selamat Datang Kembali</h1>
                    <p class="lead" style="font-size: 18px; color: #5D5D5D;">Masuk ke dalam akun Anda</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="slick/slick.min.js"></script>

</body>

</html>