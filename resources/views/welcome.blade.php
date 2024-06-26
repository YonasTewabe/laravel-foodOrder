@extends('layouts.layout')
@section('content')
    <div class="flex-center position-ref full-height">

        <div class="content">
            <img src="/images/image.png" alt="habesha house logo">
            <div class="title m-b-md">
                The North's Best Habesha Food
            </div>

            <p class="mssg">{{ session('message') }}</p>
            <a href="/foods/create">Order Food</a>
        </div>
    </div>
@endsection
