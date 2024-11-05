<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/logo.png') }}" rel="icon">
    <link href="{{ asset('assets/img/logo.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <style>
    body {
        background: url('{{ asset('assets/img/background.jpg') }}') no-repeat center center fixed;
        background-size: cover;
        font-family: 'Roboto', sans-serif;
    }
    .card {
        background-color: rgba(255, 192, 203, 0.9); /* Warna pink muda */
        border-radius: 15px;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        margin: 50px auto;
        padding: 30px;
        max-width: 400px;
    }
    h2 {
        margin-bottom: 20px;
        font-weight: 500;
        text-align: center;
        color: #ff69b4; /* Warna pink untuk judul */
    }
    .form-group {
        margin-bottom: 15px;
    }
    .btn {
        background-color: #ff69b4; /* Warna pink */
        border: none;
        border-radius: 25px;
        padding: 10px 20px;
        font-size: 16px;
        transition: background-color 0.3s;
    }
    .btn:hover {
        background-color: #ff1493; /* Warna pink lebih gelap saat hover */
    }
    .alert {
        margin-bottom: 20px;
        background-color: #ffb3d9; /* Warna latar belakang alert pink */
        color: #d5006d; /* Warna teks alert */
    }
    .text-center a {
        color: #ff69b4; /* Warna pink untuk tautan */
        text-decoration: none;
    }
    .text-center a:hover {
        text-decoration: underline;
    }
    footer {
        background-color: #ffeef8; /* Warna latar belakang footer pink muda */
        color: #d5006d; /* Warna teks footer */
    }
</style>
</head>

<body class="index-page">

<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="/" class="logo d-flex align-items-center">
            <img src="{{ asset('assets/img/logo.png') }}" alt="">
            <h1 class="sitename">Novi Salon</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="/" class="active">Home</a></li>
                <li><a href="{{ route('review') }}">Review</a></li>
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

    </div>
</header>

<main class="main">
    <div class="container">
        @yield('content')
    </div>
</main>

<footer id="footer" class="footer light-background">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-6 col-lg-3 mb-3 mb-md-0">
                <div class="widget">
                    <h3 class="widget-heading">About Us</h3>
                    <p class=" mb-4">
                        Novi Salon menawarkan layanan kecantikan profesional untuk membuat Anda tampil cantik dan percaya diri. Dengan tim ahli, kami siap memberikan perawatan terbaik yang sesuai dengan kebutuhan Anda.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 pl-lg-5">
                <div class="widget">
                    <h3 class="widget-heading">Hubungi kami</h3>
                    <ul class="list-unstyled social-icons light mb-3">
                        <li><a href="#"><span class="bi bi-facebook"></span></a></li>
                        <li><a href="#"><span class="bi bi-twitter-x"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset ('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

<!-- Main JS File -->
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>