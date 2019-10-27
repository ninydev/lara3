@extends('layouts.app')


@section('content')

<section class="details-card">

<div id="Forms">
    <form method="post" action="/posts1">

        <select name="OrderBy">
            <option value="created_at"> By Date </option>
            <option value="title"> By Title </option>
            <option value="autor"> By Autor </option>
        </select>
        <input type="hidden" name="test" value="test">
        <input type="submit">
        {{ csrf_field() }}
    </form>
</div>


    <div class="container">
        <div class="row">
	@foreach ($posts as $post)
	            <div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">

                         <img src="{{ Voyager::image( $post->image) }}">
                        <span><h4> {{ $loop->iteration }}  {{ $post->id }}</h4></span>
                    </div>
                    <div class="card-desc">
                        <h3>{{ $post->title}}</h3>
                         <a href="{{route('post.one', 
                                        [   'category' => $post->category->slug, 
                                            'slug' => $post->slug
                                            ]) }}" 
                                            class="btn-card">More</a>  
                    </div>
                </div>
            </div>
	@endforeach
        </div>
    </div>

    <div id='PostPagination' class="container">
    <div class="row">
    	{{ $posts->links() }}
    </div>
    </div>

</section>
@endsection


@section('header')
  <h1> {{ isset($header['pagetitle']) ? $header['pagetitle'] : config('app.name', 'Laravel') }}  </h1>
@endsection


@section('footer')
	<p> &copy 2019 </p>
	{{  isset(Auth::user()->name) ?  Auth::user()->name : 'Guest' }}
@endsection


