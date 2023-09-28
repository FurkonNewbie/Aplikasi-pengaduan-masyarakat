@extends('page.masyarakat', ['title' => 'dashboard'])
@section('contentMasyarakat')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->

        <!-- Content Row -->
        <div class="row">
            <!-- Area Chart -->
            <div class="container-fluid">
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                <p class="mb-4">DataTables is a third party plugin that is used to generate the demo
                    table below.
                    For more information about DataTables, please visit the <a target="_blank"
                        href="https://datatables.net">official DataTables documentation</a>.</p>
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Data Pengaduan</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>no</th>
                                        <th>Judul Pengaduan</th>
                                        <th>Kategori</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach ($db as $index => $data)
                                                    <tr>

                                                        <td>{{ $index + 1 }}</td>
                                                        <td>{{ $data->nama }}</td>
                                                        <td>{{ $data->alamat }}</td>
                                                        <td>{{ $data->kelas }}</td>
                                                        <td> <a href="/buat_pengaduan/{{ $data->id }}/edit"
                                                                class="btn btn-primary">edit</a></td>
                                                        <td>
                                                            <form action="/index/{{ $data->id }}" method="post">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="submit"
                                                                    class="btn btn-primary">hapus</button>
                                                            </form>

                                                        </td>
                                                    </tr>
                                                @endforeach --}}

                                    @foreach ($datapengaduan as $index => $data)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $data->judul_pengaduan }}</td>
                                            <td>{{ $data->kategori->nama_kategori }}</td>
                                            <td>{{ $data->status }}</td>
                                            <td><a href="/detail/{{ $data->id }}" class="btn btn-primary">Detail</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                <a href="/add" class="btn btn-primary">tambah</a>
            </div>

            <!-- Pie Chart -->

        </div>

        <!-- Content Row -->
        <div class="row">

            <!-- Content Column -->
            <div class="col-lg-6 mb-4">

                <!-- Project Card Example -->


                <!-- Color System -->


            </div>

            <div class="col-lg-6 mb-4">

                <!-- Illustrations -->


                <!-- Approach -->


            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
