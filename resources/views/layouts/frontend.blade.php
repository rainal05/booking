{{-- <!DOCTYPE html> --}}
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>MENTARI RESIDENCE</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('daftar/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('daftar/assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('daftar/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('daftar/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('daftar/assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('daftar/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('daftar/assets/vendor/aos/aos.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('daftar/assets/css/style.css') }}" rel="stylesheet">


    <!-- =======================================================
  * Template Name: Arsha - v2.2.1
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo mr-auto"><a href="/">MENTARI RESIDENCE</a></h1>
            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="/">Home</a></li>
                    <li><a href="#panduan">Panduan</a></li>

                </ul>
            </nav><!-- .nav-menu -->
            <a href="{{ route('login') }}" class="get-started-btn scrollto">Login</a>

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1>BOOKING PERUMAHAN MENTARI RESIDENCE
                    </h1>
                    <h2>Jika anda belum memiliki akun, silakan Registrasi terlebih dahulu.</h2>
                    <!-- End batas 1 -->
                    @if (\Session::has('notif'))
                        <div class="alert alert-dark" role="alert">
                            {!! \Session::get('notif') !!}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <!-- error -->
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <!-- end error -->
                    <div class="d-lg-flex">
                        <a href="" data-toggle="modal" data-target="#keluar"
                            class="btn-get-started scrollto">Registrasi</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset('daftar/assets/img/front.png') }}" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Panduan ======= -->
        <section id="panduan" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Panduan Registrasi</h2>
                    <p>Harap baca terlebih dahulu</p>
                </div>

                <div class="row">
                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <h4>1. Registrasi</h4>
                            <p>Klik Registrasi, dan isi biodata</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box">
                            <h4><a href="">2. Login</a></h4>
                            <p>Setalah Berhasil Registrasi, klik login untuk booking rumah</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box">
                            <h4><a href="">3.Pilih Rumah</a></h4>
                            <p>Pilih Rumah berdasarkan Blok yang di inginkan</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                        data-aos-delay="400">
                        <div class="icon-box">
                            <h4><a href="">4. Upload Syarat</a></h4>
                            <p>Setelah memilih rumah, upload untuk isi syarat booking</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Informasi Section ======= -->
        <section id="Informasi" class="services section-bg">
            <div class="container">

                <div class="section-title">
                    <h2 data-aos="fade-in">informasi rumah</h2>
                </div>

                <!-- ======= Portfolio Details Section ======= -->
                <section id="portfolio-details" class="portfolio-details">
                    <div class="container">

                        <div class="portfolio-details-container">

                            <div class="owl-carousel portfolio-details-carousel">
                                <img src="{{ asset('daftar/assets/img/portfolio/r1.jpg') }}" class="img-fluid"
                                    alt="">
                                <img src="{{ asset('daftar/assets/img/portfolio/r2.jpg') }}" class="img-fluid"
                                    alt="">
                                <img src="{{ asset('daftar/assets/img/portfolio/r4.jpg') }}" class="img-fluid"
                                    alt="">
                                <img src="{{ asset('daftar/assets/img/portfolio/r3.jpg') }}" class="img-fluid"
                                    alt="">
                            </div>

                            <div class="portfolio-info">
                                <h3>Infromasi Rumah</h3>
                                <ul>
                                    <li><strong>Pondasi</strong>: Batu Bata/Beton Bertulang</li>
                                    <li><strong>Dinding</strong>: Bata Plaster</li>
                                    <li><strong>Kusen</strong>: Kayu Kelas II Kilat</li>
                                    <li><strong>Rangka Atap</strong>: Baja Ringan</li>
                                    <li><strong>Plafond</strong>: Gipsum + Rangka Holow</li>
                                    <li><strong>Lantai</strong>: KEramik 40x40 Motif</li>
                                    <li><strong>Kamar Mandi</strong>: Keramik</li>
                                    <li><strong>Daun Pintu</strong>: Panel</li>
                                    <li><strong>Air</strong>: Sumur Gali</li>
                                    <li><strong>Listrik</strong>: 1.300</li>
                                </ul>
                            </div>

                        </div>

                        <div class="portfolio-description">
                            <h2>Fasilitas Kelengkapan</h2>
                            <p>
                                Fasilitas kelengkapan yang ada di atas gambar, spesifikasi dan kualitas terjamin. Dan
                                akses rumah dekat dengan pusat kota.
                            </p>
                        </div>

                    </div>
                </section><!-- End Portfolio Details Section -->

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Kegiatan Belajar ======= -->
        @yield('content')
        <!-- End Frequently Asked Questions Section -->

    </main>
    <!-- End #main -->

    <!-- Modal Register -->
    <div class="modal fade" id="keluar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Registrasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                {{ $error }} <br />
                            @endforeach
                        </div>
                    @endif

                    <form action="{{ url('/akun/store') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{-- <input type="hidden" name="user_id" value="{{ auth()->user()->id }}"> --}}
                        <div class="form-group">
                            <label><b>Nama Lengkap</b></label>
                            <input type="text" class="form-control" name="name" placeholder="Nama Lengkap">
                        </div>
                        <div class="form-group">
                            <label><b>Hp</b></label>
                            <input type="number" class="form-control" name="hp" placeholder="No Telephone">
                        </div>
                        <div class="form-group">
                            <label><b>Email</b></label>
                            <input type="text" class="form-control" name="email" placeholder="Masukan Email">
                        </div>
                        <div class="form-group">
                            <label><b>Username</b></label>
                            <input type="text" class="form-control" name="username" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label><b>Password</b></label>
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <div class="form-group d-flex align-items-center justify-content-between mb-0">
                            <input type="submit" class="btn btn-primary" value="Simpan">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!--stop modal-->

    <main id="main">

        <!-- ======= Services Section ======= -->
        {{-- <section id="services" class="services section-bg">
            <div class="container">

                <div class="section-title">
                    <h2 data-aos="fade-in">yang telah di acc</h2>
                </div>

                <div class="row">
                    @foreach ($info as $item)
                        <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-right">
                            <div class="card">
                                <div class="card-img">
                                    <img class="img-fluid" style="width: 600px; height: 400px;"
                                        src="{{ url('/file_foto/' . $item->masjid->foto) }}" alt="images" />
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"><a href="">Masjid {{ $item->masjid->nama }}</a>
                                    </h5>
                                    <p class="card-text">{{ $item->masjid->lokasi }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </section><!-- End Services Section --> --}}

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Kontak</h2>
                </div>

                <div class="row">

                    <div class="col-lg-12">

                        <div class="row">
                            <div class="col-md-12">
                                @foreach ($alamat as $item)
                                    <div class="info-box" data-aos="fade-up">
                                        <i class="bx bx-map"></i>
                                        <h3>Alamat</h3>
                                        <p>{{ $item->isi }}
                                        </p>
                                    </div>
                                @endforeach
                            </div>
                            <div class="col-md-6">
                                @foreach ($email as $item)
                                    <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                                        <i class="bx bx-envelope"></i>
                                        <h3>Email</h3>
                                        <p>{{ $item->isi }}
                                    </div>
                                @endforeach
                            </div>
                            <div class="col-md-6">
                                @foreach ($hp as $item)
                                    <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                                        <i class="bx bx-phone-call"></i>
                                        <h3>No. Hp</h3>
                                        <p>{{ $item->isi }}
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">


        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>Mentari Residence</span></strong>. All Rights Reserved
            </div>

        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('daftar/assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('daftar/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('daftar/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('daftar/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('daftar/assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('daftar/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('daftar/assets/vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('daftar/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('daftar/assets/vendor/aos/aos.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('daftar/assets/js/main.js') }}"></script>

</body>

</html>
