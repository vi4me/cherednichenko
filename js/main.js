$(function(){
	$('.header-slider').slick({
		arrows: false,
		// vertical:true,
		dots:true,
		dotsClass: 'header-dots',
		autoplay: 200
	});

	$('.menu__btn').on('click', function(){
		$('.menu__list').slideToggle();
	})

});