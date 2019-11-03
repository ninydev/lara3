@extends('layouts.app')


@section('content')
<section class="details-card">
	@include('search.form')
</section>

<div> Вы искали : {{ $input['search']}}</div>

<section id="searchResult">
	@include('search.body')
</section>



@endsection