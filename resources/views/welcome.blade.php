@extends('layouts.layout')
@section('content')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

        <div class="content">
            <img src="/images/image.png" alt="Habesha Cuisine logo">
            <div class="title m-b-md">
                The North's Best Habesha Food
            </div>

            <p class="mssg">{{ session('message') }}</p>
            <a href="{{route('foods.create')}}">Order Food</a>
        </div>
    </div>
@endsection
