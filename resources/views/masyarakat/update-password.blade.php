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
            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                <div class="card h-80" style="width: 50%;">
                    <div class="card-body">
                        <div class="row gutters">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <h6 class="mb-2 text-primary">Personal Details</h6>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <form action="{{ route('password') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="fullName">Password</label>
                                        <input type="text" name="password" class="form-control" id="fullName"
                                            placeholder="Enter password" style="width:215%;">
                                    </div>
                            </div>
                            <div class="col-xl-7 col-lg-5 col-md-5 col-sm-5 col-12">
                                <div class="form-group">
                                    <button type="submit" id="submit" name="submit"
                                        class="btn btn-primary">Update</button>
                                </div>
                            </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
