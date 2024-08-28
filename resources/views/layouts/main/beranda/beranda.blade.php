@extends('layouts.main.master.master')


@section('title', 'Halaman Utama')

@section('content')
    <div id="welcomeScreen" class="welcome-screen">
        <div class="content">
            <img src=" /images/logo.png " alt="Logo" class="logo">
            <h1 id="welcomeText">Selamat Datang di Website Desa Wisata Grenggeng</h1>
        </div>
    </div>
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
                        style="background-image: url('{{ Storage::url($sleeder->img_wisata) }}');">
                        <div class="overlay"></div>
                        <div class="carousel-caption d-none d-md-block">
                            <a href="{{ route($sleeder->kategori_wisata) }}">
                                <h5>{{ $sleeder->nama_wisata }}</h5>
                                <p>{!! Str::limit($sleeder->deskripsi_wisata, 100, '...') !!}</p>
                            </a>
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

        <section class="timeline timeline-event" id="timeline-event">
            <ul>
                <div class="d-grid gap-2 col-2 mx-auto">
                    <a href="#" id="scrollButton" class="btn btn-primary">Event Desa Grenggeng</a>
                </div>
                @foreach ($kegiatans as $kegiatan)
                    <li>
                        <a href="{{ route('detail-kegiatan', $kegiatan->id) }}">
                            <div>
                                <time>{{ $kegiatan->tanggal_event }}</time>
                                <h3>{{ $kegiatan->nama_event }}</h3>
                                <p>{{ Str::limit($kegiatan->deskripsi, 100, '...') }}</p>
                            </div>
                        </a>
                    </li>
                @endforeach
                <div class="d-grid semua gap-2 col-2 mx-auto" id="targetButton">
                    <a href="{{ route('kegiatan') }}" class="btn btn-primary" aria-current="page">Semua
                        Event</a>
                </div>
            </ul>
        </section>

        {{-- end timeline activities --}}

        <div class="bg-newproduk">
            <div class="container">
                <header class="mb-4 text-black pt-3" id="anyaman">
                    <h3 class="judul">Produk Anyaman Terbaru</h3>
                </header>
                <!-- Tambahkan tombol navigasi -->
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        @foreach ($produks as $produk)
                            <div class="swiper-slide">
                                <div class="my-card-produk"> <img class="my-card-img"
                                        src="{{ Storage::url($produk->img1) }}" />
                                    <div class="my-card-body trainer-card-body">
                                        <h5>{{ $produk->nama_produk }}</h5>
                                        <p>Kategori: <small>{{ $produk->kategori }}</small></p>
                                        <a href="#" class="my-card-btn" data-bs-toggle="modal"
                                            data-bs-target="#productModal" data-id="{{ $produk->id }}"
                                            data-type="anyaman">Tanyakan</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- Tambahkan tombol di sini -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>



    </div>

@endsection
