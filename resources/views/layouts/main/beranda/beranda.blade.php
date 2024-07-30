@extends('layouts.main.master.master')


@section('title', 'Halaman Utama')

@section('content')
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            @foreach ($sleeders as $index => $sleeder)
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{ $index }}"
                    class="{{ $index == 0 ? 'active' : '' }}" aria-current="{{ $index == 0 ? 'true' : '' }}"
                    aria-label="Slide {{ $index + 1 }}"></button>
            @endforeach
        </div>
        <div class="carousel-inner">
            @foreach ($sleeders as $index => $sleeder)
                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}"
                    style="background-image: url('{{ asset($sleeder->img_wisata) }}');">
                    <div class="overlay"></div>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>{{ $sleeder->nama_wisata }}</h5>
                        <p>{{ Str::limit($sleeder->deskripsi_wisata, 100, '...') }}</p>

                    </div>
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    {{-- start timeline activities --}}
    <section class="intro">
        <div class="container">
            <h1>Vertical Timeline &darr;</h1>
            <p>Timeline v2 <a href="https://codepen.io/tutsplus/pen/zYQqPYG" target="_blank">here</a></p>
        </div>
    </section>

    <section class="timeline">
        <ul>
            @foreach ($kegiatans as $activity)
                <li>
                    <a href="{{ url('/kegiatans/' . $activity->id) }}">
                        <div>
                            <time>{{ $activity->tanggal_kegiatan }}</time>
                            <h3>{{ $activity->judul }}</h3>
                            <p>{{ $activity->deskripsi }}</p>
                        </div>
                    </a>
                </li>
            @endforeach
        </ul>
    </section>
    {{-- end timeline activities --}}

@endsection
