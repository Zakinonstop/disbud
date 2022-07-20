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
  </head>
  <body style="background-color: #F8F9FA;">
  
  <div class="container bg-white px-3 border-bottom">
  <!-- <img src="..." class="img-fluid" alt="..."> -->
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4">
    <a href="#" class="navbar-brand mx-4">
        <img src="<?= base_url('assets/img/logo_diy.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8" width="84px" height="106px;"></a>

      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <!-- <span class="fs-4">Disbud DIY</span> -->
      </a>

      <ul class="nav nav-pills mx-4 my-4" style="font-family: 'Assistant';font-size: 35px;">
        <!-- <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Kawasan</a></li> -->
        <li class="nav-item"><a href="#" class="nav-link" style="color: #5D5D5D;">Kawasan</a></li>
        <li class="nav-item"><a href="#" class="nav-link" style="color: #5D5D5D;">Prosedur</a></li>
        <li class="nav-item"><a href="#" class="nav-link" style="color: #5D5D5D;">Regulasi</a></li>
        <li class="nav-item"><a href="#" class="nav-link" style="color: #5D5D5D;">Pengajuan</a></li>
        <li class="nav-item">
        <a type="button" href="#" class="btn btn-customm btn-navbar-right rounded-pill mx-4" style="font-family: 'Assistant';font-size: 30px;">Masuk</a>
        <!-- <form class="form-inline my-2 my-lg-0 d-none d-md-block" method="post" action="https://www.simelati.id/masuk">
						<button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-3 bg-blue">Masuk | Daftar</button>
					</form> -->
      </li>
        </ul>
      </header>
  </div>

  <section id="hero">
      <div class="container bg-white px-3">

      <div class="row flex-lg-row-reverse align-items-center g-5 py-5 mx-4">
        <div class="col-10 col-sm-8 col-lg-2">
          <!-- <img src="bootstrap-themes.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy"> -->
        </div>
        <div class="col-lg-10">
          <h1 class="display-5 lh-1 mb-3 font-judul" style="font-size: 80px;">Telusuri Arsitektur <br> Kawasan Cagar Budaya</h1>
          <p class="lead" style="font-size: 45px;">Beragam gaya arsitektur dan bentuk komponen <br> bangunan dapat ditemukan di sini!</p>

          <div class="row mt-4">
            <div class="col-2">
              <div class="card" style="padding-top: 4px;">
                <img src="<?= base_url('assets/img/logo_kraton.png')?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center font-judul">Kraton</h5> <!-- this text get from database -->
                </div>
              </div>
            </div>
            
            <div class="col-2">
              <div class="card" style="padding-top: 4px;">
                <img src="<?= base_url('assets/img/logo_kraton.png')?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center font-judul">Pakualaman</h5> <!-- this text get from database -->
                </div>
              </div>
            </div>
            
            <div class="col-2">
              <div class="card" style="padding-top: 4px;">
                <img src="<?= base_url('assets/img/logo_kraton.png')?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center font-judul">Malioboro</h5> <!-- this text get from database -->
                </div>
              </div>
            </div>

            <div class="col-2">
              <div class="card" style="padding-top: 4px;">
                <img src="<?= base_url('assets/img/logo_kraton.png')?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center font-judul">Kotabaru</h5> <!-- this text get from database -->
                </div>
              </div>
            </div>

            <div class="col-2">
              <div class="card">
                <img src="<?= base_url('assets/img/logo_kraton.png')?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center font-judul">Kotagede</h5> <!-- this text get from database -->
                </div>
              </div>
            </div>
          </div>


          

          
          <br>
          <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            <!-- <button type="button" class="btn btn-primary btn-lg px-4 me-md-2 rounded-pill btn-danger">Lihat Panduan -></button> -->
            <a type="button" href="#" class="btn btn-block btn-danger rounded-pill mt-4" style="font-family: 'Assistant';font-size: 40px;">&nbsp; Lihat Panduan &#10230; &nbsp;</a>
          </div>
        </div>
      </div>
    </div>


    </div>
  </section>

  <main id="main">
    <section id="kawasan">
      <div class="container py-3" style="background-color: #FDFDFD;">
      <div class="px-4 pt-5 text-center border-bottom">
        <h1 class="display-4 font-judul" style="font-size: 55px;">Temukan kawasan bangunan Anda</h1>
        <div class="container">
          <div class="col-lg-12 my-4">

                      <div class="dataTables_length float-right" id="example1_length">
                          <!-- <a href="https://inayatullahspp.my.id/dashboard_tamu/add" type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Tambah Data">Tambah Data</a> -->
                      </div>

                      <div class="card custom-card">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-lg-1 py-2">
                              <img src="<?= base_url('/assets/img/logo_lokasi.png')?>" alt="" width="32.67px" height="46.67px">
                            </div>
                            <div class="col-lg-11">
                              <form action="" method="post">
                                <div class="input-group input-group-md">
                                    <input type="text" class="form-control transparent-input" style="font-family: 'Assistant';font-size: 35px;" placeholder="Dimana lokasi Anda akan bangun ?" name="keyword">
                                    <span class="input-group-append">
                                        <button type="submit" class="btn rounded-pill btn-temukan" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cari" style="font-family: 'Assistant';font-size: 35px;"><img src="<?= base_url('/assets/img/logo_maps.png')?>" alt="" width="41.63px" height="43.67px"> Temukan</button>
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
       <!-- embed peta -->
       <div class="container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15812.93017310653!2d110.36662804999999!3d-7.765146200000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5796db06c7ef%3A0x395271cf052b276c!2sThe%20Palace%20of%20Yogyakarta!5e0!3m2!1sen!2sid!4v1658126190385!5m2!1sen!2sid" width="1200" height="650" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
       </div>
    </section>
    <section id="jumlah">
      <div class="container  facts pt-lg-0 bg-white">
        <br><br>
          <div class="container pt-lg-0 py-10">
            <div class="card my-4" style="border-radius: 20px; background-color: #FDF6E0; border-color: #FDF6E0;">
              <div class="row gx-0 my-4">
                                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
                                    <div class="d-flex align-items-center justify-content-center p-4" style="height: 150px; ">
                                    <div class="card rounded-pill px-2 py-2" style="background-color: #F3CC80; border-color:#F3CC80">
                                      <img src="<?= base_url('/assets/img/logo_permohonan.png')?>" alt="" width="68.36px" height="68.36px" >
                                    </div>

                                        <div class="ps-4">
                                          <h1 class="text-danger mb-0 font-judul" data-toggle="counter-up" style="font-size: 60px;">1000+</h1>
                                          <h5 class="text-black mb-0 font-judul" style="font-size: 36px;">Permohonan</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: zoomIn;">
                                    <div class="d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                                      <div class="card rounded-pill px-3 py-3" style="background-color: #F3CC80; border-color:#F3CC80">
                                        <img src="<?= base_url('/assets/img/logo_proses.png')?>" alt="" width="60px" height="60px" >
                                      </div>
                                        <div class="ps-4">
                                          <h1 class="mb-0 font-judul text-danger" data-toggle="counter-up" style="font-size: 60px;">200+</h1>
                                          <h5 class="text-black mb-0 font-judul" style="font-size: 36px;">Diproses</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: zoomIn;">
                                    <div class="d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                                      <div class="card rounded-pill px-3 py-3" style="background-color: #F3CC80; border-color:#F3CC80">
                                        <img src="<?= base_url('/assets/img/logo_rekomendasi.png')?>" alt="" width="60px" height="60px" >
                                      </div>
                                        <div class="ps-4">
                                          <h1 class="text-danger   data-toggle="counter-up" style="font-size: 60px;">800+</h1>
                                          <h5 class="text-black mb-0 font-judul" style="font-size: 36px;">Rekomendasi</h5>
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
      <div class="container bg-white">
        <div class="px-4 pt-5 text-center">
            <h1 class="display-4 font-judul" style="font-size: 80px; color: #007367;"><b>Ikuti 4 Langkah Mudah</b></h1><br>
            <p style="font-family: 'Assistant'; font-style: normail; font-size: 40px; color: #007367;">	Prosedur pengurusan izin pendirian atau adaptasi <br> bangunan di awasan cagar budaya</p><br>

      <div class="row">
        <div class="col-lg-3">
          
          <div class="card" style=" background-color:#FDF6E0; border-radius: 20px;">
            <div class="row my-4 ">
              <div class="col-lg-4">
              </div>
              <div class="col-lg-4">
                <div class="card rounded-pill px-1 py-1" style="background-color: #F3CC80; border-color:#F3CC80">
                  <img src="<?= base_url('/assets/img/pendaftaran.png')?>" alt="" width="60px" height="60px" >
                </div>
              </div>
              <div class="col-lg-4">
              </div>
            </div>
            
            <div class="card-title font-judul" style="font-size: 35px;">
              Pendaftaran <br> Akun
            </div>
            <div class="card-body">
            <p class="card-text" style="font-family: 'Assistant';font-size: 27px;">Calon pemohon melakukan pendaftaran akun terlebih dahulu dengan melengkapi data diri sesuai formulir yang disediakan</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3">
          
          <div class="card" style=" background-color:#FDF6E0; border-radius: 20px;">
            <div class="row my-4 ">
              <div class="col-lg-4">
              </div>
              <div class="col-lg-4">
                <div class="card rounded-pill px-1 py-1" style="background-color: #F3CC80; border-color:#F3CC80">
                  <img src="<?= base_url('/assets/img/ajukan_permohonan.png')?>" alt="" width="68.36px" height="68.36px" >
                </div>
              </div>
              <div class="col-lg-4">
              </div>
            </div>
            
            <div class="card-title font-judul" style="font-size: 35px;">
              Ajukan <br> Permohonan
            </div>
            <div class="card-body">
            <p class="card-text" style="font-family: 'Assistant';font-size: 27px;">Pemohon mengjukan permohonan izin pendirianatau adaptasi bangunan melalui halaman permohonan dan lengkapi data yang diperlukan</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3">
          
          <div class="card" style=" background-color:#FDF6E0; border-radius: 20px;">
            <div class="row my-4 ">
              <div class="col-lg-4">
              </div>
              <div class="col-lg-4">
                <div class="card rounded-pill px-1 py-1" style="background-color: #F3CC80; border-color:#F3CC80">
                  <img src="<?= base_url('/assets/img/lengkapi_dokumen.png')?>" alt="" width="68.36px" height="68.36px" >
                </div>
              </div>
              <div class="col-lg-4">
              </div>
            </div>
            
            <div class="card-title font-judul" style="font-size: 35px;">
              Lengkapi <br> Dokumen
            </div>
            <div class="card-body">
            <p class="card-text" style="font-family: 'Assistant';font-size: 27px;">Permohonan menyiapkan dan mengunggah dokumen-dokumen permohonan seperti kartu identitas, surat pernyataan, gambar desain bangunan, dan sebagainya</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3">
          
          <div class="card" style=" background-color:#FDF6E0; border-radius: 20px;">
            <div class="row my-4 ">
              <div class="col-lg-4">
              </div>
              <div class="col-lg-4">
                <div class="card rounded-pill px-1 py-1" style="background-color: #F3CC80; border-color:#F3CC80">
                  <img src="<?= base_url('/assets/img/hasil_permohonan.png')?>" alt="" width="68.36px" height="68.36px" >
                </div>
              </div>
              <div class="col-lg-4">
              </div>
            </div>
            
            <div class="card-title font-judul" style="font-size: 35px;">
              Hasil <br> Permohonan
            </div>
            <div class="card-body">
            <p class="card-text" style="font-family: 'Assistant';font-size: 27px;">Pemohon menunggu proses verifikasi dan validasi permohonan yang telah diajukan, jika disetujui surat rekomendasi akan diterbitkan dan dapat langsung diunduh</p>
            </div>
          </div>
        </div>
      
      
      </div>
      
      </div>
      <br><br>
    </section>
    <section id="regulasi">
      <div class="container bg-white">
        <div class="px-4 pt-5 text-center">
            <h1 class="display-4 font-judul" style="font-size: 80px;"><b>Lihat Regulasi</b></h1><br>
            <h3 class="display-6 ">Beberapa dokumen peraturan yang terkait dengan kaidah pelestarian <br> dan pelaksanaan pembangunan di kawasan cagar budaya</h3><br>
        </div>
      </div>

      <div class="container text-center" style="background-color: #935802;">
      <div class="row py-4">
          <div class="col-lg-3">
            <div class="card" style="width: 18rem; background-color:#FDF6E0;">
              <img src="<?= base_url('/assets/img/bg.png')?>" class="card-img-top" alt="...">
            </div>
            <h3 class="font-judul my-4" style="color: white;"> Perda DIY No.1 <br> Tahun 2017</h3>
          </div>
        
         
          <div class="col-lg-3">
            <div class="card" style="width: 18rem; background-color:#FDF6E0;">
              <img src="<?= base_url('/assets/img/bg.png')?>" class="card-img-top" alt="...">
            </div>
            <h3 class="font-judul my-4" style="color: white;"> Perda DIY No.1 <br> Tahun 2017</h3>
          </div>
        
         
          <div class="col-lg-3">
            <div class="card" style="width: 18rem; background-color:#FDF6E0;">
              <img src="<?= base_url('/assets/img/bg.png')?>" class="card-img-top" alt="...">
            </div>
            <h3 class="font-judul my-4" style="color: white;"> Perda DIY No.1 <br> Tahun 2017</h3>
          </div>
        
         
          <div class="col-lg-3">
            <div class="card" style="width: 18rem; background-color:#FDF6E0;">
              <img src="<?= base_url('/assets/img/bg.png')?>" class="card-img-top" alt="...">
            </div>
            <h3 class="font-judul my-4" style="color: white;"> Perda DIY No.1 <br> Tahun 2017</h3>
          </div>
        
         
      
      </div>
      <br><br>
    </section>
    <section id="testimoni">
      <div class="container bg-white">
        <div class="px-4 pt-5 text-center">
            <h1 class="display-4 font-judul" style="font-size: 80px;"><b>Testimoni</b></h1><br>
            <h3 class="display-6 ">Beberapa dokumen peraturan yang terkait dengan kaidah pelestarian <br> dan pelaksanaan pembangunan di kawasan cagar budaya</h3><br>
        </div>
      </div>

      <div class="container text-center" style="background-color: #935802;">
      <div class="row py-3">
          <div class="col-lg-3">
            <div class="card" style="width: 18rem; background-color:#FDF6E0;">
              <img src="..." class="card-img-top" alt="...">
              <div class="card-title ">
                Pendaftaran Akun
              </div>
              <div class="card-body">
              <p class="card-text">Calon pemohon melakukan pendaftaran akun terlebih dahulu dengan melengkapi data diri sesuai formulir yang disediakan</p>
              </div>
            </div>
          </div>
        
          
          <div class="col-lg-3">
            <div class="card" style="width: 18rem; background-color:#FDF6E0;">
              <img src="..." class="card-img-top" alt="...">
              <div class="card-title">
                Ajukan Permohonan
              </div>
              <div class="card-body">
              <p class="card-text">Pemohon mengjukan permohonan izin pendirianatau adaptasi bangunan melalui halaman permohonan dan lengkapi data yang diperlukan</p>
              </div>
            </div>
          </div>
        
          
          <div class="col-lg-3">
            <div class="card" style="width: 18rem; background-color:#FDF6E0;">
              <img src="..." class="card-img-top" alt="...">
              <div class="card-title">
                Lengkapi Dokumen
              </div>
              <div class="card-body">
              <p class="card-text">Permohonan menyiapkan dan mengunggah dokumen-dokumen permohonan seperti kartu identitas, surat pernyataan, gambar desain bangunan, dan sebagainya</p>
              </div>
            </div>
          </div>
        
          
          <div class="col-lg-3">
            <div class="card" style="width: 18rem; background-color:#FDF6E0;">
              <img src="..." class="card-img-top" alt="...">
              <div class="card-title">
                Hasil Permohonan
              </div>
              <div class="card-body">
              <p class="card-text">Pemohon menunggu proses verifikasi dan validasi permohonan yang telah diajukan, jika disetujui surat rekomendasi akan diterbitkan dan dapat langsung diunduh</p>
              </div>
            </div>
          </div>
      
      </div>
      <br><br>
    </section>

    <section id="ajukan">
      <div class="container bg-white d-grid gap-2 d-md-flex justify-content-md-center" style="padding: 40px;">
        <div class="card bg-warning d-grid gap-2 d-md-flex justify-content-md-center">
          <h2 class="font-judul" style="font-size: 40px;">Desain bangunan Anda sudah sesuai dan <br> siap mengajukan permohonan izin?</h2>
        
          <div class="card-body d-grid gap-2 d-md-flex justify-content-md-center">
            <h4>Hanya perlu beberapa langxah untux mengajuxan permohonan Anda</h4>
          </div>
          <div class="d-grid gap-2 d-md-flex justify-content-md-center">
            <!-- <button type="button" class="btn btn-primary btn-lg px-4 me-md-2 rounded-pill btn-danger">Lihat Panduan -></button> -->
            <a type="button" href="#" class="btn btn-block btn-danger rounded-pill mt-4" style="font-family: 'Assistant';font-size: 40px;">&nbsp; Lihat Panduan &#10230; &nbsp;</a>
          </div>
        </div>
      </div>
    </section>
    
    

  </main>
 
  
  <section class="footer"> 
    <div class="container bg-white px-3">
    <footer class="py-5">
      <div class="row">
        <div class="col-6 col-md-2 mb-3">
          <h5>Section</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
          </ul>
        </div>

        <div class="col-6 col-md-2 mb-3">
          <h5>Section</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
          </ul>
        </div>

        <div class="col-6 col-md-2 mb-3">
          <h5>Section</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
          </ul>
        </div>

        <div class="col-md-5 offset-md-1 mb-3">
          <form>
            <h5>Subscribe to our newsletter</h5>
            <p>Monthly digest of what's new and exciting from us.</p>
            <div class="d-flex flex-column flex-sm-row w-100 gap-2">
              <label for="newsletter1" class="visually-hidden">Email address</label>
              <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
              <button class="btn btn-primary" type="button">Subscribe</button>
            </div>
          </form>
        </div>
      </div>

      <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
        <p>© 2022 Company, Inc. All rights reserved.</p>
        <ul class="list-unstyled d-flex">
          <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
          <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
          <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
        </ul>
      </div>
    </footer>
    </div>
  </section>  
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>