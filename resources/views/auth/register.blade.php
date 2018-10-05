@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="tx_name_user" type="text" class="form-control{{ $errors->has('tx_name_user') ? ' is-invalid' : '' }}" name="tx_name_user" value="{{ old('tx_name_user') }}" required autofocus>

                                @if ($errors->has('tx_name_user'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tx_name_user') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="tx_email_user" type="email" class="form-control{{ $errors->has('tx_email_user') ? ' is-invalid' : '' }}" name="tx_email_user" value="{{ old('tx_email_user') }}" required>

                                @if ($errors->has('tx_email_user'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tx_email_user') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="tx_password_user" type="password" class="form-control{{ $errors->has('tx_password_user') ? ' is-invalid' : '' }}" name="tx_password_user" required>

                                @if ($errors->has('tx_password_user'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tx_password_user') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
