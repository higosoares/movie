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
                    <a class="btn btn-primary delete-movie" href="{{ route('admin.category/registerForm') }}">
                        Cadastrar
                    </a>
                </div>
                <div class="col-12">
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
                                    <td>
                                        <a class="btn btn-primary" href="{{ route('admin.category/editForm', [ 'id' => $category->id_category]) }}">
                                            Visualizar
                                        </a>
                                        <a data-url="{{ route('category.delete', ['id' => $category->id_category]) }}" class="btn btn-primary delete-category">
                                            Excluir
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection



@section('scripts')
    <script src="{{ asset('js/datatables.min.js') }}"></script>
    <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('js/mensagem/mensagem.js') }}"></script>
    <script src="{{ asset('js/admin/admin.js') }}"></script>
    <script src="{{ asset('js/admin/category/category.js') }}"></script>
    <script src="{{ asset('js/admin/category/index.js') }}"></script>
@endsection
