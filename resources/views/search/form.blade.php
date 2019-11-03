<div id="FormSearch">
    <form method="get" action="{{ route('search') }}">
    	<input type="text" name="search" value="{{ $input['search'] ?? 'text' }}" id="search">
    	<input type="submit">
    	<button id="ajaxSubmit"></button>
        {{ csrf_field() }}
    </form>
</div>


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
               sendSearch();
            });

            jQuery('#search').on('input',function(e){
               e.preventDefault();
               sendSearch();
            });
            

        });

         function sendSearch () {
         	if (jQuery('#search').val().length < 2) { return; }

         	jQuery.ajax({
                  url: "{{Route('search')}}",
                  method: 'get',
                  data: {
                     search: jQuery('#search').val(),
                     _token: '{{ csrf_token() }}',
                  },
                  success: function(result){
                     //console.log(result);
                     //alert (result);
                     jQuery('#searchResult').html(result);
                  },
                  error: function( jqXHR, textStatus ) {
					console.log(textStatus);
                  }
              	});
         }


</script>
@endsection