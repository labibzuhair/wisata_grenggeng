@extends('layouts.admin.master.master-auth')

@section('title', 'Login Admin')

@section('content')
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white"
                        style="border-radius: 1rem; box-shadow: inset 6px 6px 13px #0b8970, inset -6px -6px 13px #1ff7cc;">
                        <div class="card-body p-5 text-center">
                            <div class="mb-md-5 mt-md-4 pb-5">
                                <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                <p class="text-white-50 mb-5">Tolong Masukan Email dan Password Yang Telah Terdaftar!</p>

                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-outline form-white mb-4">
                                        <input type="email" id="typeEmailX" class="form-control form-control-lg"
                                            name="email" required />
                                        <label class="form-label" for="typeEmailX">Email</label>
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <input type="password" id="typePasswordX" class="form-control form-control-lg"
                                            name="password" required />
                                        <label class="form-label" for="typePasswordX">Password</label>
                                    </div>
                                    {{--
                                    <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Lupa
                                            password?</a></p> --}}

                                    <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
