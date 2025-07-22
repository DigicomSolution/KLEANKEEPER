 @extends('client.base')


@section('head')
<link rel="stylesheet" href="{{asset('assets/css/new.css')}}">


@if(isset($service->extra_js))
{!! $service->extra_js !!}
@endif
@endsection



@section('content')

<!-- this is a detail page -->


<!--====== BREADCRUMBS PART START ======-->

  <section class="breadcrumbs-section   pt-180 pb-180 bg_cover"
           @if(!empty($service->banner_image)) style="background: url('{{asset($service->banner_image->file_path)}}');" @else style="background: url(assets/images/breadcrumbs.jpg);" @endif>
    <div class="container">
      <div class="breadcrumbs-text text-left">
        <h1>{{$service->name}}</h1>
        <ul>
          <li><a href="{{url('/')}}">Home</a></li>
          @if(!empty($parent))
            <li><a href="{{url('service/'.$parent->slug)}}">{{$parent->name}}</a></li>
          @endif
          <li>{{$service->name}}</li>
        </ul>
      </div>
    </div>
  </section>
  <!--====== BREADCRUMBS PART END ======-->
  <!--====== DETAILS PART START ======-->
  <section class="service-details-wrap pt-130 pb-130">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 order-2 order-lg-1">
          <div class="sidebar">
            <div class="widgets service-cat">
              <h4 class="widget-title">Popular Service</h4>
              <ul class="service-cat-list">
                  @foreach($parent->related_services as $ob)
                      @if(!empty($ob->service))
                          <li @if(url()->full() == url('service/'.$ob->service->slug)) class="active" @endif><a href="{{url('service/'.$ob->service->slug)}}">{{$ob->service->name}}<i class="far fa-angle-right"></i></a></li>
                      @endif
                  @endforeach
                <li><a href="#">Tolilet Cleaning<i class="far fa-angle-right"></i></a></li>
                <li><a href="#">Office Cleaning<i class="far fa-angle-right"></i></a></li>
                <li><a href="#">Carpet Cleaning<i class="far fa-angle-right"></i></a></li>
              </ul>
            </div>
            <div class="widgets contact-form">
              <h4 class="widget-title">Have Any Query?</h4>
              <form>
                <div class="input-wrap">
                  <input type="text" placeholder="Your Name" />
                </div>
                <div class="input-wrap mt-20">
                  <input type="email" placeholder="Email Address" />
                </div>
                <div class="input-wrap mt-20">
                  <textarea placeholder="Write Query"></textarea>
                </div>
                <button type="submit" class="main-btn mt-20">
                  Send Message
                </button>
              </form>
            </div>
            {{--<div class="widgets poster-widget">--}}
              {{--<img src="{{asset('/')}}/assets/images/poster.jpg" alt="Images" />--}}
            {{--</div>--}}
          </div>
        </div>
        <div class="col-lg-8 order-1 order-lg-2">
          <div class="service-details">
            <h2 class="title">{{$service->name}}</h2>
            @if(!empty($service->featured_image))
                  <img src="{{asset($service->featured_image->file_path)}}" alt="{{$service->name}}" class="mb-35" />
            @endif

            {!! $service->content !!}
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--====== DETAILS PART END ======-->




@endsection


@section('bottom')
 
@endsection