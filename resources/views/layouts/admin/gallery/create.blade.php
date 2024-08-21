@extends('layouts.admin.master.master')

@section('title', 'Tambah Gallery')

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
                    <form action="{{ route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="nama_kegiatan" class="form-label">Nama Kegiatan:</label>
                            <input type="text" name="nama_kegiatan" id="nama_kegiatan" class="form-control"
                                value="{{ old('nama_kegiatan') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="img1" class="form-label">Gambar Utama:</label>
                            <input type="file" name="img1" id="img1" class="form-control" accept="image/*"
                                onchange="previewImage(event, 'preview1')" required>
                            <img id="preview1" class="img-preview mt-2" style="max-width: 200px;">
                        </div>

                        <div id="additional-images">
                            <div class="mb-3">
                                <label for="additional_images_1" class="form-label">Gambar Tambahan 1:</label>
                                <input type="file" name="additional_images[]" id="additional_images_1"
                                    class="form-control" accept="image/*"
                                    onchange="previewImage(event, 'preview_additional_1')">
                                <img id="preview_additional_1" class="img-preview mt-2" style="max-width: 200px;">
                            </div>
                        </div>

                        <button type="button" class="btn btn-secondary mb-3" onclick="addImageInput()">Tambah
                            Gambar</button>

                        <button type="submit" class="btn btn-primary mb-3">Simpan Gallery</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        let imageCount = 1;

        function addImageInput() {
            imageCount++;
            const additionalImagesDiv = document.getElementById('additional-images');
            const newImageDiv = document.createElement('div');
            newImageDiv.classList.add('mb-3');
            newImageDiv.innerHTML = `
                <label for="additional_images_${imageCount}" class="form-label">Gambar Tambahan ${imageCount}:</label>
                <input type="file" name="additional_images[]" id="additional_images_${imageCount}" class="form-control" accept="image/*"
                    onchange="previewImage(event, 'preview_additional_${imageCount}')">
                <img id="preview_additional_${imageCount}" class="img-preview mt-2" style="max-width: 200px;">
            `;
            additionalImagesDiv.appendChild(newImageDiv);
        }

        function previewImage(event, previewId) {
            const reader = new FileReader();
            reader.onload = function() {
                const output = document.getElementById(previewId);
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
@endsection
