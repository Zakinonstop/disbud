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
   

    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css">
   

    <!-- Make sure you put this AFTER Leaflet's CSS -->
 <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
   integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
   crossorigin=""></script>
  </head>
  <style>
    .card-zoom-atas .card-body {
    flex: 1 1 auto;
    padding: 0px;
    color: var(--bs-card-color);  
  }

  .dimana-custom {
    width: auto; 
    height:34px !important; 
    margin-left:28px;
    margin-right:14px;
    margin-top: 6px;
  }

  .img-anan {
    float: left;
    margin-top: 42px;
    margin-left: 26px;
    width: 147px;
  }

  .img-bulat {
    float: left;
    margin-top: -42px;
    margin-left: -60px;
    width: 104px;
  }

  .img-petik {
    float: left;
    margin-top: -61px;
    margin-left: -51px;
    width: 70px;
  }

  .img-petik2 {
    float: right;
    margin-top: -73px;
    margin-right: 16px;
    width: 70px;
  }

  .img-bulat2 {
    float: right;
    margin-bottom: -48px;
    margin-right: -60px;
    width: 80px;
  }

  .card-ajukan {
    transition: transform 0.2s ease;
    background-color: #FEFCF7;
    border-color: none;
    /* box-shadow: 0 4px 6px 0 rgba(22, 22, 26, 0.18); */
    box-shadow: 0 3px 30px rgb(0 0 0 / 0.1);
    /* height: 200px; */
    /* width: 300px; */
    border-left: 8px solid #F3CC80;
    border-right: 8px solid #F3CC80;
    border-radius: 24px;
    
  }

  .card-ajukan:hover {
      transform: scale(1.05);
  }

  
  .btn-customm:hover {
      background-color: #ac6c0b !important; 
      color: white;
      padding-top: 0px;
      padding-bottom: 0px;
      /* margin-left: 10px; */
      margin-bottom: -10px;
      
  }
  

  .btn-temukan:hover {
    background-color: #ac6c0b !important; 
    color: white;
    /* padding-top: 0px; */
    /* padding-bottom: 0px; */
    /* margin-left: 10px; */
    /* margin-bottom: -10px; */
    
    }

    .slick-track .slick-slide {
      width: 300px;
    }
  </style>
  <body>

  <section id="hero">
      <div class="container bg-white bg-image hero rata" style="background-image:url( <?= base_url('assets/img/bg_hero.png')?> );">
      <!-- <div class="row">
        <div class="">
          
        </div>
      </div> -->
      
      <header class="d-flex flex-wrap justify-content-center align-items-center py-3 mb-4">
        <a href="#" class="navbar-brand ">
            <img src="<?= base_url('assets/img/logo_diy.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8" width="64px"></a>

          <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            <!-- <span class="fs-4">Disbud DIY</span> -->
          </a>

      <ul class="nav nav-pills  my-4" style="font-size: 20px;">
        <!-- <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Kawasan</a></li> -->
        <li class="nav-item"><a href="#" class="nav-link" style="color: #5D5D5D;">Kawasan</a></li>
        <li class="nav-item"><a href="#" class="nav-link" style="color: #5D5D5D;">Prosedur</a></li>
        <li class="nav-item"><a href="#" class="nav-link" style="color: #5D5D5D;">Regulasi</a></li>
        <li class="nav-item"><a href="#" class="nav-link" style="color: #5D5D5D;">Pengajuan</a></li>
        <li class="nav-item">
        <a type="button" href="<?= base_url('login')?>" class="btn btn-danger btn-customm rounded-pill bg-orange " style="font-size: 20px; background-color:#DD8505;">Masuk</a>
      </li>
        </ul>
      </header>

      <div class="row flex-lg-row-reverse align-items-center g-5 py-5 ">
        <div class="col-10 col-sm-8 col-lg-2">
          <!-- <img src="bootstrap-themes.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy"> -->
        </div>
        <div class="col-md-10 col-lg-10">
          <h1 class="display-5 lh-1 mb-3 font-judul" style="font-size: 50px;">Telusuri Arsitektur <br> Kawasan Cagar Budaya</h1>
          <p class="lead" style="font-size: 30px; line-height: 40px">Beragam gaya arsitektur dan bentuk komponen <br> bangunan dapat ditemukan di sini!</p>

          <div class="row mt-4 g-2">
            
            <div class="col-6 col-md-4 col-lg-2">
              <a type="button" href="#" class="btn card card-zoom-atas malioboro malioboro1 ganti_bg pt-3 pb-2 shadow-hero" style="font-size: 36px; padding-top: 4px;">
                
                      <img src="<?= base_url('assets/img/logo_kraton.png')?>" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h4 class="card-title text-center font-judul">Kraton</h4> <!-- this text get from database -->
                      </div>
                   
              </a>
            </div>

            <div class="col-6 col-md-4 col-lg-2">
              <a type="button" href="#" class="btn card card-zoom-atas malioboro malioboro2 pt-3 pb-2 shadow-hero" style="font-family: 'Assistant';font-size: 36px; padding-top: 4px;">
                
                      <img src="<?= base_url('assets/img/logo_kraton.png')?>" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h4 class="card-title text-center font-judul">Pakualaman</h4> <!-- this text get from database -->
                      </div>
                   
              </a>
            </div>

            <div class="col-6 col-md-4 col-lg-2">
              <a type="button" href="#" class="btn card card-zoom-atas malioboro malioboro3 pt-3 pb-2 shadow-hero" style="font-family: 'Assistant';font-size: 36px; padding-top: 4px;">
                      <img src="<?= base_url('assets/img/logo_kraton.png')?>" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h4 class="card-title text-center font-judul">Malioboro</h4> <!-- this text get from database -->
                      </div>
              </a>
            </div>
            
            <div class="col-6 col-md-4 col-lg-2">
              <a type="button" href="#" class="btn card card-zoom-atas malioboro malioboro4 pt-3 pb-2 shadow-hero" style="font-family: 'Assistant';font-size: 36px; padding-top: 4px;">
                      <img src="<?= base_url('assets/img/logo_kraton.png')?>" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h4 class="card-title text-center font-judul">Kotabaru</h4> <!-- this text get from database -->
                      </div>
              </a>
            </div>

            <div class="col-6 col-md-4 col-lg-2">
              <a type="button" href="#" class="btn card card-zoom-atas malioboro malioboro5 pt-3 pb-2 shadow-hero" style="font-family: 'Assistant';font-size: 36px; padding-top: 4px;">
                      <img src="<?= base_url('assets/img/logo_kraton.png')?>" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h4 class="card-title text-center font-judul">Kotagede</h4> <!-- this text get from database -->
                      </div>
              </a>
            </div>
          </div>
          
          <br>
          <div class="d-grid gap-2 d-md-flex justify-content-md-start mt-4" style="margin-bottom: 200px;">
            <a type="button" href="#" class="btn btn-block btn-danger rounded-pill button-utama " style="font-size: 24px;">&nbsp; Lihat Panduan &#10230; &nbsp;</a>
          </div>
        </div>
      </div>
      
    <!-- <br><br><br><br><br><br><br><br><br> -->
    </div>

    </div>
  </section>

  <main id="main">
   
    <section id="kawasan">
      <div class="container rata" style="background-color: #FDFDFD;">
      <div class="container rata px-3 pt-5 text-center ">
        <h1 class="display-4 judul-2">Temukan kawasan bangunan Anda</h1><br>
        <div class="container rata">
          <div class="col-lg-12 mb-4">
                      <div class="custom-card shadow-custom">
                        <div class="card-body">
                          <div class="row g-0 align-items-center">
                              <div class="col-12 col-md-12 col-lg-12">
                                <form action="" method="post">
                                  <div class="input-group input-group-md">
                                  <img src="<?= base_url('/assets/img/logo_lokasi.png')?>" alt="" class="dimana-custom">
                                    <input type="text" class="form-control transparent-input" style="font-family: 'Assistant';font-size: 20px; padding-left: 2px;" placeholder="Dimana lokasi Anda akan bangun?" name="keyword">
                                    <span class="input-group-append">
                                        <button type="submit" class="btn rounded-pill btn-temukan" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cari" style="font-size: 24px;"><img src="<?= base_url('/assets/img/logo_maps.png')?>" alt="" width="24px">Temukan</button>
                                    </span>
                                </div>
                               </form>
                            </div>
                          </div>
                          
                        </div>
                      </div>

                  </div>
        </div>
          <br>
        <div class="container">
          <div id="map">
            <script>
              var map = L.map('map').setView([-7.805275268386124, 110.36419786541174], 13);
  
              L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                  attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
              }).addTo(map);
  
              L.marker([51.5, -0.09]).addTo(map)
                  .bindPopup('Kawasan Cagar Budaya.<br> Kraton Yogyakarta.')
                  .openPopup();
            </script>
          </div>
      
        </div>

    </section>

    <section id="jumlah">
      <div class="container rata px-4 facts pt-lg-0 bg-white">
        <br><br>
          <div class="container pt-lg-0 py-10">
            <div class="card my-4" style="border-radius: 20px; background-color: #FDF6E0; border-color: #FDF6E0;">
              <div class="row">
                                <div class="col-12 col-md-6 col-lg-4 wow zoomIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
                                    <div class="d-flex align-items-center justify-content-center p-4" style="height: 150px; ">
                                    <!-- <div class="card" style="background-color: #F3CC80; border-color:#F3CC80">
                                    </div> -->

                                    <img src="<?= base_url('/assets/img/logo_permohonan2.png')?>" alt="" width="90px" height="90px" >

                                        <div class="ps-4">
                                          <h1 class="text-danger mb-0 font-judul" data-toggle="counter-up" style="font-size: 38px;">1000+</h1>
                                          <h5 class="mb-0 font-judul" style="font-size: 30px;">Permohonan</h5>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-12 col-md-6 col-lg-4 wow zoomIn" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: zoomIn;">
                                    <div class="d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                                      <!-- <div class="card rounded-pill px-3 py-3" style="background-color: #F3CC80; border-color:#F3CC80">
                                      </div>
                                       -->
                                      <img src="<?= base_url('/assets/img/logo_proses2.png')?>" alt="" width="90px" height="90px" >
                                        <div class="ps-4">
                                          <h1 class="text-danger font-judul data-toggle="counter-up" style="font-size: 38px;">200+</h1>
                                          <h5 class="mb-0 font-judul" style="font-size: 30px;">Diproses</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 wow zoomIn" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: zoomIn;">
                                    <div class="d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                                      <!-- <div class="card rounded-pill px-3 py-3" style="background-color: #F3CC80; border-color:#F3CC80">
                                      </div> -->
                                      <img src="<?= base_url('/assets/img/logo_rekomendasi2.png')?>" alt="" width="90px" height="90px" >
                                      
                                        <div class="ps-4">
                                          <h1 class="text-danger font-judul data-toggle="counter-up" style="font-size: 38px;">800+</h1>
                                          <h5 class="mb-0 font-judul" style="font-size: 30px;">Rekomendasi</h5>
                                        </div>
                                    </div>
                                </div>
                          </div>
            </div>
              
          </div>
        <br><br>
      </div>
    </section>
    <section id="langkah">
      <div class="container py-4 rata bg-white">
        <div class="row text-center justify-content-center">
            <p class="border-top-custom col-lg-2 justify-content-center rounded-pill"></p>
            <h1 class="display-4 judul-2"><b>Ikuti 4 Langkah Mudah</b></h1><br><br>
            <p class="sub-judul">	Prosedur pengurusan izin pendirian atau adaptasi <br> bangunan di kawasan cagar budaya</p><br>
        </div>

        <div class="row d-flex mt-5" >
          
          <div class="col-12 col-md-6 col-lg-3" >
              
              <div class="card card-zoom text-center " style=" background-color:#FDF6E0;" >
                <div class="row mt-4 mb-2">
                  <div class="col-lg-4">
                  </div>
                  <div class="col-lg-4">
                    <img src="<?= base_url('/assets/img/pendaftaran2.png')?>" alt="" width="70px">
                  </div>
                  <div class="col-lg-4">
                  </div>
                </div>
                
                <div class="card-title font-judul" style="font-size: 24px;">
                  Pendaftaran <br> Akun
                </div>
                <div class="card-body">
                <p class="card-text">Calon pemohon melakukan pendaftaran akun terlebih dahulu dengan melengkapi data diri sesuai formulir yang disediakan</p>
                </div>
              </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
            
            <div class="card card-zoom text-center " style=" background-color:#FDF6E0;">
              <div class="row mt-4 mb-2 ">
                <div class="col-lg-4">
                </div>
                <div class="col-lg-4">
                  <img src="<?= base_url('/assets/img/ajukan_permohonan2.png')?>" alt="" width="70px" >
                </div>
                <div class="col-lg-4">
                </div>
              </div>
              
              <div class="card-title font-judul" style="font-size: 24px;">
                Ajukan <br> Permohonan
              </div>
              <div class="card-body">
              <p class="card-text">Pemohon mengjukan permohonan izin pendirianatau adaptasi bangunan melalui halaman permohonan dan lengkapi data yang diperlukan</p>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-3">
            
            <div class="card card-zoom text-center" style=" background-color:#FDF6E0;">
              <div class="row mt-4 mb-2">
                <div class="col-lg-4">
                </div>
                <div class="col-lg-4">
                  <img src="<?= base_url('/assets/img/lengkapi_dokumen2.png')?>" alt="" width="70px" >
                
                </div>
                <div class="col-lg-4">
                </div>
              </div>
              
              <div class="card-title font-judul" style="font-size: 24px;">
                Lengkapi <br> Dokumen
              </div>
              <div class="card-body">
              <p class="card-text" >Permohonan menyiapkan dan mengunggah dokumen-dokumen permohonan seperti kartu identitas, surat pernyataan, gambar desain bangunan, dan sebagainya</p>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-3 ">
            
            <div class="card card-zoom text-center" style=" background-color:#FDF6E0;">
              <div class="row mt-4 mb-2">
                <div class="col-lg-4">
                </div>
                <div class="col-lg-4">
                  <img src="<?= base_url('/assets/img/hasil_permohonan2.png')?>" alt="" width="70px" >
                </div>
                <div class="col-lg-4">
                </div>
              </div>
              
              <div class="card-title font-judul" style="font-size: 24px; line-height:40px">
                Hasil <br> Permohonan
              </div>
              <div class="card-body">
              <p class="card-text" >Pemohon menunggu proses verifikasi dan validasi permohonan yang telah diajukan, jika disetujui surat rekomendasi akan diterbitkan dan dapat langsung diunduh</p>
              </div>
            </div>
          </div>

        </div>
      
      </div>
      
    </section>
    <section id="regulasi">
      <div class="container rata py-5 bg-white">
        <div class="row px-4 mt-4  text-center justify-content-center">
            <p class="border-top-custom col-lg-2 justify-content-center rounded-pill"></p>
            <h1 class="display-4 judul-2"><b>Lihat Regulasi</b></h1><br><br>
            <h3 class="display-6 sub-judul">Beberapa dokumen peraturan yang terkait dengan kaidah pelestarian <br> dan pelaksanaan pembangunan di kawasan cagar budaya</h3><br>
        </div>
      
        </div>
      </div>

      <div class="container bg-white" style="background-color:#935802;">
        
        <div class="multiple-items row text-center" style="background-color:#935802; padding: 30px">
            <div style="background-color: transparent;padding: 10px; width: 280px;">
              <div class="card shadow">
                <img src="<?= base_url('/assets/img/bg.png')?>" class="card-img-top" alt="...">
              </div>
              <h4 class="font-judul my-4" style="color: white;"> Perda DIY No.1 <br> Tahun 2017</h4>
            </div>
            
            <div style="background-color: transparent;padding: 10px;">
              <div class="card shadow">
                <img src="<?= base_url('/assets/img/bg.png')?>" class="card-img-top" alt="...">
                
              </div>
              <h4 class="font-judul my-4" style="color: white;"> Perda DIY No.2 <br> Tahun 2017</h4>
            </div>

            
            <div style="background-color: transparent;padding: 10px;">
              <div class="card shadow">
                <img src="<?= base_url('/assets/img/bg.png')?>" class="card-img-top" alt="...">
                
              </div>
              <h4 class="font-judul my-4" style="color: white;"> Perda DIY No.1 <br> Tahun 2017</h4>
            </div>

            
            <div style="background-color: transparent;padding: 10px;">
              <div class="card shadow">
                <img src="<?= base_url('/assets/img/bg.png')?>" class="card-img-top" alt="...">
                
              </div>
              <h4 class="font-judul my-4" style="color: white;"> Perda DIY No.1 <br> Tahun 2017</h4>
            </div>
            
            <div style="background-color: transparent;padding: 10px;">
              <div class="card shadow">
                <img src="<?= base_url('/assets/img/bg.png')?>" class="card-img-top" alt="...">
                
              </div>
              <h4 class="font-judul my-4" style="color: white;"> Perda DIY No.1 <br> Tahun 2017</h4>
            </div>

        </div>
      </div>
      
    </section>
   
    <section id="testimoni" class="testimoni">
      <div class="container pt-4 bg-white">
        
        <div class="row px-4 mt-4 text-center justify-content-center">
            <p class="border-top-custom col-lg-2 justify-content-center rounded-pill"></p>
            <h1 class="display-4 judul-2"><b>Testimoni</b></h1><br><br>
            <p class="sub-judul">Beragam tanggapan dan umpan balik pemohon yang telah <br> mengajukan permohonan izin menggunakan layanan sistem</h3><br>
        </div>

        <div class="row align-items-center mt-5">
          <div class="col-lg-12">
            <div id="carousel-testimoni" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators align-items-center">
                <button type="button" data-bs-target="#carousel-testimoni" data-bs-slide-to="0" class="active bg-warning" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carousel-testimoni" data-bs-slide-to="1" class="bg-warning" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carousel-testimoni" data-bs-slide-to="2" class="bg-warning" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carousel-testimoni" data-bs-slide-to="3" class="bg-warning" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carousel-testimoni" data-bs-slide-to="4" class="bg-warning" aria-label="Slide 5"></button>
              </div>

              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="row align-items-center" style="padding-top: 40px; padding-bottom: 40px;">
                    <div class="col-lg-2 offset-2 px-4 " style="padding-bottom: 30px; background-image:url( <?= base_url('assets/img/bg-foto-profil2.png')?> ); background-size: 100%; background-repeat: no-repeat;">
                        <img src="<?= base_url('assets/img/foto-profil.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3 img-anan" style="opacity: .8"></a>
                    </div>
                    <div class="col-lg-6 my-4 mx-4">
                      <img src="<?= base_url('assets/img/petik1.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3 img-petik" </a>
         
                      <p>Wah, memudahkan sekali sistem ini. Kini proses pengajuan izin tidak perlu menunggu lama, hanya dalam hitungan hari surat rekomendasi sudah bisa terbit.</p>
                      <h4 class="font-judul">Shintya Agustina</h4>
                      
                      <img src="<?= base_url('assets/img/petik2.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3 img-petik2" </a>
                    </div>
                  </div>
                </div>
              
                <div class="carousel-item">
                  <div class="row align-items-center" style="padding-top: 40px; padding-bottom: 40px;">
                    <div class="col-lg-2 offset-2 px-4 " style="padding-bottom: 30px; background-image:url( <?= base_url('assets/img/bg-foto-profil2.png')?> ); background-size: 100%; background-repeat: no-repeat;">
                        <img src="<?= base_url('assets/img/foto-profil.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3 img-anan" style="opacity: .8"></a>
                    </div>
                    <div class="col-lg-6 my-4 mx-4">
                      <img src="<?= base_url('assets/img/petik1.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3 img-petik" </a>
         
                      <p>Wah, memudahkan sekali sistem ini. Kini proses pengajuan izin tidak perlu menunggu lama, hanya dalam hitungan hari surat rekomendasi sudah bisa terbit.</p>
                      <h4 class="font-judul">Shintya Agustina</h4>
                      
                      <img src="<?= base_url('assets/img/petik2.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3 img-petik2" </a>
                    </div>
                  </div>
                </div>
              
                <div class="carousel-item">
                  <div class="row align-items-center" style="padding-top: 40px; padding-bottom: 40px;">
                    <div class="col-lg-2 offset-2 px-4 " style="padding-bottom: 30px; background-image:url( <?= base_url('assets/img/bg-foto-profil2.png')?> ); background-size: 100%; background-repeat: no-repeat;">
                        <img src="<?= base_url('assets/img/foto-profil.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3 img-anan" style="opacity: .8"></a>
                    </div>
                    <div class="col-lg-6 my-4 mx-4">
                      <img src="<?= base_url('assets/img/petik1.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3 img-petik" </a>
         
                      <p>Wah, memudahkan sekali sistem ini. Kini proses pengajuan izin tidak perlu menunggu lama, hanya dalam hitungan hari surat rekomendasi sudah bisa terbit.</p>
                      <h4 class="font-judul">Shintya Agustina</h4>
                      
                      <img src="<?= base_url('assets/img/petik2.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3 img-petik2" </a>
                    </div>
                  </div>
                </div>
              
                <div class="carousel-item">
                  <div class="row align-items-center" style="padding-top: 40px; padding-bottom: 40px;">
                    <div class="col-lg-2 offset-2 px-4 " style="padding-bottom: 30px; background-image:url( <?= base_url('assets/img/bg-foto-profil2.png')?> ); background-size: 100%; background-repeat: no-repeat;">
                        <img src="<?= base_url('assets/img/foto-profil.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3 img-anan" style="opacity: .8"></a>
                    </div>
                    <div class="col-lg-6 my-4 mx-4">
                      <img src="<?= base_url('assets/img/petik1.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3 img-petik" </a>
         
                      <p>Wah, memudahkan sekali sistem ini. Kini proses pengajuan izin tidak perlu menunggu lama, hanya dalam hitungan hari surat rekomendasi sudah bisa terbit.</p>
                      <h4 class="font-judul">Shintya Agustina</h4>
                      
                      <img src="<?= base_url('assets/img/petik2.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3 img-petik2" </a>
                    </div>
                  </div>
                </div>
              
                <div class="carousel-item">
                  <div class="row align-items-center" style="padding-top: 40px; padding-bottom: 40px;">
                    <div class="col-lg-2 offset-2 px-4 " style="padding-bottom: 30px; background-image:url( <?= base_url('assets/img/bg-foto-profil2.png')?> ); background-size: 100%; background-repeat: no-repeat;">
                        <img src="<?= base_url('assets/img/foto-profil.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3 img-anan" style="opacity: .8"></a>
                    </div>
                    <div class="col-lg-6 my-4 mx-4">
                      <img src="<?= base_url('assets/img/petik1.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3 img-petik" </a>
         
                      <p>Wah, memudahkan sekali sistem ini. Kini proses pengajuan izin tidak perlu menunggu lama, hanya dalam hitungan hari surat rekomendasi sudah bisa terbit.</p>
                      <h4 class="font-judul">Shintya Agustina</h4>
                      
                      <img src="<?= base_url('assets/img/petik2.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3 img-petik2" </a>
                    </div>
                  </div>
                </div>
              </div>
            

              
              <button class="carousel-control-prev px-4" type="button" data-bs-target="#carousel-testimoni" data-bs-slide="prev">
                <!-- <span class=" bg-warning rounded-pill panah-testimoni" aria-hidden="true"></span> -->
                <img src="<?=base_url('assets/img/panah-prev.png')?>" style="width: 50px;height: 50px;">
                
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carousel-testimoni" data-bs-slide="next">
                <!-- <span class="carousel-control-next-icon bg-warning rounded-pill" aria-hidden="true"></span> -->
                <img src="<?=base_url('assets/img/panah-next.png')?>" style="width: 50px;height: 50px;">
                <span class="visually-hidden">Next</span>
              </button>
            </div>

          </div>

        </div>
        
      </div>
    </section>

    
    <section id="ajukan">
      <div class="container cover img-fluid bg-white d-grid gap-2 d-md-flex justify-content-md-center bg-image" style="padding: 20px; background-image:url( <?= base_url('assets/img/bercak.png')?> ); background-size: cover; height: 450px;">
        <div class="d-flex align-items-center justify-content-center">
        <div class="card card-ajukan col-lg-10 position-relative px-4 py-4">
          <div class="row">
            <img src="<?= base_url('assets/img/bulat.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3 img-bulat" </a>
         
            <h2 class="font-judul text-center" style="font-size: 28 px; margin-top: -40px;">Desain bangunan Anda sudah sesuai dan <br> siap mengajukan permohonan izin?</h2>
            
          </div>

          <div class="row text-center align-items-end">
            <p style="font-size: 22px;">Hanya perlu beberapa langkah untuk mengajukan permohonan Anda</p>
            <div class="col-4">

            </div>

            <div class="col-4 align-self-center">
            <a type="button" href="#" class="btn btn-block btn-danger rounded-pill mt-2 btn-utama" >&nbsp;Ajukan Sekarang&nbsp;</a>
            
            </div>
            <div class="col-4">
              <img src="<?= base_url('assets/img/bulat.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3 img-bulat2"></a>
            </div>

          </div>

             
          </div>
          
      </div>
    </section>

  </main>

  <section id="footer" class="footer">
    <div class="container rata" style="background-color: #DD8505;">
      <div class="row footer-atas py-4 align-items-center justify-content-center" style="background-color: #DD8505;">
        <div class="col-12 col-md-4 col-lg-2 align-self-center justify-content-end">
        <img src="<?= base_url('assets/img/logo_diy.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8;" width="100px"></a>
        </div>
        <div class="col-12 col-md-8 col-lg-6 justify-content-center mt-3" >
          <p class="font-judul" style="color: white; font-size: 20px; line-height: 24px; margin-bottom: 6px; margin-left: -70px;">DINAS KEBUDAYAAN<br> (KUNDHA KABUDAYAN) <br>DAERAH ISTIMEWA YOGYAKARTA</p>
          <p style="color: white; line-height:20px; margin-left: -70px;">Jalan Cendana II Yogyakarta 55516 <br> Telp. (0274) 562628 - Fax. (0274) 564945</p>
          <!-- <h6 style="color: white; line-height:10px;">Telp. (0274) 562628 - Fax. (0274) 564945</h6> -->
          <!-- <p style="color: white; font-size: 18px;">Telp. (0274) 562628 - Fax. (0274) 564945</p> -->
        </div>

        <div class="col-12 col-md-12 col-lg-4">
          <div class="row">
            <!-- <div class="col-lg-2"></div> -->
            <div class="col-lg-3"></div>
            <div class="col-2 col-md-2 col-lg-2">
              <img src="<?= base_url('assets/img/twitter.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style=" width:60px"></a>
            </div>
            <div class="col-2 col-md-2 col-lg-2">
            <img src="<?= base_url('assets/img/instagram.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style=" width:60px"></a>
            </div>
            <div class="col-2 col-md-2 col-lg-2">
            <img src="<?= base_url('assets/img/youtube.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style=" width:60px"></a>
            </div>
            <div class="col-2 col-md-2 col-lg-2">
            <img src="<?= base_url('assets/img/facebook.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style=" height: 60px;"></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container py-2" style="background-color: #935801;">
      <div class="row px-2 justify-content-center align-items-center" style="background-color: #935801;">
        <div class="col-lg-10 text-center">
          <!-- <p class="text-center" style="color: white;">Copyright @2022. Dinas Kebudayaan (Kundha Kabudayan) Daerah Istimewa Yogyakarta</p> -->
          <div class="d-inline-flex p-2" style="color: white;">Copyright @2022. Dinas Kebudayaan (Kundha Kabudayan) Daerah Istimewa Yogyakarta</div>
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

        // slic
        $('.responsive').slick({
            dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 2,
            responsive: [
              {
                breakpoint: 1024,
                settings: {
                  slidesToShow: 3,
                  slidesToScroll: 3,
                  infinite: true,
                  dots: true
                }
              },
              {
                breakpoint: 600,
                settings: {
                  slidesToShow: 2,
                  slidesToScroll: 2
                }
              },
              {
                breakpoint: 480,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1
                }
              }
              // You can unslick at a given breakpoint now by adding:
              // settings: "unslick"
              // instead of a settings object
            ]
          });
        
      });

      
    </script>

    <script  type="text/javascript">
      $(document).ready(function() {
          $('.multiple-items').slick({
          infinite: true,
          slidesToShow: 4,
          slidesToScroll: 1,
          speed: 40,
          // centerPadding: '400px',
        });
      });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  
  </body>
</html>