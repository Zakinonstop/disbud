<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Disbud-DIY</title>
    <link href='https://fonts.googleapis.com/css?family=ZCOOL XiaoWei' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Assistant' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="<?= base_url('assets/css/style.css');?>" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>

    <!-- Make sure you put this AFTER Leaflet's CSS -->
 <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
   integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
   crossorigin=""></script>
  </head>
  <body style="background-color: #F8F9FA;">

  <section id="hero">
    <div class="container bg-white bg-image hero rata" style=" background-image:url( <?= base_url('assets/img/bg-login.png')?> ); background-size: cover; height: 670px;">

        <header class="d-flex flex-wrap justify-content-center align-items-center py-3 mb-4">
          <a href="#" class="navbar-brand ">
            <img src="<?= base_url('assets/img/logo_diy.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8" width="64px"></a>
            
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
              <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
              <!-- <span class="fs-4">Disbud DIY</span> -->
            </a>
            
      </header>

      <div class="row">
        <div class="col-lg-6 mb-4">
          <form>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Email">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="d-flex flex-row-reverse bd-highlight">
              <a href="#" style="font-size: 20px;">Lupa password?</a>
            </div>
            <div class="d-grid mt-4">
              <button type="submit" class="btn btn-danger btn-block rounded-pill" style="font-size: 24px;">Masuk</button>

            </div>
          </form>
        </div>
        <div class="col-lg-6">
          
        </div>
      </div>

    </div>

    </div>
  </section>

  

  <main id="main">
   

  </main>

  <section class="footer">
    <div class="container">
      <div class="row footer-atas py-2 px-2 align-items-center justify-content-center" style="background-color: #DD8505;">
        <div class="col-12 col-md-4 col-lg-2 align-self-center justify-content-end">
        <img src="<?= base_url('assets/img/logo_diy.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8; margin-left:27px; margin-bottom: 10px;" width="120px"></a>
        </div>
        <div class="col-12 col-md-8 col-lg-6 align-items-center">
          <h4 class="font-judul" style="color: white; font-size: 22px; line-height: 27px;">DINAS KEBUDAYAAN<br> (KUNDHA KABUDAYAN) <br>DAERAH ISTIMEWA YOGYAKARTA</h4>
          <H5 style="color: white;">Jalan Cendana II Yogyakarta 55516</H5>
          <p style="color: white; font-size: 20px;">Telp. (0274) 562628 - Fax. (0274) 564945</p>
        </div>
        <div class="col-12 col-md-12 col-lg-4">
          <div class="row g-0">
            <div class="col-2 col-md-2 col-lg-2 offset-1">
              <img src="<?= base_url('assets/img/twitter.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8" width="64px"></a>
            </div>
            <div class="col-2 col-md-2 col-lg-2">
            <img src="<?= base_url('assets/img/instagram.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8" width="64px"></a>
            </div>
            <div class="col-2 col-md-2 col-lg-2">
            <img src="<?= base_url('assets/img/youtube.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8" width="64px"></a>
            </div>
            <div class="col-2 col-md-2 col-lg-2">
            <img src="<?= base_url('assets/img/facebook.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8" height="64px"></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container" style="background-color: #935801;">
      <div class="row footer-bawah py-2 px-2 align-items-center justify-content-center g-0" style="background-color: #935801;">
        <div class="col-lg-10 align-items-center">
        <h4 class="text-center" style="color: white; font-size: 18px;">Copyright @2022. Dinas Kebudayaan (Kundha Kabudayan) Daerah Istimewa Yogyakarta</h4>
        </div>
        
      </div>
    </div>
  </section>
</div>
    <script type="text/javascript">
      $( document ).ready(function() {
        $( ".malioboro1" ).click(function() {
         
          $(".malioboro1").addClass("ganti_bg");
          $(".malioboro2").removeClass("ganti_bg");
          $(".malioboro3").removeClass("ganti_bg");
          $(".malioboro4").removeClass("ganti_bg");
          $(".malioboro5").removeClass("ganti_bg");

        });

       
        $( ".malioboro2" ).click(function() {
          $(".malioboro1").removeClass("ganti_bg");
          $(".malioboro2").addClass("ganti_bg");
          $(".malioboro3").removeClass("ganti_bg");
          $(".malioboro4").removeClass("ganti_bg");
          $(".malioboro5").removeClass("ganti_bg");
          
        });
       
        $( ".malioboro3" ).click(function() {
          $(".malioboro1").removeClass("ganti_bg");
          $(".malioboro2").removeClass("ganti_bg");
          $(".malioboro3").addClass("ganti_bg");
          $(".malioboro4").removeClass("ganti_bg");
          $(".malioboro5").removeClass("ganti_bg");
          
        });
       
        $( ".malioboro4" ).click(function() {

          $(".malioboro1").removeClass("ganti_bg");
          $(".malioboro2").removeClass("ganti_bg");
          $(".malioboro3").removeClass("ganti_bg");
          $(".malioboro4").addClass("ganti_bg");
          $(".malioboro5").removeClass("ganti_bg");
          
        });
       
        $( ".malioboro5" ).click(function() {

          $(".malioboro1").removeClass("ganti_bg");
          $(".malioboro2").removeClass("ganti_bg");
          $(".malioboro3").removeClass("ganti_bg");
          $(".malioboro4").removeClass("ganti_bg");
          $(".malioboro5").addClass("ganti_bg");
          
        });
      });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
  
  </body>
</html>