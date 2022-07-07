@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="ror">
            <div class="col">
                <h1>{{$pizza->name}}</h1>
                <p>{{$pizza->description}}</p>
                <p>{{$pizza->price}}</p>
                <p>{{$pizza->popularity}}</p>
                <p>{{$pizza->isVegetarian}}</p>
            </div>
        </div>
    </div>

@endsection
