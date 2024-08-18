@extends('layouts.main.master.master')


@section('title', 'Produk')

@section('content')
    <div class="bg-green">
        <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner bg-innerproduk">
                <div class="search-produk">
                    <input class="form-control" list="datalistOptions" id="exampleDataList"
                        placeholder="produk apa yang anda cari?...">
                    <span class="search-icon">
                        <i class="fas fa-search"></i>
                    </span>
                </div>
                @foreach ($terbaiks as $index => $produk)
                    <div class="carousel-item slide-produk-item {{ $index == 0 ? 'active' : '' }}">
                        <div class="mask flex-center">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-md-7 col-12 order-md-1 order-2">
                                        <h4>{{ $produk->nama_produk }} <br>
                                            {{ $produk->kategori }}</h4>
                                        <p>{{ $produk->deskripsi }}</p>
                                        <a href="#" class="text-decoration-none" data-bs-toggle="modal"
                                            data-bs-target="#productModal" data-id="{{ $produk->id }}">Tanyakan
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



        <!-- Products -->
        <section>

            <div class="container">
                <header class="text-black pt-3" id="produk-anyaman-pandan">
                    <h3 class="judul sticky-header">Produk Anyaman Pandan</h3>
                </header>
                <div class="row">
                    <div class="wrapper-p ">
                        @foreach ($anyamans as $produk)
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
                                    <button type="button" class="btn btn-success buy-now-p" data-bs-toggle="modal"
                                        data-bs-target="#productModal" data-id="{{ $produk->id }}">
                                        <a href="#" class="text-decoration-none">Tanyakan Produk</a>
                                    </button>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto pt-4 pb-4">
                        <a class="btn btn-light " href="{{ route('produk.semua-anyaman') }}">Lihat
                            Lainnya</a>
                    </div>
                </div>

                <header class="text-black pt-3" id="produk-teknologi-tepat-guna">
                    <h3 class="judul sticky-header">Produk Teknologi Tepat Guna</h3>
                </header>
                <div class="row">
                    <div class="wrapper-p ">
                        @foreach ($ttgs as $produk)
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
                                    <button class="btn btn-success buy-now-p "><a href="#"
                                            class="text-decoration-none" data-bs-toggle="modal"
                                            data-bs-target="#productModal" data-id="{{ $produk->id }}">Tanyakan
                                            Produk</a></button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto pt-4 pb-4">
                        <a class="btn btn-light " href="{{ route('produk.semua-ttg') }}">Lihat
                            Lainnya</a>
                    </div>
                </div>

                <header class="text-black pt-3" id="produk-makanan-ringan">
                    <h3 class="judul sticky-header">Produk Makanan</h3>
                </header>
                <div class="row">
                    <div class="wrapper-p ">
                        @foreach ($makanans as $produk)
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
                                    <button class="btn btn-success buy-now-p "><a href="#"
                                            class="text-decoration-none" data-bs-toggle="modal"
                                            data-bs-target="#productModal" data-id="{{ $produk->id }}">Tanyakan
                                            Produk</a></button>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="d-grid gap-2 col-6 mx-auto pt-4 pb-4">
                        <a class="btn btn-light " href="{{ route('produk.semua-makanan') }}">Lihat
                            Lainnya</a>
                    </div>
                </div>

            </div>

        </section>

        <div id="fixed-header" class="fixed-header" style="display: none;">
            <h2>Header Fixed</h2>
        </div>
        <!-- Products -->

        {{-- <!-- Feature -->
        <section class="p-4">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6">
                        <div class="card-banner bg-gray h-100"
                            style="min-height: 200px; background-size: cover; background-position: center; width: 100%; background-repeat: no-repeat; top: 50%; background-image: url('https://mdbootstrap.com/img/bootstrap-ecommerce/banners/banner-item2.webp');">
                            <div class="p-3 p-lg-5" style="max-width: 70%;">
                                <h3 class="text-dark">Best products & brands in our store at 80% off</h3>
                                <p>That's true but not always</p>
                                <button class="btn btn-warning shadow-0" href="#"> Claim offer </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row mb-3 mb-sm-4 g-3 g-sm-4">
                            <div class="col-6 d-flex">
                                <div class="card w-100 bg-primary" style="min-height: 200px;">
                                    <div class="card-body">
                                        <h5 class="text-white">Gaming toolset</h5>
                                        <p class="text-white-50">Technology for cyber sport</p>
                                        <a class="btn btn-outline-light btn-sm" href="#">Learn more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 d-flex">
                                <div class="card w-100 bg-primary" style="min-height: 200px;">
                                    <div class="card-body">
                                        <h5 class="text-white">Quality sound</h5>
                                        <p class="text-white-50">All you need for music</p>
                                        <a class="btn btn-outline-light btn-sm" href="#">Learn more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- row.// -->

                        <div class="card bg-success" style="min-height: 200px;">
                            <div class="card-body">
                                <h5 class="text-white">Buy 2 items, With special gift</h5>
                                <p class="text-white-50" style="max-width: 400px;">Buy one, get one free marketing
                                    strategy
                                    helps your business improves the brand by sharing the profits</p>
                                <a class="btn btn-outline-light btn-sm" href="#">Learn more</a>
                            </div>
                        </div>
                    </div>
                    <!-- col.// -->
                </div>
                <!-- row.// -->
            </div>
            <!-- container end.// -->
        </section>
        <!-- Feature -->

        <!-- Recently viewed -->
        <section class="mt-5 mb-4">
            <div class="container text-dark ">
                <header class= " id="recently-viewed">
                    <h3 class="section-title">Barusaja Dilihat</h3>
                </header>

                <div class="row gy-3 p-4">
                    <div class="col-lg-2 col-md-4 col-4">
                        <a href="#" class="img-wrap">
                            <img height="200" width="200" class="img-thumbnail"
                                src="https://mdbootstrap.com/img/bootstrap-ecommerce/items/1.webp" />
                        </a>
                    </div>
                    <!-- col.// -->
                    <div class="col-lg-2 col-md-4 col-4">
                        <a href="#" class="img-wrap">
                            <img height="200" width="200" class="img-thumbnail"
                                src="https://mdbootstrap.com/img/bootstrap-ecommerce/items/2.webp" />
                        </a>
                    </div>
                    <!-- col.// -->
                    <div class="col-lg-2 col-md-4 col-4">
                        <a href="#" class="img-wrap">
                            <img height="200" width="200" class="img-thumbnail"
                                src="https://mdbootstrap.com/img/bootstrap-ecommerce/items/3.webp" />
                        </a>
                    </div>
                    <!-- col.// -->
                    <div class="col-lg-2 col-md-4 col-4">
                        <a href="#" class="img-wrap">
                            <img height="200" width="200" class="img-thumbnail"
                                src="https://mdbootstrap.com/img/bootstrap-ecommerce/items/4.webp" />
                        </a>
                    </div>
                    <!-- col.// -->
                    <div class="col-lg-2 col-md-4 col-4">
                        <a href="#" class="img-wrap">
                            <img height="200" width="200" class="img-thumbnail"
                                src="https://mdbootstrap.com/img/bootstrap-ecommerce/items/5.webp" />
                        </a>
                    </div>
                    <!-- col.// -->
                    <div class="col-lg-2 col-md-4 col-4">
                        <a href="#" class="img-wrap">
                            <img height="200" width="200" class="img-thumbnail"
                                src="https://mdbootstrap.com/img/bootstrap-ecommerce/items/6.webp" />
                        </a>
                    </div>
                </div>

            </div>

        </section>
        <!-- Recently viewed --> --}}
    </div>


@endsection
