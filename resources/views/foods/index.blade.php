@extends('layouts.app')
@section('content')
    <div class="wrapper pizzza-index">
        <h1>Orders</h1>

        @foreach ($foods as $food)
            <div class="pizza-item">
                {{-- <img src="/images/download.jpg" alt="Mesob"> --}}
                <h3><a href="/foods/{{ $food->id }}"> {{ $food->name }}</a></h3>
            </div>
        @endforeach

    </div>
@endsection
