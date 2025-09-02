@extends('spiderworks.miniweb.fileupload')

@section('head')
@endsection

@section('content')
    <form method="post" enctype="multipart/form-data" action="{{url('admin/keys/save')}}">@csrf
        <div class="row">


            <div class="col-md-2">
                <div class="row">
                    <p class="col-md-12">Step 1 image [165*165]</p>
                    <div class="default-image-holder padding-5">

                        <a href="{{route('spiderworks.miniweb.media.popup', ['popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'1'])}}" class="miniweb-open-ajax-popup" title="Media Images" data-popup-size="large" id="image-holder-1">

                            @if(Key::get('hdiw-step-1-image-id')!= 'NA')
                                <img class="card-img-top padding-20" src="{{Key::get('hdiw-step-1-image-id')}}" alt="Klean Keepers image {{ rand(100000, 99999999) }}" >
                            @else
                                <img class="card-img-top padding-20" src="{{asset('add-image.png')}}" >
                            @endif

                        </a>
                        <input type="hidden" name="hdiw_step_1_image_id" id="mediaId1" value="">
                    </div>
                    @if(Key::get('hdiw-step-1-image-id') != 'NA')
                        <span class="remove-key" data-key="hdiw-step-1-image-id" style="cursor: pointer;color: red" >remove</span>
                    @endif
                </div>
            </div>

            <div class="col-md-10">
                <label for="">Step 1 Description</label>
                <hr>
                TITLE
                <input type="text" class="form-control" name="hdiw_step_1_title" value="{{Key::get('hdiw-step-1-title')}}"> <br>
                DESCRIPTION
                <textarea class="form-control" name="hdiw_step_1_description">{{Key::get('hdiw-step-1-description')}}</textarea>
            </div>

            <div class="col-md-12" align="right">
                <hr>
            </div>

            <div class="col-md-2">
                <div class="row">
                    <p class="col-md-12">Step 2 image [165*165]</p>
                    <div class="default-image-holder padding-5">

                        <a href="{{route('spiderworks.miniweb.media.popup', ['popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'2'])}}" class="miniweb-open-ajax-popup" title="Media Images" data-popup-size="large" id="image-holder-2">

                            @if(Key::get('hdiw-step-2-image-id')!= 'NA')
                                <img class="card-img-top padding-20" src="{{Key::get('hdiw-step-2-image-id')}}" alt="Klean Keepers image {{ rand(100000, 99999999) }}" >
                            @else
                                <img class="card-img-top padding-20" src="{{asset('add-image.png')}}" >
                            @endif

                        </a>
                        <input type="hidden" name="hdiw_step_2_image_id" id="mediaId2" value="">
                    </div>
                    @if(Key::get('hdiw-step-2-image-id') != 'NA')
                        <span class="remove-key" data-key="hdiw-step-2-image-id" style="cursor: pointer;color: red" >remove</span>
                    @endif
                </div>
            </div>

            <div class="col-md-10">
                <label for="">Step 2 Description</label>
                <hr>
                TITLE
                <input type="text" class="form-control" name="hdiw_step_2_title" value="{{Key::get('hdiw-step-2-title')}}"> <br>
                DESCRIPTION
                <textarea class="form-control" name="hdiw_step_2_description">{{Key::get('hdiw-step-2-description')}}</textarea>
            </div>


            <div class="col-md-12" align="right">
                <hr>
            </div>

            <div class="col-md-2">
                <div class="row">
                    <p class="col-md-12">Step 3 image [165*165]</p>
                    <div class="default-image-holder padding-5">

                        <a href="{{route('spiderworks.miniweb.media.popup', ['popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'3'])}}" class="miniweb-open-ajax-popup" title="Media Images" data-popup-size="large" id="image-holder-3">

                            @if(Key::get('hdiw-step-3-image-id')!= 'NA')
                                <img class="card-img-top padding-20" src="{{Key::get('hdiw-step-3-image-id')}}" alt="Klean Keepers image {{ rand(100000, 99999999) }}" >
                            @else
                                <img class="card-img-top padding-20" src="{{asset('add-image.png')}}" >
                            @endif

                        </a>
                        <input type="hidden" name="hdiw_step_3_image_id" id="mediaId3" value="">
                    </div>
                    @if(Key::get('hdiw-step-3-image-id') != 'NA')
                        <span class="remove-key" data-key="hdiw-step-3-image-id" style="cursor: pointer;color: red" >remove</span>
                    @endif
                </div>
            </div>

            <div class="col-md-10">
                <label for="">Step 3 Description</label>
                <hr>
                TITLE
                <input type="text" class="form-control" name="hdiw_step_3_title" value="{{Key::get('hdiw-step-3-title')}}"> <br>
                DESCRIPTION
                <textarea class="form-control" name="hdiw_step_3_description">{{Key::get('hdiw-step-3-description')}}</textarea>
            </div>


            <div class="col-md-12" align="right">
                <hr>
            </div>

            <div class="col-md-2">
                <div class="row">
                    <p class="col-md-12">Step 4 image [165*165]</p>
                    <div class="default-image-holder padding-5">

                        <a href="{{route('spiderworks.miniweb.media.popup', ['popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'4'])}}" class="miniweb-open-ajax-popup" title="Media Images" data-popup-size="large" id="image-holder-4">

                            @if(Key::get('hdiw-step-4-image-id')!= 'NA')
                                <img class="card-img-top padding-20" src="{{Key::get('hdiw-step-4-image-id')}}" alt="Klean Keepers image {{ rand(100000, 99999999) }}" >
                            @else
                                <img class="card-img-top padding-20" src="{{asset('add-image.png')}}" >
                            @endif

                        </a>
                        <input type="hidden" name="hdiw_step_4_image_id" id="mediaId4" value="">
                    </div>
                    @if(Key::get('hdiw-step-4-image-id') != 'NA')
                        <span class="remove-key" data-key="hdiw-step-4-image-id" style="cursor: pointer;color: red" >remove</span>
                    @endif
                </div>
            </div>

            <div class="col-md-10">
                <label for="">Step 4 Description</label>
                <hr>
                TITLE
                <input type="text" class="form-control" name="hdiw_step_4_title" value="{{Key::get('hdiw-step-4-title')}}"> <br>
                DESCRIPTION
                <textarea class="form-control" name="hdiw_step_4_description">{{Key::get('hdiw-step-4-description')}}</textarea>
            </div>


            <div class="col-md-12" align="right">
                <hr>
            </div>

            <div class="col-md-2">
                <div class="row">
                    <p class="col-md-12">Step 5 image [165*165]</p>
                    <div class="default-image-holder padding-5">

                        <a href="{{route('spiderworks.miniweb.media.popup', ['popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'5'])}}" class="miniweb-open-ajax-popup" title="Media Images" data-popup-size="large" id="image-holder-5">

                            @if(Key::get('hdiw-step-5-image-id')!= 'NA')
                                <img class="card-img-top padding-20" src="{{Key::get('hdiw-step-5-image-id')}}" alt="Klean Keepers image {{ rand(100000, 99999999) }}" >
                            @else
                                <img class="card-img-top padding-20" src="{{asset('add-image.png')}}" >
                            @endif

                        </a>
                        <input type="hidden" name="hdiw_step_5_image_id" id="mediaId5" value="">
                    </div>
                    @if(Key::get('hdiw-step-5-image-id') != 'NA')
                        <span class="remove-key" data-key="hdiw-step-5-image-id" style="cursor: pointer;color: red" >remove</span>
                    @endif
                </div>
            </div>

            <div class="col-md-10">
                <label for="">Step 5 Description</label>
                <hr>
                TITLE
                <input type="text" class="form-control" name="hdiw_step_5_title" value="{{Key::get('hdiw-step-5-title')}}"> <br>
                DESCRIPTION
                <textarea class="form-control" name="hdiw_step_5_description">{{Key::get('hdiw-step-5-description')}}</textarea>
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