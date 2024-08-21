<!-- resources/views/admin/edit.blade.php -->
@extends('layouts.admin.master.master')

@section('title', 'Edit Gallery')

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
                    <form action="{{ route('admin.gallery.update', $gallery->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Nama Kegiatan -->
                        <div class="mb-3">
                            <label for="nama_kegiatan" class="form-label">Nama Kegiatan:</label>
                            <input type="text" name="nama_kegiatan" id="nama_kegiatan" class="form-control"
                                value="{{ old('nama_kegiatan', $gallery->name) }}" required>
                        </div>

                        <!-- Gambar Utama dengan Preview -->
                        <div class="mb-3">
                            <label for="img1" class="form-label">Gambar Utama:</label>
                            <input type="file" name="img1" id="img1" class="form-control" accept="image/*"
                                onchange="previewImage(event, 'preview1')">
                            @if ($gallery->mainPhoto)
                                <img id="preview1" class="mt-2" src="{{ Storage::url($gallery->mainPhoto->image) }}"
                                    style="max-width: 200px;">
                            @else
                                <img id="preview1" class="img-preview mt-2" style="max-width: 200px;">
                            @endif
                        </div>

                        <!-- Gambar Tambahan dengan Preview -->
                        <div class="mb-3">
                            <label for="additional_images" class="form-label">Gambar Tambahan:</label>
                            <div id="additional_images_container">
                                @foreach ($gallery->photos->where('is_main', false) as $photo)
                                    <div class="mb-2 d-flex align-items-center">
                                        <input type="file" name="additional_images[{{ $photo->id }}]"
                                            class="form-control" accept="image/*"
                                            onchange="previewImage(event, 'preview_{{ $photo->id }}')">
                                        <img id="preview_{{ $photo->id }}" class=" ms-2"
                                            src="{{ Storage::url($photo->image) }}" style="max-width: 100px;">
                                        <button type="button" class="btn btn-danger ms-2"
                                            onclick="removeImage({{ $photo->id }})">Hapus</button>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- Tambah gambar tambahan baru -->
                        <div class="mb-3">
                            <button type="button" class="btn btn-secondary" onclick="addImageInput()">Tambah
                                Gambar</button>
                        </div>

                        <button type="submit" class="btn btn-primary">Update Gallery</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function previewImage(event, previewId) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById(previewId);
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }

        function addImageInput() {
            var container = document.getElementById('additional_images_container');
            var index = container.children.length;
            var div = document.createElement('div');
            div.className = 'mb-2 d-flex align-items-center';
            div.innerHTML = `
                <input type="file" name="additional_images[new_${index}]" class="form-control" accept="image/*" onchange="previewImage(event, 'new_preview_${index}')">
                <img id="new_preview_${index}" class="img-preview ms-2" style="max-width: 100px;">
            `;
            container.appendChild(div);
        }

        function removeImage(photoId) {
            var input = document.createElement('input');
            input.type = 'hidden';
            input.name = 'deleted_images[]';
            input.value = photoId;
            document.querySelector('form').appendChild(input);

            var imageContainer = document.querySelector(`input[name="additional_images[${photoId}]"]`).closest('.mb-2');
            imageContainer.remove();
        }
    </script>
@endsection
