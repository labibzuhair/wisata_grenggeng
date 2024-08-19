@extends('layouts.main.master.master')


@section('title', 'Wisata Anyaman Pandan')


@section('content')
    <div class="container mt-5">
        @if ($berita)
            <strong>
                <h1 class="mb-5 text-center text-black">{{ $berita->nama_wisata }}</h1>
            </strong>


            <div class="content-wisata mb-5">
                <img src="{{ Storage::url($berita->img_wisata) }}" class="img-fluid" alt="Gambar Wisata 1">
                <p class="text-center text-muted">Sumber gambar: website-1.com</p>

                <div>
                    {!! $berita->deskripsi_wisata !!}
                </div>

            </div>
        @else
            <p>Produk dengan kategori 'anyaman-pandan' tidak ditemukan.</p>
        @endif
    </div>
@endsection

