@extends('page.admin', ['title' => 'add kategori'])
@section('contentAdmin')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">add masyarakat</h1>
        <br>
        <!-- Content Row -->
        <div class="row">

            <div class="col-xl-20 col-lg-10">

                <!-- Area Chart -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Laporan Periode</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('kategori') }}" method="post">
                            @csrf
                            <!-- <img src="/img/undraw_posting_photo.svg" alt="" style="width:100%;"> -->
                            <div class="mb-3 col-lg-6 float-left">
                                <label for="">Nama</label>
                                <input type="text" class="form-control" placeholder="nama_kategori" aria-label="Username"
                                    aria-describedby="basic-addon1" name="nama_kategori">
                            </div>
                            <div class="mb-3 col-lg-6 float-left">
                                <label for="">deskripsi</label>
                                <input type="text" class="form-control" placeholder="deskripsi" aria-label="Username"
                                    aria-describedby="basic-addon1" name="deskripsi">
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <button type="submit" class="btn btn-success btn-md float-right">
                                    <li class="fa fa-save"></li> Simpan
                                </button type="submit">
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Bar Chart -->

            </div>

            <!-- Donut Chart -->
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
