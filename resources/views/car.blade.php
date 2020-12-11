@extends('layout.app')


@section('title', 'car')

@section('content')

<div class="container mt-5">
    <p>Producer: {{$car->producer}} </p>
    <p>Model: {{$car->title}} </p>
    <p>Number of doors: {{$car->number_of_doors}} </p>

    <a class="btn btn-primary" href="{{ url()->previous() }}">Back</a>
</div>

@endsection
