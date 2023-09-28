@extends('page.masyarakat', ['title' => 'add pengaduan'])
@section('contentMasyarakat')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->

        <!-- Content Row -->
        <form action="/simpan_file" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Judul Pengaduan</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="judul pengaduan" name="judul_pengaduan" value="{{ old('judul_pengaduan') }}">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                    anyone else.</small>
            </div>
            <div class="form form-group mt-3">
                <label for="selectKategoriPengaduan">Kategori Pengaduan</label>
                <select type="text" class="form form-control" id="selectKategoriPengaduan" name="kategori">
                    <option value="">-- Pilih Kategori Pengaduan --</option>
                    @foreach ($kategori as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">isi pengaduan</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="isi pengaduan"
                    name="isi_laporan" value="{{ old('isi_laporan') }}">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">lampiran foto pengaduan</label>
                <input type="file" name="filePengaduan" id="filePengaduan" class="form form-control" accept="image">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

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
