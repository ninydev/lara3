@extends('layouts.html')


@section('content')



<section class="details-card">
    <div class="container">
        <div class="row">

	@foreach ($vendors as $vendor)
	            <div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
                        <span><h4> {{ $loop->iteration }}  {{ $vendor->Id }}</h4></span>
                    </div>
                    <div class="card-desc">
                        <h3>{{ $vendor->Name }}</h3>
                        <p>{{ $vendor->Site }}</p>
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


