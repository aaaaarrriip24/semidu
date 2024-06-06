@extends('layouts/admin')
@section('konten')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Contacts</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('admin') }}" class="btn btn-secondary"><i
                                class="fas fa-home"></i> Home</a></li>
                    <li class="breadcrumb-item active"><a href="{{ url('add/guru') }}" class="btn btn-primary">
                            <i class="fas fa-plus-square"></i> Tambah Data</a>
                    </li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card card-solid">
        <div class="card-body pb-0">
            <div class="row">
                @foreach( $data as $d )
                <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                    <div class="card bg-light d-flex flex-fill">
                        <div class="card-header text-muted border-bottom-0">
                            {{ $d->jabatan }}
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-7">
                                    <h1 class="lead"><b>{{ $d->nama }}</b></h1>
                                    <hr>
                                    <ul class="ml-4 mb-0 fa-ul text-muted">
                                        <li class="small"><span class="fa-li"><i
                                                    class="fas fa-lg fa-building"></i></span><b> Kelas :</b>
                                            {{ $d->kelas }}</li>
                                        <li class="small"><span class="fa-li"><i
                                                    class="fas fa-lg fa-building"></i></span><b> Mapel :</b>
                                            {{ $d->mapel }}</li>
                                    </ul>
                                </div>
                                <div class="col-5 text-center">
                                    <img src="{{ asset('foto_guru/'.$d->foto) }}" class="img-circle img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-right">
                                <a href="{{ url('edit/guru/'.$d->id) }}" class="btn btn-sm bg-info">
                                    <i class="fas fa-comments"> Edit</i>
                                </a>
                                <a href="{{ url('delete/guru/'.$d->id) }}" class="btn btn-sm btn-danger">
                                    <i class="fas fa-user"></i> Delete
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

        <!-- /.card -->
    </div>
    <!-- /.col -->
</section>
@endsection
