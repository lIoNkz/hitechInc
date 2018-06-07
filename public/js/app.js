$('.js-show-login').click(function() {
	$('.popup--login').fadeToggle();
});

$('.js-close-popup').click(function() {
	$('.popup--login').fadeOut();
	$('.js-main-search').fadeOut();
	$('.popup--location').fadeOut();
	$('.submenu__request-btn').show();	

});

$('.js-show-search').click(function() {
	$('.js-main-search').fadeToggle();
});

$('.js-show-location').click(function() {
	$('.popup--location').fadeToggle();
	$('.submenu__request-btn').hide();
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


/*--------------------------------------------
	Banner fixing 
----------------------------------------*/
if($(window).scrollTop() >= 120) {
		$('.animation_svg').css('visibility','visible');
		$('.fixed-wall').addClass('filter-wall');
		$('.main-menu').css({
								'position':'fixed',
								'height':'80px',
								'z-index':'10000001'
							});
		$('.fixed-space').show();
		$('.fixed-wrapp').css({
			'z-index':'10000000',
			'height':'80px',
			'box-shadow':'0px 1px 4px #00000025, 0px 5px 4px #00000020, 0px 9px 4px #00000015'
		});
		$('.mm-banner').hide();
	} else {
		$('.animation_svg').css('visibility','hidden');
		$('.main-menu').css({
						'position':'static',
						'height':'200px',
						'z-index':'5555555'
					});
		$('.fixed-space').hide();
		$('.fixed-wall').removeClass('filter-wall');
		$('.mm-banner').show();
}

$(window).scroll(function(){
	if($(window).scrollTop() >= 120) {
			$('.animation_svg').css('visibility','visible');
			$('.fixed-wall').addClass('filter-wall');
			$('.main-menu').css({
									'position':'fixed',
									'height':'80px',
									'z-index':'10000001'
								});
			$('.fixed-space').show();
			$('.fixed-wrapp').css({
				'z-index':'10000000',
				'height':'80px',
				'box-shadow':'0px 1px 4px #00000040, 0px 5px 4px #44444440, 0px 9px 4px #99999940, 0px 13px 4px #cccccc40'
			});
			$('.mm-banner').hide();
		} else {
			$('.animation_svg').css('visibility','hidden');
			$('.main-menu').css({
							'position':'static',
							'height':'200px',
							'z-index':'5555555'
						});
			$('.fixed-space').hide();
			$('.fixed-wrapp').css({
				'z-index':'-1',
				'background-position':'center center',
				'height':'200px'
			});
			$('.mm-banner').show();
			$('.fixed-wall').removeClass('filter-wall');
	}
});

/*if($( window ).width() <= 576){
	$('.main-menu').css({'position','static !important'});
}
*/