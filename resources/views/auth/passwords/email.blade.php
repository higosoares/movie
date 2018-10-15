@extends('welcome')
@section('head')
    <link href="{{ asset('css/login.css') }}" rel="stylesheet" type="text/css" media="all"/>
@endsection
@section('content')
    <div class="container">
        <div class="w3_login_module">
            <div class="module form-module">
                <div class="toggle"><i class="fa fa-times fa-pencil"></i></div>

                <div class="form">
                    <h3>{{ __('Reset Password') }}</h3>
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                        </div>

                        <input type="submit" class="btn btn-primary" value="{{ __('Send Password Reset Link') }}"/>

                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
