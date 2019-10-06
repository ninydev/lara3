@extends('layouts.html')


@section('content')

<section class="details-card">
    <div class="container">
        <div class="row">

	            <div class="col-md-12">
                <div class="card-content">
                    <div class="card-img">

                         <img src="{{ Voyager::image( $car->image , 'https://bi.ua/uploaded-images/products/523247_1.jpg') }}">

                    </div>
                    <div class="card-desc">
                        <h3>{{ $car->name }}</h3>
                        <p>{{ $car->des }}</p>
                    </div>
                </div>
            </div>

	    </div>
    </div>
</section>
@endsection


@section('header')
  <h1> {{ isset($header['pagetitle']) ? $header['pagetitle'] : config('app.name', 'Laravel') }}  </h1>
@endsection


@section('footer')
	<p> &copy 2019 </p>
	{{ Auth::user()->name }}
@endsection


