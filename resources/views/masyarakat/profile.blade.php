@extends('page.masyarakat', ['title' => 'profile'])
@section('contentMasyarakat')
    <!-- Begin Page Content -->
    {{-- <div class="container-fluid">
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
                        <form action="{{ route('update_profile') }}" method="post">
                            @csrf
                            <!-- <img src="/img/undraw_posting_photo.svg" alt="" style="width:100%;"> -->
                            <div class="mb-3 col-lg-6 float-left">
                                <label for="">Nama</label>
                                <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                                    aria-describedby="basic-addon1" name="nama" value="{{ $profile->nama }}">
                            </div>
                            <div class="mb-3 col-lg-6 float-left">
                                <label for="">email</label>
                                <input type="email" class="form-control" placeholder="email" aria-label="Username"
                                    aria-describedby="basic-addon1" name="email" value="{{ $profile->email }}">
                            </div>
                            <div class="mb-3 col-lg-6 float-left">
                                <label for="">nomor telp</label>
                                <input type="number" class="form-control" placeholder="telp" aria-label="Username"
                                    aria-describedby="basic-addon1" name="no_telepon" value="{{ $profile->no_telepon }}">
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

    </div> --}}
    <!-- /.container-fluid -->
    <section style="background-color: #eee;">
        <div class="container py-5">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('update') }}">Update profile</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('update_password') }}">Update Password</a></li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="/img/undraw_profile.svg" alt="avatar" class="rounded-circle img-fluid"
                                style="width: 150px;">
                            <h5 class="my-3">{{ $profile->nama }}</h5>
                            <p class="text-muted mb-1">Full Stack Developer</p>
                            <p class="text-muted mb-4">Bay Area, San Francisco, CA</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Full Name</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $profile->nama }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $profile->email }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Phone</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $profile->no_telepon }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
