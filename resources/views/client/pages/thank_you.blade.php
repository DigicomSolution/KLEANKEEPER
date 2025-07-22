 @extends('client.base')


@section('head')
 
<!-- Global site tag (gtag.js) - Google Ads: 977920664 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-977920664"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-977920664');
</script>

@endsection

<!-- Event snippet for Thank u Page conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-977920664/k3RhCKau8uUCEJjFp9ID'});
</script>



@section('content')

<div class="container">
	<div class="row">
		<div class="offset-md-4 col-md-4"  style="text-align: center">
			<div style="margin: 100px 0px;">

				<img src="{{asset('tik.webp')}}" alt="" width="100px">
				<hr>
				<h2 style="font-weight: 200">Thank you</h2>
				<p>We have received your message, we will get back to you at the earliest</p>

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