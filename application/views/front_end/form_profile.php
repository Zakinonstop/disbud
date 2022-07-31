<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Disbud-DIY</title>
  <link href='https://fonts.googleapis.com/css?family=ZCOOL XiaoWei' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Assistant' rel='stylesheet'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link href="<?= base_url('assets/css/dropify.css'); ?>" rel="stylesheet">
  <link href="<?= base_url('assets/css/dropify.min.css'); ?>" rel="stylesheet">
  <link href="<?= base_url('assets/css/style.css'); ?>" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
</head>
l
<style>
  input::-webkit-file-upload-button {
    display: none;
  }

  #upload {
    background-color: #DD8505;
    color: #F8F9FA;
  }

  #save_profile {
    width: 100%;
    font-size: larger;
  }

  .form-control {
    border: none;
  }

  .form-control::-webkit-input-placeholder {
    font-size: 12px;
  }

  .form-control:focus {
    border: none;
    border-color: none;
    -webkit-box-shadow: none;
    box-shadow: inset;
  }

  .up-file {
    border: 0;
  }

  .dropify-wrapper,
  .up-file {
    border: none;
    border-radius: 10px !important;

  }

  .dropify-wrapper .dropify-message span.file-icon {
    font-family: 'Assistant';
    font-size: 14px;
    color: #CCC;
  }
</style>

<body style="background-color: #F8F9FA;">

  <section id="hero">
    <div class="container bg-white bg-image hero rata" style="height: 400px; background-image:url( <?= base_url('assets/img/bg_hero_profile.png') ?> );background-position-x: right; background-size: 95% 100%;background-repeat: no-repeat;">
      <header class="d-flex flex-wrap justify-content-center align-items-center py-3 mb-4">
        <a href="#" class="navbar-brand ">
          <img src="<?= base_url('assets/img/logo_diy.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8" width="64px"></a>

        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32">
            <use xlink:href="#bootstrap"></use>
          </svg>
          <!-- <span class="fs-4">Disbud DIY</span> -->
        </a>
      </header>
      <div class="row">
        <div class="col-lg-9 text-center">
          <h1 class="display-5 lh-1 mb-3 font-judul">Lengkapi Profil</h1>
          <p class="lead" style="font-size: 36px; line-height: 40px">Lengkapi Profil akun Anda di bawah ini!</p>
        </div>
      </div>
    </div>
  </section>

  <main id="main">
    <div class="container bg-white">
      <div class="row justify-content-center">
        <div class="col-lg-6 ">
          <form>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control shadow-sm" name="nama" id="nama" placeholder="Masukkan nama lengkap">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Perusahaan</label>
              <input type="text" class="form-control shadow-sm" name="nama" id="nama" placeholder="Masukkan perusahaan">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
              <textarea class="form-control shadow-sm" id="exampleFormControlTextarea1" rows="5" placeholder="Masukkan alamat"></textarea>
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">No. Telp/WhatsApp</label>
              <input type="text" class="form-control shadow-sm" name="nama" id="nama" placeholder="Masukkan nomor">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Email</label>
              <input type="email" class="form-control shadow-sm" name="nama" id="nama" placeholder="Masukkan email">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Password</label>
              <div class="input-group">
                <input type="text" class="form-control shadow-sm" style="border-radius: 5px;" name="nama" id="nama" placeholder="Masukkan password">
                <svg xmlns="http://www.w3.org/2000/svg" style="z-index: 3;" width="20" height="20" fill="currentColor" class="bi bi-eye-slash-fill position-absolute top-50 end-0 translate-middle" viewBox="0 0 16 16">
                  <path d="m10.79 12.912-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z" />
                  <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829zm3.171 6-12-12 .708-.708 12 12-.708.708z" />
                </svg>
              </div>
            </div>
            <div class="mb-3">
              <label for="inputGroupFile02" class="form-label">Tanda Tangan</label>
              <div class="up-file shadow-sm">
                <input type="file" class="form-control shadow-sm dropify" data-height="200" id="inputGroupFile02">
              </div>
            </div>
            <div class="mb-3">
              <label for="inputGroupFile02" class="form-label">Foto</label>
              <div class="up-file shadow-sm">
                <input type="file" class="form-control shadow-sm dropify2" data-height="200" id="inputGroupFile02">
              </div>
            </div>
            <div class="my-5">
              <button class="btn btn-danger rounded-pill" type="submit" id="save_profile">Simpan Profil</button>
            </div>
          </form>
        </div>
      </div>

    </div>

  </main>

  <section class="footer">
    <div class="container" style="background-color: #DD8505;">
      <div class="row footer-atas py-2 px-2 align-items-center justify-content-center g-0">
        <div class="col-lg-2 align-self-center justify-content-end">
          <img src="<?= base_url('assets/img/logo_diy.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8; margin-left:27px; margin-bottom: 10px;" width="120px"></a>
        </div>
        <div class="col-lg-6 align-items-center">
          <h4 class="font-judul" style="color: white; font-size: 22px; line-height: 27px;">DINAS KEBUDAYAAN<br> (KUNDHA KABUDAYAN) <br>DAERAH ISTIMEWA YOGYAKARTA</h4>
          <H5 style="color: white;">Jalan Cendana II Yogyakarta 55516</H5>
          <p style="color: white; font-size: 20px;">Telp. (0274) 562628 - Fax. (0274) 564945</p>
        </div>
        <div class="col-lg-4">
          <div class="row g-0">
            <div class="col-lg-2 offset-1">
              <img src="<?= base_url('assets/img/twitter.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8" width="64px"></a>
            </div>
            <div class="col-lg-2">
              <img src="<?= base_url('assets/img/instagram.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8" width="64px"></a>
            </div>
            <div class="col-lg-2">
              <img src="<?= base_url('assets/img/youtube.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8" width="64px"></a>
            </div>
            <div class="col-lg-2">
              <img src="<?= base_url('assets/img/facebook.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8" height="64px"></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container" style="background-color: #935801;">
      <div class="row footer-bawah py-2 px-2 align-items-center justify-content-center g-0">

        <div class="col-lg-10 align-items-center">
          <h4 class="text-center" style="color: white; font-size: 18px;">Copyright @2022. Dinas Kebudayaan (Kundha Kabudayan) Daerah Istimewa Yogyakarta</h4>
        </div>

      </div>
    </div>
  </section>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
  <script src="<?= base_url('assets/js/dropify.js') ?>"></script>
  <script src="<?= base_url('assets/js/dropify.min.js') ?>"></script>
  <script>
    $('.dropify').dropify();
    $('.dropify2').dropify();
  </script>
</body>

</html>