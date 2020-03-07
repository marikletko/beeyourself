@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('register') }}">
    @csrf
    <div class="Input-form">
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="Ваше имя" required autocomplete="name" autofocus>
        <!--@error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
                                    </span>
        @enderror -->
    </div>
    <div class="Input-form">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="Ваша почта" required autocomplete="email">
        <!--@error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror -->
    </div>
    <!-- СДЕЛАТЬ С AJAX -->

    <div class="Input-form">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="Пароль" required autocomplete="new-password">
        <!--@error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror -->
    </div>

    <div class="Input-form">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" value="Повторите пароль" required autocomplete="new-password">
        <!--
        @error('password')
        <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
        </span>
        @enderror -->
    </div>

    <div class="Input-form">
        <input id="subm_reg" type="submit" class="form-control" name="submit_reg" value="Присоединиться">
    </div>
</form>
@endsection
