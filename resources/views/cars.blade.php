@extends('layout.app')


@section('title', 'cars')


@section('content')

    <h1 class="font-weight-bold text-center">Cars</h1>
<div class="container mt-5">
    <ul class="list-group">
        @foreach($cars as $car)
        <li class="list-group-item"><a href="{{route('car', $car->id)}}">{{$car->producer}} - {{$car->title}}</a></li>

        @endforeach
    </ul>
</div>
@endsection
