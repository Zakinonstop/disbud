<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Disbud-DIY</title>
    <link href='https://fonts.googleapis.com/css?family=ZCOOL XiaoWei' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Assistant' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="<?= base_url('assets/css/style.css'); ?>" rel="stylesheet" type="text/css">
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<style>
    div#tombol {
        position: relative;
    }

    div.tombol-box {
        display: flex;
        border-bottom: 1px solid #5D5D5D;
    }

    div.tombol-box button {
        background: transparent;
        border: none !important;
        outline: none !important;
        color: #5D5D5D;
        font-size: 24 px;
        padding: 14px 35px;
    }

    .tombol-box button:hover {
        color: #007367;
    }

    .tombol-box button.active {
        color: #007367 !important;
        border-bottom: 5px solid #DD8505 !important;
        z-index: 3;
    }

    .btn-atap {
        background: transparent !important;
        border: none !important;
        outline: none !important;
        padding: 0;
        margin: 0;
    }

    .btn-atap .card:hover {
        border: none;
        outline: none;
        border: 2px solid #DD8505;

    }

    .dot {
        height: 25px;
        width: 25px;
        background-color: #DD8505;
        border-radius: 50%;
        display: inline-block;
        text-align: center;
        margin: 0 13px;
    }

    .tcontent {
        width: 400px;
        height: 614px;
        border-radius: 0 0 30px 30px;
        margin: 0px 5px;
        border: none;
    }

    .tcontent .card-header {
        background: #007367;
        border-radius: 0 0 20px 20px;
        height: 77px;
        font-size: 35px;
    }

    .tcontent .card-body img {
        height: 90%;
        width: 90%;
    }

    .perspektif img {
        width: 600px;
        height: 340px
    }

    .slick-dots {
        padding-top: 20px;
    }

    .slick-dots li button {
        width: 10px;
        height: 10px;
        background-color: #F3CC80;
        border-radius: 50%;
        font-size: 0px;
        border: #DD8505;
    }



    .slick-dots li.slick-active button:before {
        opacity: 0;
    }

    .slick-dots li button:before {
        opacity: 0;
        color: transparent;
    }



    .slick-dots .slick-active button {
        width: 20px;
        height: 20px;
        background-color: #DD8505;
        color: #DD8505;
    }

    .slick-next {
        right: 40px;
    }

    .slick-prev {
        left: -6px;
    }

    .slick-next,
    .slick-prev {
        /*my style*/
        z-index: 3;
        background-color: white !important;
        border-radius: 50%;
        /* width: 70px;
        height: 70px; */
    }


    .slick-prev::before,
    .slick-next:before {
        line-height: 1.15 !important;
        color: transparent;
        font-size: 50px;
        font-weight: bolder;
    }

    #next-btn,
    #prev-btn {
        position: absolute;
        top: 40%;
        z-index: 3;
        width: 30px;
    }

    #next-btn {
        right: 0;
    }

    .nav-tabs .active {
        color: #007367;
    }

    .img-tab {
        width: 270px;
        height: 429px;
        margin: auto;
    }

    .tab-bangunan .col {
        padding: 0;
    }

    .desc-bangunan {
        font-size: 35px !important;
        line-height: normal;

    }

    .nav {
        --bs-nav-link-padding-x: 1.3rem;
    }
</style>

<body style="background-color: #F8F9FA;">
    <section id="hero">
        <div class="container bg-white bg-image hero rata" style="background-image:url( <?= base_url('assets/img/Vectorh.png') ?> );">
            <header class="d-flex flex-wrap justify-content-center align-items-center py-3 mb-4">
                <a href="#" class="navbar-brand">
                    <img src="<?= base_url('assets/img/logo_diy.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8" width="45px">
                </a>
                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                    <svg class="bi me-2" width="40" height="32">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                    <!-- <span class="fs-4">Disbud DIY</span> -->
                </a>

                <ul class="nav nav-pills  my-4" style="font-family: 'Assistant';font-size:24px;">
                    <!-- <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Kawasan</a></li> -->
                    <li class="nav-item"><a href="#" class="nav-link" style="color: #5D5D5D;">Kawasan</a></li>
                    <li class="nav-item"><a href="#" class="nav-link" style="color: #5D5D5D;">Prosedur</a></li>
                    <li class="nav-item"><a href="#" class="nav-link" style="color: #5D5D5D;">Regulasi</a></li>
                    <li class="nav-item"><a href="#" class="nav-link" style="color: #5D5D5D;">Pengajuan</a></li>
                    <li class="nav-item">
                        <a type="button" href="#" class="btn btn-customm btn-navbar-right rounded-pill " style="font-family: 'Assistant';font-size:24px;">Masuk</a>
                        <!-- <form class="form-inline my-2 my-lg-0 d-none d-md-block" method="post" action="https://www.simelati.id/masuk">
						<button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-3 bg-blue">Masuk | Daftar</button>
					</form> -->
                    </li>
                </ul>
            </header>

            <div class="row flex-lg-row-reverse align-items-center g-5 py-3 mb-2 ">
                <div class="col-lg-12 align-self-center">
                    <p class="lh-1 mb-3 font-judul text-center" style="font-size: 50px;">KCB Kraton</p>
                    <p class="lead text-white text-center" style=" margin:auto; font-size: 30px; line-height: 40px; border-radius:20px 0px; padding:5px; background:#DD8505;width: fit-content;height: fit-content;padding: 4px 14px;">Gaya Arsitektur Tradisional Jawa</p>
                </div>
            </div>
            <!-- <br><br><br><br><br><br><br><br><br> -->
        </div>

    </section>

    <main id="main">
        <section id="perspektif">
            <div class="container rata" style="background-color: #FDFDFD;">
                <div class="row flex-lg-row-reverse align-items-center g-2 py-5">
                    <div class="col-lg-12">
                        <p class="border rounded-pill" style="margin: auto; width: 119px;height: 14px; background: #DD8505;"></p>
                        <h1 class="lh-1 mb-3 font-judul text-center mt-4">Perspektif Bangunan</h1>
                        <div class="card rounded-0 h-100" style="border: 0;">
                            <div class="card-body p-0">
                                <div class="perspektif">
                                    <div><img src="<?= base_url('assets/img/perspektif.png') ?>" alt="..."></div>
                                    <div> <img src="<?= base_url('assets/img/perspektif2.png') ?>" alt="..."></div>
                                </div>
                                <img id="prev-btn" src="<?= base_url('assets/img/prev_btn.png') ?>" alt="" srcset="">
                                <img id="next-btn" src="<?= base_url('assets/img/next_btn.png') ?>" alt="" srcset="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" pt-3 text-center" id="tombol">
                    <nav>
                        <div class="nav nav-tabs tombol-box nav-atap" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-atap-tab" data-bs-toggle="tab" data-bs-target="#nav-atap,#nav-atap2" type="button" role="tab" aria-controls="nav-atap" aria-selected="true">Atap</button>
                            <button class="nav-link" id="nav-patap-tab" data-bs-toggle="tab" data-bs-target="#nav-patap,#nav-patap2" type="button" role="tab" aria-controls="nav-patap" aria-selected="false">Penutup Atap</button>
                            <button class="nav-link" id="nav-tritisan-tab" data-bs-toggle="tab" data-bs-target="#nav-tritisan" type="button" role="tab" aria-controls="nav-tritisan" aria-selected="false">Tritisaan</button>
                            <button class="nav-link" id="nav-pintu-tab" data-bs-toggle="tab" data-bs-target="#nav-pintu" type="button" role="tab" aria-controls="nav-pintu" aria-selected="false">Pintu</button>
                            <button class="nav-link" id="nav-jendela-tab" data-bs-toggle="tab" data-bs-target="#nav-jendela" type="button" role="tab" aria-controls="nav-jendela" aria-selected="false">Jendela</button>
                        </div>
                    </nav>
                    <div class="tab-content mt-5 tab-bangunan" id="nav-tabContent">
                        <!-- atap -->
                        <div class="tab-pane fade show active" id="nav-atap" role="tabpanel" aria-labelledby="nav-atap-tab">
                            <div class=" nav nav-tabs btn-atap row" id="nav-tab" role="tablist">
                                <div class="col card tcontent shadow">
                                    <div class="card-header text-white">
                                        Tajung
                                    </div>
                                    <div class="card-body">
                                        <img src="<?= base_url('assets/img/tajug_pokok.png') ?>" class='img-tab' alt="" srcset="">
                                    </div>
                                </div>

                                <div class="col card tcontent shadow">
                                    <div class="card-header text-white">
                                        Joglo
                                    </div>
                                    <div class="card-body">
                                        <img src="<?= base_url('assets/img/joglo.png') ?>" class='img-tab' alt="" srcset="">
                                    </div>
                                </div>

                                <div class="col card tcontent shadow">
                                    <div class="card-header text-white">
                                        Limasan
                                    </div>
                                    <div class="card-body">
                                        <img src="<?= base_url('assets/img/limasan.png') ?>" class='img-tab' alt="" srcset="">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- penutup atap -->
                        <div class="tab-pane fade" id="nav-patap" role="tabpanel" aria-labelledby="nav-patap-tab">
                            <div class="nav nav-tabs btn-atap row">
                                <div class="col card tcontent shadow">
                                    <div class="card-header text-white pt-4">
                                        Kodhok
                                    </div>
                                    <div class="card-body">
                                        <img src="<?= base_url('assets/img/kodhok.png') ?>" class='img-tab' alt="" srcset="">
                                    </div>
                                </div>
                                <div class="col card tcontent shadow">
                                    <div class="card-header text-white pt-4">
                                        Plenthong
                                    </div>
                                    <div class="card-body">
                                        <img src="<?= base_url('assets/img/plenthong.png') ?>" class='img-tab' alt="" srcset="">
                                    </div>
                                </div>
                                <div class="col card tcontent shadow">
                                    <div class="card-header text-white pt-4">
                                        Vlaam
                                    </div>
                                    <div class="card-body">
                                        <img src="<?= base_url('assets/img/vlaam.png') ?>" class='img-tab' alt="" srcset="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- tritisan -->
                        <div class="tab-pane fade" id="nav-tritisan" role="tabpanel" aria-labelledby="nav-tritisan-tab">
                            <div class="nav nav-tabs btn-atap row">
                                <div class="col card tcontent shadow">
                                    <div class="card-header text-white pt-4">
                                        Bahu Dayung
                                    </div>
                                    <div class="card-body">
                                        <img src="<?= base_url('assets/img/panel_kaca.png') ?>" class='img-tab' alt="" srcset="">
                                    </div>
                                </div>
                                <div class="col card tcontent shadow">
                                    <div class="card-header text-white pt-4">
                                        Panel Kayu
                                    </div>
                                    <div class="card-body">
                                        <img src="<?= base_url('assets/img/panel_kayu.png') ?>" class='img-tab' alt="" srcset="">
                                    </div>
                                </div>
                                <div class="col card tcontent shadow">
                                    <div class="card-header text-white pt-4">
                                        Panel Kepryak
                                    </div>
                                    <div class="card-body">
                                        <img src="<?= base_url('assets/img/panel_krepyak.png') ?>" class='img-tab' alt="" srcset="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- pintu -->
                        <div class="tab-pane fade" id="nav-pintu" role="tabpanel" aria-labelledby="nav-pintu-tab">
                            <div class="nav nav-tabs btn-atap row">
                                <div class="col card tcontent shadow">
                                    <div class="card-header text-white pt-4">
                                        Panel Kaca
                                    </div>
                                    <div class="card-body">
                                        <img src="<?= base_url('assets/img/panel_kaca.png') ?>" class='img-tab' alt="" srcset="">
                                    </div>
                                </div>
                                <div class="col card tcontent shadow">
                                    <div class="card-header text-white pt-4">
                                        Panel Kayu
                                    </div>
                                    <div class="card-body">
                                        <img src="<?= base_url('assets/img/panel_kayu.png') ?>" class='img-tab' alt="" srcset="">
                                    </div>
                                </div>
                                <div class="col card tcontent shadow">
                                    <div class="card-header text-white pt-4">
                                        Panel Kepryak
                                    </div>
                                    <div class="card-body">
                                        <img src="<?= base_url('assets/img/panel_krepyak.png') ?>" class='img-tab' alt="" srcset="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- jendela tab-content -->
                        <div class="tab-pane fade" id="nav-jendela" role="tabpanel" aria-labelledby="nav-jendela-tab">
                            <div class="nav nav-tabs btn-atap row">
                                <div class="col card tcontent shadow">
                                    <div class="card-header text-white pt-4">
                                        Panel Kaca
                                    </div>
                                    <div class="card-body">
                                        <img src="<?= base_url('assets/img/jendela_kaca.png') ?>" class='img-tab' alt="" srcset="">
                                    </div>
                                </div>
                                <div class="col card tcontent shadow">
                                    <div class="card-header text-white pt-4">
                                        Panel Kayu
                                    </div>
                                    <div class="card-body">
                                        <img src="<?= base_url('assets/img/jendela_kayu.png') ?>" class='img-tab' alt="" srcset="">
                                    </div>
                                </div>
                                <div class="col card tcontent shadow">
                                    <div class="card-header text-white pt-4">
                                        Panel Kepryak
                                    </div>
                                    <div class="card-body">
                                        <img src="<?= base_url('assets/img/jendela_krepyak.png') ?>" class='img-tab' alt="" srcset="">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <br>
                    <!-- embed peta -->
                </div>
                <div class="desc-bangunan">
                    <!-- tabs content atap -->
                    <div class="desc-atap" style="display:block;">
                        <div class="row mt-5">
                            <p style="color: #007367; ">Varian Tajung:</p>
                            <ol type="1" style="line-height: 40px;" class="px-5 mt-2">
                                <li class="mt-3">Tajug Lawakan</li>
                                <li class="mt-3">Tajug Lawakan Lambang Teplok</li>
                                <li class="mt-3">Tajug Lawakan Lambang Gantung</li>
                                <li class="mt-3">Tajug Semar Tinandhu</li>
                                <li class="mt-3">Tajug Semar Sinongsong (Tajug Saka Tunggal)</li>
                            </ol>
                        </div>
                    </div>
                    <div class="desc-patap" style="display:none;">
                        <div class="row mt-5">
                            <ul class="px-5 mt-2" style="line-height: 40px">
                                <li class="mt-3">Dengan warna asli (tidak dicat/tidak diglasir)</li>
                                <li class="mt-3">Terbuat dari bahan tanah liat/gerbahan</li>

                            </ul>
                        </div>
                    </div>
                    <div class="desc-tritisan" style="display:none;">
                        <div class="row mt-5">
                            <p style=" line-height: normal;">Atap teritis dapat berupa atap miring tanpa konsol atau menggunakan konsol kayu atau besi, dan/atau atap datar biasa atau menggunakan tarikan kabel baja di atasnya.</p>
                            <p style=" line-height: normal;"> Hanya untuk atap teritis di atas pintu dan jendela dapat menggunakan bahan metal atau pelat beton.</p>
                            </ol>
                        </div>
                    </div>
                    <div class="desc-pintu" style="display:none;">
                        <div class="row mt-5">
                            <p>Berbentuk empat persegi panjang dengan proposrsi vertikal, umumnya berdaun pintu ganda.</p>
                            <p class="mt-5" style="color: #007367;">Detail Pintu</p>
                            <img class="w-75 h-75 img-tab mt-3" src="<?= base_url('assets/img/detail_pintu.png') ?>" alt="">
                        </div>
                    </div>
                    <div class="desc-jendela" style="display:none;">
                        <div class="row mt-5">
                            <p>Jendela berbentuk persegi dengan proporsi vertikal. Penutup dapat berupa kombinasi kayu/kaca/krepyak.<br>
                                Jika menggunakan AC, sisi dalam bukaan dapat ditutup dengan kaca mati.<br>
                                Jika menggunakan jenis AC split, maka unit outdoor AC harus diletakkan tersembunyi.</p>
                            <p class="mt-5" style="color: #007367;">Detail Jendela</p>
                            <img class="w-75 h-75 img-tab mt-3" src="<?= base_url('assets/img/detail_jendela.png') ?>" alt="">
                        </div>
                    </div>
                </div>

                <!-- button regulasi -->
                <div class="d-flex justify-content-center">
                    <button class="btn btn-danger rounded-pill" style="width: 408px; height: 79.74px; font-size: 40px; margin-top:84px ; margin-bottom: 6rem;">Lihat Regulasi</button>
                </div>
            </div>
        </section>

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



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.perspektif').slick({
                dots: true,
                infinite: true,
                speed: 300,
                slidesToShow: 1,
                centerMode: true,
                variableWidth: true,
                arrows: true,

            });
            $('#prev-btn').click(function(e) {
                //e.preventDefault(); 
                $('.perspektif').slick('slickPrev');
            });

            $('#next-btn').click(function(e) {
                //e.preventDefault(); 
                $('.perspektif').slick('slickNext');
            });
        });

        $(document).ready(function() {
            $('#nav-atap-tab').click(function(e) {
                e.preventDefault();
                $('.desc-atap').css('display', 'block');
                $('.desc-patap').css('display', 'none');
                $('.desc-tritisan').css('display', 'none');
                $('.desc-pintu').css('display', 'none');
                $('.desc-jendela').css('display', 'none');
            });
            $('#nav-patap-tab').click(function(e) {
                e.preventDefault();
                $('.desc-patap').css('display', 'block');
                $('.desc-atap').css('display', 'none');
                $('.desc-tritisan').css('display', 'none');
                $('.desc-pintu').css('display', 'none');
                $('.desc-jendela').css('display', 'none');
            });
            $('#nav-tritisan-tab').click(function(e) {
                e.preventDefault();
                $('.desc-tritisan').css('display', 'block');
                $('.desc-atap').css('display', 'none');
                $('.desc-patap').css('display', 'none');
                $('.desc-pintu').css('display', 'none');
                $('.desc-jendela').css('display', 'none');
            });
            $('#nav-pintu-tab').click(function(e) {
                e.preventDefault();
                $('.desc-pintu').css('display', 'block');
                $('.desc-atap').css('display', 'none');
                $('.desc-tritisan').css('display', 'none');
                $('.desc-patap').css('display', 'none');
                $('.desc-jendela').css('display', 'none');

            });
            $('#nav-jendela-tab').click(function(e) {
                e.preventDefault();
                $('.desc-jendela').css('display', 'block');
                $('.desc-atap').css('display', 'none');
                $('.desc-tritisan').css('display', 'none');
                $('.desc-pintu').css('display', 'none');
                $('.desc-patap').css('display', 'none');

            });
        });
    </script>
    <!-- <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script> -->

</body>

</html>