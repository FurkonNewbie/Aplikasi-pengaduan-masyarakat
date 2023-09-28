@extends('page.petugas', ['title' => 'laporan masuk'])
@section('contentPetugas')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Tables</h1>
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
                <h6 class="m-0 font-weight-bold text-primary">Data Pengaduan</h6>
            </div>
            <div class="card-body">
                <div class="mb-3 col-lg-3 float-left">
                    <label for="exampleFormControlSelect1">Filter berdasarkan status</label><select class="form-control"
                        id="exampleFormControlSelect1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                    <hr>
                </div>
                <div class="mb-3 col-lg-3 b-inline float-left">
                    <label for="exampleFormControlSelect1">Filter berdasarkan kategori</label><select class="form-control"
                        id="exampleFormControlSelect1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                    <hr>
                </div>
                <div class="table-responsive">

                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal pengaduan</th>
                                <th>Judul pengaduan</th>
                                <th>nama pengadu</th>
                                <th>kategori</th>
                                <th>status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($laporan as $index => $data)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $data->created_at->format('d M Y') }}</td>
                                    <td>{{ $data->judul_pengaduan }}</td>
                                    <td>{{ $data->user->nama }}</td>
                                    <td>{{ $data->kategori->nama_kategori }}</td>
                                    <td>{{ $data->status }}</td>
                                    <td><button class="btn btn-primary">detail</button></td>
                                </tr>
                            @endforeach --}}
                        </tbody>
                    </table>
                </div>
                <!--entries-->
            </div>

        </div>
        <button class="btn btn-primary mt-2">add data kategori</button>
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
