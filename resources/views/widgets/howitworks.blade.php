<section class="home-work">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h3>How does it work?</h3>
            </div>
        </div>



        <div class="row">

            @for($i=1;$i<6;$i++)
                <div class="col-12 col-md-6 @if($i<4) col-lg-4 @else col-lg-6 @endif text-center trans-stop" data-slideinleft>
                    <div class="home-work-list count-{{$i}}">
                        <img src="{{Key::get('hdiw-step-'.$i.'-image-id')}}" class="img-fluid" />
                        <h4>{{Key::get('hdiw-step-'.$i.'-title')}}</h4>
                        <p>{{Key::get('hdiw-step-'.$i.'-description')}}</p>
                    </div>
                </div>
            @endfor




        </div>


    </div>
</section>
