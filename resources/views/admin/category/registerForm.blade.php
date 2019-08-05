@extends('layouts.app')
@section('head')
    {{-- <link href="{{ asset('css/datatables.min.css') }} " rel="stylesheet"> --}}
@endsection

@section('content')

    <div class="w3l-medile-movies-grids">

        <!-- /movie-browse-agile -->

        <div class="movie-browse-agile">
            <!--/browse-agile-w3ls -->
            <div class="browse-agile-w3ls general-w3ls">
                <div class="tittle-head">
                    <h4 class="latest-text">Categories</h4>
                    <div class="container">
                        <div class="agileits-single-top">
                            <ol class="breadcrumb">
                                <li><a href="/home">Home</a></li>
                                <li class="active">Categorie</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="browse-inner">
                        <div class="col-md-12">
                            <a class="btn btn-primary" href="{{ route('category/index') }}">
                                Voltar
                            </a>
                        </div>
                        <div class="col-md-12">
                            <form id="register_category" name="register_category" method="POST" action="{{ route('category.register') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="tx_name_category">Name</label>
                                    <input type="text" class="form-control" id="tx_name_category"
                                    name="tx_name_category" placeholder="Enter a category name" maxlength="255" required>
                                </div>
                                <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!--//browse-agile-w3ls -->
        </div>
        <!-- //movie-browse-agile -->
        <!--body wrapper start-->
        <!--body wrapper start-->
    </div>
    <!-- //w3l-medile-movies-grids -->

@endsection
@section('js-files')
    <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('js/mensagem/mensagem.js') }}"></script>
    <script src="{{ asset('js/admin/category/category.js') }}"></script>
    <script src="{{ asset('js/admin/category/register.js') }}"></script>
@endsection
