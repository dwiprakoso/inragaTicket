@extends('layout.master')
  

  <!-- ======= Hero Section ======= -->
  <section class="hero-section" id="hero">

    <div class="wave">

      <svg width="100%" height="355px" viewBox="0 0 1920 355" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
            <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,757 L1017.15166,757 L0,757 L0,439.134243 Z" id="Path"></path>
          </g>
        </g>
      </svg>

    </div>

    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 hero-text-image">
          <div class="row">
            <div class="col-lg-7 text-center text-lg-start" style="width: 500px; margin-right: 150px;">
              <h1 data-aos="fade-right" style="font-size: 55px; margin-top: 45px;">Selamat Datang di <span style="text-decoration: underline;">InRaga</span></h1>
              <p class="mb-5" data-aos="fade-right" data-aos-delay="100" style="font-size: 30px;">Change Your Lifestyle with <span style="font-weight: bold;">InRaga.</span></p>
              <p data-aos="fade-right" data-aos-delay="200" data-aos-offset="-500"><a href="#download" class="btn btn-outline-white">Get started</a></p>
            </div>
            <div class="col-lg-5">
              <img src="assets/img/inragaPhone.png" alt="Image" class="phone-1" data-aos="fade-right" style="width: 110%;">
            </div>
          </div>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  @section('content')
      <!-- ======= Home Section ======= -->
    <section class="section">
      <div class="container">

        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-5" data-aos="fade-up">
            <h2 class="section-heading">Mengapa Memakai InRaga</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="">
            <div class="feature-1 text-center">
              <div class="">
                <img class="card-img-top" src="assets/img/ikonset/mudahPraktis.png" style="
                width: 300px;" alt="Card image cap">
              </div>
              <!-- <div class="wrap-icon icon-1">
                <i class="bi bi-people"></i>
              </div> -->
              <h3 class="mt-5" style="font-size: 23px; font-weight: thin;">Terpusat</h3>
              <p>Cari Kompetisi Sports / E-Sport dala satu aplikasi di ragaBattle</p>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="">
            <div class="feature-1 text-center">
              <div class="">
                <img class="card-img-top" src="assets/img/ikonset/mencariLapangan.png" style="
                width: 300px;" alt="Card image cap" >
              </div>
              <!-- <div class="wrap-icon icon-1">
                <i class="bi bi-people"></i>
              </div> -->
              <h3 class="mt-5" style="font-size: 23px; font-weight: thin;">Efisien</h3>
              <p>Nonton pertandingan lebih mudah dengan ragaTicket</p>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="">
            <div class="feature-1 text-center">
              <div class="">
                <img class="card-img-top" src="assets/img/ikonset/pilihanLapangan.png" alt="Card image cap" style="
                width: 300px;">
              </div>
              <!-- <div class="wrap-icon icon-1">
                <i class="bi bi-people"></i>
              </div> -->
              <h3 class="mt-5" style="font-size: 23px; font-weight: thin;">Kolaboratif</h3>
              <p>Buat kompetisi dan kolalborasi dengn kami untuk mendapatkan sponsor !</p>
            </div>
          </div>
        </div>

      </div>
    </section>
  @endsection


  

</body>

</html>