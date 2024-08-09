@extends('layouts.main.master.master')


@section('title', 'Halaman Utama')

@section('content')
    <div class="bg-green">
        <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner bg-innerproduk">
                <div class="search-produk">
                    <input class="form-control" list="datalistOptions" id="exampleDataList"
                        placeholder="produk apa yang anda cari?...">
                    <span class="search-icon">
                        <i class="fas fa-search"></i>
                    </span>
                </div>

                <div class="carousel-item slide-produk-item active" t>
                    <div class="mask flex-center">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-7 col-12 order-md-1 order-2">
                                    <h4>Present your <br>
                                        awesome product</h4>
                                    <p>Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerum <br>
                                        necessitatibus praesentium voluptatum deleniti atque corrupti.</p>
                                    {{-- <a href="facebook.com" class="text-decoration-none btn-primary"
                                            data-id="{{ $produk->id }}">Tanyakan Produk</a> --}}
                                </div>
                                <div class="col-md-5 col-12 order-md-2 order-1"><img src="https://i.imgur.com/NKvkfTT.png"
                                        class="mx-auto" alt="slide"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="mask flex-center">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-7 col-12 order-md-1 order-2">
                                    <h4>Present your <br>
                                        awesome product</h4>
                                    <p>Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerum <br>
                                        necessitatibus praesentium voluptatum deleniti atque corrupti.</p>
                                    <a href="#">BUY NOW</a>
                                </div>
                                <div class="col-md-5 col-12 order-md-2 order-1"><img src="https://i.imgur.com/duWgXRs.png"
                                        class="mx-auto" alt="slide"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="mask flex-center">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-7 col-12 order-md-1 order-2">
                                    <h4>Present your <br>
                                        awesome product</h4>
                                    <p>Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerum <br>
                                        necessitatibus praesentium voluptatum deleniti atque corrupti.</p>
                                    <a href="#">BUY NOW</a>
                                </div>
                                <div class="col-md-5 col-12 order-md-2 order-1"><img src="https://i.imgur.com/DGkR4OQ.png"
                                        class="mx-auto" alt="slide"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev"> <span
                    class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next"> <span
                    class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
        </div>
        <!--slide end-->


        <!-- Fixed Header -->
        <div id="fixed-header" class="fixed_header mb-4 text-black pt-3">
            <h3 id="fixed-header-text" class="judul"></h3>
        </div>


        <!-- Products -->
        <section>

            <div class="container">
                <header class="mb-4 text-black pt-3" id="anyaman">
                    <h3 class="judul">Produk Anyaman Pandan</h3>
                </header>
                <div class="row">
                    <div class="wrapper-p ">
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
                                    <h4>Kategori: <small>{{ $produk->kategori_produk }}</small></h4>
                                    <button class="btn btn-success buy-now-p "><a href="#"
                                            class="text-decoration-none" data-bs-toggle="modal"
                                            data-bs-target="#productModal" data-id="{{ $produk->id }}">Tanyakan
                                            Produk</a></button>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="d-grid gap-2 col-6 mx-auto pt-4 pb-4">
                        <a class="btn btn-light " href="{{ route('produk.all') }}">Lihat
                            Lainnya</a>
                    </div>
                </div>
                <header class="mb-4 text-black pt-3" id="ttg">
                    <h3 class="judul">TTG (Teknologi Tepat Guna)</h3>
                </header>
                <div class="row">
                    @foreach ($produks as $produk)
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card my-2 shadow-0">
                                <a href="#" class="img-wrap" data-bs-toggle="modal" data-bs-target="#productModal"
                                    data-id="{{ $produk->id }}">
                                    <img src="{{ Storage::url($produk->img1) }}" class="card-img-top"
                                        style="aspect-ratio: 1 / 1">
                                </a>
                                <div class="card-body p-0 pt-2">
                                    <h5 class="card-title">{{ $produk->harga }}</h5>
                                    <p class="card-text mb-0">{{ $produk->nama_produk }}</p>
                                    <p class="text-muted">
                                        Kategori: {{ $produk->kategori_produk }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <header class="mb-4 text-black pt-3" id="makanan">
                    <h3 class="judul">Makanan Ringan</h3>
                </header>
                <div class="row">
                    @foreach ($produks as $produk)
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card my-2 shadow-0">
                                <a href="#" class="img-wrap" data-bs-toggle="modal" data-bs-target="#productModal"
                                    data-id="{{ $produk->id }}">
                                    <img src="{{ Storage::url($produk->img1) }}" class="card-img-top"
                                        style="aspect-ratio: 1 / 1">
                                </a>
                                <div class="card-body p-0 pt-2">
                                    <h5 class="card-title">{{ $produk->harga }}</h5>
                                    <p class="card-text mb-0">{{ $produk->nama_produk }}</p>
                                    <p class="text-muted">
                                        Kategori: {{ $produk->kategori_produk }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>


            </div>

            <div class="d-grid gap-2 col-6 mx-auto pt-4 pb-4">
                <a class="btn btn-light " href="/daily_discover?pageNumber=2">Lihat
                    Lainnya</a>
            </div>
        </section>
        <!-- Products -->

        <!-- Feature -->
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
        <!-- Recently viewed -->
    </div>


@endsection
