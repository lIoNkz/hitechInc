@extends('frontend.layouts.master')
@section('meta')


      <title>{{ $metadata->title }}</title>
      {!! $metadata->meta !!}

@endsection
@section('styles')

<link rel="stylesheet" href="/css/servicesPage.css">
@endsection
@section('content')



<section class="pp-switch">
  <div class="wrapp pp-switch__wrapp _center">
    <h1 class="h2 pp-switch__title">Цены на создание сайтов</h1>
    <p class="pp-switch__subtitle">Узнайте сколько будет стоить разработка сайта «под ключ» — всё от Визитки до Интернет-Магазина</p>
    <div class="_center">
      <a href="/d/738331/d/mega_price-list.pdf" target="_blank" class="cd-btn">Прайс-лист PDF</a>
    </div>
    <ul class="switch__cards">
      @foreach($siteprices as $site)
            <li class="switch__card-item ">      
              <a href="/razrabotka-saitov{!! $site->link !!}" class="switch__card-wrapp">
                <h2 class="switch__card-title">{!! $site->title !!}</h2>
                  <div class="img switch__card-icon">{!! $site->image !!}</div>
                  <p class="switch__card-price">{!! $site->price !!}</p> 
                  <p class="switch__card-old-price">{!! $site->old_price !!}</p>           
                  <div class="switch__card-info-wr">{!! $site->info !!}</div>
                  <span class="switch__card-link cd-btn _secondary">Подробнее</span>
                </a>
          </li>
      @endforeach
    </ul>
  </div>
</section>

<section class="pp-nice">
  <div class="wrapp pp-nice__wrapp">
  @foreach($text9 as $text)
    {!! $text->text !!}
  @endforeach
  </div>
</section>

<section class="pp-service">
  <div class="wrapp pp-service__wrapp">
    <div class="pp-service__layout">
      <div class="pp-service__pic">
        <img src="/img/pic-200.png" alt="">
      </div>
      <p class="pp-service__text">различных услуг мы предоставляем, чтобы Ваш сайт работал эффективно. Ознакомьтесь со списком дополнительных услуг и подберите подходящую именно Вам</p>
    </div>
    <div class="_center">
      <a href="/price2" class="pp-service__btn cd-btn cd-btn--L">Дополнительные услуги</a>
    </div>
  </div>
</section>

<section class="pp-price">
  <div class="wrapp pp-price__wrapp">
    <div class="pp-price__layout">
      @foreach($text10 as $text)
      <h3 class="pp-price__title">{!! $text->title !!}</h3>
      {!! $text->text !!}
      @endforeach
    </div>
    <div class="pp-price__layout">
      @foreach($text11 as $text)
      <h3 class="pp-price__title">{!! $text->title !!}</h3>
      {!! $text->text !!}
      @endforeach
    </div>
    <div class="pic pp-price__pic">
      <img src="/img/pic-gold.png" alt="">
    </div>
  </div>
</section>



@endsection

@section('scripts')


@endsection