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

      <ul class="nav nav-pills  my-4" style="font-family: 'Assistant';font-size: 24px;">
        <!-- <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Kawasan</a></li> -->
        <li class="nav-item"><a href="#" class="nav-link" style="color: #5D5D5D;">Kawasan</a></li>
        <li class="nav-item"><a href="#" class="nav-link" style="color: #5D5D5D;">Prosedur</a></li>
        <li class="nav-item"><a href="#" class="nav-link" style="color: #5D5D5D;">Regulasi</a></li>
        <li class="nav-item"><a href="#" class="nav-link" style="color: #5D5D5D;">Pengajuan</a></li>
        <li class="nav-item">
        <a type="button" href="<?= base_url('login')?>" class="btn btn-customm btn-navbar-right rounded-pill " style="font-family: 'Assistant';font-size: 24px;">Masuk</a>
        <!-- <form class="form-inline my-2 my-lg-0 d-none d-md-block" method="post" action="https://www.simelati.id/masuk">
						<button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-3 bg-blue">Masuk | Daftar</button>
					</form> -->
      </li>
        </ul>
      </header>

      <div class="row flex-lg-row-reverse align-items-center g-5 py-5 ">
        <div class="col-10 col-sm-8 col-lg-2">
          <!-- <img src="bootstrap-themes.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy"> -->
        </div>
        <div class="col-md-10 col-lg-10">
          <h1 class="display-5 lh-1 mb-3 font-judul" style="font-size: 64px;">Telusuri Arsitektur <br> Kawasan Cagar Budaya</h1>
          <p class="lead" style="font-size: 36px; line-height: 40px">Beragam gaya arsitektur dan bentuk komponen <br> bangunan dapat ditemukan di sini!</p>

          <div class="row mt-4 g-2">
            
            <div class="col-6 col-md-4 col-lg-2">
              <a type="button" href="#" class="btn card card-zoom-atas malioboro malioboro1 ganti_bg pt-4 shadow-hero" style="font-family: 'Assistant';font-size: 36px; padding-top: 4px;">
                
                      <img src="<?= base_url('assets/img/logo_kraton.png')?>" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h4 class="card-title text-center font-judul">Kraton</h4> <!-- this text get from database -->
                      </div>
                   
              </a>
            </div>

            <div class="col-6 col-md-4 col-lg-2">
              <a type="button" href="#" class="btn card card-zoom-atas malioboro malioboro2 pt-4 shadow-hero" style="font-family: 'Assistant';font-size: 36px; padding-top: 4px;">
                
                      <img src="<?= base_url('assets/img/logo_kraton.png')?>" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h4 class="card-title text-center font-judul">Pakualaman</h4> <!-- this text get from database -->
                      </div>
                   
              </a>
            </div>

            <div class="col-6 col-md-4 col-lg-2">
              <a type="button" href="#" class="btn card card-zoom-atas malioboro malioboro3 pt-4 shadow-hero" style="font-family: 'Assistant';font-size: 36px; padding-top: 4px;">
                      <img src="<?= base_url('assets/img/logo_kraton.png')?>" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h4 class="card-title text-center font-judul">Malioboro</h4> <!-- this text get from database -->
                      </div>
              </a>
            </div>
            
            <div class="col-6 col-md-4 col-lg-2">
              <a type="button" href="#" class="btn card card-zoom-atas malioboro malioboro4 pt-4 shadow-hero" style="font-family: 'Assistant';font-size: 36px; padding-top: 4px;">
                      <img src="<?= base_url('assets/img/logo_kraton.png')?>" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h4 class="card-title text-center font-judul">Kotabaru</h4> <!-- this text get from database -->
                      </div>
              </a>
            </div>

            <div class="col-6 col-md-4 col-lg-2">
              <a type="button" href="#" class="btn card card-zoom-atas malioboro malioboro5 pt-4 shadow-hero" style="font-family: 'Assistant';font-size: 36px; padding-top: 4px;">
                      <img src="<?= base_url('assets/img/logo_kraton.png')?>" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h4 class="card-title text-center font-judul">Kotagede</h4> <!-- this text get from database -->
                      </div>
              </a>
            </div>
          </div>
          
          <br>
          <div class="d-grid gap-2 d-md-flex justify-content-md-start mt-4" style="margin-bottom: 200px;">
            <!-- <button type="button" class="btn btn-primary btn-lg px-4 me-md-2 rounded-pill btn-danger">Lihat Panduan -></button> -->
            <a type="button" href="#" class="btn btn-block btn-danger rounded-pill " style="font-family: 'Assistant';font-size: 30px;">&nbsp; Lihat Panduan &#10230; &nbsp;</a>
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
        <h1 class="display-4 judul-2">Temukan kawasan bangunan Anda</h1> <br>
        <div class="container rata">
          <div class="col-lg-12 my-4">

                      <div class="dataTables_length float-right" id="example1_length">
                          <!-- <a href="https://inayatullahspp.my.id/dashboard_tamu/add" type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Tambah Data">Tambah Data</a> -->
                      </div>

                      <div class="card custom-card shadow-custom">
                        <div class="card-body">
                          <div class="row g-0">
                            <div class="col-2 col-md-2 col-lg-1 py-1">
                              <img src="<?= base_url('/assets/img/logo_lokasi.png')?>" alt="" width="27.67px">
                            </div>
                            <div class="col-10 col-md-10 col-lg-11 ">
                              <form action="" method="post">
                                <div class="input-group input-group-md">
                                    <input type="text" class="form-control transparent-input" style="font-family: 'Assistant';font-size: 24px; padding-left: 0px;" placeholder="Dimana lokasi Anda akan bangun?" name="keyword">
                                    <span class="input-group-append">
                                        <button type="submit" class="btn rounded-pill btn-temukan" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cari" style="font-family: 'Assistant';font-size: 24px;"><img src="<?= base_url('/assets/img/logo_maps.png')?>" alt="" width="21.63px"> Temukan</button>
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
            <div class="card shadow-custom my-4" style="border-radius: 20px; background-color: #FDF6E0; border-color: #FDF6E0;">
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
      <div class="container rata bg-white">
        <div class="row pt-4 text-center justify-content-center">
            <p class="border-top-custom col-lg-2 justify-content-center rounded-pill"></p>
            <h1 class="display-4 judul-2 "><b>Ikuti 4 Langkah Mudah</b></h1><br><br>
            <p class="sub-judul">	Prosedur pengurusan izin pendirian atau adaptasi <br> bangunan di kawasan cagar budaya</p><br>


        <div class="row d-flex g-4 mt-5" >
          <div class="col-12 col-md-6 col-lg-3" >
            
            <div class="card card-zoom " style=" background-color:#FDF6E0;" >
              <div class="row mt-4 mb-2 ">
                <div class="col-lg-4">
                </div>
                <div class="col-lg-4">
                  <img src="<?= base_url('/assets/img/pendaftaran2.png')?>" alt="" width="70px">
                </div>
                <div class="col-lg-4">
                </div>
              </div>
              
              <div class="card-title font-judul" style="font-size: 35px;">
                Pendaftaran <br> Akun
              </div>
              <div class="card-body">
              <p class="card-text" style="font-size: 24px;">Calon pemohon melakukan pendaftaran akun terlebih dahulu dengan melengkapi data diri sesuai formulir yang disediakan</p>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-3">
            
            <div class="card card-zoom" style=" background-color:#FDF6E0;">
              <div class="row mt-4 mb-2 ">
                <div class="col-lg-4">
                </div>
                <div class="col-lg-4">
                  <img src="<?= base_url('/assets/img/ajukan_permohonan2.png')?>" alt="" width="70px" >
                </div>
                <div class="col-lg-4">
                </div>
              </div>
              
              <div class="card-title font-judul" style="font-size: 35px;">
                Ajukan <br> Permohonan
              </div>
              <div class="card-body">
              <p class="card-text">Pemohon mengjukan permohonan izin pendirianatau adaptasi bangunan melalui halaman permohonan dan lengkapi data yang diperlukan</p>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-3">
            
            <div class="card card-zoom" style=" background-color:#FDF6E0;">
              <div class="row mt-4 mb-2">
                <div class="col-lg-4">
                </div>
                <div class="col-lg-4">
                  <img src="<?= base_url('/assets/img/lengkapi_dokumen2.png')?>" alt="" width="70px" >
                
                </div>
                <div class="col-lg-4">
                </div>
              </div>
              
              <div class="card-title font-judul" style="font-size: 35px;">
                Lengkapi <br> Dokumen
              </div>
              <div class="card-body">
              <p class="card-text" >Permohonan menyiapkan dan mengunggah dokumen-dokumen permohonan seperti kartu identitas, surat pernyataan, gambar desain bangunan, dan sebagainya</p>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-3">
            
            <div class="card card-zoom" style=" background-color:#FDF6E0;">
              <div class="row mt-4 mb-2">
                <div class="col-lg-4">
                </div>
                <div class="col-lg-4">
                  <img src="<?= base_url('/assets/img/hasil_permohonan2.png')?>" alt="" width="70px" >
                </div>
                <div class="col-lg-4">
                </div>
              </div>
              
              <div class="card-title font-judul" style="font-size: 35px;">
                Hasil <br> Permohonan
              </div>
              <div class="card-body">
              <p class="card-text" >Pemohon menunggu proses verifikasi dan validasi permohonan yang telah diajukan, jika disetujui surat rekomendasi akan diterbitkan dan dapat langsung diunduh</p>
              </div>
            </div>
          </div>
        
        </div>
      
      </div>
      <br><br>
    </section>
    <section id="regulasi">
      <div class="container bg-white">
        <div class="row px-4 pt-5 text-center justify-content-center">
            <p class="border-top-custom col-lg-2 justify-content-center rounded-pill"></p>
            <h1 class="display-4 judul-2"><b>Lihat Regulasi</b></h1><br><br>
            <h3 class="display-6 sub-judul">Beberapa dokumen peraturan yang terkait dengan kaidah pelestarian <br> dan pelaksanaan pembangunan di kawasan cagar budaya</h3><br>
        </div>
      

      <!-- <div class="container text-center mt-5 bg-white" > -->
      <div class="row py-4 px-4 justify-content-center text-center mt-5" style="background-color: #935802;">
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card" style="width: 18rem; background-color:#FDF6E0;">
              <img src="<?= base_url('/assets/img/bg.png')?>" class="card-img-top" alt="...">
            </div>
            <h3 class="font-judul my-4" style="color: white;"> Perda DIY No.1 <br> Tahun 2017</h3>
          </div>
        
         
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card" style="width: 18rem; background-color:#FDF6E0;">
              <img src="<?= base_url('/assets/img/bg.png')?>" class="card-img-top" alt="...">
            </div>
            <h3 class="font-judul my-4" style="color: white;"> Perda DIY No.1 <br> Tahun 2017</h3>
          </div>
        
         
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card" style="width: 18rem; background-color:#FDF6E0;">
              <img src="<?= base_url('/assets/img/bg.png')?>" class="card-img-top" alt="...">
            </div>
            <h3 class="font-judul my-4" style="color: white;"> Perda DIY No.1 <br> Tahun 2017</h3>
          </div>
        
         
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card" style="width: 18rem; background-color:#FDF6E0;">
              <img src="<?= base_url('/assets/img/bg.png')?>" class="card-img-top" alt="...">
            </div>
            <h3 class="font-judul my-4" style="color: white;"> Perda DIY No.1 <br> Tahun 2017</h3>
          </div>
          </div>
      </div>
      
    </section>

    <section id="testimoni" class="testimoni">
      <div class="container bg-white">
        
        <div class="row px-4 pt-5 text-center justify-content-center">
            <p class="border-top-custom col-lg-2 justify-content-center rounded-pill"></p>
            <h1 class="display-4 judul-2"><b>Testimoni</b></h1><br><br>
            <h3 class="display-6 sub-judul">Beragam tanggapan dan umpan balik pemohon yang telah <br> mengajukan permohonan izin menggunakan layanan sistem</h3><br>
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
                  <div class="row" style="padding-top: 40px; padding-bottom: 40px;">
                    <div class="col-lg-2 offset-2">
                        <img src="<?= base_url('assets/img/foto-profil.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8" width="200px"></a>
                    </div>
                    <div class="col-lg-6 mb-4">
                      <h3>1 Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3> <br>
                      <h3><b>Shintya Agustina</b></h3>
                    </div>
                  </div>
                </div>

               
                <div class="carousel-item">
                  <div class="row" style="padding-top: 40px; padding-bottom: 40px;">
                    <div class="col-lg-2 offset-2">
                        <img src="<?= base_url('assets/img/foto-profil.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8" width="200px"></a>
                    </div>
                    <div class="col-lg-6 mb-4">
                      <h3>2 Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3> <br>
                      <h3><b>Shintya Agustina</b></h3>
                    </div>
                  </div>
                </div>

               
               
                <div class="carousel-item">
                  <div class="row" style="padding-top: 40px; padding-bottom: 40px;">
                    <div class="col-lg-2 offset-2">
                        <img src="<?= base_url('assets/img/foto-profil.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8" width="200px"></a>
                    </div>
                    <div class="col-lg-6 mb-4">
                      <h3>3 Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3> <br>
                      <h3><b>Shintya Agustina</b></h3>
                    </div>
                  </div>
                </div>

               
               
                <div class="carousel-item">
                  <div class="row" style="padding-top: 40px; padding-bottom: 40px;">
                    <div class="col-lg-2 offset-2">
                        <img src="<?= base_url('assets/img/foto-profil.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8" width="200px"></a>
                    </div>
                    <div class="col-lg-6 mb-4">
                      <h3>4 Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3> <br>
                      <h3><b>Shintya Agustina</b></h3>
                    </div>
                  </div>
                </div>

               
               
                <div class="carousel-item">
                  <div class="row" style="padding-top: 40px; padding-bottom: 40px;">
                    <div class="col-lg-2 offset-2">
                        <img src="<?= base_url('assets/img/foto-profil.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8" width="200px"></a>
                    </div>
                    <div class="col-lg-6 mb-4">
                      <h3>Lima Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3> <br>
                      <h3><b>Shintya Agustina</b></h3>
                    </div>
                  </div>
                </div>

               

              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carousel-testimoni" data-bs-slide="prev">
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
      <div class="container cover img-fluid bg-white d-grid gap-2 d-md-flex justify-content-md-center bg-image" style="padding: 20px; background-image:url( <?= base_url('assets/img/bercak.png')?> ); background-size: cover; height: 500px;">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-8" style="width: 900px; background-image:url( <?= base_url('assets/img/bg-cta.png')?> ); background-size: cover; ">
            <h2 class="font-judul text-center" style="font-size: 34px; margin-top: 50px;">Desain bangunan Anda sudah sesuai dan <br> siap mengajukan permohonan izin?</h2>
            
            <div class=" d-grid gap-2 d-md-flex justify-content-md-center">
                <h4 style="font-size: 24px;">Hanya perlu beberapa langkah untuk mengajukan permohonan Anda</h4>
              </div>
              <div class="d-grid gap-2 d-md-flex justify-content-md-center my-4">
                <!-- <button type="button" class="btn btn-primary btn-lg px-4 me-md-2 rounded-pill btn-danger">Lihat Panduan -></button> -->
                <a type="button" href="#" class="btn btn-block btn-danger rounded-pill mt-2 mb-4" style="font-size: 24px; margin-bottom: 40px">&nbsp; Ajukan Sekarang &nbsp;</a><br><br>
              </div>     
            </div>
          </div>
      </div>
    </section>

  </main>

  <section class="footer">
    <div class="container">
      <div class="row footer-atas py-4 px-2 align-items-center justify-content-center" style="background-color: #DD8505;">
        <div class="col-12 col-md-4 col-lg-2 align-self-center justify-content-end">
        <img src="<?= base_url('assets/img/logo_diy.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8; margin-left:27px; margin-bottom: 10px;" width="120px"></a>
        </div>
        <div class="col-12 col-md-8 col-lg-6 align-items-center justify-content-center mt-3">
          <h4 class="font-judul" style="color: white; font-size: 22px; line-height: 24px;">DINAS KEBUDAYAAN<br> (KUNDHA KABUDAYAN) <br>DAERAH ISTIMEWA YOGYAKARTA</h4>
          <H5 style="color: white; line-height: 10px;">Jalan Cendana II Yogyakarta 55516</H5>
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