jQuery(document).ready(function ($) {
	"use strict";
	$(".pridesys-carousel").each(function (index) {
		var optionCarousel = $(this); //check this block
		var auto_play = Boolean(optionCarousel.attr('data-autoplay') === 'false' ? false : true);
		var loop = Boolean(optionCarousel.attr('data-loop') === 'false' ? false : true);
		var data_dots = Boolean(optionCarousel.attr('data-dots') === 'false' ? false : true);
		var navigaion = Boolean(optionCarousel.attr('data-nav') === 'true' ? true : false);

		var itemsCountDesktop = parseInt(optionCarousel.attr('data-large-items'));
		var itemsCountMedium = parseInt(optionCarousel.attr('data-medium-items'));
		var itemsCountSmall = parseInt(optionCarousel.attr('data-small-items'));
		var itemsCountXsmall = parseInt(optionCarousel.attr('data-xsmall-items'));

		var itemMargin = parseInt(optionCarousel.attr('data-margin'));

		optionCarousel.owlCarousel({
			autoplay: auto_play,
			loop: loop,
			dots: data_dots,
			margin: itemMargin,
			rewind: true,
			autoplayHoverPause: true,
			nav: navigaion,
			navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
			responsive: {
				0: {
					items: itemsCountXsmall,
				},
				768: {
					items: itemsCountSmall,
				},
				992: {
					items: itemsCountMedium,
				},
				1200: {
					items: itemsCountDesktop,
				}
			},
		});
	});
});