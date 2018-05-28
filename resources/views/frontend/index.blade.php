@extends('frontend.layouts.master')
@section('meta')


      <title>{{ $metadata->title }}</title>
      {!! $metadata->meta !!}

@endsection
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
      @foreach($siteprices as $site)
      <a href="/razrabotka-saitov{!! $site->link !!}" class="tariff">
        <h2 class="tariff__title">{!! $site->title !!}</h2>
        <div class="tariff__inner">
          <div class="tariff__layout img tariff__icon">{!! $site->image !!}</div>
          <div class="tariff__layout tariff__text-wr">
            <p class="tariff__price">
            	{!! $site->price !!}
        	  </p>
            <p class="tariff__price-old">{!! $site->old_price !!}</p>
            <div class="tariff__info">
              {!! $site->info !!}
            </div>
            <button class="cd-btn _secondary tariff__btn">Подробнее</button>
          </div>
        </div>
      </a>
      @endforeach      
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
      <a href="/order" target="_blank" class="cd-btn cd-btn--L text-block__btn">Заказать сайт</a>
    </div>
  </div>
</div>






@endsection