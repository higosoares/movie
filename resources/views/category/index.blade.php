@extends('layouts.app')
@section('head')
    <link href="{{ asset('css/datatables.min.css') }} " rel="stylesheet">
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
                            <table class="table table-striped datatable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nome</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)

                                        <tr>
                                            <td>{{ $category->id_category }}</td>
                                            <td>{{ $category->tx_name_category }}</td>
                                            <td>Visualizar</td>
                                            <td>Excluir</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
    <script src="{{ asset('js/admin/admin.js') }}"></script>
    <script src="{{ asset('js/datatables.min.js') }}"></script>
@endsection
