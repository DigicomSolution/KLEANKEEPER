<nav class="navbar navbar-expand-lg  keep-menu">
    <div class="container">

        <a aria-label="KleenKeepers Logo" class="navbar-brand" href="{{url('/')}}"><img src="{{Key::get('site-logo-image-id')}}" alt="KleenKeepers logo"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                @widget('Header', ['menu_position' => 'Header'])

            </ul>
            <div class="  my-2 my-lg-0">
                <a class="btn btn-prm mb-3" href="{{url('services/commercial-cleaning')}}"  >BUSINESS ENQUIRY</a>
                <a class="btn btn-sec mb-3 " href="https://book.kleankeepers.co.uk/"  >BOOK A SERVICE</a>
            </div>
        </div>
    </div>
</nav>