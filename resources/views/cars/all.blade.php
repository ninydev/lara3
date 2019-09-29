@extends('layouts.html')


@section('content')

@foreach ($cars as $car)
<p> Number {{ $loop->iteration }} </p>
  <p> {{ $car->id }}</p>
  <p> {{ $car->name }}</p>
  <p> {{ $car->des }}</p>
  <!--  <p><img src="/storage/{{ $car->image }}" /></p> -->
@endforeach
@endsection

@section('header')
  <h1> Cars </h1>



@endsection


@section('footer')
<p> &copy 2019 </p>
{{ Auth::user()->name }}
{{ route('cars')}}
@endsection


