<!-- resources/views/admin/login.blade.php -->
@extends('layouts.admin.master.master')

@section('title', 'Login Admin')

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
                    <form action="{{ route('admin.sliders.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="nama_wisata" class="form-label">Nama Wisata:</label>
                            <input type="text" name="nama_wisata" id="nama_wisata" class="form-control"
                                value="{{ old('nama_wisata') }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="kategori_wisata" class="form-label">Kategori Wisata:</label>
                            <select class="form-select form-select-lg mb-3" name="kategori_wisata" id="kategori_wisata"
                                aria-label="Large select example">
                                <option selected>pilih salah satu kategori</option>
                                <option value="anyaman-pandan">anyaman-pandan</option>
                                <option value="wisata-sejarah">wisata-sejarah</option>
                                <option value="lembah-pereng">lembah-pereng</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="deskripsi_wisata" class="form-label">Deskripsi Wisata:</label>
                            <textarea name="deskripsi_wisata" id="deskripsi_wisata" class="form-control" rows="3" required>{{ old('deskripsi_wisata') }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="img_wisata" class="form-label">Gambar Wisata:</label>
                            <input type="file" name="img_wisata" id="img_wisata" class="form-control" accept="image/*"
                                onchange="previewImage(event, 'preview1')">
                            <img id="preview1" class="img-preview mt-2" style="max-width: 200px;">
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan Produk</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
