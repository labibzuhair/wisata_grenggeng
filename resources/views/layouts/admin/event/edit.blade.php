@extends('layouts.admin.master.master')

@section('title', 'Edit event')

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
                    <form action="{{ route('admin.event.update', $event->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="nama_event" class="form-label">Nama Event:</label>
                            <input type="text" name="nama_event" id="nama_event" class="form-control"
                                value="{{ $event->nama_event }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="img_event" class="form-label">Gambar :</label>
                            <small class="form-text text-muted">
                                pastikan type gambar : jpeg, png, jpg, gif. dan Ukuran maksimal: 2 MB.
                            </small>
                            <input type="file" name="img_event" id="img_event" class="form-control" accept="image/*"
                                onchange="previewImage(event, 'preview1')">
                            @if ($event->img_event)
                                <img id="preview1" class="mt-2" src="{{ Storage::url($event->img_event) }}"
                                    style="max-width: 200px;">
                            @else
                                <img id="preview1" class="img-preview mt-2" style="max-width: 200px;">
                            @endif
                        </div>

                        <div class="mb-3">
                            <label for="tanggal_event" class="form-label">Tanggal Event:</label>
                            <input type="text" name="tanggal_event" id="tanggal_event" class="form-control"
                                value="{{ $event->tanggal_event }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="waktu" class="form-label">Waktu Event:</label>
                            <input type="text" name="waktu" id="waktu" class="form-control"
                                value="{{ $event->waktu }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="lokasi" class="form-label">Lokasi Event:</label>
                            <input type="text" name="lokasi" id="lokasi" class="form-control"
                                value="{{ $event->lokasi }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="pengisi_acara" class="form-label">Pengisi Acara Event:</label>
                            <input type="text" name="pengisi_acara" id="pengisi_acara" class="form-control"
                                value="{{ $event->pengisi_acara }}" required>
                        </div>


                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi Event:</label>
                            <textarea name="deskripsi" id="deskripsi" class="form-control" rows="3" required>{{ $event->deskripsi }}</textarea>
                        </div>


                        <button type="submit" class="btn btn-primary">Update event</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
