@extends('page.masyarakat', ['title' => 'profile'])
@section('contentMasyarakat')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Update Profile</h1>
        <br>
        <!-- Content Row -->
        <div class="row">

            <div class="col-xl-20 col-lg-10">

                <!-- Area Chart -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Update Profile</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('update_profile_petugas') }}" method="post">
                            @csrf
                            <!-- <img src="/img/undraw_posting_photo.svg" alt="" style="width:100%;"> -->
                            <div class="mb-3 col-lg-6 float-left">
                                <label for="">Nama</label>
                                <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                                    aria-describedby="basic-addon1" name="nama" value="{{ $profilePetugas->nama }}">
                            </div>
                            <div class="mb-3 col-lg-6 float-left">
                                <label for="">email</label>
                                <input type="email" class="form-control" placeholder="email" aria-label="Username"
                                    aria-describedby="basic-addon1" name="email" value="{{ $profilePetugas->email }}">
                            </div>
                            <div class="mb-3 col-lg-6 float-left">
                                <label for="">nomor telp</label>
                                <input type="number" class="form-control" placeholder="telp" aria-label="Username"
                                    aria-describedby="basic-addon1" name="no_telepon"
                                    value="{{ $profilePetugas->no_telepon }}">
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <button type="submit" class="btn btn-success btn-md float-right">
                                    <li class="fa fa-save"></li> edit profile
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
