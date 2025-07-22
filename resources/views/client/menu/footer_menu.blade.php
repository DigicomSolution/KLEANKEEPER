    <p class="lmb"><b>{{$title}}</b></p>

    @foreach($items as $key=>$item)
    
    @php

    if(strpos($item->slug,'http') !== false){

    }else{
        $item->slug = url($item->slug);
    }


    @endphp


        @if($depth == 0 && $item->title != null)
            <p>
                <a style="color: #666" href="{{$item->slug}}" @if(URL::current() == $item->slug || URL::current().'/' == $item->slug)  @endif @if($item->target_blank ==1) target="_blank" @endif>
                    {{$item->title}}
                </a>
            </p>
        @endif
    @endforeach

