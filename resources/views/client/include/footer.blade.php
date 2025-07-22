<footer>
                @widget('ExtraFooter', ['menu_position' => 'Extra-Footer'])

    <div class="container" style="max-width: 1000px !important;">




        <div class="row   link-sec mob-dis-none">

            <div class="col-md-3    foot-links ">
                @widget('Footer', ['menu_position' => 'Footer1'])
            </div>

            <div class="col-md-3     foot-links">
                @widget('Footer', ['menu_position' => 'Footer2'])

            </div>


            <div class="col-md-3    foot-links">
                @widget('Footer', ['menu_position' => 'Footer3'])
            </div>


            <div class="col-md-3    foot-links">
                @widget('Footer', ['menu_position' => 'Footer4'])
            </div>


        </div>




        <div class="row link-sec web-dis-none mob-dis-unset">
            <div class="col-md-12">


                <div class="accordion" id="accordionExample">
                    @widget('FooterMobile', ['menu_position' => 'Footer1'])
                    @widget('FooterMobile', ['menu_position' => 'Footer2'])
                    @widget('FooterMobile', ['menu_position' => 'Footer3'])
                    @widget('FooterMobile', ['menu_position' => 'Footer4'])
                    </div>

                </div>



            </div>
        </div>










    </div>

    <hr/>

    <div class="container foot-2">




        <div class="row   link-sec">


            <div class="col-md-12  foot-links text-center">

                <p class="m-0">
                    @widget('BottomMenu', ['menu_position' => 'Bottom'])
                </p>
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
                <p style="color: #606060;font-size: 12px">Site Designed & Developed by <a href="https://www.spiderworks.in/" style="color: #676767" target="_blank">SpiderWorks</a> All Rights Reserved | Copyright Klean Keepers {{date('Y')}} </p>
            </div>
            <div class="col-md-3 foot-links text-right">

                <div class="socio-align">

                   @if(Key::get('facebook-url') != "facebook-url") <a href="{{Key::get('facebook-url')}}" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a> @endif
                   @if(Key::get('twitter-url') != "twitter-url") <a href="{{Key::get('twitter-url')}}"  target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i></a> @endif
                   @if(Key::get('youtube-url') != "youtube-url") <a href="{{Key::get('youtube-url')}}"  target="_blank"><i class="fab fa-youtube" aria-hidden="true"></i></a> @endif
                   @if(Key::get('linkedIn-url') != "linkedIn-url") <a href="{{Key::get('linkedIn-url')}}"  target="_blank"><i class="fab fa-linkedin" aria-hidden="true"></i></a> @endif
                   @if(Key::get('instagram-url') != "instagram-url") <a href="{{Key::get('instagram-url')}}"  target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></a> @endif

                </div>

            </div>

        </div>








    </div>

</footer>