@extends('layouts.main.master.master')

@section('title', 'Paket Wisata')

@section('content')
    <div class="image-bg">
        <div class="container">
            <header class="mb-4 text-black pt-3" id="anyaman">
                <h3 class="judul">Paket Wisata Desa Grenggeng</h3>
            </header>
            <div class="blur-box text-white">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link switch active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                            type="button" role="tab" aria-controls="home" aria-selected="true"><b>Paket Wisata
                                Edukasi</b></button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link switch" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                            type="button" role="tab" aria-controls="profile" aria-selected="false"><b>Angkutan
                                Umum</b></button>
                    </li>
                </ul>
                <div class="tab-content text-white" id="myTabContent">
                    <div class="tab-pane fade show active pb-5" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center">Nama Paket</th>
                                        <th scope="col" class="text-center">Target</th>
                                        <th scope="col" class="text-center">Harga</th>
                                        <th scope="col" class="text-center">Benefit</th>
                                        <th scope="col" class="text-center">Durasi Kunjungan</th>
                                        <th scope="col" class="text-center">Lokasi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Paket Little Star</th>
                                        <td>PAUD & TK</td>
                                        <td>Rp. 20.000/peserta</td>
                                        <td>
                                            <ol>
                                                <li>Aula Pelatihan</li>
                                                <li>Bunda Tutor Interaktif</li>
                                                <li>Snack & Air Mineral</li>
                                                <li>Bahan Materi Ajar</li>
                                                <li>Souvenir Little Star & Foto (@ 1pcs)</li>
                                            </ol>
                                        </td>
                                        <td>3 Jam</td>
                                        <td>Sekertariat KTH Margo Rahayu</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Paket Now I Know</th>
                                        <td>SEKOLAH DASAR</td>
                                        <td>Rp. 30.000/peserta</td>
                                        <td>
                                            <ol>
                                                <li>Aula Pelatihan</li>
                                                <li>Rumah Pelatihan</li>
                                                <li>Explore Kebun Pandan</li>
                                                <li>Tutor Interaktif</li>
                                                <li>Safety Gloves </li>
                                                <li>Snack & Air Mineral</li>
                                                <li>Bahan Materi Ajar</li>
                                                <li>Souvenir Little Star & Foto (@ 1pcs)</li>
                                            </ol>
                                        </td>
                                        <td>3 Jam</td>
                                        <td>
                                            <ol>
                                                <li>Sekertariat KTH Margo Rahayu</li>
                                                <li>Rumah Pelatihan</li>
                                                <li>Kebun Pandan</li>

                                            </ol>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Paket Young Star</th>
                                        <td>SLTP & SLTA</td>
                                        <td>Rp. 20.000/peserta</td>
                                        <td>
                                            <ol>
                                                <li>Aula Pelatihan</li>
                                                <li>Tutor Interaktif</li>
                                                <li>Snack & Air Mineral</li>
                                                <li>Bahan Materi Ajar</li>
                                                <li>Souvenir Little Star & Foto (@ 1pcs)</li>
                                            </ol>
                                        </td>
                                        <td>3 Jam</td>
                                        <td>Sekertariat KTH Margo Rahayu</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Paket Explorrer</th>
                                        <td>PELAJAR & UMUM</td>
                                        <td>Rp. 45.000/peserta</td>
                                        <td>
                                            <ol>
                                                <li>Aula Pelatihan</li>
                                                <li>Rumah Pelatihan</li>
                                                <li>Explore Kebun Pandan</li>
                                                <li>Tutor Interaktif</li>
                                                <li>Safety Gloves </li>
                                                <li>Snack & Air Mineral</li>
                                                <li>Bahan Materi Ajar</li>
                                                <li>Souvenir Little Star & Foto (@ 1pcs)</li>
                                            </ol>
                                        </td>
                                        <td>Max 6 Jam (Termasuk Ishoma)</td>
                                        <td>
                                            <ol>
                                                <li>Sekertariat KTH Margo Rahayu</li>
                                                <li>Rumah Pelatihan</li>
                                                <li>Kebun Pandan</li>
                                            </ol>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Paket Interviewer</th>
                                        <td>PELAJAR MAHASISWA UMUM</td>
                                        <td>Rp. 20.000/peserta</td>
                                        <td>
                                            <ol>
                                                <li>Aula Pelatihan</li>
                                                <li>Tutor Interaktif</li>
                                                <li>Snack & Air Mineral</li>
                                                <li>Bahan Materi Ajar</li>
                                                <li>Souvenir Little Star & Foto (@ 1pcs)</li>
                                            </ol>
                                        </td>
                                        <td>3 Jam</td>
                                        <td>Sekertariat KTH Margo Rahayu</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">International Tour Packages</th>
                                        <td>FOREIGN TOURISTS</td>
                                        <td>Rp. 85.000/participant</td>
                                        <td>
                                            <ol>
                                                <li>Hall</li>
                                                <li>Educational Tourism House</li>
                                                <li>Pandanus Garden Exploration</li>
                                                <li>Interactive Tutors</li>
                                                <li>Interactive Guides </li>
                                                <li>Safety Gloves</li>
                                                <li>Lunch & Snack (Local Menu)</li>
                                                <li>Training Materials</li>
                                                <li>Souvenir & Photo (1 pcs / tourist)</li>
                                            </ol>
                                        </td>
                                        <td>3 hours educational tourism</td>
                                        <td>
                                            <ol>
                                                <li>KTH Margo Rahayu Secretariat</li>
                                                <li>Educational Tourism House</li>
                                                <li>Pandanus Garden</li>
                                            </ol>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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
