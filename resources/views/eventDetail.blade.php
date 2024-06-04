@extends('layoutdua.main')
@section('content')
<section class="detail-section pt-2">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-12">
        <img src="assets/img/event/poster.jpeg" class="img-fluid" alt="...">
      </div>
      <div class="col-lg-6 col-md-12 mt-4 mt-lg-0">
        <div class="col-12">
          <h4>Deskripsi</h4>
          <hr style="border: 2px solid rgb(255, 0, 247)" />
          <p class="text-black">
            <span class="fw-bold">FIX CUP</span> adalah sebuah kegiatan yang bertujuan untuk mewadahi minat dan bakat peserta didik, terutama siswa-siswi dari SMA/SMK sederajat di seluruh Kota Semarang serta mahasiswa dari Fakultas Ilmu Komputer. Kegiatan ini berfokus pada pertandingan olahraga futsal. Pada kesempatan kali ini, FIX CUP mengusung tema "One Team One Dream" yang menjadi landasan utama dalam penyelenggaraan event futsal. Event ini tidak hanya melibatkan pertandingan futsal antar SMA/SMK, tetapi juga mencakup pertandingan futsal antar program studi di Fakultas Ilmu Komputer. Selain itu, FIX CUP juga mengadakan lomba supporter tingkat SMA/SMK se-Kota Semarang, yang diharapkan dapat meningkatkan semangat sportivitas dan kebersamaan di antara peserta.
            <br>
            <a href="https://bit.ly/BookletSMAFIXCUP"><span class="fw-bold">Guide Book SMA/SMK</span></a><br>
            <div class="col-12">
              <hr class="bg-body-secondary">
            </div>
            <a href="https://bit.ly/BookletProdiFIXCUP"><span class="fw-bold">Guide Book Prodi FIK Udinus</span></a>
          </p>
        </div>
        <div class="card" style="background-color: rgba(255, 0, 247, 0.39) ">
          <div class="card-body">
            <span class="fw-bold">FIX CUP 2024</span>
            <div class="col-12 mt-3">
              <img src="assets/img/ikonset/Calendar.svg" alt="" />
              <span class="p-3">27 - 28 Juni 2024</span>
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
                <span class="text-secondary-emphasis">BEM FIK Udinus</span>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-12">
            <h4>Pilih Kategori</h4>
            <div class="col-12 mb-4">
              <a href="/pemesananSma" class="text-decoration-none">
                <div class="card hover-shadow">
                  <div class="card-body">
                    <h4 class="card-title">SMA/SMK/MA</h4>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-12 mb-4">
              <a href="/pemesananFik" class="text-decoration-none">
                <div class="card hover-shadow">
                  <div class="card-body">
                    <h4 class="card-title">PRODI FIK UDINUS</h4>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="row mt-3">
          <h3>CONTACT PERSON</h3>
                    <div class="row">
                        <div class="col-12">
                            <a href="https://wa.me/082328517256" target="_blank"><span class="fs-5">082328517256 PUTRI ROSSA</span></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <a href="https://wa.me/085729641285" target="_blank"><span class="fs-5">085729641285 THEODORA</span></a>
                        </div>
                    </div>
        </div>
      </div>
      
      
    </div>
  </div>
</section>
@endsection