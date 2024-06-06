@extends('layouts/admin')
@section('konten')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Guru</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('admin') }}" class="btn btn-secondary">Home</a></li>
                    <li class="breadcrumb-item active"><a href="{{ url('guru') }}" class="btn btn-primary">Guru</a>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Guru</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form enctype="multipart/form-data" autocomplete="off" action="{{ url('save/guru')}}"
                            method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="#" name="nama" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Jabatan</label>
                                <input type="text" class="form-control" id="#" name="jabatan" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Mapel</label>
                                <select class="form-control" name="mapel_id" required>
                                    <option value="" selected>Mapel</option>
                                    @foreach ($mapel as $k)
                                    <option value="{{ $k->id }}">{{ $k->mata_pelajaran }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Kelas</label>
                                <select class="form-control" name="kelas_id" required>
                                    <option value="" selected>Kelas</option>
                                    @foreach ($kelas as $k)
                                    <option value="{{ $k->id }}">{{ $k->kelas }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- Foto -->
                            <div class="mb-3">
                                <label class="col-md-1 col-form-label text-md-left" for="exampleInputFile">Foto</label>
                                <input name="foto" type="file">
                            </div>
                            <button type="submit" class="btn btn-outline-primary"><i class="fas fa-plus-circle"></i>
                                Tambah </button>

                        </form>
                        <!-- Date dd/mm/yyyy -->
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
@endsection
