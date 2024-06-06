<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SDN SEMEMI II SURABAYA</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Logo Header Atas -->
    <link href="{{ asset('assets/img/icon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/icon2.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Arsha - v2.3.1
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo mr-auto"><a href="/">SEMIDU</a></h1>
            <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="/">Beranda</a></li>
                    <li class="drop-down"><a href="">Tentang Kami</a>
                        <ul>
                            <li><a href="{{ url('/') }}">Kata Sambutan</a></li>
                            <li><a href="{{ url('profilguru') }}">Data Guru</a></li>
                            <li><a href="{{ url('artikel/user') }}">Artikel</a></li>
                            <li><a href="#">Program Sekolah</a></li>
                            <li><a href=>Visi Misi</a></li>

                        </ul>
                    </li>

                    <!-- Aplikasi Sekolah -->
                    <li class="drop-down"><a href="">Aplikasi Sekolah</a>
                        <ul>
                            <li><a href=http://103.137.110.214:82/ target="_blank">Ujian CBT</a></li>
                            <li><a href=https://rapor.dispendik.surabaya.go.id/ target="_blank">Rapor Online</a></li>
                            <li><a href=https://dapo.kemdikbud.go.id/ target="_blank">Dapodik</a></li>
                            <li><a href=http://103.137.110.214:83/ target="_blank">Aplikasi Kelulusan</a></li>
                            <li><a href=http://103.137.110.214:83/ target="_blank">Daftar Ulang Siswa Baru</a></li>
                        </ul>
                    </li>
                    <!-- End Aplikasi Sekolah -->

                    <!-- Website Penting-->
                    <li class="drop-down"><a href="">Website Penting</a>
                        <ul>
                            <li><a href=https://dispendik.surabaya.go.id/ target="_blank">Dispendik Surabaya</a></li>
                            <li><a href=https://dapo.kemdikbud.go.id/ target="_blank">Dapodik</a></li>
                            <li><a href=https://tryoutonline.dispendik.surabaya.go.id/ target="_blank">TryOut Online</a>
                            </li>
                            <li><a href=https://siagus.dispendik.surabaya.go.id/login target="_blank">SiAgus</a></li>
                            <li><a href=https://rapor.dispendik.surabaya.go.id/ target="_blank">Rapot Online</a></li>
                        </ul>
                    </li>
                    <!-- End Website Penting -->
                    <!--Menu Kegiatan Sekolah-->
                    <li><a href=berita>Berita</a></li>
                    <li><a href=https://surabaya.siap-ppdb.com/ target="_blank">PPDB</a></li>
                    <li><a href=kegiatan>Kegiatan Sekolah</a></li>
                    @if (Route::has('login'))
                    @auth
                    <li> <a href="{{ route('logout') }}">Logout</a> </li>
                    @else
                    <li> <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a> </li>
                    @endauth
                    @endif
                </ul>
            </nav><!-- .nav-menu -->


        </div>
    </header>
    <!-- Batas Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1>SDN SEMEMI II SURABAYA</h1>
                    <h2>SEKOLAH BERPRESTASI, KREATIF,DAN INOVATIF</h2>
                    <div class="d-lg-flex">
                        <a href="#about" class="btn-get-started scrollto">Tentang SDN SEMEMI II</a>
                        <a href="https://www.youtube.com/watch?v=m3N06J1H8SM&t" class="venobox btn-watch-video"
                            data-vbtype="video" data-autoplay="true"> Profil Sekolah <i
                                class="icofont-play-alt-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset('assets/img/hero-img.png')}}" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">
        
        @section('konten')
        @show

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-newsletter">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h4>Ikuti Kami</h4>
                        <p>Dengan Tulis Email dan Klik Tombol Subscribe</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>SDN SEMEMI II SURABAYA</h3>
                        <p>
                            SDN SEMEMI II SURABAYA <br>
                            Jl Bandarejo<br>
                            Surabaya <br><br>
                            <strong>Phone:</strong> 031771425 <br>
                            <strong>Email:</strong> admin@sdnsememi2sby.sch.id<br>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Akses Cepat</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href=index.html>Beranda</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a
                                    href="https://rapor.dispendik.surabaya.go.id/">Rapot Online</a> </li>
                            <li><i class="bx bx-chevron-right"></i> <a href=guru.html>Data Guru</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href=>Visi Misi</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Website Penting</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i>
                                <a href="https://dispendik.surabaya.go.id">
                                    Dispendik Surabaya</a>
                            </li>
                            <li><i class="bx bx-chevron-right"></i>
                                <a href="https://dapo.kemdikbud.go.id/">Dapodik</a></li>
                            <li><i class="bx bx-chevron-right"></i>
                                <a href="https://tryoutonline.dispendik.surabaya.go.id/">
                                    TryOut Online</a>
                            </li>
                            <li><i class="bx bx-chevron-right"></i>
                                <a href="https://siagus.dispendik.surabaya.go.id/login/">
                                    SiAgus</a>
                            </li>
                            <li><i class="bx bx-chevron-right"></i>
                                <a href="https://rapor.dispendik.surabaya.go.id/">
                                    Rapot Online</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Sosial Media</h4>
                        <p>Terus Ikuti Perkembangan Kami di</p>
                        <div class="social-links mt-3">
                            <a href="https://twitter.com/?lang=id" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="https://www.facebook.com/" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="https://www.instagram.com/sdnsememi02/" class="instagram">
                                <i class="bx bxl-instagram"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>SDN SEMEMI II SURABAYA</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
                Designed by <a href="https://google.com/">Jagad | NurWidyaBahari</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @include('sweetalert::alert')
</body>

</html>
