@extends('layouts.admin.master.master')

@section('title', 'Edit Produk Anyaman')

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
                    <form action="{{ route('admin.produk.produk-anyaman.update', $produk->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="nama_produk" class="form-label">Nama Produk:</label>
                            <input type="text" name="nama_produk" id="nama_produk" class="form-control"
                                value="{{ $produk->nama_produk }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="kategori" class="form-label">Kategori:</label>
                            <input type="text" name="kategori" id="kategori" class="form-control"
                                value="{{ $produk->kategori }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi Produk:</label>
                            <textarea name="deskripsi" id="deskripsi" class="form-control" rows="3" required>{{ $produk->deskripsi }}</textarea>
                        </div>

                        <!-- Add preview and existing image fields similarly as done in the create form -->
                        <!-- Example for img1 -->
                        <div class="mb-3">
                            <label for="img1" class="form-label">Gambar 1:</label>
                            <small class="form-text text-muted">
                                pastikan type gambar : jpeg, png, jpg, gif. dan Ukuran maksimal: 2 MB.
                            </small>
                            <input type="file" name="img1" id="img1" class="form-control" accept="image/*"
                                onchange="previewImage(event, 'preview1')">
                            @if ($produk->img1)
                                <img id="preview1" class="mt-2" src="{{ Storage::url($produk->img1) }}"
                                    style="max-width: 200px;">
                            @else
                                <img id="preview1" class="img-preview mt-2" style="max-width: 200px;">
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="img2" class="form-label">Gambar 2:</label>
                            <small class="form-text text-muted">
                                pastikan type gambar : jpeg, png, jpg, gif. dan Ukuran maksimal: 2 MB.
                            </small>
                            <input type="file" name="img2" id="img2" class="form-control" accept="image/*"
                                onchange="previewImage(event, 'preview2')">
                            @if ($produk->img2)
                                <img id="preview2" class="mt-2" src="{{ Storage::url($produk->img2) }}"
                                    style="max-width: 200px;">
                            @else
                                <img id="preview2" class="img-preview mt-2" style="max-width: 200px;">
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="img3" class="form-label">Gambar 3:</label>
                            <small class="form-text text-muted">
                                pastikan type gambar : jpeg, png, jpg, gif. dan Ukuran maksimal: 2 MB.
                            </small>
                            <input type="file" name="img3" id="img3" class="form-control" accept="image/*"
                                onchange="previewImage(event, 'preview3')">
                            @if ($produk->img3)
                                <img id="preview3" class="mt-2" src="{{ Storage::url($produk->img3) }}"
                                    style="max-width: 200px;">
                            @else
                                <img id="preview3" class="img-preview mt-2" style="max-width: 200px;">
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="img4" class="form-label">Gambar 4:</label>
                            <small class="form-text text-muted">
                                pastikan type gambar : jpeg, png, jpg, gif. dan Ukuran maksimal: 2 MB.
                            </small>
                            <input type="file" name="img4" id="img4" class="form-control" accept="image/*"
                                onchange="previewImage(event, 'preview4')">
                            @if ($produk->img4)
                                <img id="preview4" class="mt-2" src="{{ Storage::url($produk->img4) }}"
                                    style="max-width: 200px;">
                            @else
                                <img id="preview4" class="img-preview mt-2" style="max-width: 200px;">
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="img5" class="form-label">Gambar 5:</label>
                            <small class="form-text text-muted">
                                pastikan type gambar : jpeg, png, jpg, gif. dan Ukuran maksimal: 2 MB.
                            </small>
                            <input type="file" name="img5" id="img5" class="form-control" accept="image/*"
                                onchange="previewImage(event, 'preview5')">
                            @if ($produk->img5)
                                <img id="preview5" class="mt-2" src="{{ Storage::url($produk->img5) }}"
                                    style="max-width: 200px;">
                            @else
                                <img id="preview5" class="img-preview mt-2" style="max-width: 200px;">
                            @endif
                        </div>



                        <button type="submit" class="btn btn-primary">Update Produk</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
