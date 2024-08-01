@extends('layouts.main.master.master')


@section('title', 'Halaman Utama')

@section('content')
    <div class="image-bg">
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
                    <div class="carousel-item hero-item {{ $index == 0 ? 'active' : '' }}"
                        style="background-image: url('{{ asset($sleeder->img_wisata) }}');">
                        <div class="overlay"></div>
                        <div class="carousel-caption d-none d-md-block">
                            <h5>{{ $sleeder->nama_wisata }}</h5>
                            <p>{{ Str::limit($sleeder->deskripsi_wisata, 100, '...') }}</p>

                        </div>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        {{-- start timeline activities --}}
        <section class="intro">
            <div class="container bg-text blur-box">
                <h1>Jadwal Event &darr;</h1>
                <p>Desa Wisata Grenggeng, Karanganyar, Kebumen, Jawa Tengah</a></p>
            </div>
        </section>

        <section class="timeline">
            <ul>
                <div class="d-grid gap-2 col-2 mx-auto">
                    <a href="{{ route('kegiatan') }}" class="btn btn-success" aria-current="page">Semua Event</a>
                </div>
                @foreach ($kegiatans as $kegiatan)
                    <li>
                        <a href="{{ route('detail-kegiatan', $kegiatan->id) }}">
                            <div>
                                <time>{{ $kegiatan->tanggal_kegiatan }}</time>
                                <h3>{{ $kegiatan->judul }}</h3>
                                <p>{{ $kegiatan->deskripsi }}</p>
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
        </section>
        {{-- end timeline activities --}}
    </div>

@endsection
