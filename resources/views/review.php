<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <title>Review</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- Favicons -->
<link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="home" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <h1 class="sitename">Novi Salon</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/" class="active">Home</a></li>
          <li><a href="review">Review</a></li>
          <li><a href="login">Login</a></li>
          <li><a href="register">Register</a></li>
        </ul>
		<i class="mobile-nav-toggle d-xl-none bi bi-list" id="sidebarToggle" style="cursor: pointer;"></i>
      </nav>

    </div>
  </header>

<!-- Sidebar (Modal or Dropdown) -->
<div id="sidebarMenu" class="sidebar bg-light" style="display: none;">
    <ul class="navbar-nav">
        <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="review" class="nav-link">Review</a></li>
        <li class="nav-item"><a href="Login/Sign-Up" class="nav-link">Login/Sign-Up</a></li>
    </ul>
</div>

<section id="perawatan-pelayanan" class="perawatan-pelayanan section">
    <h3>REVIEW PERAWATAN & LAYANAN</h3>
    <div class="card-container">
        <!-- Card Creambath Rambut -->
        <div class="card" style="width: 18rem;">
            <img src="assets/img/salon2.jpeg" alt="Image" class="img-fluid card-img-top">
            <div class="card-body">
                <h5 class="card-title">Creambath Rambut</h5>
                <p class="card-text">Rasakan sensasi relaksasi dengan creambath rambut kami! Segera jadwalkan kunjunganmu!</p>
                <button type="button" class="btn btn-primary" onclick="openReview('Creambath Rambut')">Review</button>
            </div>
        </div>
        
        <!-- Card Perawatan Wajah -->
        <div class="card" style="width: 18rem;">
            <img src="assets/img/salon4.jpeg" alt="Image" class="img-fluid card-img-top">
            <div class="card-body">
                <h5 class="card-title">Perawatan Wajah</h5>
                <p class="card-text">Cantik Dimulai dari Sini! Dapatkan perawatan wajah terbaik hanya di Novi-Salon.</p>
                <button type="button" class="btn btn-primary" onclick="openReview('Perawatan Wajah')">Review</button>
            </div>
        </div>
        
        <!-- Card Manicure -->
        <div class="card" style="width: 18rem;">
            <img src="assets/img/salon5.jpeg" alt="Image" class="img-fluid card-img-top">
            <div class="card-body">
                <h5 class="card-title">Manicure</h5>
                <p class="card-text">Manicure yang Menawan, Hanya di Novi-Salon! Jangan lewatkan!</p>
                <button type="button" class="btn btn-primary" onclick="openReview('Manicure')">Review</button>
            </div>
        </div>
        
        <!-- Card Cat Rambut -->
        <div class="card" style="width: 18rem;">
            <img src="assets/img/salon6.jpeg" alt="Image" class="img-fluid card-img-top">
            <div class="card-body">
                <h5 class="card-title">Cat Rambut</h5>
                <p class="card-text">Tampil beda dengan warna rambut yang menawan hanya di Novi-Salon!</p>
                <button type="button" class="btn btn-primary" onclick="openReview('Cat Rambut')">Review</button>
            </div>
        </div>
    </div>
</section>

<!-- Review Section -->
<div id="reviewSection" class="container" style="display: none;">
    <h1 class="mt-5 mb-5" id="reviewTitle">Review</h1>
    <div class="card">
        <div class="card-header" id="reviewServiceTitle">Creambath Rambut</div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-4 text-center">
                    <h1 class="text-warning mt-4 mb-4">
                        <b><span id="average_rating">0.0</span> / 5</b>
                    </h1>
                    <div class="mb-3">
                        <i class="fas fa-star star-light mr-1 main_star"></i>
                        <i class="fas fa-star star-light mr-1 main_star"></i>
                        <i class="fas fa-star star-light mr-1 main_star"></i>
                        <i class="fas fa-star star-light mr-1 main_star"></i>
                        <i class="fas fa-star star-light mr-1 main_star"></i>
                    </div>
                    <h3><span id="total_review">0</span> Review</h3>
                </div>
                <div class="col-sm-4">
                    <!-- Progress bars for rating breakdown -->
                    <p>
                        <div class="progress-label-left"><b>5</b> <i class="fas fa-star text-warning"></i></div>
                        <div class="progress-label-right">(<span id="total_five_star_review">0</span>)</div>
                        <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="five_star_progress"></div>
                        </div>
                    </p>
                    <!-- Tambahkan bar untuk rating 4, 3, 2, dan 1 -->
                </div>
                <div class="col-sm-4 text-center">
                    <h3 class="mt-4 mb-3">Write Review Here</h3>
                    <button type="button" name="add_review" id="add_review" class="btn btn-primary">Review</button>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5" id="review_content"></div>
</div>

<script>
    function openReview(serviceName) {
        document.getElementById('reviewSection').style.display = 'block';
        document.getElementById('reviewServiceTitle').innerText = serviceName;
    }
</script>

    <!-- Modal for submitting a review -->
    <div id="review_modal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Submit Review</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h4 class="text-center mt-2 mb-4">
                        <i class="fas fa-star star-light submit_star mr-1" id="submit_star_1" data-rating="1"></i>
                        <i class="fas fa-star star-light submit_star mr-1" id="submit_star_2" data-rating="2"></i>
                        <i class="fas fa-star star-light submit_star mr-1" id="submit_star_3" data-rating="3"></i>
                        <i class="fas fa-star star-light submit_star mr-1" id="submit_star_4" data-rating="4"></i>
                        <i class="fas fa-star star-light submit_star mr-1" id="submit_star_5" data-rating="5"></i>
                    </h4>
                    <div class="form-group">
                        <input type="text" name="user_name" id="user_name" class="form-control" placeholder="Enter Your Name" />
                    </div>
                    <div class="form-group">
                        <textarea name="user_review" id="user_review" class="form-control" placeholder="Type Review Here"></textarea>
                    </div>
                    <div class="form-group text-center mt-4">
                        <button type="button" class="btn btn-primary" id="save_review">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


<script>
    function openReview(serviceName) {
        // Tampilkan section review dan ubah judul sesuai layanan
        document.getElementById('reviewSection').style.display = 'block';
        document.getElementById('reviewServiceTitle').innerText = serviceName;
        document.getElementById('reviewTitle').innerText = "Review " + serviceName;
        
        // Reset nilai rating dan progress (jika diperlukan)
        document.getElementById('average_rating').innerText = '0.0';
        document.getElementById('total_review').innerText = '0';
        document.getElementById('total_five_star_review').innerText = '0';
        document.getElementById('five_star_progress').style.width = '0%';

        // Scroll ke section review setelah tampil
        document.getElementById('reviewSection').scrollIntoView({ behavior: 'smooth' });
    }

    function writeReview() {
        alert("Fitur penulisan review belum tersedia. Fitur ini dapat ditambahkan sesuai kebutuhan.");
    }
</script>

	<footer id="footer" class="footer light-background">
    <div class="container">
        <div class="row g-4 justify-content-center">
            <div class="col-md-6 col-lg-3 mb-3 mb-md-0 text-center">
                <div class="widget">
                    <h3 class="widget-heading">About Us</h3>
                    <p class="mb-4">
                        Novi Salon menawarkan layanan kecantikan profesional untuk membuat Anda tampil cantik dan percaya diri. Dengan tim ahli, kami siap memberikan perawatan terbaik yang sesuai dengan kebutuhan Anda.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-3 mb-md-0 text-center">
                <div class="widget">
                    <h3 class="widget-heading">Hubungi kami</h3>
                    <ul class="list-unstyled social-icons light mb-3">
                        <li><a href="#"><span class="bi bi-facebook"></span></a></li>
                        <li><a href="#"><span class="bi bi-twitter"></span></a></li>
                        <li><a href="#"><span class="bi bi-instagram"></span></a></li>
                        <li><a href="#"><span class="bi bi-linkedin"></span></a></li>
                        <li><a href="#"><span class="bi bi-youtube"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Link to External Script -->
<script src="js/script.js"></script>
</body>
</html>
