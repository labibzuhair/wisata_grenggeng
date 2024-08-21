@extends('layouts.main.master.master')

@section('title', 'Galery')

@section('content')

    <!-- Gallery -->
    <section style="background-color: #ccc7c7;">
        <div class="text-center container py-5">
            <h4 class="mt-4 mb-5"><strong>Gallery Desa Wisata Grenggeng</strong></h4>

            <div class="row">
                @foreach ($galleries as $gallery)
                    <div class="col-lg-4 col-md-12 mb-4">
                        <div class="card">
                            <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                                data-mdb-ripple-color="light">
                                <a href="{{ route('gallery.show', $gallery->id) }}">
                                    <img src="{{ asset('storage/' . $gallery->mainPhoto->image) }}" class="w-100" />
                                    <div class="hover-overlay">
                                        <div class="mask"></div>
                                    </div>
                                </a>
                            </div>
                            <div class="card-body">
                                <a href="{{ asset('storage/' . $gallery->mainPhoto->image) }}" class="text-reset">
                                    <h5 class="card-title mb-3">{{ $gallery->name }}</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Gallery -->
@endsection
