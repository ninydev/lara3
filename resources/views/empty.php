@extends('layouts.app')


@section('content')
<section>
</section>
@endsection


@section('header')
  <h1> {{ isset($header['pagetitle']) ? $header['pagetitle'] : config('app.name', 'Laravel') }}  </h1>
@endsection


@section('footer')
	<p> &copy 2019 </p>
	{{  isset(Auth::user()->name) ?  Auth::user()->name : 'Guest' }}
@endsection
