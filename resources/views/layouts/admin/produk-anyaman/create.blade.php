<!-- resources/views/admin/login.blade.php -->
@extends('layouts.admin.master.master')

@section('title', 'Tambah Produk Anyaman')

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
                    <form action="{{ route('admin.produk.produk-anyaman.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="nama_produk" class="form-label">Nama Produk:</label>
                            <input type="text" name="nama_produk" id="nama_produk" class="form-control"
                                value="{{ old('nama_produk') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="kategori" class="form-label">Kategori:</label>
                            <input type="text" name="kategori" id="kategori" class="form-control"
                                value="{{ old('kategori') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi Produk:</label>
                            <textarea name="deskripsi" id="deskripsi" class="form-control" rows="3" required>{{ old('deskripsi') }}</textarea>
                        </div>


                        <div class="mb-3">
                            <label for="img1" class="form-label">Gambar 1:</label>
                            <small class="form-text text-muted">
                                pastikan type gambar : jpeg, png, jpg, gif. dan Ukuran maksimal: 2 MB.
                            </small>
                            <input type="file" name="img1" id="img1" class="form-control" accept="image/*"
                                onchange="previewImage(event, 'preview1')">
                            <img id="preview1" class="img-preview mt-2" style="max-width: 200px;">
                        </div>

                        <div class="mb-3">
                            <label for="img2" class="form-label">Gambar 2:</label>
                            <input type="file" name="img2" id="img2" class="form-control" accept="image/*"
                                onchange="previewImage(event, 'preview2')">
                            <img id="preview2" class="img-preview mt-2" style="max-width: 200px;">
                        </div>

                        <div class="mb-3">
                            <label for="img3" class="form-label">Gambar 3:</label>
                            <input type="file" name="img3" id="img3" class="form-control" accept="image/*"
                                onchange="previewImage(event, 'preview3')">
                            <img id="preview3" class="img-preview mt-2" style="max-width: 200px;">
                        </div>

                        <div class="mb-3">
                            <label for="img4" class="form-label">Gambar 4:</label>
                            <input type="file" name="img4" id="img4" class="form-control" accept="image/*"
                                onchange="previewImage(event, 'preview4')">
                            <img id="preview4" class="img-preview mt-2" style="max-width: 200px;">
                        </div>

                        <div class="mb-3">
                            <label for="img5" class="form-label">Gambar 5:</label>
                            <input type="file" name="img5" id="img5" class="form-control" accept="image/*"
                                onchange="previewImage(event, 'preview5')">
                            <img id="preview5" class="img-preview mt-2" style="max-width: 200px;">
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan Produk</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
