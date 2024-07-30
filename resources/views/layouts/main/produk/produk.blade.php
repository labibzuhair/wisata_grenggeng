@extends('layouts.main.master.master')


@section('title', 'Halaman Utama')

@section('content')

    <!-- Fixed Header -->
    <div id="fixed-header" class="fixed_header">
        <h3 id="fixed-header-text"></h3>
    </div>


    <!-- Products -->
    <section>
        <div class="container">
            <header class="mb-4 text-black border-bottom pt-1" id="new-products">
                <h3>New products</h3>
            </header>

            <div class="row">
                @foreach ($produks as $produk)
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card my-2 shadow-0">
                            <a href="#" class="img-wrap">
                                <img src="{{ $produk->img_produk }}" class="card-img-top" style="aspect-ratio: 1 / 1">
                            </a>
                            <div class="card-body p-0 pt-2">
                                <a href="#!" class="btn btn-light border px-2 pt-2 float-end icon-hover"><i
                                        class="fas fa-heart fa-lg px-1 text-secondary"></i></a>
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
            <header class="border-bottom " id="recently-viewed">
                <h3 class="section-title">Recently viewed</h3>
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



@endsection


{{--
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card my-2 shadow-0">
                        <a href="#" class="img-wrap">
                            <img src="https://mdbootstrap.com/img/bootstrap-ecommerce/items/10.webp" class="card-img-top"
                                style="aspect-ratio: 1 / 1">
                        </a>
                        <div class="card-body p-0 pt-2">
                            <a href="#!" class="btn btn-light border px-2 pt-2 float-end icon-hover"><i
                                    class="fas fa-heart fa-lg px-1 text-secondary"></i></a>
                            <h5 class="card-title">$29.95</h5>
                            <p class="card-text mb-0">Modern product name here</p>
                            <p class="text-muted">
                                Sizes: S, M, XL
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card my-2 shadow-0">
                        <a href="#" class="img-wrap">
                            <img src="https://mdbootstrap.com/img/bootstrap-ecommerce/items/9.webp" class="card-img-top"
                                style="aspect-ratio: 1 / 1">
                        </a>
                        <div class="card-body p-0 pt-2">
                            <a href="#!" class="btn btn-light border px-2 pt-2 float-end icon-hover"><i
                                    class="fas fa-heart fa-lg px-1 text-secondary"></i></a>
                            <h5 class="card-title">$1099.00</h5>
                            <p class="card-text mb-0">Apple iPhone 13 Pro max</p>
                            <p class="text-muted">
                                Color: Black, Memory: 128GB
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card my-2 shadow-0">
                        <a href="#" class="img-wrap">
                            <img src="https://mdbootstrap.com/img/bootstrap-ecommerce/items/5.webp" class="card-img-top"
                                style="aspect-ratio: 1 / 1">
                        </a>
                        <div class="card-body p-0 pt-2">
                            <a href="#!" class="btn btn-light border px-2 pt-2 float-end icon-hover"><i
                                    class="fas fa-heart fa-lg px-1 text-secondary"></i></a>
                            <h5 class="card-title">$29.95</h5>
                            <p class="card-text mb-0">Modern product name here</p>
                            <p class="text-muted">
                                Sizes: S, M, XL
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card my-2 shadow-0">
                        <a href="#" class="img-wrap">
                            <img src="https://mdbootstrap.com/img/bootstrap-ecommerce/items/6.webp" class="card-img-top"
                                style="aspect-ratio: 1 / 1">
                        </a>
                        <div class="card-body p-0 pt-2">
                            <a href="#!" class="btn btn-light border px-2 pt-2 float-end icon-hover"><i
                                    class="fas fa-heart fa-lg px-1 text-secondary"></i></a>
                            <h5 class="card-title">$29.95</h5>
                            <p class="card-text mb-0">Modern product name here</p>
                            <p class="text-muted">
                                Model: X-200
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card my-2 shadow-0">
                        <a href="#" class="img-wrap">
                            <img src="https://mdbootstrap.com/img/bootstrap-ecommerce/items/7.webp" class="card-img-top"
                                style="aspect-ratio: 1 / 1">
                        </a>
                        <div class="card-body p-0 pt-2">
                            <a href="#!" class="btn btn-light border px-2 pt-2 float-end icon-hover"><i
                                    class="fas fa-heart fa-lg px-1 text-secondary"></i></a>
                            <h5 class="card-title">$29.95</h5>
                            <p class="card-text mb-0">Modern product name here</p>
                            <p class="text-muted">
                                Sizes: S, M, XL
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card my-2 shadow-0">
                        <a href="#" class="img-wrap">
                            <img src="https://mdbootstrap.com/img/bootstrap-ecommerce/items/8.webp" class="card-img-top"
                                style="aspect-ratio: 1 / 1">
                        </a>
                        <div class="card-body p-0 pt-2">
                            <a href="#!" class="btn btn-light border px-2 pt-2 float-end icon-hover"><i
                                    class="fas fa-heart fa-lg px-1 text-secondary"></i></a>
                            <h5 class="card-title">$29.95</h5>
                            <p class="card-text mb-0">Modern product name here</p>
                            <p class="text-muted">
                                Material: Jeans
                            </p>
                        </div>
                    </div>
                </div> --}}
