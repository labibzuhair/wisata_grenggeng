<!-- resources/views/admin/login.blade.php -->
@extends('layouts.admin.master.master')

@section('title', 'Login Admin')

@section('content')

    <div class="container-fluid px-4">
        <h1 class="mt-4">Event</h1>
        <ol class="breadcrumb mb-4">
            <a class="btn btn-primary " href="{{ route('admin.event.create') }}">
                <li class="text-white">Tambah Data</li>
            </a>
        </ol>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Data Event
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Nama Event</th>
                            <th>Tanggal Event</th>
                            <th>Waktu</th>
                            <th>Lokasi</th>
                            <th>Pengisi Acara</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nama Event</th>
                            <th>Tanggal Event</th>
                            <th>Waktu</th>
                            <th>Lokasi</th>
                            <th>Pengisi Acara</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($events as $event)
                            <tr>
                                <td>{{ $event->nama_event }}</td>
                                <td>{{ $event->tanggal_event }}</td>
                                <td>{{ $event->waktu }}</td>
                                <td>{{ $event->lokasi }}</td>
                                <td>{{ $event->pengisi_acara }}</td>
                                <td>{{ $event->deskripsi }}</td>
                                <td>
                                    <!-- Tombol Edit -->
                                    <a href="{{ route('admin.event.edit', $event->id) }}"
                                        class="btn btn-sm btn-warning">Edit</a>

                                    <!-- Tombol Hapus -->
                                    <form action="{{ route('admin.event.hapus', $event->id) }}" method="POST"
                                        style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus event ini?')">Hapus</button>
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
