<!-- Optional JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

<!-- Slick JS -->
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>

<!-- Magnific Popup CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/magnific-popup@1.1.0/dist/magnific-popup.css">

<!-- Magnific Popup JS -->
<script src="https://cdn.jsdelivr.net/npm/magnific-popup@1.1.0/dist/jquery.magnific-popup.min.js"></script>

<!-- jQuery Waypoints -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>

<!-- CounterUp -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
<!-- Nice Select CSS -->

<!-- Nice Select JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>


<script src="{{asset('assets/js/bootstrap.js')}}"></script>

<script src="{{asset('assets/js/lightslider.js')}} "></script>

<script type="text/javascript" src="{{asset('assets/js/ScrollTriggeraa4d.js')}}"></script>

<script type="text/javascript" src="{{asset('assets/js/main.js')}}"></script>


<script type="text/javascript" src="{{asset('assets/js/jquery.validate.min.js')}}"></script>

<script type="text/javascript">
  $(window).scroll(function() {
    var sticky = $('.keep-menu'),
      scroll = $(window).scrollTop();

    if (scroll >= 200) sticky.addClass('fixed');
    else sticky.removeClass('fixed');
  });






  $(document).ready(function() {





    $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
      if (!$(this).next().hasClass('show')) {
        $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
      }
      var $subMenu = $(this).next(".dropdown-menu");
      $subMenu.toggleClass('show');


      $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
        $('.dropdown-submenu .show').removeClass("show");
      });


      return false;
    });








    var btn = $('.scroll-top');

    $(window).scroll(function() {
      if ($(window).scrollTop() > 300) {
        btn.addClass('on');
      } else {
        btn.removeClass('on');
      }
    });

    btn.on('click', function(e) {
      e.preventDefault();
      $('html, body').animate({
        scrollTop: 0
      }, '300');
    });


    /** 
     $("li.start").next().css({"color": "red", "border": "2px solid red"});
    $("li.start").prev().css({"color": "red", "border": "2px solid red"});
     
      $("li").hover(function(){
        $(this).css("background-color", "yellow");
        $(this).next().css({"color": "red", "border": "2px solid red"});
        $(this).prev().css({"color": "red", "border": "2px solid red"});
        }, function(){
        $(this).css("background-color", "unset");
         $(this).next().css({"color": "unset", "border": "unset"});
         $(this).prev().css({"color": "unset", "border": "unset"});
      });
      **/




    $(".navbar-toggler").click(function() {
      $("body").toggleClass("over-hidden");

    });




    $(".keep-menu li").hover(function() {
      $(".keep-menu li.nav-item.active").removeClass("active").addClass("original");
      $(this).next().addClass("brd-rht-lft");
      $(this).prev().addClass("brd-lft-rht");
    }, function() {
      $(this).next().removeClass("brd-rht-lft");
      $(this).prev().removeClass("brd-lft-rht");
      $(".keep-menu li.nav-item.original").removeClass("original").addClass("active");
    });






    $('#lightSlider').lightSlider({
      auto: false,
      item: 8,
      loop: false,
      slideMargin: 0,
      thumbItem: 9,
      addClass: 'center-thumbs',
      pager: false,
      currentPagerPosition: 'middle',
      controls: false,
      enableTouch: false,
      enableDrag: false,
      freeMove: false,
      responsive: [{
        breakpoint: 767,
        settings: {
          item: 3,
          slideMove: 1,
          slideMargin: 6,
        }
      }, {
        breakpoint: 481,
        settings: {
          item: 2,
          slideMove: 1
        }
      }]
    });


    $(".home-slide-serv .lightSlider li").hover(function() {

      $(this).next().addClass("brd-rht-lft2");
      $(this).prev().addClass("brd-lft-rht2");
    }, function() {
      $(this).next().removeClass("brd-rht-lft2");
      $(this).prev().removeClass("brd-lft-rht2");

    });





    $('#lightSlider5').lightSlider({
      auto: true,
      speed: 3000,
      pause: 3000,
      pauseOnHover: true,
      item: 2,
      loop: true,
      slideMargin: 10,
      thumbItem: 9,
      pager: true,
      controls: false,
      responsive: [{
        breakpoint: 992,
        settings: {
          item: 1,
          slideMove: 1,
          slideMargin: 6,
          loop: false,
        }
      }, {
        breakpoint: 481,
        settings: {
          item: 1,
          loop: false,
          slideMove: 1
        }
      }]
    });


    $('#lightSlider6').lightSlider({
      auto: true,
      item: 2,
      loop: false,
      autoWidth: true,
      slideMargin: 0,
      pager: false,
      speed: 3000,
      pause: 3000,
      //rtl:true,//
      prevHtml: '<i class="fas fa-chevron-left"></i>',
      nextHtml: '<i class="fas fa-chevron-right"></i>',
      addClass: 'center-thumbs',
      responsive: [{
        breakpoint: 992,
        settings: {
          item: 1,
          slideMove: 1,
          slideMargin: 0,
          autoWidth: false,
          controls: false,
          auto: true,

        }
      }, {
        breakpoint: 481,
        settings: {
          item: 1,
          slideMove: 1,
          autoWidth: false,
          slideMargin: 10,
          controls: false,
          rtl: false,
          auto: true,
        }
      }]
    });



    $('.center').slick({
      centerMode: true,
      centerPadding: '60px',
      slidesToShow: 3,
      responsive: [{
          breakpoint: 768,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 3
          }
        },
        {
          breakpoint: 480,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 1
          }
        }
      ]
    });



    $('.brand-active').lightSlider({
      auto: false,
      item: 2,
      loop: true,
      autoWidth: true,
      slideMargin: 0,
      pager: false,
      speed: 3000,
      pause: 3000,
      rtl: true,
      prevHtml: '<i class="fas fa-chevron-left"></i>',
      nextHtml: '<i class="fas fa-chevron-right"></i>',
      responsive: [{
        breakpoint: 767,
        settings: {
          item: 1,
          slideMove: 1,
          slideMargin: 0,

        }
      }, {
        breakpoint: 481,
        settings: {
          item: 1,
          slideMove: 1,
          autoWidth: false,
          slideMargin: 10,
          rtl: false,
        }
      }]
    });


    $('#lightSlider7').lightSlider({
      auto: true,
      speed: 3000,
      pause: 3000,
      pauseOnHover: true,

      item: 2,
      loop: true,
      slideMargin: 10,
      pager: false,
      controls: false,
      responsive: [{
        breakpoint: 767,
        settings: {
          item: 2,
          slideMove: 1,
          slideMargin: 6,
        }
      }, {
        breakpoint: 481,
        settings: {
          item: 2,
          slideMove: 1
        }
      }]
    });



    $(window).scroll(function() {
      var sticky = $('.newsletter-sticky'),
        scroll = $(window).scrollTop();

      if (scroll >= 200) sticky.addClass('fixed');
      else sticky.removeClass('fixed');
    });



  });
</script>

<script>
  function makePhone() {
    var input = document.querySelector("#phone-contact-popup");
    window.intlTelInput(input, {
      onlyCountries: ["gb"]
    });
    var iti = window.intlTelInputGlobals.getInstance(input);

    input.addEventListener("countrychange", function() {
      $('input[name=country_code]').val(iti.getSelectedCountryData().dialCode);
      $('input[name=country]').val(iti.getSelectedCountryData().iso2);
    });
  }
</script>