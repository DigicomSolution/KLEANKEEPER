 @extends('client.base')





 @section('title',Key::get('contact-meta-title'))

 @section('description',Key::get('contact-meta-description'))

 @section('keywords',Key::get('contact-meta-keywords'))



@section('head')
<link rel="stylesheet" href="{{asset('assets/css/home_new.css')}}">


 





<style>

  .breadcrumbs-section .breadcrumbs-text h1::before { 

    left: calc(50% - 5px); 

}  

    

</style>

 

@endsection







@section('content')



<!--====== BREADCRUMBS PART START ======-->

	<section class="breadcrumbs-section  pt-180 pb-180 res-1360-pbt-90 bg_cover"

		style="background-image: url('{{Key::get('contact-banner-image-id')}}');">

		<div class="container">

			<div class="breadcrumbs-text">

				<h1>{{Key::get('contact-banner-title')}}</h1>

				<ul>

					<li><a href="{{url('/')}}">Home</a></li>

					<li>Contact</li>

				</ul>

			</div>

		</div>

	</section>

	<!--====== BREADCRUMBS PART END ======-->

	<!--====== CONTACT PAGE WRAP START ======-->

	<section class="contact-page-wrap pt-130 pb-0">

		<div class="container">

			<div class="row">

				<div class="col-md-6">

					<div class="contact-information">

						<span>Contact Information</span>

						<h2 class="title">

                            {{Key::get('contact-title')}}

						</h2>

						<ul class="mt-60">

							<li>

								<i class="fas fa-phone"></i> {{Key::get('contact-phone-number')}}

							</li>

							<li>

								<i class="fas fa-map-marker-alt"></i>{{Key::get('contact-address')}}

							</li>

							<li>

								<i class="fas fa-envelope-open"></i>{{Key::get('contact-email')}}

							</li>

						</ul>

					</div>

				</div>

				<div class="col-md-6">

					<div class="contact-form">

						<h3 class="title">{{Key::get('contact-form-title')}}</h3>

						<form id="contact-form" action="{{url('contact')}}" method="post">

							@csrf

							<input type="hidden" name="type" value="Request A Quote - mobile">

							<input type="hidden" name="notes" value="Popup opened from {{url()->full()}}">



							<div class="row">

                <div class="col-6 mb-30">

                  <input type="text" placeholder="Your Name" name="name" />

                </div>

                <div class="col-6 mb-30">

                  <input type="email" placeholder="Your Email" name="email" />

                </div>

                <div class="col-6 mb-30">

					<input type="tel" id="phone-request-a-quote-mobile" name="phone" placeholder="Phone" width="100%" required>

					<input type="hidden" name="country_code">

                    <input type="hidden" name="country">
					<input type="hidden" name="google_token" id="g-token">

					<span class="phone-error"></span>

                </div>

								<div class="col-6 mb-30">

									<input type="text" placeholder="Your Location" name="location" />

								</div>



								<div class="col-12 mb-30">

									<textarea name="message" type="text" class="form-control" placeholder="Message"></textarea>

								</div>





                 



                <div class="col-12 mb-30">

                 <div class="form-group row  mb-0">

                  <div class="selector-label col-sm-12">

                    <p>Enquiry about : </p>    

                  </div>

                  

                  <div class="col-sm-12">

                     <div class="selector">

                    <div class="selection">Service Booking</div>

                    <div class="selection">Commercial</div>

                    <div class="selection selected">Other</div>

                  </div>

                  </div>

                </div>

              </div>

							 

								

								<div class="col-12">

									<button type="submit" class="main-btn">

										Send Message

									</button>

								</div>

							</div>

						</form>

					</div>

				</div>

			</div>

			

		</div>



        <div class="contact-maps">

            {!! Key::get('contact-iframe') !!}

        </div>

	</section>

	<!--====== CONTACT PAGE WRAP END ======-->





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



<script>

    var inp2 = document.querySelector("#phone-request-a-quote-mobile");

    window.intlTelInput(inp2, { onlyCountries: ["gb"] });

    var iti2 = window.intlTelInputGlobals.getInstance(inp2);

 iti2.setCountry("gb");

	$('.selection').click(function () {

		$('input[name=notes]').val($(this).html());

    })





    $('#contact-form').validate({

        rules : {

            name : {

                required : true,

                minlength : 2

            },

            company : {

                required: true,

                minlength: 2

            },

			location : {

               required: true,

			},

            email :{

                required : true,

                email : true

            },

            phone: {

                digits: true,

                required: true

            },

            message:{

                required : true,

                minlength : 5

            },

        },errorPlacement: function(error, element) {

            if (element.attr("name") == "phone") {

                error.insertAfter(".phone-error");

            } else {

                error.insertAfter(element);

            }

        },

        submitHandler: function (form) {



            try {

                $('input[name=country_code]').val(iti2.getSelectedCountryData().dialCode);

                $('input[name=country]').val(iti2.getSelectedCountryData().iso2);

                grecaptcha.ready(function() {
                  grecaptcha.execute('6LeMRrsaAAAAAAZTMxi_DOfNc28VvKAxkvVgW0yD', {action: 'submit'}).then(function(token) {
                      $('#g-token').val(token);
                      form.submit();
                  });
                });

                

            }catch (e) {

                console.log('error',e);

                window.location.replace('{{url('error')}}')

            }



        }





    })

</script>

 

@endsection