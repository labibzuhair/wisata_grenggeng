@extends('layouts.main.master.master')

@section('title', 'Halaman Utama')

@section('content')
    <div class="image-bg">
        <div class="container">
            <header class="mb-4 text-black border-bottom pt-3" id="anyaman">
                <h3 class="judul">Paket Wisata Desa Grenggeng</h3>
            </header>
            <div class="blur-box text-white">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link switch active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                            type="button" role="tab" aria-controls="home" aria-selected="true"><b>Kendaraan
                                Pribadi</b></button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link switch" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                            type="button" role="tab" aria-controls="profile" aria-selected="false"><b>Angkutan
                                Umum</b></button>
                    </li>
                </ul>
                <div class="tab-content text-white" id="myTabContent">
                    <div class="tab-pane fade show active " id="home" role="tabpanel" aria-labelledby="home-tab">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade " id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


{{-- Paket wisata 2 macam,
Orang kesini dengan kendaraan sendiri
-edukasi : 20k (local umum) 50 untuk asing dengan 1 guide+transleetor inggris
Kunjungan selama 3 jam di semua lokasi
Dapat produk free
Parkir motor free
Mobil angkutan : 10k
Mobil pribadi :5k
Sudah termasuk asuransi jiwa
Wisata religi non paket
Paket ttg dll di mas doni --}}
