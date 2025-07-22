<!doctype html>
<html class="no-js" lang="zxx">
<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>SpiderWorks</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,700;0,800;0,900;1,800;1,900&display=swap"
            rel="stylesheet">
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/animate.css">
		<link rel="stylesheet" href="assets/css/iconfont.css">
		<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
		<!--Theme custom css -->
		<link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	</head>
	<body>
    <!-- END prelaoder -->
<!-- mobile header -->
<?php include('header.php') ?>
<!-- End header section -->
<!-- contact -->
<section class="contact-sec_m">
    <div class="con-left-img_m">
        <img src="img/tree.png" alt="">
    </div>
    <div class="con-rt-img_m">
        <img src="img/window.png" alt="">
    </div>
    <div class="cloud-img_m">
        <img src="img/cloud.png" alt="">
    </div>
    <div class="cloud-rt-img_m">
        <img src="img/cloud.png" alt="">
    </div>
    <div class="container ct-container_m">
        <div class="row justify-content-center ct-row_m">
            <div class="col-md-10 col-sm-10 col-10 p-0">
                <div class="contact-inner_m">
                    <div class="ct-hd_m">
                        <span class="ct-span_m">Lets Have</span>
                        <h2><span>Consultancy</span></h2>
                    </div>
                    <form>
                        <div class="form-group form-row">
                            <div class="col-sm-6 p-5px">
                                <input type="text" class="form-control" id="fname" name="fname" placeholder="Name" required="">
                            </div>
                            <div class="col-sm-6 p-5px">
                                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Mobile no." required="">
                            </div>
                        </div>
                        <div class="form-group form-row">
                            <div class="col-sm-6 p-5px">
                                <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required="">
                            </div>
                           <div class="col-sm-6 p-5px">
                                <input type="text" class="form-control" id="fname" name="fname" placeholder="Company" required="">
                            </div>
                        </div>
                        
                        <div class="form-group form-row">
                            <div class="col-sm-12 p-5px">
                                <textarea class="form-control" id="message" name="message" rows="6" placeholder="Your message..." required=""></textarea>
                            </div>
                        </div>
                        <div class="row justify-content-between p-15px align-items-center">
                            <div class="ct-dec_m">
                                <p>Enabling businesses to get competitive edge in the market by building scalable and extensible software and mobile applications.</p>
                            </div>
                            <div class="bnr-l_btn_m animation-element">
                                <a href="#" class="btn btn-primary exp-btn_m"><span class="sp-ex_m"></span>EXPLORE</a>
                            </div>
                        </div>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end contact -->
<!-- schedule meeting -->
<section class="schedule-meeting_m">
    <div class="container">
        <div class="scm-hd_m">
            <h2>
                <span class="sc-span_m">Schedule</span>
                <span> Meeting</span>
            </h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12 col-sm-12">
                <div class="sm-single_m bd-btm_m">
                    <div class="sm-icon_m">
                        <img src="img/office.png" alt="">
                    </div>
                    <div class="sm-details_m">
                        <h3>Office</h3>
                        <p>219, Mavelipuram Zone 2 Kakkanad, Kochi, Kerala 682030</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12">
                 <div class="sm-single_m bd-btm_m">
                    <div class="sm-icon_m">
                        <img src="img/call.png" alt="">
                    </div>
                    <div class="sm-details_m">
                        <h3>Call</h3>
                        <p>094955 59690</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12">
                 <div class="sm-single_m">
                    <div class="sm-icon_m">
                        <img src="img/mail.png" alt="">
                    </div>
                    <div class="sm-details_m">
                        <h3>Email</h3>
                        <p>contact@spiderworks.in</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end -->
<!-- footer section start -->
<?php include('footer.php') ?>
<!-- footer section end -->
<!-- js file start -->
<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/Popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/main.js"></script>	
<script src="assets/js/form-script.js"></script>
<script src="assets/js/common.js"></script>
<!-- End js file -->
<script>
    $(document).ready(function(){
    // button animation
    var $animation_elements = $('.animation-element');
    var $window = $(window);

    function check_if_in_view() {
    var window_height = $window.height();
    var window_top_position = $window.scrollTop();
    var window_bottom_position = (window_top_position + window_height);

    $.each($animation_elements, function() {
    var $element = $(this);
    var element_height = $element.outerHeight();
    var element_top_position = $element.offset().top;
    var element_bottom_position = (element_top_position + element_height);

    //check to see if this current container is within viewport
    if ((element_top_position <= window_bottom_position)) { $element.addClass('in-view'); } else {
        $element.removeClass('in-view'); } }); } $window.on('scroll resize', check_if_in_view);
        $window.trigger('scroll'); });
</script>
	</body>
</html>