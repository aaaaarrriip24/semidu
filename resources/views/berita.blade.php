@extends('layouts.user')
@section('konten')
@include('konten.sambutan')
@include('konten.foto')
<div class="section-title">
    <h2>Berita</h2>
    <!-- ======= Berita ======= -->
    @foreach( $data as $d )
    <section id="skills" class="skills">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                    <img src="{!! asset('fotoArtikel/'.$d->foto) !!}" class="resize" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                    <h3>{{ $d->judul }}</h3>
                    <p class="font-italic">{{ $d->deskripsi }}</p>
                </div>
            </div>

        </div>
    </section><!-- Berita -->
    @endforeach
</div>

@include('konten.saran')
@include('konten.contact')
@endsection

