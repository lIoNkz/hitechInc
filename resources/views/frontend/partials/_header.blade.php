<div class="main-menu">
  <div class="animation_svg">

  <embed src="/img/svg/line1.svg" class="svg_banner svg11">
   <embed src="/img/svg/line2.svg" class="svg_banner svg12"> 
  <embed src="/img/svg/line3.svg" class="svg_banner svg13">
<embed src="/img/svg/line4.svg" class="svg_banner svg14"> 


  </div>
  <div class="wrappy">
  <div class="wrapp main-menu__wrapp">
    <a href="/" alt="hitech-hq.kz" class="img main-menu__logo hitech-logo">
      <img src="/img/hitech-logo-white.png" alt="">
    </a>
    <p class="main-menu__services-link js-services"><span>Карта сайта</span></p>
    <div class="main-menu__inner">
      <form action="https://hitech-hq.kz/search" class="main-menu__search _hidden js-main-search">
        <label class="cd-input _small cd-field _iconed-right">
          <span class="cd-input__wrapper">
                <input type="text" class="cd-input__field" name="search" placeholder="Поиск по сайту">
            </span>
        </label>
      </form>
	    <nav class="main-menu__nav">
	      <a href="/{{ $urls->where('method','about')->first()->slug }}" class="main-menu__link">О компании</a>
	      <a href="/{{ $urls->where('method','services')->first()->slug }}" class="main-menu__link">Услуги</a>
        <a href="/{{ $urls->where('method','portfolio')->first()->slug }}" class="main-menu__link">Портфолио</a>
        <a href="/{{ $urls->where('method','review')->first()->slug }}" class="main-menu__link">Отзывы</a>
	      <a href="/{{ $urls->where('method','blog')->first()->slug }}" class="main-menu__link">Блог</a>
	      <a href="/{{ $urls->where('method','contacts')->first()->slug }}" class="main-menu__link">Контакты</a>
	    </nav>
    </div>

    
    
    <button class="main-menu__btn cd-btn cd-btn--S js-show-search _no-text">
      <img src="/img/icons/search.png" alt="" style="width: 20px;">
    </button>
    <a class="main-menu__phone js-show-location">+7 (702) 175-55-97</a>
    <button class="cd-btn cd-btn--S _no-text main-menu__btn main-menu__btn--burger js-menu-open">
      <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26">
        <path
          d="M4.5 7.25h17a.75.75 0 0 0 0-1.5h-17a.75.75 0 0 0 0 1.5zM21.5 19.75h-17a.75.75 0 0 0 0 1.5h17a.75.75 0 0 0 0-1.5zM4.5 14.25h13a.75.75 0 0 0 0-1.5h-13a.75.75 0 0 0 0 1.5z"/>
      </svg>
    </button>

    <div class="popup popup--location" data-popup="location">
      <div class="services__close js-close-popup"></div>
      <p class="popup__title">Наши телефоны:</p>
      <ul class="location-list">
        <li class="location-list__item">  
          <a href="/#" target="_blank" class="location-list__name">Нурсултан</a>
          <a href="/#" class="location-list__phone">+7 (702) 175-55-97</a>
        </li>
        <li class="location-list__item"> 
          <a href="/#" target="_blank" class="location-list__name">Аян</a>
          <a href="/#" class="location-list__phone">+7 (775) 324-66-99</a>
        </li>
        <li class="location-list__item">
          <a href="/#" target="_blank" class="location-list__name">Санжар</a>
          <a href="/#" class="location-list__phone">+7 (778) 111-53-23</a>
        </li>
      </ul>
    </div>
  </div>
  </div>
  <div class="mm-banner">
    @yield('banner')
  </div>
</div> <!-- main-menu end -->
<div class="fixed-wrapp">
  <div class="fixed-wall"></div>
</div>
<div class="fixed-space"></div>

<aside class="m-menu js-m-aside js-aside-close">
  <div class="m-menu__wrap">
    <button class="m-aside-close js-aside-close"></button>
    <nav class="m-nav">
      <a href="/{{ $urls->where('method','about')->first()->slug }}" class="m-nav__link">О компании</a>
      <a href="/{{ $urls->where('method','services')->first()->slug }}" class="m-nav__link">Услуги</a>
      <a href="/{{ $urls->where('method','review')->first()->slug }}" class="m-nav__link">Отзывы</a>
      <a href="/{{ $urls->where('method','portfolio')->first()->slug }}" class="m-nav__link">Портфолио</a>
      <a href="/{{ $urls->where('method','blog')->first()->slug }}" class="m-nav__link">Блог</a>
      <a href="/{{ $urls->where('method','contacts')->first()->slug }}"  class="m-nav__link">Контакты</a>
    </nav>
    <div class="m-filials">
      <h3 class="m-filials__title">Наши телефоны:</h3>
      <ul class="m-filials__list">
        <li class="m-filials__item">
          <p class="m-filials__name">Нурсултан</p>
          <a href="/tel:84997053010" rel="nofollow" class="phone m-filials__link" >+7 (702) 175-55-97</a>
        </li>
        <li class="m-filials__item">
          <p class="m-filials__name">Аян</p>
          <a href="/tel:88126007733" rel="nofollow" class="phone m-filials__link" >+7 (775) 324-66-99</a>
        </li>
        <li class="m-filials__item">
          <p class="m-filials__name">Санжар</p>
          <a href="/tel:88005556342" rel="nofollow" class="m-filials__link" >+7 (778) 111-53-23</a>
        </li>
      </ul>
    </div>
  </div>
</aside>

<div class="_overlay"></div>

<div class="services js-services-popup">
  <a href="/#" class="services__close js-services-close cd-btn _secondary _iconed _no-text">
  </a>
  <p class="services__title">Карта сайта</p>
  <div class="services__inner">
    <div class="services__layout">
      <div class="services__list">
        <p class="services__list-title">Cайты</p>
        <div class="services__list-inner">
          <a href="/{{ $urls->where('method','devSites')->first()->slug }}/{{ $urls->where('method','siteVizitka')->first()->slug }}" class="services__list-link">Сайт-визитка</a>
          <a href="/{{ $urls->where('method','devSites')->first()->slug }}/{{ $urls->where('method','lp')->first()->slug }}" class="services__list-link">Landing Page</a>
          <a href="/{{ $urls->where('method','devSites')->first()->slug }}/{{ $urls->where('method','corpsite')->first()->slug }}" class="services__list-link">Корпоративный сайт</a>
          <a href="/{{ $urls->where('method','devSites')->first()->slug }}/{{ $urls->where('method','onlineshop')->first()->slug }}" class="services__list-link">Интернет-магазин</a>
          <a href="/{{ $urls->where('method','devSites')->first()->slug }}/{{ $urls->where('method','siteCatalog')->first()->slug }}" class="services__list-link">Сайт-каталог</a>
          <a href="/{{ $urls->where('method','techSupport')->first()->slug }}" class="services__list-link">Тех.поддержка</a>
        </div>
      </div>
      <div class="services__list">
        <p class="services__list-title">Наши проекты</p>
        <div class="services__list-inner">
          <a href="http://www.hitech-school.kz" class="services__list-link" rel="nofollow">Школа программирования HITECH SCHOOL</a>
          <a href="http://www.hitech-reality.kz" class="services__list-link" rel="nofollow">HITECH REALITY (VR and AR)</a>
        </div>
      </div>
    </div>
    <div class="services__layout">
      <div class="services__list">
        <p class="services__list-title">Интернет-маркетинг</p>
        <div class="services__list-inner">
          <a href="/{{ $urls->where('method','seo')->first()->slug }}" class="services__list-link">SEO</a>
          <a href="/{{ $urls->where('method','context')->first()->slug }}" class="services__list-link">Контекстная реклама</a>
          <a href="/{{ $urls->where('method','optimization')->first()->slug }}" class="services__list-link">Оптимизация сайта</a>
          <a href="/{{ $urls->where('method','prodvizhenie')->first()->slug }}" class="services__list-link">Продвижение сайта</a>
        </div>
      </div>
      <div class="services__list">
        <p class="services__list-title">Продвижение в соц.сетях</p>
        <div class="services__list-inner">
          <a rel="nofollow" href="/{{ $urls->where('method','instagram')->first()->slug }}" class="services__list-link">Продвижение в Instagram</a>
          <a rel="nofollow" href="/{{ $urls->where('method','youtube')->first()->slug }}" class="services__list-link">Видеообъявления в Youtube</a>
        </div>
      </div>
    </div>
    <div class="services__layout">
      <div class="services__layout-inner">
        <div class="services__list">
          <p class="services__list-title">Услуги</p>
          <div class="services__list-inner">
              <a href="/{{ $urls->where('method','devSites')->first()->slug }}" class="services__list-link">Разработка сайтов</a>
              <a href="/{{ $urls->where('method','devPO')->first()->slug }}" class="services__list-link">Разработка ПО</a>
              <a href="/{{ $urls->where('method','devMobileApps')->first()->slug }}" class="services__list-link">Разработка мобильных приложений</a>
              <a href="/{{ $urls->where('method','logoDev')->first()->slug }}" class="services__list-link">Разработка логотипа</a>
              <a href="/{{ $urls->where('method','individualDes')->first()->slug }}" class="services__list-link">Индивидульный дизайн сайта</a>
          </div>
        </div>
        <div class="services__list">
          <p class="services__list-title">О нас</p>
          <div class="services__list-inner">
            <a href="/{{ $urls->where('method','about')->first()->slug }}" class="services__list-link"> О компании</a>
            <a href="/{{ $urls->where('method','portfolio')->first()->slug }}" class="services__list-link"> Портфолио</a>
            <a href="/{{ $urls->where('method','team')->first()->slug }}" class="services__list-link"> Наша команда</a>
            <a href="/{{ $urls->where('method','blog')->first()->slug }}" class="services__list-link"> Блог</a>
            <a href="/{{ $urls->where('method','mission')->first()->slug }}" class="services__list-link"> Наша миссия</a>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="submenu">
  <div class="wrapp submenu__wrapp">
    <div class="submenu__inner">
      <nav class="submenu__nav">
        <div class="submenu__item">
          	<a href="/{{ $urls->where('method','devSites')->first()->slug }}" class="submenu__link">Разработка сайтов</a>
      	</div>
      	
      	<div class="submenu__item">
          	<a href="/{{ $urls->where('method','devPO')->first()->slug }}" class="submenu__link">Разработка ПО</a>
      	</div>
      	
      	<div class="submenu__item">
          	<a href="/{{ $urls->where('method','devMobileApps')->first()->slug }}" class="submenu__link">Разработка моб. приложений</a>
      	</div>
      	
      	<div class="submenu__item">
          	<a href="/{{ $urls->where('method','seo')->first()->slug }}" class="submenu__link">SEO продвижение</a>
      	</div>
      	
      	<div class="submenu__item">
          	<a href="/{{ $urls->where('method','techSupport')->first()->slug }}" class="submenu__link">Тех.поддержка</a>
      	</div>
    	</nav>
      

      <a href="/{{ $urls->where('method','order')->first()->slug }}" class="cd-btn submenu__request-btn">Заказать</a>
      </div>
  </div>
</div>

<nav class="m-submenu">
  <div class="wrapp m-submenu__wrapp">
    <div class="m-submenu__inner">
      <button class="m-submenu__link m-submenu__link--current js-submenu">
        <span>Выберите тип сайта</span>
        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26"><path d="M20.03 9.97a.75.75 0 0 0-1.06 0l-6.47 6.47-6.47-6.47a.75.75 0 0 0-1.06 1.06l7 7a.75.75 0 0 0 1.06 0l7-7a.75.75 0 0 0 0-1.06z"></path></svg>
        <ul class="m-submenu__list js-submenu-list">
                              <li class="m-submenu__item">
          <a href="/{{ $urls->where('method','devSites')->first()->slug }}/{{ $urls->where('method','siteVizitka')->first()->slug }}" class="m-submenu__link ">
            <span>Сайт визитка</span>
          </a>
        </li>
        	        						<li class="m-submenu__item">
					<a href="/{{ $urls->where('method','devSites')->first()->slug }}/{{ $urls->where('method','lp')->first()->slug }}" class="m-submenu__link ">
						<span>Landing Page</span>
					</a>
				</li>
							        						<li class="m-submenu__item">
					<a href="/{{ $urls->where('method','devSites')->first()->slug }}/{{ $urls->where('method','corpsite')->first()->slug }}" class="m-submenu__link ">
						<span>Корпоративный сайт</span>
					</a>
				</li>
							        						<li class="m-submenu__item">
					<a href="/{{ $urls->where('method','devSites')->first()->slug }}/{{ $urls->where('method','onlineshop')->first()->slug }}" class="m-submenu__link _sale">
						<span>Интернет-магазин</span>
					</a>
				</li>
							        						<li class="m-submenu__item">
					<a href="/{{ $urls->where('method','seo')->first()->slug }}" class="m-submenu__link _sale">
						<span>SEO</span>
					</a>
				</li>
							        						<li class="m-submenu__item">
					<a href="/{{ $urls->where('method','techSupport')->first()->slug }}" target="_blank" class="m-submenu__link ">
						<span>Тех.поддержка</span>
					</a>
				</li>
				</ul>
      </button> 
      <a href="/{{ $urls->where('method','order')->first()->slug }}" class="cd-btn m-submenu__btn">Заказать cайт</a>
    </div>
  </div>
</nav>
<div style="width: 100%; background-color: #fff;">
  <div class="breadcrumbs wrapp submenu__wrapp hideOnPost">
      <a href="/">Главная @if($breads->url != "/") <span>></span> @endif</a>  
      {!! $breads->text !!}
  </div>
    <div class="breadcrumbs wrapp submenu__wrapp showOnPost">
      <a href="/">Главная<span> ></span></a>  
      <a href="/{{ $urls->where('method','devSites')->first()->slug }}">Блог<span> ></span></a>  

  </div>
</div>


<div class="overlay_for_modals"></div>