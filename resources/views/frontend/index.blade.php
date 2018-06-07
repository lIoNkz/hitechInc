@extends('frontend.layouts.master')
@section('meta')


      <title>{{ $metadata->title }}</title>
      {!! $metadata->meta !!}

@endsection
@section('styles')
  <link rel="stylesheet" href="/css/indexPage.css">

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
          <div class="main_svg">
            <embed src="/img/svg/main.svg" class="main_svg_img">
          </div>
        <p class="counter__text">За 3 года мы сделали <a style="font-size: 30px;">467</a> сайтов</p>
      </div>
    </div>
  </div>
</div>
<div class="services-block wrapp cost__wrapp">
  <div class="services-wrapp">
    <a href="/razrabotka-saitov">
      <div>
        <img src="/img/icons/service-5.png" alt="">
        <h3>Создание и разработка сайтов</h3>
        <p>Корпоративный сайт</p>
        <p>Интернет-магазин</p>
        <p>Сайт-визитка</p>
      </div>
    </a>
    <a href="/razrabotka-mobilnyh-prilozhenii">
      <div>
        <img src="/img/icons/service-2.png" alt="">
        <h3>Разработка мобильных приложений</h3>
        <p>Android</p>
        <p>IOs</p>
      </div>
    </a>
    <a href="/seo">
      <div>
        <img src="/img/icons/service-3.png" alt="">
        <h3>SEO продвижение</h3>
        <p>Контекстная реклама</p>
        <p>Оптимизация сайта</p>
      </div>
    </a> 
    <a href="/reklama-v-socsetyah">
      <div>
        <img src="/img/icons/service-4.png" alt="">
        <h3>Реклама в соцсетях</h3>
        <p>Реклама в Instagram</p>
        <p>Реклама в VK</p>
        <p>Реклама в Facebook</p>
      </div>
    </a>
    <a href="/seo/contextnoe-prodvizhenie">
      <div>
        <img src="/img/icons/service-1.png" alt="">
        <h3>Контекстная реклама</h3>
        <p>Yandex</p>
        <p>Google</p>
      </div>
    </a> 
    <a href="/seo/youtube">
      <div>
        <img src="/img/icons/service-6.png" alt="">
        <h3>Видеореклама в Youtube</h3>
        <p>Видеообъявления</p>
        <p>Особая реклама</p>
      </div>
    </a>
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
    <h3 class="title info__title">Почему более 110 000 компаний выбрали веб-студию&nbsp;HITECH</h3>
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

@section('scripts')
<script  src="/js/slick.min.js"></script>
<script>
$(document).ready(function() {
  $('.js-features-slider').slick({
    dots: true,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 4000,
  });
  $('.js-feedback-slider').slick({
    dots: true,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 4000
  });
});
</script>
@endsection