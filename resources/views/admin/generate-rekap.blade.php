@extends('page.admin', ['title' => 'rekap'])
@section('contentAdmin')
    <!-- Content Header (Page header) -->
    <div class="container mt-3">
        <div class="card">
            <div class="card-header">
                <button class="btn btn-secondary btn-md">
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
                        Laporan Pengaduan Bulan : {{ $rekap->created_at->format('F Y') }}
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
@endsection
