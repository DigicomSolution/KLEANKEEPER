<div class="row">
    @php
        $name = str_replace('-','_',$key);
        $rand = rand(111111,999199).date('hisydm');

     if(empty($label)){
        $label = "Please upload the image";
    }
    @endphp
    <p class="col-md-12">{{$label}}</p>
    <div class="default-image-holder padding-5">

        <a href="{{route('spiderworks.miniweb.media.popup', ['popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>$rand])}}" class="miniweb-open-ajax-popup" title="Media Images" data-popup-size="large" id="image-holder-{{$rand}}">

            @if(Key::get($key)!= $key)
                <img class="card-img-top padding-20" src="{{Key::get($key)}}" alt="Klean Keepers image {{ rand(100000, 99999999) }}" >
            @else
                <img class="card-img-top padding-20" src="{{asset('add-image.png')}}" >
            @endif

        </a>
        <input type="hidden" name="{{$name}}" id="mediaId{{$rand}}" value="">
    </div>
    @if(Key::get($key) != $key)
        <span class="remove-key" data-key="{{$key}}" style="cursor: pointer;color: red" >remove</span>
    @endif
</div>