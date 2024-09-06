<!-- resources/views/admin/login.blade.php -->
@extends('layouts.admin.master.master')

@section('title', 'Semua Produk TTG')

@section('content')

    <div class="container-fluid px-4">
        <h1 class="mt-4">Produk TTG</h1>
        <ol class="breadcrumb mb-4">
            <a class="btn btn-primary " href="{{ route('admin.produk.ttg.create') }}">
                <li class="text-white">Tambah Data</li>
            </a>
        </ol>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Data Produk TTG (Teknologi Tepat Guna)
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Nama Produk</th>
                            <th>Img 1</th>
                            <th>Img 2</th>
                            <th>Img 3</th>
                            <th>Img 4</th>
                            <th>Img 5</th>
                            <th>Kategori</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nama Produk</th>
                            <th>Img 1</th>
                            <th>Img 2</th>
                            <th>Img 3</th>
                            <th>Img 4</th>
                            <th>Img 5</th>
                            <th>Kategori</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($produks as $produk)
                            <tr>
                                <td>{{ $produk->nama_produk }}</td>
                                <td>
                                    @if ($produk->img1)
                                        <img src="{{ Storage::url($produk->img1) }}" alt="Img 1"
                                            style="max-width: 100px;">
                                    @endif
                                </td>
                                <td>
                                    @if ($produk->img2)
                                        <img src="{{ Storage::url($produk->img2) }}" alt="Img 2"
                                            style="max-width: 100px;">
                                    @endif
                                </td>
                                <td>
                                    @if ($produk->img3)
                                        <img src="{{ Storage::url($produk->img3) }}" alt="Img 3"
                                            style="max-width: 100px;">
                                    @endif
                                </td>
                                <td>
                                    @if ($produk->img4)
                                        <img src="{{ Storage::url($produk->img4) }}" alt="Img 4"
                                            style="max-width: 100px;">
                                    @endif
                                </td>
                                <td>
                                    @if ($produk->img5)
                                        <img src="{{ Storage::url($produk->img5) }}" alt="Img 5"
                                            style="max-width: 100px;">
                                    @endif
                                </td>
                                <td>{{ $produk->kategori }}</td>
                                <td>{{ $produk->deskripsi }}</td>
                                <td>
                                    <!-- Tombol Edit -->
                                    <a href="{{ route('admin.produk.ttg.edit', $produk->id) }}"
                                        class="btn btn-sm btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>

                                    <!-- Tombol Hapus -->
                                    <form action="{{ route('admin.produk.ttg.hapus', $produk->id) }}" method="POST"
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
