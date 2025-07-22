@if(count($testimonals) > 0)
<section class="home-testimonial">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h3>{{Key::get('testimonial-title')}}</h3>
            </div>
        </div>
    </div>


    <div class="row m-0">
        <div class="col-md-8">
            <ul id="lightSlider6" data-slideinleft>

                @foreach($testimonals as $obj)
                <li>
                    <div class="test-list-cntr">
                        @if(!empty($obj->file_path))
                        <img src="{{asset($obj->file_path)}}" class="img-fluid"/>
                        @endif
                        <h4>{{$obj->name}}</h4>
                        <p>{{$obj->description}}</p>
                        <div style="clear:both;"></div>
                    </div>
                </li>
                @endforeach


            </ul>
            <img src="{{asset('assets/images/test-icon.png')}}" class="test-icon" />
        </div>

    </div>


</section>
@endif