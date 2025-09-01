 @extends('client.base')

 @section('title',Key::get('about-meta-title'))
 @section('description',Key::get('about-meta-description'))
 @section('keywords',Key::get('about-meta-keywords'))


@section('head')
<link rel="stylesheet" href="{{asset('assets/css/new.css')}}">
@endsection



@section('content')

    <div id="carouselExampleCaptions" class="carousel slide keep-banner" data-ride="carousel">

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{Key::get('about-us-banner-image-id')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption  ">
                    <h1>{{Key::get('about-us-banner-title')}}</h1>
                    <p>{{Key::get('about-us-banner-title-sub')}}</p>
                    <a href="{{Key::get('about-us-banner-cta-action')}}" class="btn  btn-with-out-form"  >{{Key::get('about-us-banner-cta-label')}}</a>
                </div>
            </div>
        </div>
    </div>


    <section class="home-about pb-40  ">
        <div class="container">
            <div class="row  md-mb-0">
                <div class="col-md-6 text-center" data-slideinleft>
                    <!-- <span  class="web-dis-none mob-dis-unset abt-hd">ABOUT US</span> --->
                    <img src="{{Key::get('about-us-feature-image-id')}}" class="img-fluid" />
                </div>
                <div class="col-md-6">
                    <!-- <span class="mob-dis-none" data-slideInLeft>ABOUT US</span>  -->
                    {!! Key::get('about-us-feature-content') !!}
                </div>
            </div>
        </div>
    </section>


    <section class="cta-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-text text-center">
                        <h2>{{Key::get('about-us-feature-footer-title')}}</h2>
                        <p>{{Key::get('about-us-feature-footer-sub-title')}}</p>
                    </div>
                </div>

            </div>
        </div>
    </section>




    <section class="home-about  about-sec-3">
        <div class="container">
            <div class="row ">
                <div class="col-md-6 text-center" data-slideinleft>
                    <!-- <span  class="web-dis-none mob-dis-unset abt-hd">ABOUT US</span> --->
                    <img src="{{Key::get('about-us-founder-image-id')}}" class="img-fluid" />
                </div>
                <div class="col-md-6">
                    {!! Key::get('about-us-founder-content') !!}
                </div>
            </div>




        </div>
    </section>

    <!--====== EXPERT PART START ======-->
    <section class="our-expert-area pb-130 pt-130" style="background: #f5f5f5;display:none">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-8 col-md-10">
                    <div class="section-title text-center">
                        <h2 class="title"> {!! Key::get('about-us-team-title') !!}</h2>
                        <span> {!! Key::get('about-us-team-subheading') !!}</span>
                    </div>
                </div>
            </div>
            <div class="expert-wrap">
                <div class="row" id="expert-slider">

                    @foreach($team_mates as $obj)
                        @if(!empty($obj->featured_image))
                            <div class="col-lg-3">
                                <div class="expert-items" style="padding: 10px">

                                    <img src="{{asset($obj->featured_image->file_path)}}" alt="{{$obj->name}}" style="height: 300px; width: 300px;object-fit: cover">
                                    <div class="expert-content">
                                        <h4>{{$obj->name}}</h4>
                                        <span class="expert-position">{{$obj->designation}}</span>
                                        <ul class="expert-social">
                                            @if(!empty($obj->facebook_link))<li><a href="{{$obj->facebook_link}}"><i class="fab fa-facebook"></i></a></li>@endif
                                            @if(!empty($obj->twitter_link))<li><a href="{{$obj->twitter_link}}"><i class="fab fa-twitter"></i></a></li>@endif
                                            @if(!empty($obj->instagram_link))<li><a href="{{$obj->instagram_link}}"><i class="fab fa-instagram"></i></a></li>@endif
                                            @if(!empty($obj->instagram_link))<li><a href="{{$obj->instagram_link}}"><i class="fab fa-linkedin"></i></a></li>@endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!--====== EXPERT PART END ======-->


    <!--====== COUNTER PART START ======-->
    <section class="counter-area pt-60 bg_cover" style="background-image: url(assets/images/counter-bg.jpg);display:none;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-item text-center mt-30">
                        <i class="flaticon-maid"></i>
                        <h3 class="title counter">{{Key::get('about-us-stats-block-1-value')}}</h3>
                        <span>{{Key::get('about-us-stats-block-1-label')}}</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-item text-center mt-30">
                        <i class="flaticon-glass-cleaner"></i>
                        <h3 class="title counter">{{Key::get('about-us-stats-block-2-value')}}</h3>
                        <span>{{Key::get('about-us-stats-block-2-label')}}</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-item text-center mt-30">
                        <i class="flaticon-thumb-up"></i>
                        <h3 class="title counter">{{Key::get('about-us-stats-block-3-value')}}</h3>
                        <span>{{Key::get('about-us-stats-block-3-label')}}</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-item text-center mt-30">
                        <i class="flaticon-medal"></i>
                        <h3 class="title counter">{{Key::get('about-us-stats-block-4-value')}}</h3>
                        <span>{{Key::get('about-us-stats-block-4-label')}}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== COUNTER PART ENDS ======-->




    <!--====== FEATURE PART START ======-->
    <section class="feature-area pb-130 pt-130" style="background: #f5f5f5;display:none;">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-9">
                    <div class="feature-item style-one text-center mt-30">
                        <img src="{{Key::get('about-us-highlighted-1-image-id')}}" alt="" width="80px">
                        <h4 class="title">{{Key::get('about-us-highlighted-1-label')}}</h4>
                        <p>
                            {{Key::get('about-us-highlighted-1-value')}}
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-9">
                    <div class="feature-item style-one text-center mt-30 active">
                        <img src="{{Key::get('about-us-highlighted-2-image-id')}}" alt="" width="80px">
                        <h4 class="title">{{Key::get('about-us-highlighted-2-label')}}</h4>
                        <p>
                            {{Key::get('about-us-highlighted-2-value')}}
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="feature-item style-one text-center mt-30">
                        <img src="{{Key::get('about-us-highlighted-3-image-id')}}" alt="" width="80px">
                        <h4 class="title">{{Key::get('about-us-highlighted-3-label')}}</h4>
                        <p>
                            {{Key::get('about-us-highlighted-3-value')}}
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!--====== FEATURE PART ENDS ======-->



    <!--====== FEATURE LIST PART START ======-->
    <section class="feature-list-area pt-130 pb-130" >
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    {!! Key::get('about-us-why-us-left-content') !!}
                </div>

                <div class="col-xl-4">
                    <img src="{{Key::get('about-us-why-us-image-id')}}" alt="Image" width="100%">
                </div>
                <div class="col-xl-4">
                            {!! Key::get('about-us-why-us-right-content')!!}
                </div>
            </div>
        </div>
    </section>
<!--====== FEATURE LIST PART ENDS ======-->



@endsection


@section('bottom')

@endsection