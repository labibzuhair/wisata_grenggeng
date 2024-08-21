<!-- resources/views/admin/login.blade.php -->
@extends('layouts.admin.master.master')

@section('title', 'Produk TTG')

@section('content')

    <div class="container-fluid px-4">
        <h1 class="mt-4">Wisata Item</h1>
        {{-- <ol class="breadcrumb mb-4">
            <a class="btn btn-primary " href="{{ route('admin.sliders.create') }}">
                <li class="text-white">Tambah Data</li>
            </a>
        </ol> --}}

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Data Wisata
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Nama Wisata</th>
                            <th>Kategori</th>
                            <th>Deskripsi Wisata</th>
                            <th>Image Wisata</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nama Wisata</th>
                            <th>Kategori</th>
                            <th>Deskripsi Wisata</th>
                            <th>Image Wisata</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($sliders as $slider)
                            <tr>
                                <td>{{ $slider->nama_wisata }}</td>
                                <td>{{ $slider->kategori_wisata }}</td>
                                <td>{{ Str::limit(strip_tags($slider->deskripsi_wisata), 50, '...') }}</td>
                                <td>
                                    @if ($slider->img_wisata)
                                        <img src="{{ Storage::url($slider->img_wisata) }}" alt="Img 1"
                                            style="max-width: 100px;">
                                    @endif
                                </td>

                                <td>
                                    <!-- Tombol Edit -->
                                    <a href="{{ route('admin.sliders.edit', $slider->id) }}"
                                        class="btn btn-sm btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>

                                    <!-- Tombol Hapus -->
                                    <form action="{{ route('admin.sliders.hapus', $slider->id) }}" method="POST"
                                        style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')"><i
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
