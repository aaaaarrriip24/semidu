@extends('layouts.user')
@section('konten')
<br>
<br>
<br>
<div class="section-title">
    <h2>Guru SEMIDU II</h2>
    <!-- ======= Berita ======= -->
    <section id="skills" class="skills">
        <div class="container" data-aos="fade-up">
            
            <div class="row">
                @foreach( $data as $d )
                <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                    <img src="{!! asset('foto_guru/'.$d->foto) !!}" class="img-fluid" alt="">
                    <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                        <h3>{{ $d->nama }}</h3>
                        <p class="font-italic">{{ $d->jabatan }}</p>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </section><!-- Berita -->
</div>
<br>
<br>
@endsection
