@extends('layouts.main.master.master')

@section('title', 'Detail Produk')

@section('content')

    <header class="mb-4 text-black pt-1 text-center">
        <h3 class="judul text-decoration-none">Produk Ditanyakan</h3>
    </header>
    <img src="{{ Storage::url($produk->img1) }}" class="img-fluid" alt="foto produk">
    <div class="card m-5">
        <h5 class="card-header">{{ $produk->nama_produk }}</h5>
        <div class="card-body">
            <h5 class="card-title">{{ $produk->harga }}</h5>
            <p class="card-text">{{ $produk->kategori }}</p>
            <p class="card-text">{{ $produk->deskripsi }}</p>
        </div>
    </div>
@endsection
