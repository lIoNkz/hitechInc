$(document).ready(function() {
	$(".js-header-slider").slick();	

});

$('.js-show-login').click(function() {
	$('.mp-popup--login').fadeToggle();
});

$('.mp-popup__close').click(function() {
	$('.mp-popup--login').fadeOut();
	$('.js-main-search').fadeOut();
	$('.mp-popup--location').fadeOut();

});

$('.js-show-search').click(function() {
	$('.js-main-search').fadeToggle();
});

$('.js-show-location').click(function() {
	$('.mp-popup--location').fadeToggle();
});

$('.js-services').click(function() {
	$('.js-services-popup').fadeToggle();
});

$('.js-services-close').click(function() {
	$('.js-services-popup').fadeOut();
});


$('.lp-cslider').slick();