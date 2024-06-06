@extends('layouts/admin')
@section('konten')
@foreach ($data as $d)
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Akun Jurnalis</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                    <li class="breadcrumb-item active"><a href="{{ url('manage') }}">Akun Jurnalis</a></li>
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
                        <h3 class="card-title">Edit Akun Jurnalis</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form enctype="multipart/form-data" autocomplete="off" action="{{ url('update/manage') }}"
                            method="post">
                            @csrf
                            <input hidden type="text" name="id" value="{{ $d->id }}" />
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Name</label>
                                <input value="{{ $d->name }}" type="text" class="form-control" id="#" name="name"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Email</label>
                                <input value="{{ $d->email }}" type="text" class="form-control" id="#" name="email"
                                    required>
                            </div>

                            <button type="submit" class="btn btn-outline-success"><i class="fa fa-plus-circle"
                                    aria-hidden="true"></i> Edit </button>

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
@endforeach
@endsection
