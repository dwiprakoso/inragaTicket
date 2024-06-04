<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/iconInraga.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>
<body>
    
    <div class="container py-5">
        <div class="col-12">
            <h1>Tabel SMA</h1>
            <div class="table-responsive">
                <table class="table table-bodered table-hover table-stripped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Sekolah</th>
                            <th>File Tim</th>
                            <th>Nama Kapten</th>
                            <th>No Kapten</th>
                            <th>Nama Official</th>
                            <th>No Official</th>
                            <th>Nama Capo</th>
                            <th>No Capo</th>
                            <th>Logo</th>
                            <th>Bukti Tf</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i = 0;
                        @endphp
                        @foreach ($datasma as $data)
                        @php
                            $bukti = Storage::url('uploads/imageSma/' . $data->bukti_tf);
                            $fileTim = Storage::url('uploads/fileSma/' . $data->file_tim);
                            $fileLogo = Storage::url('uploads/fileSma/' . $data->logo_sekolah);
                            
                            @endphp
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $data->nama_sekolah }}</td>
                            <td>
                                <a href="{{ url($fileTim) }}" target="_blank">Lihat PDF</a>
                                <br>
                                <iframe src="{{ url($fileTim) }}" width="100%" height="200px"></iframe>
                            </td>
                            <td>{{ $data->nama_kapten }}</td>
                            <td>{{ $data->no_kapten }}</td>
                            <td>{{ $data->nama_official }}</td>
                            <td>{{ $data->no_official }}</td>
                            <td>{{ $data->nama_capo }}</td>
                            <td>{{ $data->no_capo }}</td>
                            <td>
                                <img src="{{url($fileLogo)}}" alt="" class="imaged w64">
                            </td>
                            <td>
                                <img src="{{url($bukti)}}" alt="" class="imaged w64">
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-12">
            <h1>Tabel FIK</h1>
            <div class="table-responsive">
                <table class="table table-bodered table-hover table-stripped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Tim</th>
                            <th>File Tim</th>
                            <th>Nama Kapten</th>
                            <th>No Kapten</th>
                            <th>Nama Official</th>
                            <th>No Official</th>
                            <th>Bukti Tf</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 0;
                            @endphp
                            @foreach ($datafik as $data)
                            @php
                            $bukti = Storage::url('uploads/imageFik/' . $data->bukti_tffik);
                            $fileTim = Storage::url('uploads/fileFik/' . $data->file_fik);
                            
                            @endphp
                        <tr>
                            <td>No</td>
                            <td>{{ $data->nama_fik }}</td>
                            <td style="text-align: right;">
                                <a href="{{url($fileTim)}}" target="_blank">Lihat PDF</a>
                                
                                <iframe src="{{ url($fileTim) }}" width="100%" height="200px"></iframe>
                            </td>
                
                            <td>{{ $data->fik_kapten }}</td>
                            <td>{{ $data->nofik_kapten }}</td>
                            <td>{{ $data->fik_official }}</td>
                            <td>{{ $data->nofik_official }}</td>
                            <td>
                              
                                 <img src="{{url($bukti)}}" alt="" class="imaged w64">
                                   
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="container pb-5">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>
        <div class="col-12 py-3">
            <button id="export-pdf-btn" class="btn btn-primary">Export to PDF</button>
        </div>
        <div class="col-12">
            <a href="/eventDetail">
                <button class="btn btn-primary">halaman event</button>
            </a>
        </div>
    </div>


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>

    <script>
        document.getElementById('export-pdf-btn').addEventListener('click', function() {
            // Inisialisasi jsPDF
            var doc = new jsPDF();
    
            // Tambahkan konten dari halaman web ke file PDF
            doc.html(document.body, {
                callback: function(pdf) {
                    // Simpan file PDF
                    pdf.save('document.pdf');
                }
            });
        });
    </script>
    


</body>
</html>