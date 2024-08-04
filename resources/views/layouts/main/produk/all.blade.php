@extends('layouts.main.master.master')


@section('title', 'Halaman Utama')

@section('content')
    <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="search-produk">
                <input class="form-control" list="datalistOptions" id="exampleDataList"
                    placeholder="produk apa yang anda cari?...">
                <span class="search-icon">
                    <i class="fas fa-search"></i>
                </span>
            </div>

            <div class="carousel-item slide-produk-item active" t>
                @foreach ($produks as $produk)
                    <div class="mask flex-center">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-7 col-12 order-md-1 order-2">
                                    <h4>Present your <br>
                                        awesome product</h4>
                                    <p>Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerum <br>
                                        necessitatibus praesentium voluptatum deleniti atque corrupti.</p>
                                    <a href="facebook.com" data-id="{{ $produk->id }}">Tanyakan Produk</a>
                                </div>
                                <div class="col-md-5 col-12 order-md-2 order-1"><img src="https://i.imgur.com/NKvkfTT.png"
                                        class="mx-auto" alt="slide"></div>
                            </div>
                        </div>
                    </div>
                @endforeach
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
    <div id="fixed-header" class="fixed_header">
        <h3 id="fixed-header-text"></h3>
    </div>


    <!-- Products -->
    <section>
        <div class="bg-event">
            <div class="container">
                <header class="mb-4 text-black pt-3" id="anyaman">
                    <h3 class="judul">Produk Anyaman Pandan</h3>
                </header>
                <div class="row">
                    <div class="wrapper-p">
                        @foreach ($produks as $produk)
                            <div class="card card-p text-center">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#productModal"
                                    data-id="{{ $produk->id }}">
                                    <div class="image">
                                        <img src="{{ $produk->img_produk1 }}" width="300">
                                    </div>
                                </a>
                                <div class="about-product-p text-center">
                                    <h3>{{ $produk->nama_produk }}</h3>
                                    <h4>Kategori: <small>{{ $produk->kategori_produk }}</small></h4>
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
