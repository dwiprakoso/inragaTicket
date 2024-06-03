@extends('layoutdua.main')
@section('content')
<section class="card-table">
  <div class="container">
    <div class="card">
      <div class="card-header text-white text-center" style="background-color: #a377b6">- - - - - - - - - - - - - -</div>
      <div class="card-body bg-body-secondary">
        <h4 class="text-black py-3">Detail Pemesanan Kategori SMA/SMK/MA</h4>
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
        <div class="row">
          <div class="col-lg-6 col-md-12 pt-4 mt-lg-0">
            <div class="card">
              <div class="container">
                <a target="_blank" class="text-center px-3" href="https://docs.google.com/document/d/1X8EVESucLvBed_s9fS_UuJd9KzF8bZk9/edit?usp=drivesdk&ouid=101569870764359329918&rtpof=true&sd=true">
                  <p class="text-danger text-center fw-bold text-uppercase fs-4 border border-danger">Pengisian PDF sesuai dengan Guide Book ini</p>
                </a>
              </div>
              <div class="card-body">
                <form id="complete-form" enctype="multipart/form-data" method="POST" action="/pemesananSma/store">
                  @csrf
                  <div class="mb-3">
                    <label for="nama_sekolah" class="form-label">Nama Sekolah</label>
                    <input type="text" class="form-control" id="nama_sekolah" placeholder="SMA/SMK/MA" name="nama_sekolah" />
                  </div>
                  <div class="mb-3">
                    <label for="logo_sekolah" class="form-label">Logo Sekolah</label>
                    <input type="file" class="form-control" id="logo_sekolah" name="logo_sekolah" />
                  </div>
                  <div class="mb-3">
                    <label for="file_tim" class="form-label">Data Pemain dan Official <span class="text-danger">*Format Pdf sesuai guidebook</span></label>
                    <input type="file" class="form-control" id="file_tim" name="file_tim" />
                  </div>
                  <div class="mb-3">
                    <label for="nama_kapten" class="form-label">Kontak Kapten</label>
                    <input type="text" class="form-control" id="nama_kapten" placeholder="Nama" name="nama_kapten" />
                    <input type="text" class="form-control mt-3" id="no_kapten" placeholder="No Telp" name="no_kapten" />
                  </div>
                  <div class="mb-3">
                    <label for="nama_official" class="form-label">Kontak Official</label>
                    <input type="text" class="form-control" id="nama_official" placeholder="Nama" name="nama_official" />
                    <input type="text" class="form-control mt-3" id="no_official" placeholder="No Telp" name="no_official" />
                  </div>
                  <div class="mb-3">
                    <label for="nama_capo" class="form-label">Kontak Capo</label>
                    <input type="text" class="form-control" id="nama_capo" placeholder="Nama" name="nama_capo" />
                    <input type="text" class="form-control mt-3" id="no_capo" placeholder="No Telp" name="no_capo" />
                  </div>
                  
                  <div class="mb-3">
                    <h4>Payment Method</h4>
                    <div class="col-12 mt-3">
                      <hr class="bg-body-secondary">
                    </div>
                    <div class="col-12 mt-3">
                      <img src="assets/img/dana.jpg" style="width: 50px" alt="" />
                      <img src="assets/img/shopee.png" style="width: 50px" alt="" />
                      <span class="p-3"><span class="fw-bold">0821-3726-6904</span> a/n enzo styan</span>
                    </div>
                    <div class="col-12 mt-3">
                      <hr class="bg-body-secondary">
                    </div>
                    <div class="col-12 mt-3">
                      <img src="assets/img/mandiri.jpg" style="width: 50px" alt="" />
                      <span class="p-3"><span class="fw-bold">1350020211965</span> a/n enzo styan</span>
                    </div>
                    <div class="col-12 mt-3">
                      <hr class="bg-body-secondary">
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="bukti_tf" class="form-label">Input Bukti Transfer</label>
                    <input type="file" class="form-control" id="bukti_tf" name="bukti_tf" />
                  </div>
                  <div class="">
                    <button type="submit" class="btn btn-primary" style="width: 100%">SUBMIT</button>
                  </div>
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
          var name = document.getElementById("nama_sekolah").value;
          var logo = document.getElementById("logo_sekolah").value;
          var file = document.getElementById("file_tim").value;
          var kapten = document.getElementById("nama_kapten").value;
          var nokapten = document.getElementById("no_kapten").value;
          var ofc = document.getElementById("nama_official").value;
          var noofc = document.getElementById("no_official").value;
          var capo = document.getElementById("nama_capo").value;
          var nocapo = document.getElementById("no_capo").value;
          var buktitf = document.getElementById("bukti_tf").value;

          if (name === "" || logo === "" || file === "" || kapten === "" || nokapten === "" || ofc === "" || noofc === ""
          || capo === "" || nocapo === "" || buktitf === ""
          ) {
              alert("Semua form harus diisi!");
              return false;
          }
      }
    </script>
@endpush
