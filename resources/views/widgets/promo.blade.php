<section class="home-mobile-app" style="background-image: url({{Key::get('promo-bg-image-id')}});
        background-repeat: no-repeat;
        background-size: cover;
        padding-bottom: 10px;
        background-attachment: fixed;">
    <div class="container">
        <div class="row">
            <div class="col-md-5 text-center">
                <img src="{{Key::get('promo-image-image-id')}}" class="img-fluid" />
            </div>
            <div class="col-md-7">
                <h3 data-slideinbottom>{!! Key::get('promo-title') !!}</h3>
                <a href="{{Key::get('play-store-link')}}" target="_blank" data-slideinbottom><img src="{{Key::get('play-store-button-image-id')}}" class="img-fluid"  />  </a>
                <a href="{{Key::get('app-store-link')}}" target="_blank" data-slideinbottom><img src="{{Key::get('app-store-button-image-id')}}" class="img-fluid" />  </a>

            </div>
        </div>


    </div>
</section>
