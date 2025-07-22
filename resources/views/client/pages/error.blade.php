 @extends('client.base')


@section('head')
 
@endsection



@section('content')

<div class="container">
	<div class="row">
		<div class="offset-md-4 col-md-4"  style="text-align: center">
			<div style="margin: 100px 0px;">

				<img src="{{asset('wrong.jpg')}}" alt="" width="100px">
				<hr>
				<h2 style="font-weight: 200">Error</h2>
				<p>Something wrong happened, Please try again or contact us directly on {{Key::get('support-email')}} </p>

			</div>
		</div>
	</div>
</div>

@endsection


@section('bottom')

<script type="text/javascript">
  $(document).ready(function() {
  $('.selector > .selection').click(function(e) {
    $(this).siblings().removeClass('selected');
    $(this).addClass('selected'); 
  });
});
</script>
 
@endsection