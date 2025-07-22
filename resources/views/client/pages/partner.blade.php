 @extends('client.base')



 @section('title',Key::get('partner-meta-title'))

 @section('description',Key::get('partner-meta-description'))

 @section('keywords',Key::get('partner-meta-keywords'))



@section('head')

 

@endsection







@section('content')









<!--====== BREADCRUMBS PART START ======-->

  <section class="breadcrumbs-section   pt-180 pb-180 bg_cover"

    style="background-image: url('{{Key::get('partner-banner-image-id')}}');">

    <div class="container">

      <div class="breadcrumbs-text text-left">

        <h1>{{Key::get('partner-title')}}</h1>

        <p>{{Key::get('partner-sub-title')}}</p>

        <ul>

          <li><a href="{{url('/')}}">Home</a></li>

          <li>Partner</li>

        </ul>

      </div>

    </div>

  </section>

  <!--====== BREADCRUMBS PART END ======-->









 













  <section class="home-about about-page-content partner-page pb-0">

  <div class="container">

    <div class="row mb-5 res-mb-0">



       

    

      <div class="col-md-7">

        <!-- <span class="mob-dis-none" data-slideInLeft>ABOUT US</span>  -->

        <h3 class=" mt-5 mb-5" data-slideInRght>{{Key::get('partner-first-title')}}</h3>





        <img src="{{Key::get('partner-first-banner-image-id')}}" class="img-fluid  web-dis-none mob-dis-unset" />  



        {!!Key::get('partner-first-content')!!}

        

      </div>



        <div class="col-md-5 text-center mob-dis-none" data-slideinleft>

       <!-- <span  class="web-dis-none mob-dis-unset abt-hd">ABOUT US</span> --->

      <img src="{{Key::get('partner-first-banner-image-id')}}" class="img-fluid" />  

      </div>





    </div>



  </div>

</section>





  <section class="home-about about-page-content partner-page ">

  <div class="container">





    <div class="row">



      <div class="col-md-5 text-center mob-dis-none" data-slideinleft>

       <!-- <span  class="web-dis-none mob-dis-unset abt-hd">ABOUT US</span> --->

      <img src="{{Key::get('partner-second-banner-image-id')}}" class="img-fluid" />  

      </div>

      

      <div class="col-md-7">

        <!-- <span class="mob-dis-none" data-slideInLeft>ABOUT US</span>  -->

        <h3 class=" mt-5 mb-5 res-mt-0" data-slideInRght> {{Key::get('partner-second-title')}}</h3>





        <img src="{{Key::get('partner-second-banner-image-id')}}" class="img-fluid web-dis-none mob-dis-unset" />  



        {!!Key::get('partner-second-content')!!}







      

       

  

      

      </div>



      



    </div>

    



    </div>

  </section>







	<!--====== FAQ PART START ======-->

	<div class="faq-wapper pt-130 pb-110 partner-form">

		<div class="container">

			<div class="row"> 

				<div class="col-lg-12">

				    @include('spiderworks.miniweb._partials.notifications')

					<div class="sidebar">

						<div class="widgets contact-form with-bg">

							<h4 >{{Key::get('partner-register-title')}}</h4>

              <p>{{Key::get('partner-register-description')}}</p>

						<form id="contact-form" action="{{url('contact')}}" method="post">

							@csrf
<input type="hidden" name="google_token" id="g-token">
							<input type="hidden" name="type" value="Partner registration">





                  <div class="row">

                    <div class="col mt-20">

                      <input type="text" class="form-control" placeholder="Full name" name="name">

                    </div>

                    <div class="col mt-20">

                      <input  class="form-control" type="email" placeholder="Email Address"  name="email">

                    </div>

                  </div>







                  <div class="row">

                    <div class="col mt-20">

                      <input type="hidden" name="country_code">

					  <input type="hidden" name="country">

					

                      <input  class="form-control" type="tel" id="phone-request-a-quote-mobile" name="phone" placeholder="Phone  Number"  style="padding-left: 50px;">

                      	<span class="phone-error" style="display:none"></span>

                    </div>



                    <div class="col mt-20"> 

                      <input  class="form-control" type="text" placeholder="Company" name="company">

                    </div>

                    

                  </div>





                  <div class="row">

                    <div class="col mt-20">

                      <input  class="form-control" type="text" placeholder="Address" name="address">

                    </div>

                    

                    <div class="col mt-20"> 

                      <input  class="form-control" type="text" placeholder="City" name="city">

                    </div>

                    

                  </div>





                  <div class="row">

                    <div class="col mt-20">

                      <input  class="form-control" type="text" placeholder="Postal Code" name="postal_code">

                    </div>

                    

                    <div class="col mt-20">  

                      <select class="form-control" name="service" id="exampleFormControlSelect1"> 

                      <option>Choose category</option>

                      @foreach($parent_services as $obj)

                              <option>{{$obj->name}}</option>

                      @endforeach

                

                    </select>

                    </div>

                    

                  </div>









  

                <div class="text-center">

                  <button type="submit" class="main-btn mt-20   "> Send Message </button>

                </div>

                  

                

								



                







							</form>

						</div> 

					</div>

				</div>

			</div>

		</div>

	</div>

	<!--====== FAQ PART END ======-->









 







 











@endsection





@section('bottom')



<script>

     var inp2 = document.querySelector("#phone-request-a-quote-mobile");

 
        window.intlTelInput(inp2, { onlyCountries: ["gb"] });

    var iti2 = window.intlTelInputGlobals.getInstance(inp2);

    

    

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

			city : {

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

            postal_code:{

                required : true

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

                window.location.replace('{{url('error')}}')

            }



        }





    })

    

    

    

</script>



<script type="text/javascript">

  

var a = 0;

$(window).scroll(function() {



  var oTop = $('#counter').offset().top - window.innerHeight;

  if (a == 0 && $(window).scrollTop() > oTop) {

    $('.counter-value').each(function() {

      var $this = $(this),

        countTo = $this.attr('data-count');

      $({

        countNum: $this.text()

      }).animate({

          countNum: countTo

        },



        {



          duration: 2000,

          easing: 'swing',

          step: function() {

            $this.text(Math.floor(this.countNum));

          },

          complete: function() {

            $this.text(this.countNum);

            //alert('finished');

          }



        });

    });

    a = 1;

  }



});



 









</script>

 

@endsection