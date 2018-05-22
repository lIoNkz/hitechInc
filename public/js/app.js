$(document).ready(function() {
	$(".js-header-slider").slick();	

});

$('.js-show-login').click(function() {
	$('.popup--login').fadeToggle();
});

$('.popup__close').click(function() {
	$('.popup--login').fadeOut();
	$('.js-main-search').fadeOut();
	$('.popup--location').fadeOut();

});

$('.js-show-search').click(function() {
	$('.js-main-search').fadeToggle();
});

$('.js-show-location').click(function() {
	$('.popup--location').fadeToggle();
});

$('.js-services').click(function() {
	$('.js-services-popup').fadeToggle();
});

$('.js-services-close').click(function() {
	$('.js-services-popup').fadeOut();
});

