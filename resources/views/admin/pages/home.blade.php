@extends('spiderworks.miniweb.fileupload')



@section('head')

@endsection



@section('content')

        <form method="post" enctype="multipart/form-data" action="{{url('admin/keys/save')}}">@csrf

        <div class="row">





            <div class="col-md-2">

                <div class="row">

                    <p class="col-md-12">Update site logo</p>

                    <div class="default-image-holder padding-5">



                        <a href="{{route('spiderworks.miniweb.media.popup', ['popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'1'])}}" class="miniweb-open-ajax-popup" title="Media Images" data-popup-size="large" id="image-holder-1">



                            @if(Key::get('site-logo-image-id')!= 'NA')

                                <img class="card-img-top padding-20" src="{{Key::get('site-logo-image-id')}}" alt="" >

                                @else

                                <img class="card-img-top padding-20" src="{{asset('add-image.png')}}" >

                            @endif



                        </a>

                        <input type="hidden" name="site_logo_image_id" id="mediaId1" value="">

                    </div>

                    @if(Key::get('site-logo-image-id') != 'NA')

                        <span class="remove-key" data-key="site-logo-image-id" style="cursor: pointer;color: red" >remove</span>

                    @endif

                </div>

            </div>



            <div class="col-md-10">

                <label for="">Testimonial title</label>

                <input type="text" placeholder="please paste the full url" name="testimonial_title" class="form-control" value="{{Key::get('testimonial-title')}}"><hr>

                 <label for="">Faq title</label>

                <input type="text" placeholder="please paste the full url" name="faq_title" class="form-control" value="{{Key::get('faq-title')}}"><hr>





                <label for="">Update Social media links</label>

                <hr>

                <label for="">Facebook</label>

                <input type="text" placeholder="please paste the full url" name="facebook_url" class="form-control" value="{{Key::get('facebook-url')}}">

                <hr>

                <label for="">Instagram</label>

                <input type="text" placeholder="please paste the full url" name="instagram_url" class="form-control" value="{{Key::get('instagram-url')}}">

                <hr>

                <label for="">Twitter</label>

                <input type="text" placeholder="please paste the full url" name="twitter_url" class="form-control" value="{{Key::get('twitter-url')}}">

                <hr>

                <label for="">LinkedIn</label>

                <input type="text" placeholder="please paste the full url" name="linkedin_url" class="form-control" value="{{Key::get('linkedin-url')}}">

            </div>





            <div class="col-md-6" >

                <h5>Update CTA Banner on home page</h5>

                <p class="col-md-12" >background image</p>

                <div class="default-image-holder padding-5" style="background: #e6f5fa">



                    <a href="{{route('spiderworks.miniweb.media.popup', ['popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'2'])}}" class="miniweb-open-ajax-popup" title="Media Images" data-popup-size="large" id="image-holder-2"  >



                        @if(Key::get('site-cta-bg-image-id')!= 'NA')

                            <img class="card-img-top padding-20" src="{{Key::get('site-cta-bg-image-id')}}" alt="" >

                        @else

                            <img class="card-img-top padding-20" src="{{asset('add-image.png')}}" >

                        @endif



                    </a>

                    <input type="hidden" name="site_cta_bg_image_id" id="mediaId2" value="">

                </div>

                <hr>

                @if(Key::get('site-cta-bg-image-id') != 'NA')

                    <span class="remove-key" data-key="site-cta-bg-image-id" style="cursor: pointer;color: red" >remove</span>

                @endif





                <label for="">CTA button 1 label</label>

                <input type="text" placeholder="please paste the full url" name="site_cta_btn_1_label" class="form-control" value="{{Key::get('site-cta-btn-1-label')}}"><hr>



                <label for="">CTA button 1 action</label>

                <input type="text" placeholder="please paste the full url" name="site_cta_btn_1_action" class="form-control" value="{{Key::get('site-cta-btn-1-action')}}"><hr>



                <label for="">CTA button 2 label</label>

                <input type="text" placeholder="please paste the full url" name="site_cta_btn_2_label" class="form-control" value="{{Key::get('site-cta-btn-2-label')}}"><hr>



                <label for="">CTA button 2 action</label>

                <input type="text" placeholder="please paste the full url" name="site_cta_btn_2_action" class="form-control" value="{{Key::get('site-cta-btn-2-action')}}"><hr>







            </div>





            <div class="col-md-6" >

                <h5>Update Service CTA Banner</h5>



                @include('admin._partials.input',['key' => "service-cta-title",'label' => "Service cta title"])<hr>



                @include('admin._partials.input',['key' => "service-cta-description",'label' => "Service cta description"])<hr>





                <label for="">CTA button 1 label</label>

                <input type="text" placeholder="please paste the full url" name="service_cta_btn_1_label" class="form-control" value="{{Key::get('service-cta-btn-1-label')}}"><hr>



                <label for="">CTA button 1 action</label>

                <input type="text" placeholder="please paste the full url" name="service_cta_btn_1_action" class="form-control" value="{{Key::get('service-cta-btn-1-action')}}"><hr>



                <label for="">CTA button 2 label</label>

                <input type="text" placeholder="please paste the full url" name="service_cta_btn_2_label" class="form-control" value="{{Key::get('service-cta-btn-2-label')}}"><hr>



                <label for="">CTA button 2 action</label>

                <input type="text" placeholder="please paste the full url" name="service_cta_btn_2_action" class="form-control" value="{{Key::get('service-cta-btn-2-action')}}"><hr>







            </div>





            </div>







            <div class="col-md-12" align="right">

                <hr>

                <button type="submit" class="btn btn-warning">Submit changes</button>

            </div>





        </div>

        </form>

@endsection

@section('bottom')

    <script>

        $('.remove-key').on('click', function () {

            var key = $(this).data('key');

            $.confirm({

                title: 'Confirm!',

                content: 'You are going to delete this image',

                buttons: {

                    confirm: function () {

                        $.post('{{route('remove.key')}}',{_token:'{{csrf_token()}}',key:key}).done(function (data) {

                            window.location.replace();

                        })

                    },

                    cancel: function () {



                    }

                }

            });



        })

    </script>

    @parent

@endsection