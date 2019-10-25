@extends('layouts.html')


@section('content')

<section class="details-card">
    <div class="container">
        <div class="row">

	            <div class="col-md-12">
                <div class="card-content">
                    <div class="card-img">

                         <img src="{{ Voyager::image( $post->image)}}">

                    </div>
                    <div class="card-desc">
                        <h3>{{ $post->title }}</h3>
                        <p>{!! $post->body !!}</p>

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


