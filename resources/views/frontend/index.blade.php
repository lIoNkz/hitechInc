@extends('frontend.layouts.master')
@section('content')





<div class="main">
  <div class="wrapp main__wrapp">
    @foreach($text1 as $text)
    {!! $text->title !!}
    <div class="main__inner">
      <div class="main__text">
        <p>
          {!! $text->text !!}
        </p>
      </div>
    @endforeach
      <div class="counter">
        <p class="counter__text">За 3 года мы сделали</p>
        <p class="counter__inner js-sites-counter"><ins>1</ins><ins>2</ins><ins>2</ins><ins>8</ins></p>
        <p class="counter__text js-sites-counter-text">сайтов</p>
      </div>
    </div>
  </div>
</div>

<div class="cost">
  <div class="wrapp cost__wrapp">
    <h2 class="title cost__title">Тарифы на разработку</h2>
    <div class="cost__list">
    	      <a href="https://qaz-tech.kz/pages_site" class="tariff">
        <p class="tariff__title">Сайт-Визитка</p>
        <div class="tariff__inner">
          <div class="tariff__layout img tariff__icon">
            <svg viewBox="0 0 26 26" xmlns="http://www.w3.org/2000/svg"> <path d="M20.5 10.84a.75.75 0 0 0-.75.75v8.905a1.25 1.25 0 0 1-1.242 1.255H7.492a1.243 1.243 0 0 1-1.242-1.245V5.495A1.246 1.246 0 0 1 7.499 4.25l6.99.057a.265.265 0 0 1 .254.258l.005 2.938A1.75 1.75 0 0 0 16.5 9.25h4a.75.75 0 0 0 .75-.733l.023-1.053a.75.75 0 0 0-.225-.552l-3.01-2.947a.75.75 0 0 0-1.05 1.072L19.76 7.75H16.5a.25.25 0 0 1-.252-.25l-.005-2.938A1.765 1.765 0 0 0 14.5 2.807L7.505 2.75A2.747 2.747 0 0 0 4.75 5.495v15.01a2.743 2.743 0 0 0 2.742 2.745h11.016a2.75 2.75 0 0 0 2.742-2.755V11.59a.75.75 0 0 0-.75-.75z M16.5 11.75h-7a.75.75 0 0 0 0 1.5h7a.75.75 0 0 0 0-1.5zM17.25 15.5a.75.75 0 0 0-.75-.75h-7a.75.75 0 0 0 0 1.5h7a.75.75 0 0 0 .75-.75zM9.5 17.75a.75.75 0 0 0 0 1.5h4a.75.75 0 0 0 0-1.5z"></path> </svg>
          </div>
          <div class="tariff__layout tariff__text-wr">
            <p class="tariff__price">
            	2 950 ₽
        	</p>
                        <div class="tariff__info">
              <p>1-3 дня</p>
              <p>1 страница</p>
            </div>
            <button class="cd-btn _secondary tariff__btn">Подробнее</button>
          </div>
        </div>
      </a>
            <a href="https://qaz-tech.kz/landing-page" class="tariff">
        <p class="tariff__title">Лендинг пейдж</p>
        <div class="tariff__inner">
          <div class="tariff__layout img tariff__icon">
            <svg viewBox="0 0 26 26" xmlns="http://www.w3.org/2000/svg"><path d="M10.539 22.532l4.811-3.141.008-1.097a.75.75 0 0 1 1.5.011l-.011 1.5a.748.748 0 0 1-.34.622l-6.387 4.17a.75.75 0 0 1-1.159-.669l.279-5.143a.748.748 0 0 1 .385-.614c5.444-3.031 9.094-5.478 10.924-7.308 1.6-1.6 2.419-3.569 2.609-5.677a9.492 9.492 0 0 0-.044-2.158 5.652 5.652 0 0 0-.101-.533 6.374 6.374 0 0 0-.577-.106 9.775 9.775 0 0 0-2.161-.047c-2.104.184-4.058.992-5.656 2.59-1.848 1.848-4.293 5.519-7.304 10.989a.75.75 0 0 1-.654.388l-5.337.021a.75.75 0 0 1-.631-1.16L4.86 8.785a.751.751 0 0 1 .621-.34l1.537-.013a.75.75 0 1 1 .014 1.5l-1.136.01-3.187 4.882 3.506-.013c2.977-5.373 5.415-9.012 7.343-10.939C15.424 2.006 17.71 1.06 20.144.848c1.665-.145 3.461.105 3.91.469.493.4.757 2.241.598 4.004-.22 2.437-1.176 4.736-3.042 6.602-1.912 1.913-5.536 4.355-10.894 7.356l-.177 3.253zm-4.848-1.663a.749.749 0 1 1-1.06-1.06l5.657-5.657a.749.749 0 1 1 1.06 1.06l-5.657 5.657zm10.845-8.619a3.25 3.25 0 1 1 0-6.5 3.25 3.25 0 0 1 0 6.5zm0-1.5a1.75 1.75 0 1 0-.001-3.501 1.75 1.75 0 0 0 .001 3.501z"></path></svg>
          </div>
          <div class="tariff__layout tariff__text-wr">
            <p class="tariff__price">
            	5 950 ₽
        	</p>
                        <div class="tariff__info">
              <p>3-5 дней</p>
              <p>1 страница</p>
            </div>
            <button class="cd-btn _secondary tariff__btn">Подробнее</button>
          </div>
        </div>
      </a>
            <a href="https://qaz-tech.kz/base_site" class="tariff" data-label="Акция">
        <p class="tariff__title">Сайт-Бизнес</p>
        <div class="tariff__inner">
          <div class="tariff__layout img tariff__icon">
            <svg version="1.1" viewBox="0 0 26 26" xmlns="http://www.w3.org/2000/svg"><path d="M6.247,3.594l0.003,0c4.334,0 8.673,-0.211 13.001,0c0.022,0 0.043,0.001 0.065,0.003l0.008,0l0.012,0.002c0.012,0.001 0.023,0.003 0.035,0.005c0.032,0.005 0.054,0.009 0.099,0.023c0.096,0.029 0.185,0.077 0.261,0.141c0.034,0.029 0.049,0.044 0.069,0.066c0.01,0.012 0.021,0.024 0.031,0.036l0.004,0.005l4.004,5c0.015,0.021 0.031,0.041 0.044,0.062c0.056,0.086 0.094,0.184 0.11,0.285c0.051,0.309 -0.102,0.626 -0.377,0.778c-0.092,0.051 -0.188,0.075 -0.291,0.09l-10.453,1c-0.057,0.003 -0.057,0.003 -0.114,0.002c-2.546,-0.239 -5.071,-0.669 -7.607,-1.005c-0.068,-0.013 -0.086,-0.013 -0.152,-0.037c-0.149,-0.052 -0.279,-0.152 -0.368,-0.282c-0.044,-0.065 -0.078,-0.137 -0.101,-0.212c-0.022,-0.075 -0.032,-0.154 -0.03,-0.233c0.008,-0.293 0.192,-0.561 0.463,-0.673c0.097,-0.04 0.202,-0.059 0.307,-0.056c0.026,0.001 0.052,0.004 0.078,0.006l1.55,0.205c-0.339,-0.956 -0.638,-1.927 -0.94,-2.897l-2.76,3.45l6.781,9.041c-0.702,-1.809 -1.385,-3.625 -2.102,-5.426c-0.019,-0.054 -0.036,-0.106 -0.045,-0.162c-0.02,-0.13 -0.005,-0.264 0.042,-0.386c0.118,-0.304 0.428,-0.501 0.752,-0.478c0.075,0.005 0.149,0.022 0.218,0.049c0.088,0.034 0.168,0.084 0.237,0.147c0.085,0.078 0.143,0.171 0.189,0.275l3.478,8.74l3.474,-8.779l0.023,-0.051c0.026,-0.05 0.054,-0.098 0.089,-0.142c0.094,-0.117 0.223,-0.204 0.366,-0.248c0.055,-0.017 0.109,-0.025 0.165,-0.031c0.057,-0.002 0.056,-0.002 0.113,0c0.094,0.011 0.183,0.032 0.269,0.073c0.239,0.116 0.401,0.356 0.42,0.621c0.007,0.095 -0.007,0.186 -0.032,0.277c-0.662,1.875 -1.396,3.723 -2.146,5.565l4.702,-6.267c0.017,-0.021 0.032,-0.042 0.05,-0.061c0.072,-0.076 0.159,-0.138 0.255,-0.179c0.073,-0.031 0.15,-0.05 0.228,-0.057c0.292,-0.027 0.579,0.126 0.722,0.382c0.038,0.068 0.066,0.143 0.081,0.22c0.03,0.155 0.01,0.317 -0.056,0.46c-0.029,0.064 -0.041,0.077 -0.08,0.135l-8.041,10.718c-0.068,0.08 -0.139,0.15 -0.231,0.202c-0.227,0.129 -0.512,0.129 -0.739,0c-0.092,-0.052 -0.163,-0.122 -0.23,-0.202l-10.5,-14c-0.044,-0.065 -0.082,-0.127 -0.107,-0.201c-0.06,-0.168 -0.057,-0.355 0.008,-0.521c0.028,-0.073 0.068,-0.134 0.113,-0.197l4,-5l0.005,-0.006c0.01,-0.012 0.02,-0.023 0.031,-0.034c0.019,-0.022 0.034,-0.038 0.068,-0.067c0.096,-0.08 0.211,-0.135 0.333,-0.16c0.04,-0.008 0.062,-0.01 0.088,-0.012c0.019,-0.001 0.038,-0.002 0.058,-0.002Zm2.512,5.458l4.055,0.537l4.063,-0.389l-4.129,-3.834l-3.989,3.686Zm10.781,-3.147l-0.999,3.136l3.259,-0.312l-2.26,-2.824Zm-1.316,-0.811l-3.565,0l2.751,2.555l0.814,-2.555Zm-7.391,0l-3.551,0l0.821,2.522l2.73,-2.522Z"></path></svg>
          </div>
          <div class="tariff__layout tariff__text-wr">
            <p class="tariff__price">
            	<span>от </span>5 950 ₽
        	</p>
            <p class="tariff__price-old"><span>9 950 ₽</span></p>            <div class="tariff__info">
              <p>от 5 дней</p>
              <p>многостраничный сайт</p>
            </div>
            <button class="cd-btn _secondary tariff__btn">Подробнее</button>
          </div>
        </div>
      </a>
            <a href="https://qaz-tech.kz/base_shop" class="tariff" data-label="Акция">
        <p class="tariff__title">Интернет-магазин</p>
        <div class="tariff__inner">
          <div class="tariff__layout img tariff__icon">
            <svg viewBox="0 0 26 26" xmlns="http://www.w3.org/2000/svg"><path d="M21.508 6.75H9.506A1.466 1.466 0 0 0 8.05 8.665l1.728 6.041a.75.75 0 0 0 .721.544h7a.75.75 0 0 0 0-1.5h-6.434L9.493 8.252c-.012-.043 12.015-.002 12.015-.002.567 0 .766.295.553.829l-2.888 7.22a.854.854 0 0 1-.669.451H9.496a.693.693 0 0 1-.573-.427L5.217 4.28A.75.75 0 0 0 4.5 3.75h-3a.75.75 0 0 0 0 1.5h2.446l3.543 11.515a2.181 2.181 0 0 0 2.007 1.485h9.008a2.335 2.335 0 0 0 2.061-1.394l2.888-7.22a2 2 0 0 0-1.945-2.886zM12 20.75a.75.75 0 0 0-.75.75.75.75 0 1 1-.75-.75.75.75 0 0 0 0-1.5 2.25 2.25 0 1 0 2.25 2.25.75.75 0 0 0-.75-.75zM18 20.75a.75.75 0 0 0-.75.75.75.75 0 1 1-.75-.75.75.75 0 0 0 0-1.5 2.25 2.25 0 1 0 2.25 2.25.75.75 0 0 0-.75-.75z M19.25 11.5a.75.75 0 0 0-.75-.75h-6a.75.75 0 0 0 0 1.5h6a.75.75 0 0 0 .75-.75z"></path></svg>
          </div>
          <div class="tariff__layout tariff__text-wr">
            <p class="tariff__price">
            	<span>от </span>9 950 ₽
        	</p>
            <p class="tariff__price-old"><span>11 950 ₽</span></p>            <div class="tariff__info">
              <p>от 7 дней</p>
              <p>корзина, оплата, доставка</p>
            </div>
            <button class="cd-btn _secondary tariff__btn">Подробнее</button>
          </div>
        </div>
      </a>
            
    </div>
    <div class="cost__special">
      <a href="https://qaz-tech.kz/site-key" target="_blank" class="cost__special-layout">
        <span class="img cost__special-pic">
          <img src="/img/main-arrow.png" alt="">
        </span>
        <span class="cost__special-text-wr">
          <span class="cost__special-title">Лендинг + маркетинг</span>
          <span class="cost__special-text">от 25 950 ₽ <span class="cost__specials-link">подробнее</span></span>
        </span>
      </a>
      <a href="https://qaz-tech.kz/brb" class="cost__special-layout">
        <span class="img cost__special-pic">
          <img src="/img/main-caviar.png" alt="">
        </span>
        <span class="cost__special-text-wr">
          <span class="cost__special-title">Быстрое развитие бизнеса</span>
          <span class="cost__special-text"><span class="cost__specials-link">подробнее</span></span>
        </span>
      </a>
    </div>
  </div>
</div>

<div class="info">
  <div class="wrapp info__wrapp">
    <h3 class="title info__title">Почему более 110 000 компаний выбрали веб-студию&nbsp;Мегагрупп.ру</h3>
    <div class="info__inner">
      <div class="info__layout info__features">
        <div class="features-slider">
          <p class="features-slider__title">Наши преимущества</p>
          <div class="features-slider__inner js-features-slider">
            @foreach($advantages as $advantage)
            <div class="features-slider__item">
              <div class="img features-slider__pic">
                @if (!$advantage->photos->isEmpty())
                <img src="/img/{{ $advantage->photos->first()->path }}" alt="">
                @endif
              </div>
              <p class="features-slider__text">{{ $advantage->text }}</p>
            </div>
            @endforeach
          </div>
        </div>
      </div>
      
      <div class="info__layout info__feedback">
        <div class="feedback-slider">
          <p class="feedback-slider__title">Отзывы сайтовладельцев</p>
          <p class="feedback-slider__all-link">
            <a href="/testimonials" target="_blank">Все отзывы</a>
          </p>
          
          <div class="feedback-slider__inner js-feedback-slider">
            @foreach($reviews as $review)
            <div class="feedback-slider__item">
              <div class="feedback-slider__text">{!! $review->text !!}</div>
              <p class="feedback-slider__sign">{!! $review->name !!}  {!! $review->site !!}</p>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="line">
  <div class="wrapp line__wrapp">
    <div class="line__text">
      <p>
        @foreach($text2 as $text)
        {!! $text->text!!}
        @endforeach
      </p>
    </div>
    <div class="img"><img width="395" src="/img/gold-keys.png" alt=""></div>
  </div>
</div>

<div class="clients">
  <div class="wrapp clients__wrapp">
    @foreach($text3 as $text)
    {!! $text->title !!}
    {!! $text->text!!}
    @endforeach
    <div class="clients__inner">
      <div class="clients__layout clients__layout--big">
        <div class="clients__left">
          <div class="clients__nav">
            <p class="clients__nav-title">Для клиентов</p>
            <div class="clients__link-wr">
            	<a href="https://qaz-tech.kz/portfolio" target="_blank" class="clients__nav-link">Портфолио</a>
        	</div>
        	<div class="clients__link-wr">
            	<a href="https://qaz-tech.kz/catalog/addon" target="_blank" class="clients__nav-link">Тюнинг для сайта</a>
        	</div>
                    	<div class="clients__link-wr">
            	<a href="https://qaz-tech.kz/marketing-infografika" target="_blank" class="clients__nav-link">Маркетинг. Инфографика</a>
        	</div>
        	<div class="clients__link-wr">
            	<a href="https://qaz-tech.kz/4k-marketing" target="_blank" class="clients__nav-link">4 шага к успеху вашего бизнеса</a>
        	</div>
        	<div class="clients__link-wr">
            	<a href="https://qaz-tech.kz/dlya_klientov" target="_blank" class="clients__nav-link">Все материалы</a>
        	</div>
          </div>
          <div class="clients__nav">
            <p class="clients__nav-title">Реклама и СЕО</p>
            <div class="clients__link-wr">
            	<a href="https://qaz-tech.kz/bp" target="_blank" class="clients__nav-link">Быстрое продвижение сайта</a>
        	</div>
            <div class="clients__link-wr">
            	<a href="https://qaz-tech.kz/rekmala" target="_blank" class="clients__nav-link">Контекстная реклама</a>
        	</div>
            <div class="clients__link-wr">
            	<a href="http://seo.qaz-tech.kz/?roistat_visit=8881314" rel="nofollow" target="_blank" class="clients__nav-link">Поисковое продвижение</a>
        	</div>
          </div>
          <div class="clients__nav">
            <p class="clients__nav-title">Логотип и фирменый стиль</p>
            <div class="clients__link-wr">
            	<a href="https://qaz-tech.kz/logotext" target="_blank" class="clients__nav-link">Разработка логотипа</a>
        	</div>
            <div class="clients__link-wr">
            	<a href="https://qaz-tech.kz/styletext" target="_blank" class="clients__nav-link">Разработка фирменного стиля</a>
        	</div>
            <div class="clients__link-wr">
            	<a href="https://qaz-tech.kz/logos" target="_blank" class="clients__nav-link">Портфолио логотипов</a>
        	</div>
          </div>
        </div>
        <div class="clients__right">
          <div class="clients__nav">
            <p class="clients__nav-title">Инструкции и обучение</p>
            <div class="clients__link-wr">
            	<a href="https://cabinet.qaz-tech.kz/user/login?roistat_visit=8881314" rel="nofollow" target="_blank" class="clients__nav-link">Вход в личный кабинет</a>
        	</div>
            <div class="clients__link-wr">
            	<a href="http://help.qaz-tech.kz/?roistat_visit=8881314" rel="nofollow" target="_blank" class="clients__nav-link">Работа системы управления сайтом</a>
        	</div>
            <div class="clients__link-wr">
            	<a href="https://qaz-tech.kz/mailsetup" target="_blank" class="clients__nav-link">Настройка электронной почты</a>
        	</div>
            <div class="clients__link-wr">
            	<a href="https://qaz-tech.kz/redomain" target="_blank" class="clients__nav-link">Передача прав на домены</a>
        	</div>
            <div class="clients__link-wr">
            	<a href="http://help.qaz-tech.kz/nastroyki-indeksacii-zerkala,-xml-?roistat_visit=8881314" target="_blank" class="clients__nav-link">FAQ по оптимизации и продвижению</a>
        	</div>
            <div class="clients__link-wr">
            	<a href="https://qaz-tech.kz/tv" target="_blank" class="clients__nav-link">Программы для поддержки клиентов</a>
        	</div>
          </div>
          <div class="clients__nav">
            <p class="clients__nav-title">Сотрудничество</p>
            <div class="clients__link-wr">
            	<a href="https://qaz-tech.kz/ap" target="_blank" class="clients__nav-link">Партнерская программа</a>
        	</div>
            <div class="clients__link-wr">
            	<a href="https://qaz-tech.kz/blagotvoritelnost" target="_blank" class="clients__nav-link">Сайт бесплатно</a>
        	</div>
          </div>
        </div>
      </div>
      <div class="clients__layout clients__layout--post">
        <div class="news">
          <div class="news__wrapp">
            <p class="news__title">Новости</p>
            <a href="https://qaz-tech.kz/news" class="news__all-link">Все новости</a>
          </div>
                    <div class="news__item">
            <p class="news__item-timestamp">18.04.18</p>
            <a href="https://qaz-tech.kz/news?view=4042661" class="news__item-title">10 нововведений CMS.S3: обновленный импорт 1С, настройки качества иллюстраций и многое другое</a>
          </div>
                    <div class="news__item">
            <p class="news__item-timestamp">16.02.18</p>
            <a href="https://qaz-tech.kz/news?view=1345461" class="news__item-title">Лендинг в подарок</a>
          </div>
                  </div>
        <div class="news">
          <div class="news__wrapp">
            <p class="news__title">Обучающая рассылка</p>
            <a href="https://qaz-tech.kz/mailing" class="news__all-link">Все выпуски</a>
          </div>
          
                    <div class="news__item">
            <a href="https://qaz-tech.kz/mailing?mode=view&amp;post_id=6985861" target="_blank" class="news__item-title">
            	Выпуск №180. SEO-тактики, которые уже не работают в 2018-м году
          	</a>
          </div>
                  </div>
        <form class="subscribe" action="https://cp.maliver.ru/email/subscribe" method="post" target="_blank">
          <p class="subscribe__title">Подписаться бесплатно</p>
          <div class="cd-input subscribe__input js-subscribe">
            <input type="hidden" name="_form" value="subscribe">
            <input type="hidden" name="mailing" value="KXQ1">
            <input type="text" name="email" class="cd-input__input" placeholder="Введите ваш e-mail">
            <span class="cd-input__text">
                <span class="cd-input__error">Обязательное поле</span>
            </span>
            <button class="cd-btn subscribe__btn">
              <svg xmlns="http://www.w3.org/2000/svg" width="17" height="13" viewBox="0 0 17 13">
                <path fill="#fff" d="M5.57 11.04L1.3 6.43a.76.76 0 0 0-1.06-.04.76.76 0 0 0-.04 1.06L5 12.64c.29.31.79.32 1.09.02l10.2-10.38a.77.77 0 0 0-.01-1.07.77.77 0 0 0-1.07.01z"></path>
              </svg>
            </button>
          </div>
          <label class="cd-checkbox cd-checkbox--required">
            <input type="checkbox" checked="" class="cd-hidden" required="" name="privacy">
            <span class="cd-checkbox__pseudo-wr subscribe__pseudo-checkbox-wr">
                <span class="cd-checkbox__pseudo">
                    <svg class="cd-checkbox__indeterminate" xmlns="http://www.w3.org/2000/svg" version="1.1" width="8.5" height="7.5" viewBox="0 0 8.5 7.5">
                        <path d="M13.5 8H8V13" fill-opacity="0" stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="50" stroke-width="2.5" transform="matrix(1,0,0,1,-6.75,-6.75)"></path>
                    </svg>
                    <svg class="cd-checkbox__check" xmlns="http://www.w3.org/2000/svg" version="1.1" width="14.5" height="11.5" viewBox="0 0 14.5 11.5">
                        <path d="M20 7L12 16L8 12" fill-opacity="0" fill="#fff" stroke-linejoin="round" stroke-linecap="round" stroke-opacity="1" stroke="#fff" stroke-miterlimit="50" stroke-width="2.5" transform="matrix(1,0,0,1,-6.75,-5.75)"></path>
                    </svg>
                </span>
            </span>
            <span class="cd-checkbox__text subscribe__ckeckbox-text">
              Я согласен(а) с обработкой персональных данных и <a href="https://qaz-tech.kz/privacy" target="_blank">политикой конфиденциальности</a>
            </span>
          </label>
        </form>
        <div class="clients__bg">
          <img src="/img/pic-post.png" alt="">
        </div>
      </div>
    </div>
  </div>
</div>

<div class="text-block">
  <div class="wrapp text-block__wrapp">
    @foreach($text4 as $text)
    {!! $text->title !!}
    {!! $text->text !!}
    @endforeach
    <div class="_center">
      <a href="https://qaz-tech.kz/zakazsite" target="_blank" class="cd-btn cd-btn--L text-block__btn">Заказать сайт</a>
    </div>
  </div>
</div>






@endsection