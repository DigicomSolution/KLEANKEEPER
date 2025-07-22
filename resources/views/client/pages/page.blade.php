 @extends('client.base')




@section('title',$blog->browser_title)

@section('description',$blog->meta_Description)

@section('keywords',$blog->meta_keywords)




@section('head')

<link rel="stylesheet" href="{{asset('assets/css/new.css')}}">

@endsection







@section('content')




    <!--====== Blog PART STARt ======-->

    <section class="blog-wrapper  pb-130">

        <div class="container">

            <div class="row">



                <div class="col-lg-8">

                    <div class="blog-details">

                        <h1 class="title">{{$blog->name}}</h1>





                        @if(!empty($blog->featured_image))<img    src="{{asset($blog->featured_image->file_path)}}" class="main-img" alt="Images">@endif 

                       



                        {!! $blog->content !!}

                    </div>

                    <div class="blog-footer d-md-flex justify-content-between align-items-center">

                        <div class="blog-tag">

                            @if(!empty($blog->related))<a href="{{url('blog/'.$blog->related->slug)}}">{{$blog->related->name}}</a>@endif



                        </div>

                       

                    </div>

                </div>

                <div class="col-lg-4">





                    <div class="sidebar blog-sidebar">











                        




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


@endsection





@section('bottom')
@if(isset($blog->extra_js))
{!!$blog->extra_js!!}
@endif
@endsection