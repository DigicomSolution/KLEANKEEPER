<section class="home-about">

    <div class="container">

        <div class="row m-0">

            <div class="col-md-6 text-center trans-stop" data-slideinleft>

                <span  class="web-dis-none mob-dis-unset abt-hd">ABOUT US</span>

                <img alt="featuerd image <?= uniqid()?>" src="{{Key::get('site-about-image-id')}}" class="img-fluid" />

            </div>

             <div class="col-md-6  "  >

            {!! Key::get('site-about-content') !!}

            

             </div>

        </div>





    </div>

</section>