@extends('layouts/admin')
@section('konten')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Artikel</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('/mahasiswa') }}">Home</a></li>
                    <li class="breadcrumb-item active">Artikel</li>
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
                        <h3 class="card-title">Artikel</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form enctype="multipart/form-data" autocomplete="off" action="{{ url('save/artikel')}}"
                            method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Judul</label>
                                <input type="text" class="form-control" id="#" name="judul" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Deskripsi</label>
                                <input type="text" class="form-control" id="#" name="deskripsi" required>
                            </div>

                            <!-- Date -->
                            <div class="form-group">
                                <label>Tanggal</label>
                                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                    <input type="date" class="datepicker form-control datetimepicker-input"
                                        data-target="#reservationdate" name="tanggal" />
                                    <div class="input-group-append" data-target="#reservationdate"
                                        data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Foto -->
                            <div class="form-group">
                                <label for="exampleInputFile">Foto</label><br>
                                <input name="foto" type="file" />
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
