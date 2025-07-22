@extends('spiderworks.miniweb.fileupload')

@section('head')
@endsection

@section('content')
    <form method="post" enctype="multipart/form-data" action="{{url('admin/keys/save')}}">@csrf
        <div class="row">


            <div class="col-md-2">
                <div class="row">
                    <p class="col-md-12">Update promo background [<b>1920 X 515</b>]</p>
                    <div class="default-image-holder padding-5">

                        <a href="{{route('spiderworks.miniweb.media.popup', ['popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'1'])}}" class="miniweb-open-ajax-popup" title="Media Images" data-popup-size="large" id="image-holder-1">

                            @if(Key::get('promo-bg-image-id')!= 'NA')
                                <img class="card-img-top padding-20" src="{{Key::get('promo-bg-image-id')}}" alt="" >
                            @else
                                <img class="card-img-top padding-20" src="{{asset('add-image.png')}}" >
                            @endif

                        </a>
                        <input type="hidden" name="promo_bg_image_id" id="mediaId1" >
                    </div>
                    @if(Key::get('promo-bg-image-id') != 'NA')
                        <span class="remove-key" data-key="promo-bg-image-id" style="cursor: pointer;color: red" >remove</span>
                    @endif
                </div>

                <hr>

                <div class="row">
                    <p class="col-md-12">Update promo image [<b>349 X 457</b>]</p>
                    <div class="default-image-holder padding-5">

                        <a href="{{route('spiderworks.miniweb.media.popup', ['popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'2'])}}" class="miniweb-open-ajax-popup" title="Media Images" data-popup-size="large" id="image-holder-2">

                            @if(Key::get('promo-image-image-id')!= 'NA')
                                <img class="card-img-top padding-20" src="{{Key::get('promo-image-image-id')}}" alt="" >
                            @else
                                <img class="card-img-top padding-20" src="{{asset('add-image.png')}}" >
                            @endif

                        </a>
                        <input type="hidden" name="promo_image_image_id" id="mediaId2" value="">
                    </div>
                    @if(Key::get('promo-image-image-id') != 'NA')
                        <span class="remove-key" data-key="promo-image-image-id" style="cursor: pointer;color: red" >remove</span>
                    @endif
                </div>
            </div>

            <div class="col-md-6">
                <label for="">DATA</label>
                <hr>
                <label for="">Title</label>
                <input type="text" placeholder="please paste the full url" name="promo_title" class="form-control" value="{{Key::get('promo-title')}}">
                <hr>
                <label for="">Play store link</label>
                <input type="text" placeholder="please paste the full url" name="play_store_link" class="form-control" value="{{Key::get('play-store-link')}}">
                <hr>
                <label for="">App store link</label>
                <input type="text" placeholder="please paste the full url" name="app_store_link" class="form-control" value="{{Key::get('app-store-link')}}">
            </div>

            <div class="col-md-2">
                <div class="row">
                    <p class="col-md-12">Play store button image [<b>213 X 69</b>]</p>
                    <div class="default-image-holder padding-5">

                        <a href="{{route('spiderworks.miniweb.media.popup', ['popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'3'])}}" class="miniweb-open-ajax-popup" title="Media Images" data-popup-size="large" id="image-holder-3">

                            @if(Key::get('play-store-button-image-id')!= 'NA')
                                <img class="card-img-top padding-20" src="{{Key::get('play-store-button-image-id')}}" alt="" style="background: grey">
                            @else
                                <img class="card-img-top padding-20" src="{{asset('add-image.png')}}" >
                            @endif

                        </a>
                        <input type="hidden" name="play_store_button_image-id" id="mediaId3" >
                    </div>
                    @if(Key::get('play-store-button-image-id') != 'NA')
                        <span class="remove-key" data-key="play-store-button-image-id" style="cursor: pointer;color: red" >remove</span>
                    @endif
                </div>

                <hr>

                <div class="row">
                    <p class="col-md-12">App store button image [<b>213 X 69</b>]</p>
                    <div class="default-image-holder padding-5">

                        <a href="{{route('spiderworks.miniweb.media.popup', ['popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'4'])}}" class="miniweb-open-ajax-popup" title="Media Images" data-popup-size="large" id="image-holder-4">

                            @if(Key::get('app-store-button-image-id')!= 'NA')
                                <img class="card-img-top padding-20" src="{{Key::get('app-store-button-image-id')}}" alt=""  style="background: grey">
                            @else
                                <img class="card-img-top padding-20" src="{{asset('add-image.png')}}" >
                            @endif

                        </a>
                        <input type="hidden" name="app_store_button_image_id" id="mediaId4" value="">
                    </div>
                    @if(Key::get('app-store-button-image-id') != 'NA')
                        <span class="remove-key" data-key="app-store-button-image-id" style="cursor: pointer;color: red" >remove</span>
                    @endif
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