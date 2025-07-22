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

                            @if(Key::get('site-about-image-id')!= 'NA')
                                <img class="card-img-top padding-20" src="{{Key::get('site-about-image-id')}}" alt="" >
                            @else
                                <img class="card-img-top padding-20" src="{{asset('add-image.png')}}" >
                            @endif

                        </a>
                        <input type="hidden" name="site_about_image_id" id="mediaId1" value="">
                    </div>
                    @if(Key::get('site-about-image-id') != 'NA')
                        <span class="remove-key" data-key="site-about-image-id" style="cursor: pointer;color: red" >remove</span>
                    @endif
                </div>
            </div>

            <div class="col-md-10">
                <label for="">Update about us content</label>
                <hr>
                <textarea class="richtext" name="site_about_content">{{Key::get('site-about-content')}}</textarea>

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