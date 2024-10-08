<!-- resources/views/admin/login.blade.php -->
@extends('layouts.admin.master.master')

@section('title', 'Dashboard Admin')

@section('content')
    <div class="p-2 m-4 " style="background-color: rgb(246 246 246); border-radius: 10px;">
        <h1 class="m-2">Dashboard</h1>
    </div>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="container-ad">
        <div class="row p-5 m-5" style="background-color: #ebebeb;">
            <div class="col-md-4 mb-md-0 pb-4">
                <div class="card d-flex flex-column align-items-center justify-content-center">
                    <div class="inner-content d-flex flex-column align-items-center justify-content-center">
                        <div class="img-container-ad rounded-circle">
                            <img src="{{ Storage::url($lastTerbaik->img1) }}" alt="" class="rounded-circle">
                        </div>
                        <div class="h3">Produk Terbaik</div>
                        <p class="designation text-muted text-uppercase">Jumlah Data : {{ $jumlahTerbaik }}</p>
                    </div>
                    <ul
                        class="social-links d-flex align-items-center justify-content-around list-unstyled w-100 fs-5 m-0 p-0">
                        <li><a href="{{ route('admin.produk.terbaik') }}"><span class="fa-solid fa-eye"></span></a></li>
                        <li><a href="{{ route('admin.produk.terbaik.create') }}"><span
                                    class="fa-solid fa-square-plus"></span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 mb-md-0 pb-4">
                <div class="card d-flex flex-column align-items-center justify-content-center">
                    <div class="inner-content d-flex flex-column align-items-center justify-content-center">
                        <div class="img-container-ad rounded-circle">
                            <img src="{{ Storage::url($lastAnyaman->img1) }}" alt="" class="rounded-circle">
                        </div>
                        <div class="h3">Produk Anyaman</div>
                        <p class="designation text-muted text-uppercase">Jumlah Data : {{ $jumlahAnyaman }}</p>
                    </div>
                    <ul
                        class="social-links d-flex align-items-center justify-content-around list-unstyled w-100 fs-5 m-0 p-0">
                        <li><a href="{{ route('admin.produk.anyaman-pandan') }}"><span class="fa-solid fa-eye"></span></a>
                        </li>
                        <li><a href="{{ route('admin.produk.produk-anyaman.create') }}"><span
                                    class="fa-solid fa-square-plus"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 mb-md-0 pb-4">
                <div class="card d-flex flex-column align-items-center justify-content-center">
                    <div class="inner-content d-flex flex-column align-items-center justify-content-center">
                        <div class="img-container-ad rounded-circle">
                            <img src="{{ Storage::url($lastTTG->img1) }}" alt="" class="rounded-circle">
                        </div>
                        <div class="h3">Produk TTG</div>
                        <p class="designation text-muted text-uppercase">Jumlah Data : {{ $jumlahTTG }}</p>
                    </div>
                    <ul
                        class="social-links d-flex align-items-center justify-content-around list-unstyled w-100 fs-5 m-0 p-0">
                        <li><a href="{{ route('admin.produk.ttg') }}"><span class="fa-solid fa-eye"></span></a></li>
                        <li><a href="{{ route('admin.produk.ttg.create') }}"><span
                                    class="fa-solid fa-square-plus"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 mb-md-0 pb-4">
                <div class="card d-flex flex-column align-items-center justify-content-center">
                    <div class="inner-content d-flex flex-column align-items-center justify-content-center">
                        <div class="img-container-ad rounded-circle">
                            <img src="{{ Storage::url($lastMakanan->img1) }}" alt="" class="rounded-circle">
                        </div>
                        <div class="h3">Produk Makanan</div>
                        <p class="designation text-muted text-uppercase">Jumlah Data : {{ $jumlahMakanan }}</p>
                    </div>
                    <ul
                        class="social-links d-flex align-items-center justify-content-around list-unstyled w-100 fs-5 m-0 p-0">
                        <li><a href="{{ route('admin.produk.makanan') }}"><span class="fa-solid fa-eye"></span></a></li>
                        <li><a href="{{ route('admin.produk.makanan.create') }}"><span
                                    class="fa-solid fa-square-plus"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 mb-md-0 pb-4">
                <div class="card d-flex flex-column align-items-center justify-content-center">
                    <div class="inner-content d-flex flex-column align-items-center justify-content-center">
                        <div class="img-container-ad rounded-circle">
                            <img src="{{ Storage::url($lastSlider->img_wisata) }}" alt="" class="rounded-circle">
                        </div>
                        <div class="h3">Wisata</div>
                        <p class="designation text-muted text-uppercase">Jumlah Data : {{ $jumlahSlider }}</p>
                    </div>
                    <ul
                        class="social-links d-flex align-items-center justify-content-around list-unstyled w-100 fs-5 m-0 p-0">
                        <li><a href="{{ route('admin.sliders') }}"><span class="fa-solid fa-eye"></span></a></li>
                        <li><a href="{{ route('admin.sliders.create') }}"><span class="fa-solid fa-square-plus"></span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 mb-md-0 pb-4">
                <div class="card d-flex flex-column align-items-center justify-content-center">
                    <div class="inner-content d-flex flex-column align-items-center justify-content-center">
                        <div class="img-container-ad rounded-circle">
                            <img src="{{ Storage::url($lastEvent->img_event) }}" alt="" class="rounded-circle">
                        </div>
                        <div class="h3">Event</div>
                        <p class="designation text-muted text-uppercase">Jumlah Data : {{ $jumlahEvent }}</p>
                    </div>
                    <ul
                        class="social-links d-flex align-items-center justify-content-around list-unstyled w-100 fs-5 m-0 p-0">
                        <li><a href="{{ route('admin.events') }}"><span class="fa-solid fa-eye"></span></a></li>
                        <li><a href="{{ route('admin.event.create') }}"><span class="fa-solid fa-square-plus"></span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 mb-md-0 pb-4">
                <div class="card d-flex flex-column align-items-center justify-content-center">
                    <div class="inner-content d-flex flex-column align-items-center justify-content-center">
                        <div class="img-container-ad rounded-circle">
                            @if ($lastGallery && $lastGallery->mainPhoto)
                                <img src="{{ Storage::url($lastGallery->mainPhoto->image) }}" alt=""
                                    class="rounded-circle">
                            @else
                                <img src="{{ asset('images/default-image.jpg') }}" alt="" class="rounded-circle">
                            @endif
                        </div>
                        <div class="h3">Gallery</div>
                        <p class="designation text-muted text-uppercase">Jumlah Data : {{ $jumlahGallery }}</p>
                    </div>
                    <ul
                        class="social-links d-flex align-items-center justify-content-around list-unstyled w-100 fs-5 m-0 p-0">
                        <li><a href="{{ route('admin.gallery') }}"><span class="fa-solid fa-eye"></span></a></li>
                        <li><a href="{{ route('admin.gallery.create') }}"><span
                                    class="fa-solid fa-square-plus"></span></a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
@endsection
