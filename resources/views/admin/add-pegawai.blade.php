@extends('page.admin', ['title' => 'add pegawai'])
@section('contentAdmin')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">add pegawai</h1>
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
                        <form action="{{ route('tambah_petugas') }}" method="post">
                            @csrf
                            <!-- <img src="/img/undraw_posting_photo.svg" alt="" style="width:100%;"> -->
                            <div class="mb-3 col-lg-6 float-left">
                                <label for="">Nama</label>
                                <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                                    aria-describedby="basic-addon1" name="nama">
                            </div>
                            <div class="mb-3 col-lg-6 float-left">
                                <label for="">email</label>
                                <input type="text" class="form-control" placeholder="email" aria-label="email"
                                    aria-describedby="basic-addon1" name="email">
                            </div>
                            <div class="mb-3 col-lg-6 float-left">
                                <label for="">password</label>
                                <input type="password" class="form-control" placeholder="password" aria-label="password"
                                    aria-describedby="basic-addon1" name="password">
                            </div>
                            <div class="mb-3 col-lg-6 float-left">
                                <label for="">no telepon</label>
                                <input type="text" class="form-control" placeholder="no telepon" aria-label="no telepon"
                                    aria-describedby="basic-addon1" name="no_telepon">
                            </div>
                            <div class="mb-3 col-lg-12 float-left">
                                <label for="exampleFormControlSelect1">Pilih Role</label><select name="role"
                                    id="role" class="form-control" id="exampleFormControlSelect1">
                                    <option>Masyarakat</option>
                                    <option>Petugas</option>
                                    <option>Admin</option>
                                </select>
                                <!-- <hr> -->
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <button type="submit" class="btn btn-success btn-md float-right">
                                    <li class="fa fa-save"></li> Simpan
                                </button>
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
