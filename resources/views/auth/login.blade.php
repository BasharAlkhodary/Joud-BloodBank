@extends('layouts.app')

@section('title', 'تسجيل الدخول إلى بنك الدم')

@section('content')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">

    {{-- <form dir="ltr" method="POST" action="{{ route('login') }}">
        @csrf --}}
<div class="login-background">
    <div class="auth-container">
        <img src="{{ asset('images/logo.png') }}" alt="Joud Blood Logo" class="logo">
        <h2 style="font-family: cursive"><b>Login</b></h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <label for="email">Email : </label>
            <input type="email" name="email" id="email" required>
                @error('email')
                    <div style="color: red; font-size: 14px;">{{ $message }}</div>
                @enderror

            <label for="password">Password :</label>
            <input type="password" name="password" id="password" required>  
                @error('password')
                    <div style="color: red; font-size: 14px;">{{ $message }}</div>
                @enderror   

            <button type="submit" style="font-family: cursive">Sign in</button>
        </form>
        <p style="font-family: cursive">Dont Have 
            account ? <a href="{{ route('donor.register.form') }}">Sign up Now</a></p>    
    </div>
</div>
<script src="{{ asset('js/login.js') }}"></script>

    </form>
@endsection