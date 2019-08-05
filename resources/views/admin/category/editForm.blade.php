@extends('layouts.app')
@section('head')
    <link href="{{ asset('css/datatables.min.css') }} " rel="stylesheet">
@endsection

@section('content')
    <section class="mb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-5">
                    <h4>Categories</h4>
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
                    <a class="btn btn-primary" href="{{ route('admin/category/index') }}">
                        Voltar
                    </a>
                </div>
                <div class="col-12">
                    <form id="edit_category" name="edit_category" method="PUT"
                    action="{{ route('admin.category.edit', ['id' => $category->id_category ]) }}">
                    @csrf
                        <div class="form-group">
                            <label for="tx_name_category">Name</label>
                            <input type="text" class="form-control" id="tx_name_category"
                            name="tx_name_category" placeholder="Enter a category name" maxlength="255"
                            value="{{ $category->tx_name_category }}"required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('js/mensagem/mensagem.js') }}"></script>
    <script src="{{ asset('js/admin/category/category.js') }}"></script>
    <script src="{{ asset('js/admin/category/edit.js') }}"></script>
@endsection
