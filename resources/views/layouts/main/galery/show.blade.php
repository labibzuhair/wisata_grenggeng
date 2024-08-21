@extends('layouts.main.master.master')

@section('title', $gallery->name)

@section('content')

    <!-- Gallery Details -->
    <section style="background-color: #ccc7c7;">
        <div class="text-center container py-5">
            <h4 class="mt-4 mb-5"><strong>{{ $gallery->name }}</strong></h4>

            <div class="row">
                @foreach ($gallery->photos as $photo)
                    <div class="col-lg-4 col-md-12 mb-4">
                        <div class="card">
                            <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                                data-mdb-ripple-color="light">

                                <img src="{{ asset('storage/' . $photo->image) }}" class="w-100" />
                                <div class="hover-overlay">
                                    <div class="mask"></div>
                                </div>

                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Gallery Details -->

@endsection
