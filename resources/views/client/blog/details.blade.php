@extends('client.base')





@section('title',$blog->browser_title)

@section('description',$blog->meta_description)

@section('keywords',$blog->meta_keywords)


@section('og_title',$blog->browser_title)

@section('og_description',$blog->meta_description)



@section('og_url',url()->current())




@section('head')


    <link rel="stylesheet" href="{{asset('assets/css/new.css')}}">

@endsection







@section('content')



    <!--====== Blog PART STARt ======-->

    <section class="blog-wrapper  pb-130">

        <div class="container">

            <div class="row">







                <div class="col-lg-12">

                    <nav aria-label="breadcrumb">

                        <ol class="breadcrumb">

                            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>

                            <li class="breadcrumb-item"><a href="{{url('blog')}}">Blogs</a></li>

                            <li class="breadcrumb-item active" aria-current="page">{{$blog->name}}</li>

                        </ol>

                    </nav>



                </div>











                <div class="col-lg-8">

                    <div class="blog-details">

                        <h1 class="title">{{$blog->name}}</h1>





                        <img   @if(!empty($blog->featured_image)) src="{{asset($blog->featured_image->file_path)}}" @endif class="main-img" alt="Images">

                        <ul class="blog-meta">

                            <li>

                                <a href="#"><i class="fas fa-user"></i>{{$blog->author}}</a>

                            </li>



                            <li>

                                <a href="#"><i class="far fa-calendar-alt"></i>{{$blog->blog_date}}</a>

                            </li>



                        </ul>



                        {!! $blog->content !!}

                    </div>

                    <div class="blog-footer d-md-flex justify-content-between align-items-center">

                        <div class="blog-tag">

                            @if(!empty($blog->related))<a href="{{url('blog/'.$blog->related->slug)}}">{{$blog->related->name}}</a>@endif



                        </div>

                      <!--   <div class="social-share">

                            <a href="#"><i class="fab fa-facebook-f"></i></a>

                            <a href="#"><i class="fab fa-twitter"></i></a>

                            <a href="#"><i class="fab fa-instagram"></i></a>

                            <a href="#"><i class="fab fa-google"></i></a>

                        </div> -->

                    </div>

                </div>

                <div class="col-lg-4">





                    <div class="sidebar blog-sidebar">











                        <div class="widgets category-widget">

                            <h4 class="widget-title">Category</h4>

                            <ul>

                                @foreach($categories as $obj)

                                <li><a href="{{url('blog/'.$obj->slug)}}">{{$obj->name}}<span class="cat-count">({{$obj->count}})</span></a></li>

                                @endforeach

                            </ul>

                        </div>

                        <div class="widgets popular-post">

                            <h4 class="widget-title">Popular Post</h4>

                            <ul>

                                @foreach($popular_blogs as $ob)

                                <li>

                                    <img @if(!empty($ob->featured_image)) src="{{asset($ob->featured_image->file_path)}}" @endif alt="{{$ob->name}}">

                                    <h6><a href="{{url('blog/'.$ob->slug)}}">{{$ob->name}}</a></h6>

                                </li>

                                @endforeach

                            </ul>

                        </div>





                        <div class="widgets newsletter">

                            <h4 class="widget-title">Newsletter</h4>

                            <form action="{{url('contact')}}" method="post" id="newsletter_form">@csrf

                                <input type="hidden" name="name" value="News Letter">

                                <input type="hidden" name="phone" value="0000000000">

                                <input type="hidden" name="country_code" value="91">

                                <input type="hidden" name="type" value="newsletter">

                                <input type="hidden" name="message" value="{{'Page url is '.url()->full()}}">

                                <input type="email" name="email" placeholder="Email Address" required>

                                <button type="submit" id="newsletter_form_submit">Subscribe Now</button>

                            </form>

                        </div>





                    </div>

                </div>

            </div>

        </div>

    </section>

    <!--====== Blog PART END ======-->







@endsection





@section('bottom')

    <script type="text/javascript">

        var validator = $('#newsletter_form').validate({



            submitHandler: function (form) {



            try {

                $('#newsletter_form_submit').html('Processing').attr('disabled','true');

                form.submit();

            }catch (e) {

                window.location.replace('{{url('error')}}')

            }





        }});

    </script>

@endsection