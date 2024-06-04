

@extends('layoutdua.main')
@section('content')
<section class="card-table">
  <div class="container">
    <div class="card">
      <div class="card-header text-white text-center" style="background-color: #a377b6">FIX CUP 5.0 Created By BEM FIK Udinus</div>
      <div class="card-body bg-body-secondary">
        <h4 class="text-black py-3">Detail Pemesanan Kategori PRODI FIK UDINUS</h4>
        @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif
        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
        <div class="row" style="margin: 0 auto; /* Center horizontally */
        float: none; /* Remove any float */">
          <div class="col-lg-6">
            <div class="card">
              <div class="container">
                <a target="_blank" class="text-center px-3" href="https://docs.google.com/document/d/1X8EVESucLvBed_s9fS_UuJd9KzF8bZk9/edit?usp=sharing&ouid=103007999727832807617&rtpof=true&sd=true">
                  <p class="text-danger text-center fw-bold text-uppercase fs-4 border border-danger">Pengisian PDF sesuai dengan Format Pendaftaran ini</p>
                </a>
              </div>
              <div class="card-body">
                <form id="complete-form" enctype="multipart/form-data" method="POST" action="{{ route('pemesananFik.store') }}">
                  @csrf
                  <div class="mb-3">
                      <label for="nama_fik" class="form-label">Nama Tim</label>
                      <input type="text" class="form-control" id="nama_fik" placeholder="Nama Tim" name="nama_fik" />
                  </div>  
                  <div class="mb-3">
                      <label for="file_fik" class="form-label">Data Pemain dan Official <span class="text-danger">*Format Pdf sesuai format pendaftaran</span></label>
                      <input type="file" class="form-control" id="file_fik" name="file_fik" />
                  </div>
                  <div class="mb-3">
                      <label for="fik_kapten" class="form-label">Kontak Kapten</label>
                      <input type="text" class="form-control" id="nama_fik" placeholder="Nama" name="fik_kapten" />
                      <input type="text" class="form-control mt-3" id="nofik_kapten" placeholder="No Telp" name="nofik_kapten" />
                  </div>
                  <div class="mb-3">
                      <label for="fik_official" class="form-label">Kontak Official</label>
                      <input type="text" class="form-control" id="fik_official" placeholder="Nama" name="fik_official" />
                      <input type="text" class="form-control mt-3" id="nofik_official" placeholder="No Telp" name="nofik_official" />
                  </div>
                  <div class="mb-3">
                    <h4>Payment Method</h4>
                    <div class="col-12 mt-3">
                      <hr class="bg-body-secondary">
                    </div>
                    <div class="col-12 mt-3">
                      <img src="assets/img/shopee.png" style="width: 50px" alt="" />
                      <span class="p-3"><span class="fw-bold">0821-3726-6904</span> a/n zoee00</span>
                    </div>
                    <div class="col-12 mt-3">
                      <hr class="bg-body-secondary">
                    </div>
                    <div class="col-12 mt-3">
                      <img src="assets/img/dana.jpg" style="width: 50px" alt="" />
                      <span class="p-3"><span class="fw-bold">0821-3726-6904</span> a/n Enzo Styan Nazareno</span>
                    </div>
                    <div class="col-12 mt-3">
                      <hr class="bg-body-secondary">
                    </div>
                    <div class="col-12 mt-3">
                      <img src="assets/img/mandiri.jpg" style="width: 50px" alt="" />
                      <span class="p-3"><span class="fw-bold">1350020211965</span> a/n ENZO STYAN NAZARENO</span>
                    </div>
                    <div class="col-12 mt-3">
                      <hr class="bg-body-secondary">
                    </div>
                  </div>
                  <div class="mb-3">
                      <label for="bukti_tffik" class="form-label">Input Bukti Transfer <span class="text-danger">*file max 2 mb.</span></label>
                      <input type="file" class="form-control" id="bukti_tffik" name="bukti_tffik" />
                  </div>
                  <button type="submit" class="btn btn-primary" style="width: 100%">SUBMIT</button>
              </form>
              
                <div class="col-12 mt-3">
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
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

@push('myscript')
    <script>
      function validateForm() {
          var name = document.getElementById("nama_fik").value;
          var file = document.getElementById("file_fik").value;
          var kapten = document.getElementById("fik_kapten").value;
          var nokapten = document.getElementById("nofik_kapten").value;
          var ofc = document.getElementById("fik_official").value;
          var noofc = document.getElementById("nofik_official").value;
          var buktitf = document.getElementById("bukti_tffik").value;

          if (name === ""  || file === "" || kapten === "" || nokapten === "" || ofc === "" || noofc === ""
          || buktitf === ""
          ) {
              alert("Semua form harus diisi!");
              return false;
          }
      }
    </script>
@endpush