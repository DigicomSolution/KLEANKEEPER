 @extends('client.base')





 @section('title',$service->browser_title)

 @section('description',$service->meta_description ?? $service->browser_title)

 @section('keywords',$service->meta_keywords)





@section('head')

<link rel="stylesheet" href="{{asset('assets/css/new.css')}}">

 @if(isset($service->extra_js))
{!! $service->extra_js !!}
@endif

@endsection







@section('content')







    <section class="breadcrumbs-section   pt-180 pb-180 bg_cover"

             @if(!empty($service->banner_image)) style="background: url('{{asset($service->banner_image->file_path)}}');    background-position: center center;

                     background-size: cover;

                     background-repeat: no-repeat;" @else style="background: url(assets/images/breadcrumbs.jpg);" @endif>

        <div class="container">


            <div class="breadcrumbs-text text-left">

                <p>{{$service->name}}</p>

                <h1>{{$service->title1}}</h1>

                <p>{{$service->title2}}</p>

                  <div>
                            <form class="form-inline" method="get"  
                            @if(!empty($parent)) 
                                action="https://book.kleankeepers.co.uk/categories" 
                            @else 
                                action="https://book.kleankeepers.co.uk/services"  
                            @endif style="display: block;">

                                <input class="form-control custom-width " type="text" name="post_code" placeholder="Enter postcode to check the service" aria-label="Search"  required="">
                                  @if(!empty($parent)) 
                                <input type="hidden" name="service_id" class="form-control" value="{{$parent->app_service_id}}">
                                @endif
                                <input type="hidden" name="id" class="form-control" value="{{$service->app_service_id}}">


                                <button class="btn  mobile-service-book" type="submit" style="    background: #0093de;
    color: white;">Book Now</button>

                            </form>
                    </div>


                    <p style="color: white;">  {!! $service->content !!}</p>

                  


                <ul>

                    <li><a href="{{url('/')}}">Home</a></li>

                    @if(!empty($parent))
                        @if($parent->status == 1)
                        <li><a href="{{url('services/'.$parent->slug)}}">{{$parent->name}}</a></li>
                        @endif
                    @endif

                    <li>{{$service->name}}</li>

                </ul>

            </div>

        </div>

    </section>



    @if(count($service->related_services) > 1)

    <section class="home-serv  " style="display: block !important;">

        <div class="container">





            <div class="row"  data-slideinbottom>

                <div class="col-md-12">

                    <h3>{{$service->name}}</h3>

                  

                </div>

            </div>





            <div class="row"  data-slideinbottom>



                @foreach($service->related_services as $ob)

                    @if(!empty($ob->service))

                        <div class="col-lg-3 col-md-6">

                            <div class="  home-serv-item ml-0 mr-0">

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
                                   data-parent-service-id="{{$service->app_service_id}}"
                                   data-service-id="{{$ob->service->app_service_id}}">BOOK</a>

                                    <a class="btn btn-sec" href="{{url('services/'.$ob->service->slug)}}">VIEW</a>

                                </div>
                                
                                @endif

                                <p>{{$ob->service->name}}</p>

                            </div>

                        </div>

                    @endif

                @endforeach



            </div>

















        </div>

    </section>

    @endif





    <section class="home-about serv-bg  pb-0">

        <div class="container">

            <div class="row mb-0">

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
        </div>-->






        </div>

    </section>





    @if(!empty($offers))

    @if(count($offers->photos)>0)

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

    @endif

    

    @widget('Promo')

    @widget('Howitworks')

    @widget('Testimonials', ['is_home' => $service->id])

    @widget('FAQ', ['name' => $service->name])

<section style="background-image: none !important;" class="home-about serv-bg  pb-0" >

        <div class="container">

           <div class="row">
            <div class="col-md-12">
                {!!  $service->process_behind_description !!}
            </div>
        </div>






        </div>

    </section>

@endsection





@section('bottom')



@endsection