@extends('layouts.app')

@section('content')

    <section class="mb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-5">
                    <h4>{{ $category->tx_name_category }} Movies</h4>
                </div>
                <div class="col-12">
                    <div class="nav-previus-page">
                        <ol class="breadcrumb">
                            <li><a href="/home">Home</a></li>
                            <li class="active">Genres</li>
                        </ol>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        @for($i = 0; $i < 10; $i++)
                            <div class="col-md-2 mb-3">
                                @movie
                                @endmovie
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
