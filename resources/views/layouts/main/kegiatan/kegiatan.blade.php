@extends('layouts.main.master.master')

@section('title', 'Halaman Utama')

@section('content')
    <div style="background-color: black">
        <div class="container p-4">
            <header class="mb-4 text-black border-bottom pt-3" id="anyaman">
                <h3 class="judul">Detail Event</h3>
            </header>
            @foreach ($kegiatans as $kegiatan)
                <div class="card m-5">
                    <h5 class="card-header">{{ $kegiatan->nama_event }}</h5>
                    <div class="card-body">
                        <h5 class="card-title">{{ $kegiatan->tanggal_event }}</h5>
                        <p class="card-text">{{ substr($kegiatan->deskripsi, 0, 100) }}...</p>
                        <a href="{{ route('detail-kegiatan', $kegiatan->id) }}" class="btn btn-primary">Lihat Lebih
                            Lengkap</a>
                    </div>
                </div>
            @endforeach
            <div class="pagination justify-content-center">
                {{ $kegiatans->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
@endsection
