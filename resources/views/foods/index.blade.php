@extends('layouts.layout')
@section('content')
    <div class="content">
        <div class="title m-b-md">
            Foods Menu
        </div>

            @foreach($foods as $food)
            <div>
              {{ $food->name }} - {{ $food->food }} - {{ $food->drink }}
         
            </div>
          @endforeach


    </div>
@endsection
