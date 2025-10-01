@extends('client.base')



@section('title',Key::get('home-meta-title'))

@section('description',Key::get('home-meta-description'))

@section('keywords',Key::get('home-meta-keywords'))



@section('head')
<!-- top -->

<style type="text/css">
  .home-slide-serv .list-serv-item img {
    position: relative;
    z-index: 1;
    height: 65px;
    width: 65px;
}

.home-slide-serv .lightSlider li {

    height: 150px;
}
.home-slide-serv .list-serv-item p {
  height: 45px;
}
div.cookies {
 
  position:fixed;   
  bottom: 0;
  left: 0;
  z-index: 999;
  width: 100%;
  padding: 20px 0;
  color: #fff;
  font-size: 12px;
  line-height: 16px;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  background: rgba(0,74,151,0.9);
}

div.cookies a {
  
  color: #fff; 
  
}

@media only screen and (max-width: 600px) {
  .modal-mobile{
                margin: 0 !important;
    bottom: 0;
    position: absolute !important;

        }
        
        .custom-width{
                width: 100% !important;
        }
        
        .mobile-service-book{
                margin-top: 10px !important;
    text-align: center !important;
    margin-left: 25% !important;
        }
        
}


</style>
@if(isset($home_footer->extra_js))
{!!$home_footer->extra_js!!}
	@endif
@endsection







@section('content')



    {{--SLIDER STARTS--}}

    @if(!empty($slider->photos))

    <div id="carouselExampleCaptions" class="carousel slide keep-banner" data-ride="carousel">



        <ol class="carousel-indicators">

              @foreach($slider->photos as $obj)

                <li data-target="#carouselExampleCaptions" data-slide-to="{{$loop->index}}" @if($loop->index == 0)class="active" @endif></li>

              @endforeach

        </ol>



        <div class="carousel-inner">



            @foreach($slider->photos as $key=>$obj)

            <div class="carousel-item @if($loop->index == 0) active @endif">

                @if(!empty($obj->media))

                    <img src="{{asset($obj->media->file_path)}}" class="d-block w-100" alt="{{$obj->alt_text}} klean image block no slider">

                    @else

                    <img src="{{asset('no-slider.jpg')}}" class="d-block w-100" alt="{{$obj->alt_text}} klean imabe block no slider">

                @endif

                <div class="carousel-caption text-center ">

                    <h5>{{$obj->title}}</h5>

                        <p>{{$obj->description}}</p>

                        @if($obj->button_link == "search")

                            <form class="form-inline" action="https://book.kleankeepers.co.uk" style="display: block;">

                                <input class="form-control custom-width" type="text" name="post_code" placeholder="Please enter your post code" aria-label="Search">

                                <button class="mobile-service-book btn" type="submit" style="width:auto">{{$obj->button_text}}</button>

                            </form>

                        @else



                        @if(!empty($obj->button_link))

                            <a href="{{$obj->button_link}}" class="btn btn-large btn-success" target="{{$obj->button_link_target}}" style="width: auto;display: inline-block;margin-top: 10px">{{$obj->button_text}}</a>

                        @endif



                        @endif



                        @if(!empty($obj->button2_link))

                            <a href="{{$obj->button2_link}}" class="btn btn-large btn-success" target="{{$obj->button2_link_target}}" style="width: auto;display: inline-block;margin-top: 10px">{{$obj->button2_text}}</a>

                        @endif
 @if($key == 1) 
<div class="row mt-25 phone-buttons">
             
            <div class="col-md-12">
               
                <a href="https://play.google.com/store/apps/details?id=com.kleankeepers.app&amp;hl=en_IN&amp;gl=US" target="_blank"   class="visible"><img alt="klen mobiel banner btn1" src="{{asset('/')}}//uploads/media/mobile-btn-2600eb5408e1d9.png" class="img-fluid">  </a>
                <a href="https://apps.apple.com/gb/app/klean-keepers/id1509700722" target="_blank"  class="visible"><img alt="Kleen banner mobile btn" src="{{asset('/')}}//uploads/media/mobile-btn-1600eb54887426.png" class="img-fluid">  </a>

            </div>
        </div>
 @endif
                </div>

            </div>

            @endforeach



        </div>



        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">

            <span class="carousel-control-prev-icon" aria-hidden="true"></span>

            <span class="sr-only">Previous</span>

        </a>

        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">

            <span class="carousel-control-next-icon" aria-hidden="true"></span>

            <span class="sr-only">Next</span>

        </a>

    </div>

    @endif

    <canvas style="display: none;"></canvas>

    {{--SLIDER ENDS--}}



    @if(!empty($featured_services))

        <section class="home-slide-serv" data-slideinbottom>

            <div class="container">

                <ul id="lightSlider">

                    @foreach($featured_services as $obj)
                    @if($obj->name !== "Commercial Cleaning")

                    <li>

                        <div class="list-serv-item d-flex align-items-center justify-content-center">

                            <a href="{{url('services/'.$obj->slug)}}">

                                <div>

                                     @if(!empty($obj->icon))

                                         <img src="{{asset($obj->icon->file_path)}}" class="img-fluid img-1" />

                                     @endif



                                     @if(!empty($obj->icon_alt))

                                         <img src="{{asset($obj->icon_alt->file_path)}}" class="img-fluid img-2" />

                                     @endif

                                     <p>{{$obj->name}}</p>

                                </div>

                            </a>

                        </div>

                    </li>
@endif
                    @endforeach

                </ul>

            </div>

        </section>

    @endif





    @if(!empty($parent_services))

        <section class="home-serv">

            <div class="container">



                @foreach($parent_services as $obj)



                    <div class="row"  data-slideinbottom>

                      <div class="col-md-12">

                        <h3>{{$obj->name}}</h3>

                         <ul class="lightSlider-featured  ">

                             @foreach($obj->related_services as $ob)

                                 @if(!empty($ob->service))

                                <li>

                                          <div class="home-serv-item">

                                              @if(!empty($ob->service->featured_image))

                                                  <img src="{{asset($ob->service->featured_image->file_path)}}" class="img-fluid" />

                                                  @elseif(!empty($ob->service->banner_image))

                                                     <img src="{{asset($ob->service->banner_image->file_path)}}" class="img-fluid" />

                                                  @else

                                                  <img src="{{asset('service-image-not-found.jpg')}}" class="img-fluid" />

                                              @endif
                                              
                                              
                                              @if($ob->service->is_show_detail == 1)

                                             <div class="home-serv-btn-cntr">

                                               <a class="btn btn-sec book-service" href="javascrip::void(0)" 
data-parent-service-id="{{$obj->app_service_id}}"
                                               data-service-id="{{$ob->service->app_service_id}}">BOOK</a>

                                               <a class="btn btn-sec" href="{{url('services/'.$ob->service->slug)}}">VIEW</a>

                                             </div>
                                             
                                             @endif

                                             <p>{{$ob->service->name}}</p>

                                          </div>

                                </li>

                                 @endif

                             @endforeach

                         </ul>

                      </div>

                    </div>



                @endforeach





                <div class="row mt-4">

                    <div class="col-md-12 text-center">

                        <a aria-label="view all" class="btn btn-main" href="{{url('services')}}"><span class="btn-span">VIEW ALL</span></a>

                    </div>

                </div>



            </div>

        </section>

    @endif





@if(!empty($offers) && count($offers->photos) >0)

<section class="home-offer" data-slideinbottom>

  <div class="container">

    <div class="row">

      <div class="col-md-12">

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

    </div>

  </div>

</section>

@endif





    @widget('Promo')
  <div class="mob-dis-none">
    @widget('About')

  </div>

    @widget('Howitworks')

    @widget('Testimonials', ['is_home' => 0])


 


    @widget('FAQ', ['name' => 'Home'])
    <section style="display:block;">
	  <div class="container">
           <div class="row">
<div id="widget-container" class="ekomi-widget-container ekomi-widget-sf14868261a9f7e5b5ecc container"></div>
           </div>
       </div>
	</section>


    <section class="home-cta" style="background-image: url('{{Key::get('site-cta-bg-image-id')}}');

    background-repeat: no-repeat;

    background-position: left bottom;

    background-color: #095998;">

        <div class="container">

            <div class="row">

                <div class="col-md-12 text-center">



                    <a class="btn btn-main2"
                        aria-label="cat links modal"
                       @if(strpos(Key::get('site-cta-btn-1-action'),'#') !== false) data-toggle="modal" data-target="{{Key::get('site-cta-btn-1-action')}}"

                       @elseif(strpos(Key::get('site-cta-btn-1-action'),'http') !== false)

                       href="{{Key::get('site-cta-btn-1-action')}}"

                       @else

                       href="{{url(Key::get('site-cta-btn-1-action'))}}"

                       @endif data-slideinleft><span class="btn-span">{{Key::get('site-cta-btn-1-label')}}</span></a>





                    <a class="btn btn-main3"
                        aria-label="cat main"
                       @if(strpos(Key::get('site-cta-btn-2-action'),'#') !== false) data-toggle="modal" data-target="{{Key::get('site-cta-btn-2-action')}}"

                       @elseif(strpos(Key::get('site-cta-btn-2-action'),'http') !== false)

                       href="{{Key::get('site-cta-btn-2-action')}}"

                       @else

                       href="{{url(Key::get('site-cta-btn-2-action'))}}"

                       @endif

                       data-slideinright><span class="btn-span">{{Key::get('site-cta-btn-2-label')}}</span></a>



                </div>

            </div>

        </div>

    </section>


@if(isset($home_footer->content))
<section style="display:block;">
      <div class="container">
           <div class="row">
                       <div class="col-12">

            {!!$home_footer->content!!}
                       </div>
           </div>
       </div>
    </section>
@endif



<div class="cookies" style="display:none;">
  <div class="container">
    <div class="row">
    <div class="col-10">This site uses cookies. By continuing to browse the site you are agreeing to our use of cookies. <a href="https://www.kleankeepers.co.uk/cookies"> Find out more here </a>

      </div>
      <div class="col-2">
<a id="cooki-clos"><i class="fas fa-times"></i></a>
      </div>
    </div>
     </div>
  </div>
@endsection





@section('bottom')

<!-- foot -->
<script type="text/javascript">function registerWidget (w, token) {w['_ekomiWidgetsServerUrl'] = 'https://widgets.ekomi.com';w['_customerId'] = 148682;w['_language'] = new Array();w['_language'][token] = 'auto';if(typeof(w['_ekomiWidgetTokens']) !== 'undefined'){w['_ekomiWidgetTokens'][w['_ekomiWidgetTokens'].length] = token;} else {w['_ekomiWidgetTokens'] = new Array(token);}if(typeof(ekomiWidgetJs) == 'undefined') {ekomiWidgetJs = true;var scr = document.createElement('script');scr.src = 'https://sw-assets.ekomiapps.de/static_resources/widget.js';var head = document.getElementsByTagName('head')[0];head.appendChild(scr);}}(function (w) {var token = 'sf14868261a9f7e5b5ecc';var k = document.getElementsByClassName('ekomi-widget-' + token);for(var x=0;x<k.length;x++){registerWidget(w,token);}})(window);</script>


<script type="text/javascript">

  $(document).ready(function() {

    $(".lightSlider-featured").lightSlider({

     auto: true,

     speed:3000,

     pause:3000,

     pauseOnHover:true,

    item: 4, 

    

    loop:true,

    slideMargin: 0, 



    pager:false,  

    prevHtml: '<i class="fas fa-chevron-left"></i>',

        nextHtml: '<i class="fas fa-chevron-right"></i>',

    responsive: [{

       breakpoint: 767,

       settings: {

         item: 2,

         slideMove: 1,

         slideMargin: 6,

       }

     }, {

       breakpoint: 481,

       settings: {

         item: 1,

         slideMove: 1

       }

     }]

}

        ); 



   $("#cooki-clos").click(function(){
    $(".cookies").remove();
    $(".app-cntr").show();
  });

  
   

  });

</script>





@endsection