@extends('page.admin', ['title' => 'generate laporan'])
@section('contentAdmin')
    {{-- <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Detail</h1>
        <br>
        <!-- Content Row -->
        <div class="row">

            <div class="col-xl-6 col-lg-7">

                <!-- Area Chart -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Laporan Periode</h6>
                    </div>
                    <div class="card-body">
                        <!-- <img src="/img/undraw_posting_photo.svg" alt="" style="width:100%;"> -->
                        <form method="POST" action="{{ route('generate_pdf') }}">
                            @csrf
                            <div class="mb-3 col-lg-12">
                                <input type="date" name="" id="" class="form-control">
                            </div>
                            <div class="mb-3
                                    col-lg-12 float-left">
                                <label for="selectTahun">Pilih Tahun</label>
                                <select class="form-control" id="selectTahun" name="selectTahun">
                                    <option value="">Pilih Tahun</option>
                                    <option>2020</option>
                                    <option>2021</option>
                                    <option>2022</option>
                                    <!-- Tambahkan opsi untuk tahun lainnya sesuai kebutuhan -->
                                </select>
                            </div>
                            <div class="mb-3 col-lg-12 float-left">
                                <label for="selectStatus">Pilih Status</label>
                                <select name="selectStatus" id="selectStatus" class="form-control">
                                    <option value="">Pilih Status</option>
                                    <option value="New">New</option>
                                    <option value="Process">Process</option>
                                    <option value="Selesai">Selesai</option>
                                    <option value="Di Tolak">Di Tolak</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Generate Laporan PDF</button>
                        </form>


                    </div>
                </div>

                <!-- Bar Chart -->

            </div>

            <!-- Donut Chart -->
            <div class="col-xl-5 col-lg-5">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Laporan Rekap Periode</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">

                        <div class="mb-3 col-lg-12 float-left">
                            <label for="exampleFormControlSelect1">Pilih Bulan</label> <select name="selectBulan"
                                id="selectBulan" class="form form-control">
                                <option value="">-- Pilih Bulan --</option>
                                <option value="Januari">Januari</option>
                                <option value="Februari">Februari</option>
                                <option value="Maret">Maret</option>
                                <option value="April">April</option>
                                <option value="Mei">Mei</option>
                                <option value="Juni">Juni</option>
                                <option value="Juli">Juli</option>
                                <option value="Agustus">Agustus</option>
                                <option value="September">September</option>
                                <option value="Oktober">Oktober</option>
                                <option value="November">November</option>
                                <option value="Desember">Desember</option>
                            </select>
                            <!-- <hr> -->
                        </div>
                        <div class="mb-3 col-lg-12 float-left">
                            <label for="exampleFormControlSelect1">Pilih Bulan</label><select class="form-control"
                                id="exampleFormControlSelect1" name="selectTahun">
                                <option>2020</option>
                                <option>2021</option>
                                <option>2022</option>
                                <option>2023</option>
                                <option>2024</option>
                            </select>
                            <!-- <hr> -->
                        </div>
                        <button class="btn btn-primary" style="margin-left:12px;">cetak</button>
                    </div>
                </div>
            </div>
        </div>

        <!--table-->
        <!-- Content Row -->
    </div>
    <!-- /.container-fluid --> --}}
    <!-- Content Header (Page header) -->
    <div class="container mt-3">
        <div class="card">
            <div class="card-header">
                <button class="btn btn-secondary btn-md" onclick="cetakLaporan()">
                    <li class="fa fa-print"></li> Cetak Laporan
                </button>
                <a href="generate-report.html" class="btn btn-warning btn-md float-sm-right">
                    <li class="fa fa-undo"></li> Kembali
                </a>
            </div>
            <div class="card-body report">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="h-report"> APM Masyarakat Seluruh Indonesia </div>
                        <div class="h-report-detail">
                            Jl. Banyu Mengalir No. 123 Jawa Barat KP. 12345 <li class="fa fa-phone"></li> +1 1233456788
                        </div>
                        <hr>
                    </div>
                    <div class="col-md-12 col-lg-12">
                        Laporan Pengaduan Bulan : 2023
                    </div>
                </div>
                <!-- <div class="row"> -->
                <div class="container-responsive mt-3">

                    <table class="table table-bordered table-hover table-report">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tanggal</th>
                                <th>Judul Pengaduan</th>
                                <th>Kategori</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rekap as $index => $data)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $data->created_at->format('d F Y') }}</td>
                                    <td>{{ $data->judul_pengaduan }}</td>
                                    <td>{{ $data->kategori->nama_kategori }}</td>
                                    <td>{{ $data->status }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-md-8"></div>
                    <div class="col-md-4">
                        Ciamis, Februari 2024 <br>
                        Petugas
                        <br><br><br>
                        <b> Nama Petugas</b>
                    </div>
                </div>
                <!-- </div> -->
            </div>
        </div>
    </div>
    <!-- /.content -->
    <script>
        function cetakLaporan() {
            window.print();
        }
    </script>
@endsection
