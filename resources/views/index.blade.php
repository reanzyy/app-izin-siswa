<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SMKN 1 Cirebon</title>

    <link rel="shortcut icon" href="/adminlte/img/logo.png" type="image/x-icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Vendor CSS Files -->

    {{-- <link href="frontend/vendor/aos/aos.css" rel="stylesheet"> --}}
    <link href="frontend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="frontend/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="frontend/vendor/boxicons/css/boxicons.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="frontend/css/style.css" rel="stylesheet">

</head>

<body class="antialiased">
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1 class="text-light"><a href="#">SMKN 1 Cirebon</a></h1>
            </div>


            <nav id="navbar" class="navbar">
                @if (Route::has('login'))
                    <ul>
                        @auth
                            <li><a href="{{ url('/dashboard') }}" class="getstarted">Dashboard</a>
                            </li>
                        @else
                            <li><a href="{{ route('login') }}" class="getstarted">Log
                                    in</a></li>

                            @if (Route::has('register'))
                                <li><a href="{{ route('register') }}" class="getstarted">Register</a>
                                </li>
                            @endif
                        @endauth
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                @endif
            </nav>

        </div>

    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container" data-aos="fade-up">
            <h1>Welcome to SMKN 1 Cirebon</h1>
            <h2>Untuk membuat surat izin keluar sekolah bisa mengikuti Langkah-langkah dibawah ini</h2>
        </div>
    </section><!-- End Hero -->


    <main id="main">


        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container p-5" style="margin-top: 130px;">

                <div
                    class="col-lg-6 pt-3 pt-lg-0 content d-flex align-items-center justify-content-center flex-column gap-3">
                    <h3>Langkah-langkah membuat surat izin keluar sekolah</h3>
                    <ul>
                        <li><i class="bi bi-caret-right-fill"></i>Isi surat izin keluar sekolah yang sudah disediakan
                        </li>
                        <li><i class="bi bi-caret-right-fill"></i>Jika sudah mengisi, lalu datang ke lobby untuk
                            mengkonfirmasi kepada guru piket</li>
                        <li><i class="bi bi-caret-right-fill"></i>Jika guru piket menyetujui surat izin kalian lalu
                            meminta
                            surat izin keluar sekolah</li>
                        <li><i class="bi bi-caret-right-fill"></i>Jika sudah menerima surat izin keluar sekolah lalu
                            berikan
                            surat izin keluar sekolah kepada satpam</li>
                    </ul>
                </div>
            </div>
        </section><!-- End About Section -->

        <!-- ======= Cta Section ======= -->
        <section id="form" class="cta ">
            <div class="container" data-aos="fade-in">

                <div class="text-center">
                    <h3>Link pembuatan surat izin keluar sekolah</h3>
                    <p>Untuk membuat surat izin keluar sekolah klik dibawah ini</p>
                    <a class="cta-btn" href="{{ route('dispensasi.create') }}">Call To Action</a>
                </div>

            </div>
        </section><!-- End Cta Section -->
        <section id="cta" class="about">
            <div class="container" style="margin-top: 50px;">
                <div class="text-center p-4">
                    <h3>Surat Izin</h3>
                    <p>Aplikasi berbasis web ini merupakan inovasi unggulan SMKN 1 Cirebon. Inovasi ini mempermudah
                        prosedural izin keluar sekolah bagi siswa sekaligus sebagai media kontrol bagi guru terhadap
                        kedisiplinan para siswa. <br>
                        <br>
                        Dengan adanya inovasi ini, pengurusan izin keluar sekolah sekarang lebih mudah, cepat,
                        transparan, paperless dan termonitor. Benefits dan uses yang diperoleh adalah meningkatnya
                        kedisiplinan siswa sekolah dalam komitmen mewujudkan kedisiplinan.
                    </p>
                </div>
            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row d-flex gap-5">

                    <div class="col-lg-3 col-md-6 footer-contact align-item-center justify-center">
                        <h4>Contact Us</h4>
                        <p>
                            Jl. Perjuangan By Pass <br>
                            Sunyaragi, Cirebon 45132<br>
                            Indonesia <br>
                            <strong>Telp & Fax:</strong> +62-0231-480202<br>
                            <strong>Email:</strong> info@smkn1-cirebon.sch.id<br>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Social media</h4>
                        <div class="social-links d-flex gap-2 mt-2">
                            <a href="https://www.youtube.com/@smknegeri1cirebonofficial472" target="_blank"
                                class="twitter mr-2"><i class="bi bi-youtube"></i></a>
                            <a href="https://www.facebook.com/smknsatucirebon" target="_blank" class="facebook"><i
                                    class="bi bi-facebook"></i></a>
                            <a href="https://www.instagram.com/smkn1cirebon/" target="_blank" class="instagram"><i
                                    class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Alamat</h4>
                        <iframe class="mt-2"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15849.134770711998!2d108.51870695541989!3d-6.73520399999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f1df0e55b2ed3%3A0x51cf481547b4b319!2sSMK%20Negeri%201%20Cirebon!5e0!3m2!1sid!2sid!4v1681484764193!5m2!1sid!2sid"
                            width="350" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong><span>Serenity</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/serenity-bootstrap-corporate-template/ -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>



    <!-- Vendor JS Files -->
    {{-- <script src="frontend/vendor/aos/aos.js"></script> --}}
    <script src="frontend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="frontend/vendor/waypoints/noframework.waypoints.js"></script>

    <!-- Template Main JS File -->
    <script src="frontend/js/main.js"></script>
</body>

</html>
