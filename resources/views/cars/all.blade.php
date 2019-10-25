@extends('layouts.html')


@section('content')

<section class="details-card">
    <div class="container">
        <div class="row">

	@foreach ($cars as $car)
	            <div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">

                         <img src="{{ Voyager::image( $car->image , 'https://bi.ua/uploaded-images/products/523247_1.jpg') or 1}}">
                        <span><h4> {{ $loop->iteration }}  {{ $car->id }}</h4></span>
                    </div>
                    <div class="card-desc">
                        <h3>{{ $car->name or 1}}</h3>
                        <p>$car->des or 1}}</p>
                        <p>$car->vendor->name or 1}}</p>
                        
                         <a href="{{route('carbyslag', 
                                        [   'category' =>  $car->id . '-category', 
                                            'slug' => $car->id . '-slug'
                                            ]) }}" class="btn-card">More</a>  
                    </div>
                </div>
            </div>
	@endforeach

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


