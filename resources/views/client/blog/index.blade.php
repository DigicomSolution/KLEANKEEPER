@extends('client.base')



    @section('title',$blog->browser_title)

    @section('description',$blog->meta_description ?? $blog->browser_title)

    @section('keywords',$blog->meta_keywords)



@section('head')

    <link rel="stylesheet" href="{{asset('assets/css/new.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/home_new.css')}}">

@endsection







@section('content')





    <!--====== breadcrumbs PART START ======-->

    <section class="breadcrumbs-section   pt-180 pb-180 bg_cover"

             @if(!empty($blog->featured_image)) style="background-image: url('{{Key::get('blog-index-page-banner-image-id')}}');" @endif>

        <div class="container">

            <div class="breadcrumbs-text text-left">

                @if(!empty($title))

                <h1>{{$title}}</h1>

                    @else

                    <h1>Blog</h1>

                @endif

                <ul>

                    <li><a href="{{url('/')}}">Home</a></li>

                    @if(!empty($title))

                        <li><a href="{{url('blog')}}">Blogs</a></li>

                        <li>{{$title}}</li>

                    @else

                        <li>Blogs</li>

                    @endif

                </ul>

            </div>

        </div>

    </section>



    <!--====== breadcrumbs PART END ======-->



    <!--====== Blog PART STARt ======-->

    <section class="blog-wrapper pt-130 pb-130">

        <div class="container">

            <div class="row">

                <div class="col-lg-12">

                    <div class="blog-loop">



                        <div class="row">

                            @foreach($blogs as $obj)

                            <div class="col-lg-4">

                                <div class="single-blog">

                                    <div class="blog-thumb mb-40">

                                        @if(!empty($obj->featured_image))

                                            <img src="{{asset($obj->featured_image->file_path)}} " alt="{{$obj->name}}">

                                            @else

                                            <img src="{{asset('assets/images/blog-7.jpg')}}" alt="{{$obj->name}}">

                                        @endif

                                        @if(!empty($obj->related))<a class="blog-cat" href="{{url('blog/'.$obj->related->slug)}}">{{$obj->related->name}}</a>@endif

                                    </div>

                                    <ul class="blog-meta mb-20">

                                        <li class="blog-tags">

                                            @if(!empty($obj->author))<a class="blog-cat" href="{{url('blog/'.$obj->author)}}">{{$obj->author}}</a>@endif

                                        </li>

                                        <li>/</li>

                                        <li class="blog-date">

                                            <a href="javascript:void(0)">{{$obj->blog_date}}</a>

                                        </li>

                                    </ul>

                                    <h3 class="title"><a href="{{url('blog/'.$obj->slug)}}">{{$obj->name}}</a></h3>

                                    <p>{{$obj->short_description}}</p>

                                    <a href="{{url('blog/'.$obj->slug)}}" class="read-more">Continue Reading <i

                                                class="fas fa-plus"></i></a>

                                </div>

                            </div>

                            @endforeach

                        </div>



                    </div>

                    <div class="pagination-wrap text-left mt-30">

                        {{$blogs->links()}}

                        {{--<ul>--}}

                            {{--<li class="active"><a href="#">1</a></li>--}}

                            {{--<li><a href="#">2</a></li>--}}

                            {{--<li><a href="#"><i class="fas fa-arrow-right"></i></a></li>--}}

                        {{--</ul>--}}

                    </div>

                </div>









                <div class="col-lg-12 mt-4">



                    <div class="sidebar blog-sidebar">



                        <div class="widgets category-widget mb-0">

                            <div class="mob-dis-none">

                                <h4 class="widget-title">Category   </h4>

                                <ul class="row ">

                                    @foreach($categories as $obj)

                                        <li class="col-md-4"><a href="{{url('blog/'.$obj->slug)}}">{{$obj->name}}<span class="cat-count">({{$obj->count}})</span></a></li>

                                    @endforeach

                                </ul>

                            </div>





                            <div class="accordion web-dis-none mob-dis-unset" id="accordionExample">

                                <div class="card">

                                    <div class="card-header" id="headingOne">

                                        <h2 class="mb-0">

                                            <a class=" text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">

                                                Category  <i class="fas fa-bars"></i>

                                            </a>

                                        </h2>

                                    </div>



                                    <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">

                                        <div class="card-body">

                                            <ul class="row  ">

                                                @foreach($categories as $obj)

                                                    <li class="col-md-4"><a href="{{url('blog/'.$obj->slug)}}">{{$obj->name}}<span class="cat-count">({{$obj->count}})</span></a></li>

                                                @endforeach



                                            </ul>

                                        </div>

                                    </div>

                                </div>





                            </div>

                        </div>



                    </div>





                </div>







            </div>

        </div>

    </section>

    <!--====== Blog PART END ======-->







@endsection





@section('bottom')



@endsection