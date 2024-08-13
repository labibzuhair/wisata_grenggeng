@extends('layouts.main.master.master')

@section('title', 'Detail Event')

@section('content')
    <div class="bg-event">
        <div class="container p-4">
            <header class="mb-4 text-black pt-3" id="anyaman">
                <h3 class="judul">Detail Event</h3>
            </header>
            <div class="card ">
                <div class="neo-card">
                    <h3 class="card-header"><b>{{ $kegiatan->nama_event }}</b></h3>
                    <h5 class="card-header">Yang Akan di Isi Oleh : {{ $kegiatan->pengisi_acara }}</h5>
                    <div class="card-body">
                        <h5 class="card-title">Tanggal dan Waktu : Tanggal {{ $kegiatan->tanggal_event }} Jam
                            {{ $kegiatan->waktu }}
                        </h5>
                        <h5 class="card-title">{{ $kegiatan->lokasi }} </h5>
                        <p class="text-start p-3">{{ $kegiatan->deskripsi }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
