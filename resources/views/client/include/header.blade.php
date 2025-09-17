<nav class="navbar navbar-expand-lg  keep-menu" style="border-top: 0px;">
    <div class="container">

        <a aria-label="KleanKeepers Logo" class="navbar-brand" href="{{url('/')}}"><img src="{{Key::get('site-logo-image-id')}}" alt="KleanKeepers logo" ></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="justify-content: center;}">
            <!-- <ul class="navbar-nav ml-auto"> -->
            <ul class="navbar-nav">

                <!-- @widget('Header', ['menu_position' => 'Header' , 'hide' => 'domestic']) -->
                <!-- @widget('Header', ['menu_position' => 'Header' ]) -->

                

                @if (Request::is('services/domestic-cleaning') || Request::is('services/furniture-assembly') || Request::is('services/tradesman-services') || Request::is('services/gardening')|| Request::is('services/removals')|| Request::is('services/cleaning-services')|| Request::is('services/waste-disposal')  )
                    @widget('Header', ['menu_position' => 'Header' ])
                @else
                    @widget('Header', ['menu_position' => 'NewHeader' ])
                @endif               

            </ul>
            <div class="  my-2 my-lg-0">                              
                <a class="btn btn-prm mb-3" href="{{url('services/domestic-cleaning')}}"  >DOMESTIC CLEANING SERVICES</a>  
                @if (!Request::is('/'))
                <a class="btn btn-sec mb-3 " href="https://book.kleankeepers.co.uk/"  >BOOK A SERVICE</a>             
                @endif
                <!-- <a class="btn btn-sec mb-3 " href="https://book.kleankeepers.co.uk/"  >BOOK A SERVICE</a>     -->
            </div>
        </div>
    </div>
</nav>