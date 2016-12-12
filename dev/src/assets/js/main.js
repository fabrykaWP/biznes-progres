// Load modules
(function($){

	// Case Studys slider
	$('#case-study-slick').slick({
		autoplay: true,
		autoplaySpeed: 3000
	});

	// Home slider
	$('.slider__image').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		asNavFor: '.slider__nav'
	});
	$('.slider__nav').slick({
	  	slidesToShow: 4,
	  	slidesToScroll: 1,
	  	asNavFor: '.slider__image',
	  	focusOnSelect: true
	});
	
})(jQuery);	