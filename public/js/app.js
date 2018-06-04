$('.js-show-login').click(function() {
	$('.popup--login').fadeToggle();
});

$('.js-close-popup').click(function() {
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

/*================= Mobile Menu =================*/ 

$('.js-menu-open').click(function() {
	$('.js-m-aside').addClass('_opened');
});
$('.js-aside-close').click(function() {
	$('.js-m-aside').removeClass('_opened');
});


$('.js-submenu').click(function() {
	$('.js-submenu-list').slideToggle();
});
