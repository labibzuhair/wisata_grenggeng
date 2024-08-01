@extends('layouts.main.master.master')

@section('title', 'Detail Kegiatan')

@section('content')
    <header class="mb-4 text-black border-bottom pt-1 text-center">
        <h3>Detail Event</h3>
    </header>
    <div class="card m-5">
        <h5 class="card-header">{{ $kegiatan->judul }}</h5>
        <div class="card-body">
            <h5 class="card-title">{{ $kegiatan->tanggal_kegiatan }}</h5>
            <p class="card-text">{{ $kegiatan->deskripsi }}</p>
        </div>
    </div>
@endsection
