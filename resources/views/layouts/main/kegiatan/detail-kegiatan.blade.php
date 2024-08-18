@extends('layouts.main.master.master')

@section('title', 'Detail Event')

@section('content')
    <div class="container-fluid py-5">
        <div class="container">
            @if (isset($kegiatan->id))
                <h1 class="mb-3 text-center fs-2 text-black">{{ $kegiatan->nama_event }}</h1>

                <div class="mb-5 w-100 text-center">

                    <img style="height: 400px;" src="{{ Storage::url($kegiatan->img_event) }}"
                        alt="{{ $kegiatan->nama_event }}">
                </div>

                <table class="table table-striped table-bordered border-secondary text-align-justify">
                    <thead></thead>

                    <tbody>
                        <tr>
                            <td class="col-3">
                                <span class="fw-semibold">
                                    Pengisi Acara
                                </span>
                            </td>
                            <td class="col-9">{{ $kegiatan->pengisi_acara }}</td>
                        </tr>
                        <tr>
                            <td class="col-3">
                                <span class="fw-semibold">
                                    Tanggal Event
                                </span>
                            </td>
                            <td class="col-9">{{ $kegiatan->tanggal_event }}</td>
                        </tr>

                        <tr>
                            <td class="col-3">
                                <span class="fw-semibold">
                                    Lokasi Event
                                </span>
                            </td>
                            <td class="col-9">{{ $kegiatan->lokasi }}</td>
                        </tr>


                        <tr>
                            <td class="col-3">
                                <span class="fw-semibold">
                                    Deskripsi
                                </span>
                            </td>
                            <td class="col-9">
                                <div>{!! $kegiatan->deskripsi !!}</div>
                            </td>
                        </tr>


                    </tbody>
                </table>
            @else
                <h1 class="mb-4 text-center fs-2">
                    {{ __('kegiatan.tidak_ditemukan') }}
                </h1>
            @endif
        </div>
    </div>
@endsection
