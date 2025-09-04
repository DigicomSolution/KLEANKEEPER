@extends('client.base')

 @section('title',$service->browser_title)
 @section('description',$service->meta_description)
 @section('keywords',$service->meta_keywords)

@section('head')

 
 @if(isset($service->extra_js))
{!! $service->extra_js !!}
@endif
@endsection



@section('content')


<!--====== BREADCRUMBS PART START ======-->
<div id="carouselExampleCaptions" class="carousel slide keep-banner commercial-banner" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img @if(!empty($service->banner_image)) src="{{asset($service->banner_image->file_path)}}" @endif class="d-block w-100" alt="..." style="min-height: 300px;">
      <div class="carousel-caption  ">
        <h1 style="    font-size: 55px;">{{$service->title1}}</h5>
        <p>{{$service->title2}} </p>
      </div>
    </div>
  </div>
</div>


<!--====== BREADCRUMBS PART END ======-->
<section class="@if(!empty($offers) && count($offers->photos) > 0) home-offer commercial-off @endif" data-slideinbottom>
    <div class="container">
        <div class="row">

            <div class="  col-lg-3 col-md-5 web-dis-none mob-dis-unset">
                <div class="commercial-form">
                    <div class="commercial-form-hd">
                        <i class="fas fa-envelope-open-text"></i>
                        <span>Don’t Hesitate To Ask</span>
                        <h3>Request A Quote</h3>
                    </div>

                    <div class="commercial-form-cnt">
                        <form id="request-a-quote-mobile" action="{{url('contact')}}" method="post">
                            @csrf
                            <input type="hidden" name="type" value="Request A Quote - mobile">                  <input type="hidden" name="google_token" id="g-token-1">

                            <input type="hidden" name="notes" value="Popup opened from {{url()->full()}}">
                            <div class="form-group  ">
                                <input type="text" class="form-control" placeholder="Company/organization" name="company">
                            </div>
                            <div class="form-group  ">
                                <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                            </div>
                            <div class="form-group  ">
                                <input type="email" class="form-control" name="email" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" id="phone-request-a-quote-mobile" name="phone" placeholder="Phone" width="100%" required>
                                <input type="hidden" name="country_code">
                                <input type="hidden" name="country">
                                <span class="phone-error"></span>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="message" placeholder="Your Message" required>
                            </div>


                            <button type="submit" class="btn btn-sec">Submit Enquiry</button>
                        </form>
                    </div>
                </div>
            </div>

            @if(!empty($offers) && count($offers->photos) > 0)
                <div class="col-lg-9 col-md-7">
                    <ul id="lightSlider5">
                                    @foreach($offers->photos as $obj)
                                        @if(!empty($obj->media))
                                            <li>
                                                <div class="home-offer-list">
                                                    @if(!empty($obj->button_text))<a class="btn btn-sec home-offer-btn" href="{{$obj->button_link}}" target="{{$obj->button_link_target}}">{{$obj->button_text}}</a>@endif
                                                    <img src="{{asset($obj->media->file_path)}}" class="img-fluid" alt="{{$obj->alt_text}}" />
                                                </div>
                                            </li>

                                        @endif

                                    @endforeach
                                </ul>
                            </div>


            @endif

            <div class="col-lg-3 col-md-3  mob-dis-none">
                <div class="commercial-form">
                    <div class="commercial-form-hd">
                        <i class="fas fa-envelope-open-text"></i>
                        <span>Don’t Hesitate To Ask</span>
                        <h3>Request A Quote</h3>
                    </div>

                    <div class="commercial-form-cnt">
                        <form id="request-a-quote-desktop" action="{{url('contact')}}" method="post">
                            @csrf                   <input type="hidden" name="google_token" id="g-token">

                            <input type="hidden" name="type" value="Request A Quote - desktop">
                            <input type="hidden" name="notes" value="Popup opened from {{url()->full()}}">
                            <div class="form-group  ">
                                <input type="text" class="form-control" placeholder="Company/organization" name="company">
                            </div>
                            <div class="form-group  ">
                                <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                            </div>
                            <div class="form-group  ">
                                <input type="email" class="form-control" name="email" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control phone-form" id="phone-request-a-quote-desktop" name="phone" placeholder="Phone" width="100%" required>
                                <input type="hidden" name="country_code">
                                <input type="hidden" name="country">
                                <span class="phone-error"></span>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="message" placeholder="Your Message" required>
                            </div>
                            <button type="submit" class="btn btn-sec">Submit Enquiry</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="home-serv commercial-page">
    <div class="container">
        <div class="row"  data-slideinbottom>
            <div class="col-md-12">
                {!! $service->content !!}
            </div>
        </div>

        <div class="row"  data-slideinbottom>

            @foreach($service->related_services as $ob)
                @if(!empty($ob->service))
                    <div class="col-md-3">
                        <div class="home-serv-item">
                            @if(!empty($ob->service->featured_image))
                                <img src="{{asset($ob->service->featured_image->file_path)}}" class="img-fluid" />
                            @else
                                <img src="{{asset('service-image-not-found.jpg')}}" class="img-fluid" />
                            @endif
                            <div class="home-serv-btn-cntr">
                                <a class="btn btn-sec" href="{{url('services/'.$service->slug.'/'.$ob->service->slug)}}">ENQUIRE</a>
                                <a class="btn btn-sec" href="{{url('services/'.$service->slug.'/'.$ob->service->slug)}}">VIEW</a>
                            </div>
                            <p>{{$ob->service->name}}</p>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</section>

@if(!empty($service->image_left) || $service->top_description || $service->image_right || $service->bottom_description)
<section class="home-about serv-bg">
    <div class="container">
        <div class="row  ">
            @if(!empty($service->image_left))
                <div class="col-md-6 text-center" data-slideinleft>
                    <!-- <span  class="web-dis-none mob-dis-unset abt-hd">ABOUT US</span> --->
                    <img src="{{asset($service->image_left->file_path)}}" class="img-fluid" />
                </div>
            @endif


            <div  @if(!empty($service->image_left)) class="col-md-6" @else  class="col-md-12" @endif>
                {!! $service->top_description !!}
            </div>
        </div>


        <div class="row">

            <div  @if(!empty($service->image_right)) class="col-md-6" @else  class="col-md-12" @endif>
                {!! $service->bottom_description !!}
            </div>

            @if(!empty($service->image_right))
                <div class="col-md-6 text-center" data-slideinleft>
                    <!-- <span  class="web-dis-none mob-dis-unset abt-hd">ABOUT US</span> --->
                    <img src="{{asset($service->image_right->file_path)}}" class="img-fluid" />
                </div>
            @endif

        </div>


        <!-- <div class="row">
            <div class="col-md-12">
                {!!  $service->process_behind_description !!}
            </div>
        </div> -->



            


    </div>
</section>
@endif


 
 






<section class="home-about comm-ser-clint "  >
  <div class="container">

     <div class="row">
      @if(!empty($brands))
      <div class="col-md-12 col-lg-8 mob-dis-none">

        <div class="client-logo-cntr">
          <div class="row">
            @foreach($brands->photos as $obj)
                <div class="col-6 col-md-4 p-0">
                  <div class="client-logo-lst">
                    <img src="{{asset($obj->media->file_path)}}" class="img-fluid" style="width: 90px;height: 75px;object-fit: cover"/>
                  </div>
                </div>
            @endforeach

         

            </div>
        </div>


       
      </div>
      @endif
      <div @if(!empty($brands)) class="col-md-12 col-lg-4" @else class="col-md-12" @endif>


        <div class="commecial-year">
                  <span>{{Key::get('history-experience-years')}}</span>
                  <p>{!! Key::get('history-experience-years-text') !!}</p>
                </div>


        {!! Key::get('history-experience-content') !!}

      <h5> <img src="{{Key::get('history-iso-image-id')}}" class="img-fluid" width="80" /> Certified </h5>


     



          @if(!empty($brands))
<div class="web-dis-none mob-dis-unset">

<ul id="lightSlider7" >
    @foreach($brands->photos as $obj)
        <li > 
          <div class="client-logo-lst">
              <img src="{{asset($obj->media->file_path)}}" class="img-fluid" style="width: 90px;height: 75px;object-fit: cover"/>
              </div>
        </li> 
       @endforeach
    </ul>
    
    
   


</div></div>
              @endif




      </div>
    </div> 

 

</section>

 






@widget('Testimonials', ['is_home' => 0])
    @widget('FAQ', ['name' => $service->name])

<!-- @widget('FAQ', ['name' => 'Home'])
 --><section style="background-image: none !important;" class="home-about serv-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                {!!  $service->process_behind_description !!}
            </div>
        </div>



            


    </div>
</section>
 
	<!--====== CTA PART START ======-->
	<section class="cta-section">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-8">
					<div class="cta-text">
						<h2>{{Key::get('service-cta-title')}}</h2>
						<p>
                            {{Key::get('service-cta-description')}}
						</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="cta-links text-right">
                        <p><a
                           @if(strpos(Key::get('service-cta-btn-1-action'),'#') !== false) data-toggle="modal" data-target="{{Key::get('service-cta-btn-1-action')}}"
                           @elseif(strpos(Key::get('service-cta-btn-1-action'),'http') !== false)
                           href="{{Key::get('service-cta-btn-1-action')}}"
                           @else
                           href="{{url(Key::get('service-cta-btn-1-action'))}}"
                              @endif data-slideinleft><span class="btn-span">{{Key::get('service-cta-btn-1-label')}}</span></a></p>


                        <a class="main-btn main-btn-3"
                           @if(strpos(Key::get('service-cta-btn-2-action'),'#') !== false) data-toggle="modal" data-target="{{Key::get('service-cta-btn-2-action')}}"
                           @elseif(strpos(Key::get('service-cta-btn-2-action'),'http') !== false)
                           href="{{Key::get('service-cta-btn-2-action')}}"
                           @else
                           href="{{url(Key::get('service-cta-btn-2-action'))}}"
                           @endif
                           data-slideinright><span class="btn-span">{{Key::get('service-cta-btn-2-label')}}</span></a>


					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====== CTA PART END ======-->



 

@endsection



@section('bottom')
    <script>
 


        $( document ).ready(function() {
            
            
            
              setTimeout(function() {
     $(".open-the-modal").click();
}, 5000);
            

            var inp1 = document.querySelector("#phone-request-a-quote-desktop");
            window.intlTelInput(inp1, { onlyCountries: ["gb"] });
    
            var iti1 = window.intlTelInputGlobals.getInstance(inp1);
                iti1.setCountry("gb");


            var inp2 = document.querySelector("#phone-request-a-quote-mobile");
            window.intlTelInput(inp2, { onlyCountries: ["gb"] });
            var iti2 = window.intlTelInputGlobals.getInstance(inp2);
                iti2.setCountry("gb");



            $('#request-a-quote-mobile').validate({
                rules : {
                    name : {
                        required : true,
                        minlength : 2
                    },
                    company : {
                        required: true,
                        minlength: 2
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

                        grecaptcha.ready(function() {
                  grecaptcha.execute('6LeMRrsaAAAAAAZTMxi_DOfNc28VvKAxkvVgW0yD', {action: 'submit'}).then(function(token) {
                      $('#g-token-1').val(token);
                      form.submit();
                  });
                });

                        $('input[name=country_code]').val(iti2.getSelectedCountryData().dialCode);
                        $('input[name=country]').val(iti2.getSelectedCountryData().iso2);
                        form.submit();
                    }catch (e) {
                        window.location.replace('{{url('error')}}')
                    }

                }


            })

            $('#request-a-quote-desktop').validate({
                rules : {
                    name : {
                        required : true,
                        minlength : 2
                    },
                    company : {
                        required: true,
                        minlength: 2
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
                    $('button[type=submit]').html('Processing your request, please wait').attr('disabled','true');

                    try {

                        grecaptcha.ready(function() {
                  grecaptcha.execute('6LeMRrsaAAAAAAZTMxi_DOfNc28VvKAxkvVgW0yD', {action: 'submit'}).then(function(token) {
                      $('#g-token').val(token);
                      form.submit();
                  });
                });

                        $('input[name=country_code]').val(iti1.getSelectedCountryData().dialCode);
                        $('input[name=country]').val(iti1.getSelectedCountryData().iso2);
                        form.submit();
                    }catch (e) {
                        window.location.replace('{{url('error')}}')
                    }

                }


            })




        });
    </script>
@endsection