$(function() {
	'use strict';

    // Service Hover Actve
	$('.services-area').on(
		'mouseover',
		'.services-item.services-item-2',
		function() {
			$('.services-item.services-item-2.active').removeClass('active');
			$(this).addClass('active');
		}
	);

	//===== Isotope Project 1
	$('.container').imagesLoaded(function() {
		var $grid = $('.grid').isotope({
			// options
			transitionDuration: '1s'
		});

		// filter items on button click
		$('.project-menu ul').on('click', 'li', function() {
			var filterValue = $(this).attr('data-filter');
			$grid.isotope({ filter: filterValue });
		});

		//for menu active class
		$('.project-menu ul li').on('click', function(event) {
			$(this)
				.siblings('.active')
				.removeClass('active');
			$(this).addClass('active');
			event.preventDefault();
		});
	});

	//====== Magnific Popup
	$('.video-popup').magnificPopup({
		type: 'iframe'
		// other options
	});

	//===== Magnific Popup
	$('.image-popup').magnificPopup({
		type: 'image',
		gallery: {
			enabled: true
		}
	});

	//===== counter up
	$('.counter').counterUp({
		delay: 10,
		time: 2000
	});

	//===== niceSelect js
	$('select').niceSelect();

	// Progress Bar
	if ($('.progress-line').length) {
		$('.progress-line').appear(
			function() {
				var el = $(this);
				var percent = el.data('width');
				$(el).css('width', percent + '%');
			},
			{
				accY: 0
			}
		);
	}
	if ($('.count-box').length) {
		$('.count-box').appear(
			function() {
				var $t = $(this),
					n = $t.find('.count-text').attr('data-stop'),
					r = parseInt($t.find('.count-text').attr('data-speed'), 10);

				if (!$t.hasClass('counted')) {
					$t.addClass('counted');
					$({
						countNum: $t.find('.count-text').text()
					}).animate(
						{
							countNum: n
						},
						{
							duration: r,
							easing: 'linear',
							step: function() {
								$t.find('.count-text').text(
									Math.floor(this.countNum)
								);
							},
							complete: function() {
								$t.find('.count-text').text(this.countNum);
							}
						}
					);
				}
			},
			{
				accY: 0
			}
		);
	}

	// Scroll Event
	$(window).on('scroll', function() {
		var scrolled = $(window).scrollTop();
		if (scrolled > 300) $('.go-top').addClass('active');
		if (scrolled < 300) $('.go-top').removeClass('active');
	});

	// Click Event
	$('.go-top').on('click', function() {
		$('html, body').animate(
			{
				scrollTop: '0'
			},
			1200
		);
	});

	// Single Features Active
	$('.feature-area').on('mouseover', '.feature-item.style-one', function() {
		$('.feature-item.active').removeClass('active');
		$(this).addClass('active');
	});

	
	// ==== Product Quantity
	$('#quantityDown').on('click', function() {
		var numProduct = Number($('#quantity').val());
		if (numProduct > 0)
			$(this)
				.next()
				.val(numProduct - 1);
	});
	$('#quantityUP').on('click', function() {
		var numProduct = Number($('#quantity').val());
		$(this)
			.prev()
			.val(numProduct + 1);
	});

	// ==== Gallery Main Slider
	var galleryDots = $('.gallery-dots');
	var galleryArrow = $('.gallery-arrows');
	$('#gallerySliderActive').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		fade: false,
		infinite: true,
		autoplay: false,
		autoplaySpeed: 6000,
		arrows: true,
		appendArrows: galleryArrow,
		prevArrow:
			'<button class="prev-arrow"><i class="far fa-angle-left"></i></button>',
		nextArrow:
			'<button class="next-arrow"><i class="far fa-angle-right"></i></button>',

		dots: true,
		appendDots: galleryDots,
		customPaging: function(slick, index) {
			var portrait = $(slick.$slides[index]).data('thumb');
			return '<img src=" ' + portrait + ' "/>';
		}
	});

	$('#gallerySliderActive').each(function() {
		// the containers for all your galleries
		var additionalImages = $('.image-popup').not(
			'.slick-slide.slick-cloned .image-popup'
		);
		additionalImages.magnificPopup({
			type: 'image',
			gallery: {
				enabled: true
			},
			mainClass: 'mfp-fade'
		});
	});

	// Bootstrap Accordion Icon
	$('.faq-accordion .card-header button').on('click', function(e) {
		$('.faq-accordion .card-header button').removeClass('active-accordion');
		$(this).addClass('active-accordion');
	});
});
