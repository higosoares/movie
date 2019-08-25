@extends('layouts.app')

@section('content')
    <section class="mb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-5">
                    <h4>ADMINISTRATOR</h4>
                </div>
            </div>
            <div class="row mb-5">
                <!-- Column -->
                <div class="col-lg-3 col-md-6">
                    <a href="{{ route('admin/category/index') }}">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class="round round-lg align-self-center round-info"><i class="fas fa-wallet"></i></div>
                                    <div class="m-l-10 align-self-center">
                                        <h3 class="m-b-0 font-light">{{ $categories->count() }}</h3>
                                        <h5 class="text-muted m-b-0">Categories</h5></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-row">
                                <div class="round round-lg align-self-center round-warning"><i class="mdi mdi-cellphone-link"></i></div>
                                <div class="m-l-10 align-self-center">
                                    <h3 class="m-b-0 font-lgiht">{{ $movies->count() }}</h3>
                                    <h5 class="text-muted m-b-0">Movies</h5></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-row">
                                <div class="round round-lg align-self-center round-primary"><i class="mdi mdi-cart-outline"></i></div>
                                <div class="m-l-10 align-self-center">
                                    <h3 class="m-b-0 font-lgiht">$1795</h3>
                                    <h5 class="text-muted m-b-0">Users</h5></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-lg-3 col-md-6">
                    <a href="{{ route('telescope') }}" target="_blank">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class="round round-lg align-self-center round-primary"><i class="mdi mdi-cart-outline"></i></div>
                                    <div class="m-l-10 align-self-center">
                                        <h5 class="text-muted m-b-0">Telescope</h5></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Column -->
            </div>
            <div class="row mb-5">
                <!-- Column -->
                <div class="col-lg-3 col-md-6">
                    <a href="C:/Higo/Desenvolvimento/Web/PHP/Laravel/movie/tests/build/coverage/index.html" target="_blank">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class="round round-lg align-self-center round-primary"><i class="mdi mdi-cart-outline"></i></div>
                                    <div class="m-l-10 align-self-center">
                                        <h5 class="text-muted m-b-0">Telescope</h5></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Column -->
                </div>
            </div>
        </div>
    </section>
@endsection
