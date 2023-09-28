@extends('page.admin', ['title' => 'detail'])
@section('contentAdmin')
    <!-- Begin Page Content -->
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
                        <h6 class="m-0 font-weight-bold text-primary">Foto Bukti</h6>
                    </div>
                    <div class="card-body">
                        <img src="/gallery/{{ $detail->foto }}" alt="" style="width:200px;" style="margin-left:50%;">
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
            <div class="col-xl-6 col-lg-7 ">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Tanggapi
                        </h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">

                        <div class="row">
                            @foreach ($tanggapan as $chat)
                                <div class="post clearfix">
                                    <div class="user-block">
                                        <img class="img-circle img-bordered-sm" src="/img/undraw_profile.svg"
                                            style="width:40px;" height="40px" alt="User Image">
                                        <span class="username">
                                            <a `>{{ $chat->user->nama }}</a>
                                        </span>
                                        <span class="description">{{ $chat->created_at->format('d F Y') }}</span>
                                    </div>
                                    <!-- /.user-block -->
                                    <p>
                                        {{ $chat->tanggapan }}
                                    </p>
                            @endforeach
                            <form method="post" action="{{ route('kirim_tanggapan_admin') }}" class="form-horizontal">
                                @csrf
                                <input type="hidden" name="pengaduan_id" value="{{ $detail->id }}">
                                <div class="input-group input-group-sm mb-0">
                                    <input class="form-control form-control-sm" name="tanggapan"
                                        placeholder="Isi Tanggapan">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-danger">Kirim Tanggapan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-5">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    Ubah Status</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">

                <ul style="list-style: none; line-height: 40px;">
                    <form action="{{ route('ubah_status', $detail->id) }}" method="post">
                        @csrf

                        <div class="mb-3 col-lg-10">
                            <label for="exampleFormControlSelect1">Pilih Status</label><select class="form-control"
                                id="exampleFormControlSelect1" name="status">
                                <option value="New">New</option>
                                <option value="Proces">Proses</option>
                                <option value="Selesai">Selesai</option>
                                <option value="Di Tolak">Di Tolak</option>
                            </select>

                            <!-- <hr> -->
                        </div>
                        <button type="submit" class="btn btn-primary" style="margin-left:3% ;">update</button>
                    </form>
                </ul>
            </div>
        </div>
    </div>
@endsection
