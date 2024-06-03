<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>InRaga</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/iconInraga.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />

    <style>
      .hover-shadow {
        transition: box-shadow 0.3s ease-in-out; /* Ubah ease menjadi ease-in-out */
      } 
      .hover-shadow:hover {
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
      }
      #header {
        background: linear-gradient(to right, rgba(150, 81, 161, 0.8), rgba(194, 141, 203, 0.8)), url("assets/img/hero-bg.jpg");
        background-size: cover;
        background-position: center;
      }
    </style>
  </head>
  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
      <div class="container d-flex justify-content-between align-items-center">
        <div class="logo">
          <h1>
            <a href="index.html"><img src="assets/img/logo3d.png" alt="" class="img-fluid" />InRaga</a>
          </h1>
        </div>
        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="active" href="/home">Home</a></li>
            <li><a href="/product">Product
            </a></li>
            <!-- <li><a href="blog.html">Blog</a></li> -->
            <li><a href="/gallery">Gallery</a></li>
            <li><a href="/event">Event</a></li>
            <li><a href="/mitra">Jadi Mitra Kami</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
      </div>
    </header>
    <!-- End Header -->

    <main id="main" style="padding-top: 100px">
      <!-- ======= Features Section ======= -->

      <section class="detail-section pt-2">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-12">
              <img src="assets/img/detailimg.png" class="img-fluid" alt="" />
            </div>
            <div class="col-lg-6 col-md-12 mt-4 mt-lg-0">
              <div class="col-12">
                <h4>Deskripsi</h4>
                <hr style="border: 2px solid rgb(255, 0, 247)" />
                <p class="text-black">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum deleniti repellendus inventore eum aspernatur eligendi assumenda nisi sed aliquid, aut doloribus commodi delectus in corporis hic tenetur rem cupiditate.
                  Harum.
                </p>
              </div>
              <div class="card bg-body-secondary">
                <div class="card-body">
                  <span class="fw-bold">FIX CUP 2024</span>
                  <div class="col-12 mt-3">
                    <img src="assets/img/ikonset/Calendar.svg" alt="" />
                    <span class="p-3">01 Juni 2024</span>
                  </div>
                  <div class="col-12 mt-3">
                    <img src="assets/img/ikonset/Clock.svg" alt="" />
                    <span class="p-3">14:00 - 18:00</span>
                  </div>
                  <div class="col-12 mt-3">
                    <img src="assets/img/ikonset/MapPin.svg" alt="" />
                    <span class="p-3">Gor Manunggal Jati</span>
                  </div>
                  <div class="container pt-3">
                    <hr class="bg-secondary" />
                    <div class="col-12">
                      <span class="text-secondary-emphasis">Beban Sejahtera</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12 pt-4 mt-lg-0">
              <div class="container">
                <div class="row">
                  {{-- [poster] --}}
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12 pt-4 mt-lg-0">
              <div class="container">
                <div class="row">
                  <div class="col-12">
                    <h4>Pilih Kategori</h4>
                    <div class="col-12 mb-4">
                      <a href="pemesanan.html" class="text-decoration-none">
                        <div class="card hover-shadow">
                          <div class="card-body">
                            <h4 class="card-title">SMA/SMK/MA</h4>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="col-12 mb-4">
                      <a href="pemesanan.html" class="text-decoration-none">
                        <div class="card hover-shadow">
                          <div class="card-body">
                            <h4 class="card-title">PRODI TI</h4>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <!-- End #main -->

    
  <!-- ======= Footer ======= -->
  <footer class="footer" role="contentinfo">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-4 mb-md-0">
          <!-- <h3>Dapatkan Aplikasinya</h3> -->
          <a id="download"  href="https://play.google.com/store/apps/details?id=com.inraga.inraga" target="_blank"><img src="assets/img/google-play-badge.png" alt="" width="230px"></a>
        </div>
        <div class="col-md-8 ms-auto">
          <div class="row site-section pt-0">
            <div class="col-md-4 mb-4 mb-md-0">
              <h3>Bantuan</h3>
              <ul class="list-unstyled">
                <li><a href="/faq">FAQ</a></li>
                <li><a href="/contact">Contact Us</a></li>
                <li><a href="/syaratKetentuan">Syarat dan Ketentuan</a></li>
                <li><a href="/kebijakanPrivasi">Kebijakan Privasi</a></li>
              </ul>
            </div>
            <div class="col-md-4 mb-4 mb-md-0">
              <h3>Mitra</h3>
              <ul class="list-unstyled">
                <li><a href="/mitra">Merchant</a></li>
                <li><a href="/partnership">Partnership</a></li>
              </ul>
            </div>
            <div class="col-md-4 mb-4 mb-md-0">
              <h3>Ikuti Kami</h3>
              <ul class="list-unstyled">
                <li><a href="https://www.instagram.com/inraga.id/" target="_blank">Instagram</a></li>
                <li><a href="#" target="_blank">Facebook</a></li>
                <li><a href="#" target="_blank">Twitter</a></li>
                <li><a href="https://www.linkedin.com/company/inraga/" target="_blank">Linkedin</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="row justify-content-center text-center">
        <div class="col-md-7">
          <p class="copyright">&copy; Copyright InRaga 2024</p>

        </div>
      </div>

    </div>
  </footer>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
