@extends('layouts.main.master.master')


@section('title', 'Halaman Utama')

@section('content')
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" style="background-image: url('images/img1.jpg');">
                <div class="overlay"></div>
                <div class="carousel-caption d-none d-md-block">
                    <a href="page1.html">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </a>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url('images/img2.jpg');">
                <div class="overlay"></div>
                <div class="carousel-caption d-none d-md-block">
                    <a href="page2.html">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </a>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url('images/img3.jpg');">
                <div class="overlay"></div>
                <div class="carousel-caption d-none d-md-block">
                    <a href="page3.html">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    {{-- start timeline activities --}}
    <section class="intro">
        <div class="container">
            <h1>Vertical Timeline &darr;</h1>
            <p>Timeline v2 <a href="https://codepen.io/tutsplus/pen/zYQqPYG" target="_blank">here</a></p>
        </div>
    </section>

    <section class="timeline">
        <ul>
            @foreach ($kegiatans as $activity)
                <li>
                    <a href="{{ url('/kegiatans/' . $activity->id) }}">
                        <div>
                            <time>{{ $activity->tanggal_kegiatan }}</time>
                            <h3>{{ $activity->judul }}</h3>
                            <p>{{ $activity->deskripsi }}</p>
                        </div>
                    </a>
                </li>
            @endforeach
        </ul>
    </section>
    {{-- end timeline activities --}}

@endsection
