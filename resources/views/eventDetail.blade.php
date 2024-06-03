@extends('layoutdua.main')
@section('content')
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
                <a href="/pemesanan" class="text-decoration-none">
                  <div class="card hover-shadow">
                    <div class="card-body">
                      <h4 class="card-title">SMA/SMK/MA</h4>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-12 mb-4">
                <a href="/pemesanan" class="text-decoration-none">
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
@endsection