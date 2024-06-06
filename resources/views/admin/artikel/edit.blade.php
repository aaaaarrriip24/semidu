@extends('layouts/admin')
@section('konten')
@foreach ($data as $k)
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Artikel</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
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
                        <h3 class="card-title">Edit Artikel</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form enctype="multipart/form-data" autocomplete="off" action="{{ url('update/artikel') }}"
                            method="post">
                            @csrf
                            <input hidden type="text" name="id" value="{{ $k->id }}" />
                            <input hidden type="text" name="penulis_id" value="{{ $k->penulis_id }}" />
                            <input hidden type="text" name="foto_lama" value="{{ $k->foto}}" />
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Judul</label>
                                <input value="{{ $k->judul }}" type="text" class="form-control" id="#" name="judul"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Deskripsi</label>
                                <textarea name="deskripsi" rows="4" cols="80" class="form-control"
                                    placeholder="{{ $k->deskripsi}}"></textarea>
                            </div>

                            <!-- Date -->
                            <div class="form-group">
                                <label>Tanggal</label>
                                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                    <input type="date" class="datepicker form-control datetimepicker-input"
                                        data-target="#reservationdate" name="tanggal"
                                        value="{{ date('d-m-Y', strtotime($k->tanggal)) }}" />
                                    <div class="input-group-append" data-target="#reservationdate"
                                        data-toggle="datetimepicker">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tipe</label>
                                <select class="form-control" name="tipe" required>
                                    <option value="" selected>Tipe</option>
                                    <option value="Berita">Berita</option>
                                    <option value="Artikel">Artikel</option>
                                </select>
                            </div>
                            <!-- Foto -->
                            <div class="form-group">
                                <label for="exampleInputFile">Foto</label><br>
                                <input name="foto" type="file" class="gmeet" />
                            </div>

                            <button type="submit" class="btn btn-outline-success"><i class="fa fa-plus-circle"
                                    aria-hidden="true"></i> Simpan </button>

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
@section('js')
<script>
    $('#datemask').inputmask('dd/mm/yyyy', {
        'placeholder': 'dd/mm/yyyy'
    })

</script>
@endsection
