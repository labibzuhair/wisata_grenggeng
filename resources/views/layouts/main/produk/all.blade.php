@extends('layouts.main.master.master')


@section('title', 'Semua Produk')

@section('content')
    <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner bg-innerproduk">
            <div class="search-produk">
                <input class="form-control" list="datalistOptions" id="exampleDataList"
                    placeholder="produk apa yang anda cari?...">
                <span class="search-icon">
                    <i class="fas fa-search"></i>
                </span>
            </div>
            @if (request()->routeIs('produk.semua-anyaman'))
                @foreach ($anyaman as $index => $produk)
                    <div class="carousel-item slide-produk-item {{ $index == 0 ? 'active' : '' }}">
                        <div class="mask flex-center">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-md-7 col-12 order-md-1 order-2">
                                        <h4>{{ $produk->nama_produk }} <br>
                                            {{ $produk->kategori }}</h4>
                                        <p>{{ $produk->deskripsi }}</p>
                                        <a href="#" class="text-decoration-none" data-bs-toggle="modal"
                                            data-bs-target="#productModal" data-id="{{ $produk->id }}"
                                            data-type="anyaman">Tanyakan
                                            Produk</a>
                                    </div>
                                    <div class="col-md-5 col-12 order-md-2 order-1">
                                        <img src="{{ Storage::url($produk->img1) }}" class="mx-auto" alt="slide">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @elseif (request()->routeIs('produk.semua-ttg'))
                @foreach ($ttg as $index => $produk)
                    <div class="carousel-item slide-produk-item {{ $index == 0 ? 'active' : '' }}">
                        <div class="mask flex-center">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-md-7 col-12 order-md-1 order-2">
                                        <h4>{{ $produk->nama_produk }} <br>
                                            {{ $produk->kategori }}</h4>
                                        <p>{{ $produk->deskripsi }}</p>
                                        <a href="#" class="text-decoration-none" data-bs-toggle="modal"
                                            data-bs-target="#productModal" data-id="{{ $produk->id }}"
                                            data-type="ttg">Tanyakan
                                            Produk</a>
                                    </div>
                                    <div class="col-md-5 col-12 order-md-2 order-1">
                                        <img src="{{ Storage::url($produk->img1) }}" class="mx-auto" alt="slide">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @elseif (request()->routeIs('produk.semua-makanan'))
                @foreach ($makanan as $index => $produk)
                    <div class="carousel-item slide-produk-item {{ $index == 0 ? 'active' : '' }}">
                        <div class="mask flex-center">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-md-7 col-12 order-md-1 order-2">
                                        <h4>{{ $produk->nama_produk }} <br>
                                            {{ $produk->kategori }}</h4>
                                        <p>{{ $produk->deskripsi }}</p>
                                        <a href="#" class="text-decoration-none" data-bs-toggle="modal"
                                            data-bs-target="#productModal" data-id="{{ $produk->id }}"
                                            data-type="makanan">Tanyakan
                                            Produk</a>
                                    </div>
                                    <div class="col-md-5 col-12 order-md-2 order-1">
                                        <img src="{{ Storage::url($produk->img1) }}" class="mx-auto" alt="slide">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                Semua Produk
            @endif

        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>
    <!--slide end-->


    <!-- Fixed Header -->
    <div id="fixed-header" class="fixed_header">
        <h3 id="fixed-header-text"></h3>
    </div>


    <!-- Products -->
    <section>
        <div class="bg-event">
            <div class="container">
                <header class="mb-4 text-black pt-3" id="anyaman">
                    <h3 class="judul">
                        @if (request()->routeIs('produk.semua-anyaman'))
                            Produk Anyaman Pandan
                        @elseif (request()->routeIs('produk.semua-ttg'))
                            Produk Teknologi Tepat Guna
                        @elseif (request()->routeIs('produk.semua-makanan'))
                            Produk Makanan Ringan
                        @else
                            Semua Produk
                        @endif
                    </h3>
                </header>

                <div class="row">
                    <div class="wrapper-p">
                        @foreach ($produks as $produk)
                            <div class="card card-p text-center">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#productModal"
                                    data-id="{{ $produk->id }}">
                                    <div class="image">
                                        <img src="{{ Storage::url($produk->img1) }}" width="300">
                                    </div>
                                </a>
                                <div class="about-product-p text-center">
                                    <h3>{{ $produk->nama_produk }}</h3>
                                    <h4>Kategori: <small>{{ $produk->kategori }}</small></h4>
                                    <button class="btn btn-success buy-now-p"><a href="#" class="text-decoration-none"
                                            data-bs-toggle="modal" data-bs-target="#productModal"
                                            data-id="{{ $produk->id }}">Tanyakan
                                            Produk</a></button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>

    </section>



@endsection
