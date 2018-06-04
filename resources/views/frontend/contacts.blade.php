@extends('frontend.layouts.master')
@section('meta')


      <title>{{ $metadata->title }}</title>
      {!! $metadata->meta !!}

@endsection
@section('styles')
  <link rel="stylesheet" href="/css/contactsPage.css">

@endsection
@section('content')


<section class="mp-contacts">
  <h1 class="mp-contacts__title">Контакты</h1>
  <div class="mp-wrapp mp-contacts__wrapp">
    <ul class="mp-contacts__container">
      <li class="mp-contacts__block mp-contacts__sales">
      @foreach($text8 as $text)
      {!! $text->text !!}
      @endforeach
      </li>
      <li class="mp-contacts__block mp-contacts__branches mapClass">
        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A04f25834411680cb16138fa2b38fa5346c53614050d3987ccd56c3372f05a840&amp;source=constructor" width="100%" height="100%" frameborder="0"></iframe>          
      </li>
      <li class="mp-contacts__block mp-contacts__feedback">
        <h2 class="mp-contacts__block-title">Свяжитесь с нами</h2>
        <ul class="mp-contacts__feedback-list">
                <li class="mp-contacts__feedback-item">
            <a href="/mail" class="mp-contacts__feedback-link">
              <img src="/img/oah-mail.svg" class="mp-contacts__feedback-icon" alt="">
              <span class="mp-link">Написать нам</span>
            </a>
          </li>
                  <li class="mp-contacts__feedback-item">
            <a href="/feedgood" class="mp-contacts__feedback-link">
              <img src="/img/oah-like.svg" class="mp-contacts__feedback-icon" alt="">
              <span class="mp-link">Похвалить</span>
            </a>
          </li>
                  <li class="mp-contacts__feedback-item">
            <a href="/feedbad" class="mp-contacts__feedback-link">
              <img src="/img/oah-dislike.svg" class="mp-contacts__feedback-icon" alt="">
              <span class="mp-link">Пожаловаться</span>
            </a>
          </li>
                </ul>
        <hr class="mp-contacts__line">
        <h2 class="mp-contacts__block-title">Мы в соцсетях</h2>
        <ul class="mp-contacts__feedback-list">
                <li class="mp-contacts__feedback-item">
            <a href="https://vk.com/megagroup_ru" rel="nofollow" target="_blank" class="mp-contacts__feedback-link">
              <img src="/img/oah-social-vk.svg" class="mp-contacts__feedback-icon" alt="">
              <span class="mp-link">megagroup_ru</span>
            </a>
          </li>
                  <li class="mp-contacts__feedback-item">
            <a href="https://www.facebook.com/megarussia" rel="nofollow" target="_blank" class="mp-contacts__feedback-link">
              <img src="/img/oah-social-fb.svg" class="mp-contacts__feedback-icon" alt="">
              <span class="mp-link">megarussia</span>
            </a>
          </li>
                  <li class="mp-contacts__feedback-item">
            <a href="https://twitter.com/megagroup"  rel="nofollow" target="_blank" class="mp-contacts__feedback-link">
              <img src="/img/oah-social-tw.svg" class="mp-contacts__feedback-icon" alt="">
              <span class="mp-link">@megagroup</span>
            </a>
          </li>
                  <li class="mp-contacts__feedback-item">
            <a href="https://www.instagram.com/megagroup_ru/"  rel="nofollow" target="_blank" class="mp-contacts__feedback-link">
              <img src="/img/oah-social-in.svg" class="mp-contacts__feedback-icon" alt="">
              <span class="mp-link">megagroup_ru</span>
            </a>
          </li>
                  <li class="mp-contacts__feedback-item">
            <a href="https://www.youtube.com/megagrouptv" rel="nofollow" target="_blank" class="mp-contacts__feedback-link">
              <img src="/img/oah-social-yt.svg" class="mp-contacts__feedback-icon" alt="">
              <span class="mp-link">megagrouptv</span>
            </a>
          </li>
                </ul>
      </li>
    </ul>
  </div>
</section>

@endsection

@section('scripts')


@endsection