<!-- resources/views/admin/gallery/index.blade.php -->
@extends('layouts.admin.master.master')

@section('title', 'Gallery')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Gallery</h1>
        <ol class="breadcrumb mb-4">
            <a class="btn btn-primary" href="{{ route('admin.gallery.create') }}">
                Tambah Data
            </a>
        </ol>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Data Gallery
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Nama Kegiatan</th>
                            <th>Image Main</th>
                            <th>Gambar Tambahan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nama Kegiatan</th>
                            <th>Image Main</th>
                            <th>Gambar Tambahan</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($galleries as $gallery)
                            <tr>
                                <td>{{ $gallery->name }}</td>
                                <td>
                                    @if ($gallery->mainPhoto)
                                        <img src="{{ asset('storage/' . $gallery->mainPhoto->image) }}" alt="Image Main"
                                            width="100">
                                    @else
                                        No Image
                                    @endif
                                </td>
                                <td>
                                    @foreach ($gallery->photos as $photo)
                                        @if (!$photo->is_main)
                                            <img src="{{ asset('storage/' . $photo->image) }}" alt="Additional Image"
                                                width="100">
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    <a href="{{ route('admin.gallery.edit', $gallery->id) }}"
                                        class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                                        
                                    <form action="{{ route('admin.gallery.hapus', $gallery->id) }}" method="POST"
                                        style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i
                                                class="fa-solid fa-trash-can"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
