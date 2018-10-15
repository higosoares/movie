@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="py-5 text-center">
            <h2>{{ __('Edit form') }}</h2>
        </div>
        <div class="row">
            <div class="col-md-12 text-center"  >
                <form method="post" action="{{ url('user/'.$user->id) }}" id="user_edit">
                    @csrf
                        <input type="hidden" name="id" value="{{$user->id}}">
                        <div class="form-group col-md-4 col-md-offset-4">
                            <label for="name" >Name</label>
                            <span class="required">*</span>
                            <input type="text" class="form-control" id="name" name="name" placeholder="{{ __('Name') }}" value="{{$user->name}}" required="">
                        </div>
                        <div class="form-group col-md-4 col-md-offset-4">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}" placeholder="{{ __('you@example.com') }}" required>
                        </div>
                        <div class="form-group col-md-4 col-md-offset-4">
                            <label for="password">New password</label>
                            <input type="password" class="form-control" id="password" name="password" value="" placeholder="{{ __('Password') }}">
                        </div>
                        <div class="form-group col-md-4 col-md-offset-4">
                            <button class="btn btn-primary btn-lg btn-block" type="submit">{{ __('Edit') }}</button>
                        </div>
                </form>
            </div>
        </div>

    </div>
@endsection