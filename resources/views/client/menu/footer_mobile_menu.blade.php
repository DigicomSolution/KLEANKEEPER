<div class="card">
    @php $id = rand(1111,2222) @endphp
    
    <div class="card-header" id="heading{{$id}}">
        <h2 class="mb-0">
            <a class="btn btn-link btn-block p-0 collapsed" data-toggle="collapse" data-target="#collapse{{$id}}" aria-expanded="false" aria-controls="collapse{{$id}}">
                <p> <b class="m-0">{{$title}} <i class="fas fa-chevron-right" aria-hidden="true"></i></b></p>
            </a>
        </h2>
    </div>

    <div id="collapse{{$id}}" class="collapse  " aria-labelledby="heading{{$id}}" data-parent="#accordionExample">
        <div class="card-body">


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

        </div>
    </div>
</div>



