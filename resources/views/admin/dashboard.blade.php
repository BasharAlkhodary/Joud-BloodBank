@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>مرحبًا بك با  ادمن {{ auth()->user()->first_name }}</h1>
    </div>

    <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
@endsection 