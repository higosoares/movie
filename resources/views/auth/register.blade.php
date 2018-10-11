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
                    <h3>Create an account</h3>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                               name="name" placeholder="{{ __('Name') }}" value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif

                        <input id="email" type="email"
                               class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                               placeholder="{{ __('E-Mail Address') }}" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif

                        <input id="password" type="password"
                               class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                               placeholder="{{ __('Password') }}" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif

                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                               placeholder="{{ __('Confirm Password') }}" required>

                        <input type="submit" value="{{ __('Register') }}">
                    </form>
                </div>
            </div>
        </div>
    </div>




@endsection
