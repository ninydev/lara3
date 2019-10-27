@extends('layouts.app')


@section('content')
<section>
	<div id="Forms">
    <form method="post" action="{{Route('FeedBack.Send')}}">
    	<input type="text" name="name" id="id"><br>
    	<input type="tel" name="tel" id="tel"><br>
    	<input type="email" name="email" id="email"><br>
    	<textarea name="msg"  id="msg">
    		
    	</textarea><br>
        <input type="submit"><br>
        <button id="ajaxSubmit"> Ajax </button>
        {{ csrf_field() }}
    </form>
	</div>

	<div id="FormResponse">
		
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

@section('JS')
<script type="text/javascript">

         jQuery(document).ready(function(){

            jQuery.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
            });

            jQuery('#ajaxSubmit').click(function(e){
               e.preventDefault();
               jQuery.ajax({
                  url: "{{Route('FeedBack.Send')}}",
                  method: 'post',
                  data: {
                     name: jQuery('#name').val(),
                     tel: jQuery('#tel').val(),
                     email: jQuery('#email').val(),
                     msg: jQuery('#msg').val(),
                     _token: '{{ csrf_token() }}',
                  },
                  success: function(result){
                     console.log(result);
                     alert (result);
                     jQuery('#Forms').hide();
                     jQuery('#FormResponse').html(result);

                  },
                  error: function( jqXHR, textStatus ) {
					console.log(textStatus);
                  }
              	});
            });
        });


</script>
@endsection
