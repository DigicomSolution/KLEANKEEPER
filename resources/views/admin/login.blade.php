<!DOCTYPE html>
<html>
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    
    <title>{{config('app.name')}} - Admin Dashboard - Lock Screen</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <link rel="apple-touch-icon" href="{{asset('assets/theme/images/fav.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/theme/images/fav.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('assets/theme/images/fav.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('assets/theme/images/fav.png')}}">
    <link rel="icon" href="{{asset('assets/theme/images/fav.png')}}" type="image/png" sizes="16x16">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="{{asset('miniweb/assets/plugins/pace/pace-theme-flash.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('miniweb/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('miniweb/assets/plugins/font-awesome/css/font-awesome.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('miniweb/assets/admin/css/pages-icons.css')}}" rel="stylesheet" type="text/css">
    <link class="main-stylesheet" href="{{asset('miniweb/assets/admin/css/modern.css')}}" rel="stylesheet" type="text/css" />
    <script type="text/javascript">
    window.onload = function()
    {
      // fix for windows 8
      if (navigator.appVersion.indexOf("Windows NT 6.2") != -1)
        var fix_link = "{{asset('miniweb/assets/admin/css/windows.chrome.fix.css')}}";
        document.head.innerHTML += '<link rel="stylesheet" type="text/css" href="'+fix_link+'" />'
    }
    </script>
  </head>
  <body class="fixed-header ">
    <div class="login-wrapper ">
      <!-- START Login Background Pic Wrapper-->
      <div class="bg-pic">
        <!-- START Background Pic-->
        <img src="{{asset('miniweb/assets/img/demo/new-york-city-buildings-sunrise-morning-hd-wallpaper.jpg')}}" data-src="{{asset('miniweb/assets/img/demo/new-york-city-buildings-sunrise-morning-hd-wallpaper.jpg')}}" data-src-retina="{{asset('miniweb/assets/img/demo/new-york-city-buildings-sunrise-morning-hd-wallpaper.jpg')}}" alt="Klean Keepers image {{ rand(100000, 99999999) }}" class="lazy">
        <!-- END Background Pic-->
        <!-- START Background Caption-->
        <div class="bg-caption pull-bottom sm-pull-bottom text-white p-l-20 m-b-20">
          
        </div>
        <!-- END Background Caption-->
      </div>
      <!-- END Login Background Pic Wrapper-->
      <!-- START Login Right Container-->
      <div class="login-container bg-white">
        <div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
          <img src="{{asset('logo.png')}}" alt="logo" data-src="{{asset('logo.png')}}" data-src-retina="{{asset('logo.png')}}" width="150" >
          <p class="p-t-35">Sign into your {{config('app.name')}} account</p>
          <!-- START Login Form -->
            @include('auth.login_content')
          <!--END Login Form-->
          <div class="pull-bottom sm-pull-bottom">
            <div class="m-b-30 p-r-80 sm-m-t-20 sm-p-r-15 sm-p-b-20 clearfix">
              <div class="col-sm-3 col-md-2 no-padding">
                <!--<img alt="Klean Keepers image {{ rand(100000, 99999999) }}" class="m-t-5" data-src="{{asset('miniweb/assets/img/demo/pages_icon.png')}}" data-src-retina="{{asset('miniweb/assets/img/demo/pages_icon_2x.png')}}" height="60" src="{{asset('miniweb/assets/img/demo/pages_icon.png')}}" width="60">-->
              </div>
              <div class="col-sm-9 no-padding m-t-10">
                
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END Login Right Container-->
    </div>
 
    <!-- BEGIN VENDOR JS -->
    <script src="{{asset('miniweb/assets/plugins/pace/pace.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('miniweb/assets/plugins/jquery/jquery-3.2.1.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('miniweb/assets/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('miniweb/assets/plugins/jquery-actual/jquery.actual.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('miniweb/assets/plugins/classie/classie.js')}}"></script>
    <script src="{{asset('miniweb/assets/plugins/jquery-validation/js/jquery.validate.min.js')}}" type="text/javascript"></script>
    <!-- END VENDOR JS -->
    <script src="{{asset('miniweb/assets/admin/js/pages.min.js')}}"></script>
    <script>
    $(function()
    {
      $('#form-login').validate()
    })
    </script>
  </body>
</html>