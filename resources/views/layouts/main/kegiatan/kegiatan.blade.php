@extends('layouts.main.master.master')

@section('title', 'Event')

@section('content')

    <div class="container-fluid ">
        <header class="mb-4 text-black pt-3" id="anyaman">
            <h3 class="judul">Event Desa Grenggeng</h3>
        </header>
        <div class="container py-5">
            @if (isset($kegiatans[0]->id))
                @foreach ($kegiatans as $kegiatan)
                    <div class="d-flex flex-wrap text-black ">
                        <div class="col-12 col-lg-6 col-xl-4 mb-4">
                            <img class="w-100" src="{{ Storage::url($kegiatan->img_event) }}" alt="{{ $kegiatan->nama }}">


                        </div>

                        <div class="col-12 col-lg-6 col-xl-8 lg:px-2rem mb-4 mx-auto">
                            <a class="text-link text-link-hover text-decoration-none"
                                href="{{ route('detail-kegiatan', $kegiatan->id) }}">
                                <h2 class="mb-4 fs-3">{{ $kegiatan->nama_event }}</h2>
                            </a>

                            <p class="mb-4 text-align-justify">
                                <span class="fw-semibold">
                                    Pengisi Acara :
                                </span>
                                {{ $kegiatan->pengisi_acara }}
                            </p>

                            <p class="mb-4 text-align-justify">
                                <span class="fw-semibold">
                                    Tanggal Kegiatan :
                                </span>
                                {{ $kegiatan->tanggal_event }}
                            </p>

                            <p class="mb-4 text-align-justify">
                                <span class="fw-semibold">
                                    Tempat Kegiatan:
                                </span>
                                {{ $kegiatan->lokasi }}
                            </p>

                            <p class="mb-0 text-align-justify">
                                <span class="fw-semibold">
                                    Deskripsi Kegiatan :
                                </span>
                                {!! Str::limit($kegiatan->deskripsi, 200, ' ...') !!}
                            </p>
                        </div>

                        <div class="col-12 mb-5 mx-auto">
                            <hr class="my-0">
                        </div>
                    </div>
                @endforeach
            @else
                <h1 class="mb-0 w-100 text-center fs-2">
                    {{ __('kegiatan.tidak_ditemukan') }}
                </h1>
            @endif
        </div>
        <div class="pagination justify-content-center">
            {{ $kegiatans->links('pagination::bootstrap-4') }}
        </div>
    </div>
    <!-- End of Activities -->
    {{-- <div class="">
        <div class="container-event p-4 bg-event">
            <header class="mb-4 text-black pt-3" id="anyaman">
                <h3 class="judul">Semua Event</h3>
            </header>
            @foreach ($kegiatans as $kegiatan)
                <div class="card m-5 card-events">
                    <div class="neo-card">
                        <h5 class="card-header">{{ $kegiatan->nama_event }}</h5>
                        <div class="card-body">
                            <h5 class="card-title">{{ $kegiatan->tanggal_event }}</h5>
                            <p class="card-text">{{ substr($kegiatan->deskripsi, 0, 100) }}...</p>
                            <a href="{{ route('detail-kegiatan', $kegiatan->id) }}" class="btn btn-primary">Lihat Lebih
                                Lengkap</a>
                        </div>
                    </div>

                </div>
            @endforeach
            <div class="pagination justify-content-center">
                {{ $kegiatans->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div> --}}
@endsection
