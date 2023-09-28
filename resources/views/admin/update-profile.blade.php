@extends('page.masyarakat', ['title' => 'update profile'])
@section('contentMasyarakat')
    <div class="container">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('profile') }}">Kembali</a></li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row gutters">
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="account-settings">
                            <div class="user-profile">
                                <div class="user-avatar">
                                    <img src="/img/undraw_profile.svg" alt="avatar" class="rounded-circle img-fluid"
                                        style="width: 150px; margin-left:16%;">
                                </div>
                                <br>
                                <h5 class="user-name">{{ $profile->nama }}</h5>
                                <h6 class="user-email">{{ $profile->email }}</h6>
                            </div>
                            <div class="about">
                                <h5>About</h5>
                                <p>I'm Furqon. Mobile developer I enjoy creating user-centric, delightful and human
                                    experiences.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                <div class="card h-80">
                    <div class="card-body">
                        <div class="row gutters">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <h6 class="mb-2 text-primary">Personal Details</h6>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <form action="{{ route('update_profile_admin') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="fullName">Full Name</label>
                                        <input type="text" name="nama" class="form-control" id="fullName"
                                            placeholder="Enter full name" value="{{ $profile->nama }}">
                                    </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="eMail">Email</label>
                                    <input type="email" name="email" class="form-control" id="eMail"
                                        placeholder="Enter email ID" value="{{ $profile->email }}">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" name="no_telepon" class="form-control" id="phone"
                                        placeholder="Enter phone number" value="{{ $profile->no_telepon }}">
                                </div>
                            </div>
                        </div>
                        <div class="row gutters">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="text-right">
                                    <button type="button" id="submit" name="submit"
                                        class="btn btn-secondary">Cancel</button>
                                    <button type="submit" id="submit" name="submit"
                                        class="btn btn-primary">Update</button>
                                </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
