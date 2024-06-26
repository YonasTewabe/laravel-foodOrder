@extends('layouts.layout')
@section('content')
<div class="wrapper pizza-details">
<h1>Order for {{$food->name}}</h1>
<p class="type">Food - {{$food->food}}</p>
<p class="base">Drink - {{$food->drink}}</p>

 
</div>

<a href="/foods" class="back">Back to all orders</a>

@endsection
