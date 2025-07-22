<p class="m-0">

        @foreach($items as $key=>$item)

            @if($depth == 0 && $item->title != null)

                <a style="color: #000" href="{{$item->slug}}" @if(URL::current() == $item->slug || URL::current().'/' == $item->slug)  @endif @if($item->target_blank ==1) target="_blank" @endif>
                    {{$item->title}}
                </a>

            @endif

        @endforeach
</p>