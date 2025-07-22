@extends('client.base')

@section('title',Key::get('company-meta-title'))
@section('description',Key::get('company-meta-description'))
@section('keywords',Key::get('company-meta-keywords'))


@section('head')
    <link rel="stylesheet" href="{{asset('assets/css/new.css')}}">
@endsection



@section('content')



    @include('client.include.header')

    <div id="carouselExampleCaptions" class="carousel slide keep-banner" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('assets/images/banner.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption  ">
                    <h5>Perfect Home Services</h5>
                    <p> Your one stop shop for all home services.  </p>
                    <form class="form-inline  ">
                        <input class="form-control  " type="search" placeholder="Search" aria-label="Search">
                        <button class="btn  " type="submit">BOOK</button>
                    </form>
                </div>
            </div>


        </div>

    </div>





    <section class="home-serv">
        <div class="container">


            <div class="row"  data-slideinbottom>
                <div class="col-md-12">
                    <h3>Cleaning Service</h3>

                </div>
            </div>


            <div class="row"  data-slideinbottom>
                <div class="col-md-3">
                    <div class="home-serv-item">
                        <img src="{{asset('assets/images/home-ser-ite-1.jpg')}}" class="img-fluid" />
                        <div class="home-serv-btn-cntr">
                            <a class="btn btn-sec">BOOK</a>
                            <a class="btn btn-sec">VIEW</a>
                        </div>
                        <p>Window cleaning</p>
                    </div>

                </div>

                <div class="col-md-3">
                    <div class="home-serv-item">
                        <img src="{{asset('assets/images/home-ser-ite-1.jpg')}}" class="img-fluid" />
                        <div class="home-serv-btn-cntr">
                            <a class="btn btn-sec">BOOK</a>
                            <a class="btn btn-sec">VIEW</a>
                        </div>
                        <p>Window cleaning</p>
                    </div>

                </div>

                <div class="col-md-3">
                    <div class="home-serv-item">
                        <img src="{{asset('assets/images/home-ser-ite-1.jpg')}}" class="img-fluid" />
                        <div class="home-serv-btn-cntr">
                            <a class="btn btn-sec">BOOK</a>
                            <a class="btn btn-sec">VIEW</a>
                        </div>
                        <p>Window cleaning</p>
                    </div>

                </div>

                <div class="col-md-3">
                    <div class="home-serv-item">
                        <img src="{{asset('assets/images/home-ser-ite-1.jpg')}}" class="img-fluid" />
                        <div class="home-serv-btn-cntr">
                            <a class="btn btn-sec">BOOK</a>
                            <a class="btn btn-sec">VIEW</a>
                        </div>
                        <p>Window cleaning</p>
                    </div>

                </div>


                <div class="col-md-3">
                    <div class="home-serv-item">
                        <img src="{{asset('assets/images/home-ser-ite-1.jpg')}}" class="img-fluid" />
                        <div class="home-serv-btn-cntr">
                            <a class="btn btn-sec">BOOK</a>
                            <a class="btn btn-sec">VIEW</a>
                        </div>
                        <p>Window cleaning</p>
                    </div>

                </div>



            </div>








        </div>
    </section>



    <section class="home-about serv-bg">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-6 text-center" data-slideinleft>
                    <!-- <span  class="web-dis-none mob-dis-unset abt-hd">ABOUT US</span> --->
                    <img src="{{asset('assets/images/serv-1.jpg')}}" class="img-fluid" />
                </div>
                <div class="col-md-6">
                    <!-- <span class="mob-dis-none" data-slideInLeft>ABOUT US</span>  -->
                    <h3 class="mt-5 mb-3" data-slideInRght>Carpet Cleaning</h3>
                    <p data-slideInLeft>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>


                    <p data-slideInLeft>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>



                </div>
            </div>


            <div class="row">

                <div class="col-md-6">
                    <!-- <span class="mob-dis-none" data-slideInLeft>ABOUT US</span>  -->
                    <h3 class="mt-5 mb-3" data-slideInRght>Service Overview</h3>
                    <p data-slideInLeft>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>


                    <p data-slideInLeft>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>



                </div>

                <div class="col-md-6 text-center" data-slideinleft>
                    <!-- <span  class="web-dis-none mob-dis-unset abt-hd">ABOUT US</span> --->
                    <img src="{{asset('assets/images/serv-2.jpg')}}" class="img-fluid" />
                </div>

            </div>


        </div>
    </section>




    <section class="home-offer" data-slideinbottom>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul id="lightSlider5">
                        <li >
                            <div class="home-offer-list">
                                <a class="btn btn-sec home-offer-btn ">Know More</a>
                                <img src="{{asset('assets/images/offer.png')}}" class="img-fluid" />
                            </div>
                        </li>
                        <li >
                            <div class="home-offer-list">
                                <a class="btn btn-sec home-offer-btn ">Know More</a>
                                <img src="{{asset('assets/images/offer.png')}}" class="img-fluid" />
                            </div>
                        </li>
                        <li >
                            <div class="home-offer-list">
                                <a class="btn btn-sec home-offer-btn ">Know More</a>
                                <img src="{{asset('assets/images/offer.png')}}" class="img-fluid" />
                            </div>
                        </li>
                        <li >
                            <div class="home-offer-list">
                                <a class="btn btn-sec home-offer-btn ">Know More</a>
                                <img src="{{asset('assets/images/offer.png')}}" class="img-fluid" />
                            </div>
                        </li>
                    </ul>
                </div>
            </div>


        </div>
    </section>




    <section class="home-mobile-app">
        <div class="container">
            <div class="row">
                <div class="col-md-5 text-center">
                    <img src="{{asset('assets/images/mobile.png')}}" class="img-fluid" />
                </div>
                <div class="col-md-7">
                    <h3 data-slideinbottom>NOW <span>WE ARE IN</span></h3>
                    <a href="#" data-slideinbottom><img src="{{asset('assets/images/mobile-btn-1.png')}}" class="img-fluid" />  </a>
                    <a href="#" data-slideinbottom><img src="{{asset('assets/images/mobile-btn-2.png')}}" class="img-fluid" />  </a>

                </div>
            </div>


        </div>
    </section>









    <section class="home-work">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>How does it work?</h3>
                </div>
            </div>



            <div class="row">

                <div class="col-md-4 text-center" data-slideinleft>
                    <div class="home-work-list count-1">
                        <img src="{{asset('assets/images/work-1.png')}}" class="img-fluid" />
                        <h4>Find service required </h4>
                        <p>Enter your postcode to check availability </p>
                    </div>
                </div>

                <div class="col-md-4 text-center " data-slideinRight>
                    <div class="home-work-list count-2">
                        <img src="{{asset('assets/images/work-2.png')}}" class="img-fluid" />
                        <h4>Customise your service </h4>
                        <p>Get an estimated price by filling a few questions and selecting your desired slot.</p>
                    </div>
                </div>


                <div class="col-md-4 text-center " data-slideinleft>
                    <div class="home-work-list count-3">
                        <img src="{{asset('assets/images/work-3.png')}}" class="img-fluid" />
                        <h4>Booking Deposit</h4>
                        <p>Confirm your booking by covering the deposit which will be deducted from your final set price. </p>
                    </div>
                </div>





            </div>



            <div class="row">

                <div class="col-md-6 text-center " data-slideinleft>
                    <div class="home-work-list count-4">
                        <img src="{{asset('assets/images/work-1.png')}}" class="img-fluid" />
                        <h4>Expert attends your property</h4>
                        <p> The expert upon arrival access the job and will set the fixed rate. Any adjustments will be discussed with you before setting the fixed rate.</p>
                    </div>
                </div>

                <div class="col-md-6 text-center" data-slideinRight>
                    <div class="home-work-list count-5">
                        <img src="{{asset('assets/images/work-2.png')}}" class="img-fluid" />
                        <h4>Pay the fixed rate</h4>
                        <p>Pay the fixed price so that the expert can
                            start working while you sit back and relax.
                        </p>
                    </div>
                </div>








            </div>


        </div>
    </section>





    <section class="home-testimonial">
        <div class="container">

            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>happy customer</h3>


                </div>
            </div>

        </div>




        <div class="row m-0">
            <div class="col-md-8">
                <ul id="lightSlider6" data-slideinleft>
                    <li >
                        <div class="test-list-cntr">
                            <img src="{{asset('assets/images/test.jpg')}}" class="img-fluid"/>
                            <h4>JOHNS</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                            <div class="clearfix"></div>


                        </div>

                    </li>

                    <li >
                        <div class="test-list-cntr">
                            <img src="{{asset('assets/images/test.jpg')}}" class="img-fluid"/>
                            <h4>JOHNS</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                            <div class="clearfix"></div>


                        </div>

                    </li>



                    <li >
                        <div class="test-list-cntr">
                            <img src="{{asset('assets/images/test.jpg')}}" class="img-fluid"/>
                            <h4>JOHNS</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                            <div class="clearfix"></div>


                        </div>

                    </li>



                </ul>
                <img src="{{asset('assets/images/test-icon.png')}}" class="test-icon" />
            </div>

        </div>




    </section>




    <section class="faq">
        <div class="container">
            <div class="row  ">
                <div class="col-xl-12 text-center">

                    <h3>FAQ's</h3>


                </div>
            </div>

            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="accordion" id="accordionExample">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">






                                <div class="card" data-slideinbottom>
                                    <div class="card-header">
                                        <div itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                                            <h2 class="mb-0" itemprop="name">
                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do

                                                </button>
                                            </h2>


                                            <div id="collapseOne" class="collapse" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <div itemprop="text">  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>







                                <div class="card" data-slideinbottom>
                                    <div class="card-header">
                                        <div itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                                            <h2 class="mb-0" itemprop="name">
                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</button>
                                            </h2>


                                            <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <div itemprop="text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>






                                <div class="card" data-slideinbottom>
                                    <div class="card-header">
                                        <div itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                                            <h2 class="mb-0" itemprop="name">
                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do

                                                </button>
                                            </h2>


                                            <div id="collapseThree" class="collapse" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <div itemprop="text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>






                                <div class="card" data-slideinbottom>
                                    <div class="card-header">
                                        <div itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                                            <h2 class="mb-0" itemprop="name">
                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapseThree">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do

                                                </button>
                                            </h2>


                                            <div id="collapse4" class="collapse" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <div itemprop="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>




                            </div>

                            <div class="col-xl-6 col-lg-6">





                                <div class="card" data-slideinbottom>
                                    <div class="card-header">
                                        <div itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                                            <h2 class="mb-0" itemprop="name">
                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do

                                                </button>
                                            </h2>


                                            <div id="collapseFive" class="collapse" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <div itemprop="text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do


                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>






                                <div class="card" data-slideinbottom>
                                    <div class="card-header">
                                        <div itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                                            <h2 class="mb-0" itemprop="name">
                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do

                                                </button>
                                            </h2>


                                            <div id="collapseSix" class="collapse" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <div itemprop="text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>





                                <div class="card" data-slideinbottom>
                                    <div class="card-header">
                                        <div itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                                            <h2 class="mb-0" itemprop="name">
                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do

                                                </button>
                                            </h2>


                                            <div id="collapseSeven" class="collapse" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <div itemprop="text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>













                            </div>

                        </div>

                    </div>

                </div>
            </div>

        </div>
    </section>




    <footer>

        <div class="container" style="max-width: 1000px !important;">




            <div class="row   link-sec mob-dis-none">

                <div class="col-md-3    foot-links ">
                    <p> <b>USEFUL LINKS</b></p>
                    <p>  <a>Logo Design</a> </p>
                    <p>  <a>Motion Design</a> </p>
                    <p>  <a>Branding Collaterals</a> </p>
                    <p>  <a>Web Development</a> </p>
                    <p>  <a>links here</a> </p>
                </div>

                <div class="col-md-3     foot-links">
                    <p> <b> NAVIGATION</b></p>
                    <p>  <a>Home</a> </p>
                    <p>  <a>About Us</a> </p>
                    <p>  <a>Our Blog</a> </p>
                    <p>  <a>Portfolio</a> </p>
                    <p>  <a>Contact Us</a> </p>

                </div>


                <div class="col-md-3    foot-links">
                    <p> <b> NAVIGATION</b></p>
                    <p>  <a>Home</a> </p>
                    <p>  <a>About Us</a> </p>
                    <p>  <a>Our Blog</a> </p>
                    <p>  <a>Portfolio</a> </p>
                    <p>  <a>Contact Us</a> </p>
                </div>


                <div class="col-md-3    foot-links">
                    <p> <b> NAVIGATION</b></p>
                    <p>  <a>Home</a> </p>
                    <p>  <a>About Us</a> </p>
                    <p>  <a>Our Blog</a> </p>
                    <p>  <a>Portfolio</a> </p>
                    <p>  <a>Contact Us</a> </p>
                </div>


            </div>




            <div class="row link-sec web-dis-none mob-dis-unset">
                <div class="col-md-12">


                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <a class="btn btn-link btn-block p-0 collapsed"   data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        <p> <b class="m-0">Discover <i class="fas fa-chevron-right"></i></b></p>
                                    </a>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse  " aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">

                                    <p>  <a>Logo Design</a> </p>
                                    <p>  <a>Motion Design</a> </p>
                                    <p>  <a>Branding Collaterals</a> </p>
                                    <p>  <a>Web Development</a> </p>
                                    <p>  <a>links here</a> </p>
                                    <p>  <a>Logo Design</a> </p>
                                    <p>  <a>Motion Design</a> </p>
                                    <p>  <a>Branding Collaterals</a> </p>
                                    <p>  <a>Web Development</a> </p>
                                    <p>  <a>links here</a> </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <a class="btn btn-link btn-block p-0 collapsed"   data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <p> <b class="m-0"> Company <i class="fas fa-chevron-right"></i></b></p>
                                    </a>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">

                                    <p>  <a>Home</a> </p>
                                    <p>  <a>About Us</a> </p>
                                    <p>  <a>Our Blog</a> </p>
                                    <p>  <a>Portfolio</a> </p>
                                    <p>  <a>Contact Us</a> </p>

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <a class="btn btn-link btn-block p-0 collapsed"  data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <p> <b class="m-0"> Terms adn Policy <i class="fas fa-chevron-right"></i></b></p>
                                    </a>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">


                                    <p>  <a>Home</a> </p>
                                    <p>  <a>About Us</a> </p>
                                    <p>  <a>Our Blog</a> </p>
                                    <p>  <a>Portfolio</a> </p>
                                    <p>  <a>Contact Us</a> </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingfour">
                                <h2 class="mb-0">
                                    <a class="btn btn-link btn-block p-0 collapsed"   data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                        <p> <b class="m-0"> Ourservice <i class="fas fa-chevron-right"></i></b></p>
                                    </a>
                                </h2>
                            </div>
                            <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionExample">
                                <div class="card-body">


                                    <p>  <a>Home</a> </p>
                                    <p>  <a>About Us</a> </p>
                                    <p>  <a>Our Blog</a> </p>
                                    <p>  <a>Portfolio</a> </p>
                                    <p>  <a>Contact Us</a> </p>
                                    <p>  <a>Logo Design</a> </p>
                                    <p>  <a>Motion Design</a> </p>
                                    <p>  <a>Branding Collaterals</a> </p>
                                    <p>  <a>Web Development</a> </p>
                                    <p>  <a>links here</a> </p>
                                </div>
                            </div>
                        </div>

                    </div>



                </div>
            </div>










        </div>


        <hr/>

        <div class="container foot-2">




            <div class="row   link-sec">


                <div class="col-md-12  foot-links text-center">

                    <p class="m-0">  <a>Privacy Policy</a> | <a>Terms and Conditions</a> | <a>Cookies</a>  </p>
                </div>


            </div>








        </div>


        <hr/>

        <div class="container foot-2">




            <div class="row   link-sec">
                <div class="col-md-3   ">
                    <img src="{{asset('assets/images/logo.png')}}"/ >
                </div>


                <div class="col-md-6  foot-links text-center">
                    <br/>
                    <p>  Copyright © 2020 <a>spiderworks</a> technologies  </p>
                </div>
                <div class="col-md-3 foot-links text-right">

                    <div class="socio-align">

                        <a><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                        <a><i class="fab fa-twitter" aria-hidden="true"></i></a>
                        <a class="no-margin"><i class="fab fa-youtube" aria-hidden="true"></i></a>
                    </div>

                </div>

            </div>








        </div>

    </footer>


    <a class="float-btn">Enquiry Now</a>

    <a href="#" class="scroll-top  "><i class="fas fa-long-arrow-alt-up"></i></a>

@endsection


@section('bottom')

@endsection