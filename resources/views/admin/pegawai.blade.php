@extends('page.admin', ['title' => 'pegawai'])
@section('contentAdmin')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif

        <h1 class="h3 mb-2 text-gray-800">Pegawai</h1>
        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo
            table below.
            For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official
                DataTables documentation</a>.</p>
        <!-- Page Heading -->
        <!-- Content Row -->
        <div class="row">

        </div>

        <!-- Content Row -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Pegawai</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Jabatan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($petugas as $index => $data)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $data->nama }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>{{ $data->no_telepon }}</td>
                                    <td><button class="btn btn-primary">detail</button></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!--entries-->
            </div>

        </div>
        <a href="{{ route('add_pegawai') }}" class="btn btn-primary mt-2">add pegawai</a>
        <div class="row">

            <!-- disini -->

        </div>

        <!-- Content Row -->
        <div class="row">

            <!-- Content Column -->
            <div class="col-lg-6 mb-4">
                <!-- Color System -->


            </div>

            <div class="col-lg-6 mb-4">
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
