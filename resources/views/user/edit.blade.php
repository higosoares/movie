@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="py-5 text-center">
            <h2>{{ __('Edit form') }}</h2>
        </div>
        <div class="row">
            <div class="col-md-12 text-center"  >
                <form method="post" action="{{ url('user/'.$user->id_user) }}" id="user_edit">
                    @csrf
                        <input type="hidden" name="id_user" value="{{$user->id_user}}">
                        <div class="form-group col-md-4 col-md-offset-4">
                            <label for="tx_name_user" >Name</label>
                            <span class="required">*</span>
                            <input type="text" class="form-control" id="tx_name_user" name="tx_name_user" placeholder="{{ __('Name') }}" value="{{$user->tx_name_user}}" required="">
                        </div>
                        <div class="form-group col-md-4 col-md-offset-4">
                            <label for="tx_email_user">E-mail</label>
                            <input type="email" class="form-control" id="tx_email_user" name="tx_email_user" value="{{$user->tx_email_user}}" placeholder="{{ __('you@example.com') }}" required>
                        </div>
                        <div class="form-group col-md-4 col-md-offset-4">
                            <label for="tx_password_user">New password</label>
                            <input type="password" class="form-control" id="tx_password_user" name="tx_password_user" value="" placeholder="{{ __('Password') }}">
                        </div>
                        <div class="form-group col-md-4 col-md-offset-4">
                            <button class="btn btn-primary btn-lg btn-block" type="submit">{{ __('Edit') }}</button>
                        </div>
                </form>
            </div>
        </div>

    </div>
@endsection