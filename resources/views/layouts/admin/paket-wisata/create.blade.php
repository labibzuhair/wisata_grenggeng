<!-- resources/views/admin/login.blade.php -->
@extends('layouts.admin.master.master')

@section('title', 'Tambah Paket Wisata')

@section('content')
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="container my-4">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="p-4 bg-light border rounded">
                    <form action="{{ route('admin.paket-wisata.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Paket Edukasi:</label>
                            <input type="text" name="nama" id="nama" class="form-control"
                                value="{{ old('nama') }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="target" class="form-label">Target Wisatawan:</label>
                            <input type="text" name="target" id="target" class="form-control"
                                value="{{ old('target') }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga:</label>
                            <input type="text" name="harga" id="harga" class="form-control"
                                value="{{ old('harga') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="benefit" class="form-label">Benefit Wisata:</label>
                            <textarea id="open-source-plugins" id="open-source-plugins" name="benefit">
                                {{ old('benefit') }}
                            </textarea>
                        </div>
                        <div class="mb-3">
                            <label for="durasi" class="form-label">Durasi Wisata:</label>
                            <input type="text" name="durasi" id="durasi" class="form-control"
                                value="{{ old('durasi') }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="lokasi" class="form-label">Lokasi Wisata:</label>
                            <textarea id="open-source-plugins" id="open-source-plugins" name="lokasi">
                                {{ old('lokasi') }}
                            </textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan Produk</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
