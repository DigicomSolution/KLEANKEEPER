@foreach($items as $key=>$item)



    @php



    if(strpos($item->slug,'http') !== false){



    }else{

        $item->slug = url($item->slug);

    }





    @endphp



    <li @if($depth == 0) class="nav-item @if(isset($item->children))  dropdown show  @endif  @if(url()->full() == $item->slug) active @endif "  @else class="nav-item @if(isset($item->children)) dropdown-submenu @endif  @if(url()->full() == $item->slug) active @endif " @endif>





        @if($depth == 0)

            <a

               class="nav-link @if(isset($item->children)) dropdown-toggle @endif"

                    href="{{$item->slug}}" @if(isset($item->children)) data-toggle="dropdown" class="dropdown-toggle" @endif   @if($item->target_blank == 1) target="_blank" @endif>

                {{strtoupper($item->title)}}

            </a>

        @else

            <a class="dropdown-item  @if(isset($item->children)) dropdown-toggle @endif" href="{{$item->slug}}" @if(isset($item->children)) data-toggle="dropdown" class="dropdown-toggle" @endif  @if($item->target_blank == 1) target="_blank" @endif>

                {{$item->title}}

            </a>

        @endif





        @if(isset($item->children))



            <ul  class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">

                @include('client.menu.header', ['items'=>$item->children, 'depth'=>1+$depth, 'type'=>$type])

            </ul>





    @endif



    <li>

@endforeach

