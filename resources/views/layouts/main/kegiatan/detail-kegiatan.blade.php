@extends('layouts.main.master.master')


@section('title', 'Halaman Utama')

@section('content')
    <div class="container">
        <h1>{{ $kegiatan->judul }}</h1>
        <p>{{ $kegiatan->deskripsi }}</p>
        <p><strong>Date:</strong> {{ $kegiatan->tanggal_kegiatan }}</p>
    </div>
@endsection
