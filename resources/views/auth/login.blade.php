@extends('layouts.app')

@section('content')

    <form method="POST" action="{{route('login')}}">
        @csrf
        <div class="Input-form">
        <input class="form-control @error('email') is-invalid @enderror" id="email" type="email" name="login_field" value="email@address" required autocomplete="email" autofocus onclick="">
            <!-- @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror -->
        </div>
        
        <div class="Input-form">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" value="password" name="password" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="Input-form">
            <input id="subm_log" type="submit" class="form-control" value="Войти">
            <!--@if (Route::has('password.request'))
            <br><br>
            <a class="forget-password" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
            @endif-->
        </div>
    </form>
    <img class="LittleBee" src="../../../../public/static/images/little-bee.webp">
@endsection
