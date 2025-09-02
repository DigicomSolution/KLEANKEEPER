 @extends('client.base')

 @section('title',Key::get('service-meta-title'))
 @section('description',Key::get('service-meta-description'))
 @section('keywords',Key::get('service-meta-keywords'))


 @section('head')
 <link rel="stylesheet" href="{{asset('assets/css/new.css')}}">
 @endsection



 @section('content')

 @if(!empty($slider->photos))
 <div id="carouselExampleCaptions" class="carousel slide keep-banner" data-ride="carousel">

     <ol class="carousel-indicators">
         @foreach($slider->photos as $obj)
         <li data-target="#carouselExampleCaptions" data-slide-to="{{$loop->index}}" @if($loop->index == 0)class="active" @endif></li>
         @endforeach
     </ol>

     <div class="carousel-inner">

         @foreach($slider->photos as $obj)
         <div class="carousel-item @if($loop->index == 0) active @endif">
             @if(!empty($obj->media))
             <img src="{{asset($obj->media->file_path)}}" class="d-block w-100" alt="{{$obj->alt_text}}">
             @else
             <img src="{{asset('no-slider.jpg')}}" class="d-block w-100" alt="{{$obj->alt_text}}">
             @endif
             <div class="carousel-caption text-center ">
                 <h5>{{$obj->title}}</h5>
                 <p>{{$obj->description}}</p>
                 @if($obj->button_link == "search")
                 <form class="form-inline  ">
                     <input class="form-control  " type="search" placeholder="Search" aria-label="Search">
                     <button class="btn  " type="submit">{{$obj->button_text}}</button>
                 </form>
                 @else

                 @if(!empty($obj->button_link))
                 <a href="{{$obj->button_link}}" class="btn btn-large btn-success" target="{{$obj->button_link_target}}" style="width: auto;display: inline-block;margin-top: 10px">{{$obj->button_text}}</a>
                 @endif

                 @endif

                 @if(!empty($obj->button2_link))
                 <a href="{{$obj->button2_link}}" class="btn btn-large btn-success" target="{{$obj->button2_link_target}}" style="width: auto;display: inline-block;margin-top: 10px">{{$obj->button2_text}}</a>
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




 <!--====== SERVICE PART START ======-->
 <section class="services-area services-area-two pb-130">
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-lg-8">
                 <div class="section-title text-center">
                     <!--   <img src="assets/images/item.png" alt="Klean Keepers image {{ rand(100000, 99999999) }}">   -->
                     <h1 class="title">{{Key::get('service-title')}}</h1>
                     <span>{!! Key::get('service-content') !!}</span>
                 </div>
             </div>
         </div>
         <div class="row justify-content-center">

             @foreach($parent_services as $obj)
             <div class="col-lg-3 col-md-6 col-sm-8">
                 <div class="services-item services-item-2 text-center mt-30">
                     <div class="services-thumb">
                         <i>

                             @if(!empty($obj->icon))
                             <img src="{{asset($obj->icon->file_path)}}" class="ser-img" alt="{{$obj->name}}" />
                             @endif

                             @if(!empty($obj->icon_alt))
                             <img src="{{asset($obj->icon_alt->file_path)}}" class="ser-hover-img" alt="{{$obj->name}}" />
                             @endif

                         </i>
                         <span class="icon-shape"><img src="{{asset('assets/images/shape/service-shape.png')}}"
                                 alt="shape"></span>
                     </div>
                     <div class="services-content">
                         <h4 class="title" style="min-height:55px;"> {{$obj->name}}</h4>
                         {{$obj->summary}}
                         <a href="{{url('service/'.$obj->slug)}}">Read More <i class="fas fa-plus"></i></a>
                     </div>
                 </div>
             </div>
             @endforeach

         </div>
     </div>
 </section>
 <!--====== SERVICE PART ENDS ======-->






 @widget('Promo')
 @widget('Howitworks')
 @widget('Testimonials', ['is_home' => 0])
 @widget('FAQ', ['name' => 'Home'])


 @endsection


 @section('bottom')

 @endsection