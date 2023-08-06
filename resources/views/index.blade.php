<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ $tittle }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.html">Our Futsal.ID</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Lapangan</a></li>
          <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li>
            @auth
            <li class="dropdown"><a href="#"><span>Selamat Datang, {{ auth()->user()->nama_user }}</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li>
                <form action="/logout" method="POST">
                  @csrf
                  <button type="submit" class="dropdown-item"><a>Logout</a></button>
                </form>
              </li>
            </ul>
          </li> 
            @else
            <a class="nav-link scrollto" href="/login">Login</a>
            @endauth
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Welcome to our futsal pitch rental site!</h2>
          <p class="animate__animated fanimate__adeInUp">Jadikan olahraga menjadi pengalaman yang luar biasa dengan penyewaan lapangan futsal kami.</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Field rental??</h2>
          <p class="animate__animated animate__fadeInUp">Cari lapangan futsal berkualitas dengan harga terjangkau? Anda berada di tempat yang tepat!</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Booking Now!!!</h2>
          <p class="animate__animated animate__fadeInUp">Dapatkan lapangan futsal terbaik untuk pertandingan dan latihan tim Anda. Pesan sekarang dan nikmati kegembiraan bermain futsal bersama teman-teman Anda.</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>About</h2>
          <p>Who we are</p>
        </div>

        <div class="row content" data-aos="fade-up">
          <div class="col-lg-6">
            <p>
              Masih Dalam Proses Pengembangan
            </p>
          </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="row" data-aos="zoom-out">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Call To Action</h3>
            <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Call To Action</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Services</h2>
          <p>What we do offer</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="zoom-in-left">
              <div class="icon"><i class="bi bi-emoji-smile-fill" style="color: #e9bf06;"></i></div>
              <h4 class="title"><a href="">Mudah</a></h4>
              <p class="description">Memudahkan customer dalam mengecek jadwal main dan memesan lapangan futsal.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="100">
              <div class="icon"><i class="bi bi-wallet2" style="color: #06e911;"></i></div>
              <h4 class="title"><a href="">Murah</a></h4>
              <p class="description">Harga yang sangat kompetitif dapat menjadikan Kami tempat pilihan anda.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-5 mt-lg-0 ">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="200">
              <div class="icon"><i class="bi bi-check-lg" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="">Terawat</a></h4>
              <p class="description">Lapangan, Bola, dan fasilitas lainnya yang sangat kami rawat. Guna memuaskan customer.</p>
            </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Lapangan Section ======= -->
    <section id="portfolio" class="portfolio">
      @auth
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Lapangan</h2>
          <p>Lapangan Kami</p>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-end" data-aos="fade-up">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-a">Tipe A</li>
          <li data-filter=".filter-b">Tipe B</li>
          <li data-filter=".filter-c">Tipe C</li>
        </ul>

        <div class="row portfolio-container" data-aos="fade-up">

          <div class="col-lg-4 col-md-6 portfolio-item filter-a">
            <div class="portfolio-img"><img src="assets/img/TipeA/1.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Lapangan A-1</h4>
              <p>Mulai dari Rp.75.000</p>
              <a href="assets/img/TipeA/1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Lapangan A-1 "><i class="bx bx-plus"></i></a>
              <a href="detailsField.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-a">
            <div class="portfolio-img"><img src="assets/img/TipeA/2.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Lapangan A-2</h4>
              <p>Mulai dari Rp.132.000</p>
              <a href="assets/img/TipeA/2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Lapangan A-2"><i class="bx bx-plus"></i></a>
              <a href="detailsField.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-a">
            <div class="portfolio-img"><img src="assets/img/TipeA/3.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Lapangan A-3</h4>
              <p>Mulai dari Rp.300.000</p>
              <a href="assets/img/TipeA/3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Lapangan A-3"><i class="bx bx-plus"></i></a>
              <a href="detailsField.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-b">
            <div class="portfolio-img"><img src="assets/img/TipeB/1.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Lapangan B-1</h4>
              <p>Mulai dari Rp.80.000</p>
              <a href="assets/img/TipeB/1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Lapangan B-1"><i class="bx bx-plus"></i></a>
              <a href="detailsField.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-b">
            <div class="portfolio-img"><img src="assets/img/TipeB/2.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Lapangan B-2</h4>
              <p>Mulai dari Rp.150.000</p>
              <a href="assets/img/TipeB/2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Lapangan B-2"><i class="bx bx-plus"></i></a>
              <a href="detailsField.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-b">
            <div class="portfolio-img"><img src="assets/img/TipeB/3.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Lapangan B-3</h4>
              <p>Mulai dari Rp.350.000</p>
              <a href="assets/img/TipeB/3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Lapangan B-3"><i class="bx bx-plus"></i></a>
              <a href="detailsField.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 portfolio-item filter-c">
            <div class="portfolio-img"><img src="assets/img/TipeC/1.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Lapangan C-1</h4>
              <p>Mulai dari Rp.90.000</p>
              <a href="assets/img/TipeC/1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Lapangan C-1"><i class="bx bx-plus"></i></a>
              <a href="detailsField.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-c">
            <div class="portfolio-img"><img src="assets/img/TipeC/2.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Lapangan C-2</h4>
              <p>Mulai dari Rp.225.000</p>
              <a href="assets/img/TipeC/2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Lapangan C-2"><i class="bx bx-plus"></i></a>
              <a href="detailsField.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-c">
            <div class="portfolio-img"><img src="assets/img/TipeC/3.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Lapangan C-3</h4>
              <p>Mulai dari Rp.300.000</p>
              <a href="assets/img/TipeC/3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Lapangan C-3"><i class="bx bx-plus"></i></a>
              <a href="detailsField.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>

      </div>
      @else
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Lapangan</h2>
          <p>Lapangan Kami</p>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-end" data-aos="fade-up">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-a">Tipe A</li>
          <li data-filter=".filter-b">Tipe B</li>
          <li data-filter=".filter-c">Tipe C</li>
        </ul>

        <div class="row portfolio-container" data-aos="fade-up">

          <div class="col-lg-4 col-md-6 portfolio-item filter-a">
            <div class="portfolio-img"><img src="assets/img/TipeA/1.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Lapangan A-1</h4>
              <p>Mulai dari Rp.75.000</p>
              <a href="assets/img/TipeA/1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Lapangan A-1 "><i class="bx bx-plus"></i></a>
              <a href="#" class="details-link" title="More Details"><i class="bx bx-link" data-bs-toggle="modal" data-bs-target="#pelanggan"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-a">
            <div class="portfolio-img"><img src="assets/img/TipeA/2.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Lapangan A-2</h4>
              <p>Mulai dari Rp.132.000</p>
              <a href="assets/img/TipeA/2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Lapangan A-2"><i class="bx bx-plus"></i></a>
              <a href="detailsField.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-a">
            <div class="portfolio-img"><img src="assets/img/TipeA/3.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Lapangan A-3</h4>
              <p>Mulai dari Rp.300.000</p>
              <a href="assets/img/TipeA/3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Lapangan A-3"><i class="bx bx-plus"></i></a>
              <a href="detailsField.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-b">
            <div class="portfolio-img"><img src="assets/img/TipeB/1.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Lapangan B-1</h4>
              <p>Mulai dari Rp.80.000</p>
              <a href="assets/img/TipeB/1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Lapangan B-1"><i class="bx bx-plus"></i></a>
              <a href="detailsField.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-b">
            <div class="portfolio-img"><img src="assets/img/TipeB/2.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Lapangan B-2</h4>
              <p>Mulai dari Rp.150.000</p>
              <a href="assets/img/TipeB/2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Lapangan B-2"><i class="bx bx-plus"></i></a>
              <a href="detailsField.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-b">
            <div class="portfolio-img"><img src="assets/img/TipeB/3.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Lapangan B-3</h4>
              <p>Mulai dari Rp.350.000</p>
              <a href="assets/img/TipeB/3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Lapangan B-3"><i class="bx bx-plus"></i></a>
              <a href="detailsField.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 portfolio-item filter-c">
            <div class="portfolio-img"><img src="assets/img/TipeC/1.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Lapangan C-1</h4>
              <p>Mulai dari Rp.90.000</p>
              <a href="assets/img/TipeC/1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Lapangan C-1"><i class="bx bx-plus"></i></a>
              <a href="detailsField.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-c">
            <div class="portfolio-img"><img src="assets/img/TipeC/2.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Lapangan C-2</h4>
              <p>Mulai dari Rp.225.000</p>
              <a href="assets/img/TipeC/2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Lapangan C-2"><i class="bx bx-plus"></i></a>
              <a href="detailsField.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-c">
            <div class="portfolio-img"><img src="assets/img/TipeC/3.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Lapangan C-3</h4>
              <p>Mulai dari Rp.300.000</p>
              <a href="assets/img/TipeC/3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Lapangan C-3"><i class="bx bx-plus"></i></a>
              <a href="detailsField.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>

      </div>
      @endauth
    </section><!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4" data-aos="fade-right">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Jayapura, Papua</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>nomorsaya2@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+62 13447 46157</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Our Futsal.ID</h3>
      <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright By <strong><span>Rafael</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">Bootstrap</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

   
  <!-- Modal pelanggan-->
  <div class="modal fade " id="pelanggan" tabindex="-1" aria-labelledby="pelangganModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="loginModalLabel">Alert</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="alert alert-secondary" role="alert">
                  Anda Harus Login Terlebih Dahulu!!!
                </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
          </div>
      </div>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>