<!-- resources/views/admin/login.blade.php -->
@extends('layouts.admin.master.master')

@section('title', 'Login Admin')

@section('content')

    <div class="container-fluid px-4">
        <h1 class="mt-4">Paket Wisata Item</h1>
        <ol class="breadcrumb mb-4">
            <a class="btn btn-primary " href="{{ route('admin.paket-wisata.create') }}">
                <li class="text-white">Tambah Data</li>
            </a>
        </ol>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Paket Wisata Edukasi
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Nama Paket</th>
                            <th>Target</th>
                            <th>Harga</th>
                            <th>Benefit</th>
                            <th>Durasi</th>
                            <th>Lokasi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nama Paket</th>
                            <th>Target</th>
                            <th>Harga</th>
                            <th>Benefit</th>
                            <th>Durasi</th>
                            <th>Lokasi</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($edukasis as $edukasi)
                            <tr>
                                <td>{{ $edukasi->nama }}</td>
                                <td>{{ $edukasi->target }}</td>
                                <td>{{ $edukasi->harga }}</td>
                                <td>{!! $edukasi->benefit !!}</td>
                                <td>{{ $edukasi->durasi }}</td>
                                <td>{!! $edukasi->lokasi !!}</td>


                                <td>
                                    <!-- Tombol Edit -->
                                    <a href="{{ route('admin.paket-wisata.edit', $edukasi->id) }}"
                                        class="btn btn-sm btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>

                                    <!-- Tombol Hapus -->
                                    <form action="{{ route('admin.paket-wisata.hapus', $edukasi->id) }}" method="POST"
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
