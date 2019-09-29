@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Car</div>

                <div class="card-body">

@foreach ($cars as $car)
  <p> {{ $car->id }}</p>
  <p> {{ $car->name }}</p>
  <p> {{ $car->des }}</p>
  <p> 1 {{ $car->image }}</p>

@endforeach


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
