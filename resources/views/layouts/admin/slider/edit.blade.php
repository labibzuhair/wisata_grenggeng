@extends('layouts.admin.master.master')

@section('title', 'Edit Produk')

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
                    <form action="{{ route('admin.sliders.update', $sliders->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="nama_wisata" class="form-label">Nama Wisata:</label>
                            <input type="text" name="nama_wisata" id="nama_wisata" class="form-control"
                                value="{{ $sliders->nama_wisata }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="img_wisata" class="form-label">Gambar Utama:</label>
                            <input type="file" name="img_wisata" id="img_wisata" class="form-control" accept="image/*"
                                onchange="previewImage(event, 'preview1')">
                            @if ($sliders->img_wisata)
                                <img id="preview1" class="mt-2" src="{{ Storage::url($sliders->img_wisata) }}"
                                    style="max-width: 200px;">
                            @else
                                <img id="preview1" class="img-preview mt-2" style="max-width: 200px;">
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="kategori_wisata" class="form-label">Kategori Wisata:</label>
                            <select class="form-select form-select-lg mb-3" name="kategori_wisata" id="kategori_wisata"
                                aria-label="Large select example">
                                <option value="">pilih salah satu kategori</option>
                                <option value="anyaman-pandan">Anyaman Pandan</option>
                                {{-- <option value="TTG">TTG</option> --}}
                                <option value="wisata-sejarah">Wisata Sejarah</option>
                                <option value="makam">Makam</option>
                                <option value="lembah-pereng">Lembah Pereng</option>
                                <option value="pasar">Pasar</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="deskripsi_wisata" class="form-label">Deskripsi Wisata:</label>
                            <textarea id="open-source-plugins" id="open-source-plugins" name="deskripsi_wisata">
                                {!! old('deskripsi_wisata', $sliders->deskripsi_wisata ?? '') !!}
                              </textarea>
                        </div>



                        <button type="submit" class="btn btn-primary">Update Produk</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
