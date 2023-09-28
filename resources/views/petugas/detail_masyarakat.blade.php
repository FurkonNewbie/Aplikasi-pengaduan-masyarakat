@extends('page.admin', ['title' => 'detail'])
@section('contentAdmin')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Detail</h1>
        <br>
        <!-- Content Row -->
        <div class="row">

            <div class="col-xl-8 col-lg-7">

                <!-- Area Chart -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Foto Bukti</h6>
                    </div>
                    <div class="card-body">
                        <img src="/gallery/{{ $detail->foto }}" alt="" style="width:100%;">
                        <hr>
                        <p>
                            {{ $detail->isi_laporan }}
                        </p>
                    </div>
                </div>

                <!-- Bar Chart -->

            </div>

            <!-- Donut Chart -->
            <div class="col-xl-4 col-lg-5">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">
                            {{ $detail->judul_pengaduan }}</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">

                        <ul style="list-style: none; line-height: 40px;">
                            <li><strong>Category</strong>: {{ $detail->kategori->nama_kategori }}
                            </li>
                            <li><strong>Tanggal Pengaduan</strong>: {{ $detail->created_at->format('d M Y') }}</li>
                            <li><strong>Status Pengaduan</strong>:<small
                                    style="box-sizing: border-box; background-color: orange; color: white; border-radius: 20px; padding: 5px; ">{{ $detail->status }}
                                </small>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
