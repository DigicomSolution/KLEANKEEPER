<!DOCTYPE html>



<html>

<head>

	  <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>@yield('title','Klean keepers | Makes it easy for you to order all kinds of home services')</title>


    <meta property="og:type" content="business.customer/">
    <meta property="og:title" content="@yield('og_title','Klean Keepers: Home Services Company London')">
    <meta property="og:description" content="@yield('og_description','Klean Keepers is one of the leading home service companies in London, providing commercial and domestic services for homes, offices, leisure centres, 
    community centres and more. Contact now for home services in London.')">
    <meta property="og:site_name" content="Klean Keepers">
    <meta property="og:image" content="{{Key::get('site-logo-image-id')}}">
    <link rel="canonical" href="{{url()->current()}}" />

    <meta name="keywords" content="@yield('keywords','Klean keepers,home services')"/>

    <meta name="description" content="@yield('description','')"/>

    <meta name="copyright"content="@yield('copyright','Klean keepers '.date('Y'))">

    <meta name="language" content="EN">

    <meta name="robots" content="index,follow" />
    <meta name="google-site-verification" content="ap0g8o3GeFQCKP5HjxWjt9EXZNbbTQ0KGORxhj6K_xw" />



    <style type="text/css">
        .modal-contet-extra{
            border-radius: 0px !important;
            box-shadow: none;
            border: none !important;
            padding: 20px;
    border-radius: 15px !important;
        }

        .modal-contet-extra .modal-footer button{
            background:  #0093de;
            border-color:  #0093de;
        }

        .modal-contet-extra .modal-footer img{
            position: absolute;
            left: 15px;
            height: 25px;
        }
        
        .custom-width{
                width: 320px !important;
        }
        
           .mobile-service-book{
    text-align: center;
        }

        .app-cntr  {
      position: fixed;
    width: 100%;
    padding:10px 0px;
    bottom: 0;
    left: 0;
    right: 0;
    z-index: 101;
    -webkit-transition: all .4s ease-in-out;
    -ms-transition: all .4s ease-in-out;
    transition: all .4s ease-in-out;
 -webkit-transform: translateY(155%);
    transform: translateY(155%);
 box-shadow: 5px 10px #888888;
 background: #0093de;
 display: none !important;
}
.app-cntr.sticky {
    -webkit-transform: translateY(0);
    transform: translateY(0);
}
.app-cntr p{
  margin: 0;
  color: #fff;
}
.app-url{
  float: right;
}

.app-cntr i {
  color: #fff;
  font-size: 28px;
  margin: 0 8px;
}
.app-cntr button {
  background-color: unset;
  border: 0px;
  box-shadow: unset;
  float: right;
}


.app-cntr button i {
  color: #fff;
  font-size: 20px; 
  margin: 0;
}



 @media (max-width:992px){

.app-cntr  { 
 display: block   !important;
}

#FxpfYK1-1620714721903{
  bottom: 50px !important;
}


.klean iframe{
  display: none !important;
}

  }
        
   


@media only screen and (max-width: 600px) {
  .modal-mobile{
                margin: 0 !important;
    bottom: 0;
    position: absolute !important;

        }
        
        .custom-width{
                width: 100% !important;
        }
        
        .mobile-service-book{
                margin-top: 10px;
    text-align: center;
    margin-left: 33%;
        }
        
}
        
/* GDPR Cookie dialog */

.gdprcookie {
    position: fixed;
    color: white;
    font-size: .8em;
    line-height: 1.5em;
    right: 1.5rem;
    bottom: 1.5rem;
    max-width: 25em;
    padding: 1rem;
    background: black;
}
.gdprcookie h1,
.gdprcookie h2 {
    font-size: 1.2em;
    margin-bottom: .5rem;
}
.gdprcookie h2 {
    font-size: 1.2em;
}
.gdprcookie a {
    color: inherit;
}


/* GDPR Cookie buttons */

.gdprcookie-buttons {
    text-align: center;
}
.gdprcookie-buttons button {
    color: white;
    font-family: inherit;
    font-size: 1em;
    padding: .4rem;
    border: solid .05rem currentColor;
    border-radius: .15rem;
    margin: 0 .5rem;
    background: none;
    cursor: pointer;
}
.gdprcookie-buttons button:disabled {
    color: rgba(255,255,255,.5);
}


/* GDPR Cookie types */

.gdprcookie-types ul {
    overflow: hidden;
    padding: 0;
    margin: 0 0 1rem;
}
.gdprcookie-types li {
    display: block;
    list-style: none;
    float: left;
    width: 50%;
    padding: 0;
    margin: 0;
}
.gdprcookie-types input[type=checkbox] {
    margin-right: .25rem;
}
           
    </style>





	@include('client.include.style')



	@section('head')

@show


    @if(Key::get('tracking-in-head') != 'tracking-in-head')

        {!! Key::get('tracking-in-head') !!}

    @endif

</head>

<body class="klean">




@include('client.include.header')



@section('content')

@show









@include('client.include.footer')



<a class="float-btn open-the-modal" href="javascript:void(0)" data-url="{{url('contact-modal')}}">Enquire Now</a>

<a href="#" class="scroll-top  "><i class="fas fa-long-arrow-alt-up"></i></a>



@include('client.include.script')



@section('bottom')





@show

    @if(Key::get('tracking-in-bottom') != 'tracking-in-bottom')

        {!! Key::get('tracking-in-bottom') !!}

    @endif



    <div class="modal fade" id="messageBoard" role="dialog">

        <div class="modal-dialog modal-dialog-centered">

            <div class="modal-content message-modal">

            </div>

        </div>

    </div>



<!-- Modal -->
<div class="modal fade" id="book-service" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-mobile modal-dialog-centered" role="document">
    <div class="modal-content modal-contet-extra">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Enter postcode to check the service</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="get" action="https://book.kleankeepers.co.uk/categories">
          <div class="modal-body">
            <input type="text" name="post_code" class="form-control" placeholder="eg. AA1 1 AA" required="">
            <input type="hidden" name="id" class="form-control app-service-id" value="">
            <input type="hidden" name="service_id" class="form-control app-parent-service-id" value="">
          </div>
          <div class="modal-footer">
            <img src="{{Key::get('site-logo-image-id')}}">
            <button type="submit" class="btn btn-primary">Continue booking</button>
          </div>
      </form>
    </div>
  </div>
</div>



<div class="app-cntr" style="display: none;">
  <div class="row m-0 d-flex align-items-center">
    <div class="col-3  ">
      <img src="{{Key::get('site-logo-image-id')}}">
    </div>
    <div class="col-8 p-0">
      <div class="app-url">
        <a href="https://apps.apple.com/gb/app/klean-keepers/id1509700722"><i class="fab fa-apple"></i></a>
        <a  href="https://play.google.com/store/apps/details?id=com.kleankeepers.app&amp;hl=en_IN&amp;gl=US"><i class="fab fa-google-play"></i></a>
      </div>
      <p>Get 10% off using App</p>
       <p><b>GET APP</b></p>
    </div>
    <div class="col-1 pl-0"><button><i class="fas fa-times"></i></button></div>
  </div>
 

</div>

<script src="{{asset('gdpr-cookie.js')}}"></script>

<script type="text/javascript">
    $.gdprcookie.init();
</script>

   @if(Key::get('tracking-in-body') != 'tracking-in-body')

    <script>if ($.gdprcookie.preference("marketing")) { document.write(`

      {!! Key::get('tracking-in-body') !!}


`); }</script>

      
    @endif


<script src="https://www.google.com/recaptcha/api.js?render=6LeMRrsaAAAAAAZTMxi_DOfNc28VvKAxkvVgW0yD"></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">

	function changeChatPosition(){
		setTimeout(function(){
let dom = $('html').find('.zzz')
console.log('dom data 2',dom.html())
		},5000)

}


var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6086cc4762662a09efc23be0/1f478ruk2';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
changeChatPosition();

})();
</script>
<!--End of Tawk.to Script-->


    <script>

         $(document).on('click', '.book-service', function(e){

             $('#book-service').modal(true)

             $('.app-service-id').val($(this).data('service-id'));
             $('.app-parent-service-id').val($(this).data('parent-service-id'));


         });

        $(document).on('click', '.open-the-modal', function(e){

            e.preventDefault();

            $('#messageBoard').modal(true)

            var url = $(this).data('url');

            $('.message-modal').html('');

            $('#modal-loader').show();

            $.ajax({

                url: url,

                type: 'GET',

                dataType: 'html'

            })

                .done(function(data){

                    // console.log(data);



                    $('.message-modal').html('');

                    $('.message-modal').html(data); // load response

                    $('#modal-loader').hide();        // hide ajax loader

                    makePhone();

                })

                .fail(function(){

                    $('#dynamic-content').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');

                    $('#modal-loader').hide();

                });

        });

    </script>






<script>
$(document).ready(function(){


var div_top = $('.app-cntr').offset().top;

$(window).scroll(function() {
    var window_top = $(window).scrollTop() - 100;
    if (window_top > div_top) {
        if (!$('.app-cntr').is('.sticky')) {
            $('.app-cntr').addClass('sticky');
        }
    } else {
        $('.app-cntr').removeClass('sticky');
    }
});






  

    $("button").click(function(){
    $(".app-cntr").remove();
  });
  
});
</script>




<div class="zzz"></div>

</body>

</html>