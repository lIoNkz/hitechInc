@extends('frontend.layouts.master')
@section('meta')


      <title>{{ $metadata->title }}</title>
      {!! $metadata->meta !!}

@endsection
@section('styles')
  <link rel="stylesheet" href="/css/contactsPage.css">
  <style>
  @media (min-width: 576px) {
  main {
    margin-top: -40px;
  } 
}
    #overlay {
      display: none;
      width: 100%;
      height: 100%;
      position: fixed;
      justify-content: center;
      align-items: center;
      top: 0;
      left: 0;
      z-index: 999999999;
      background-color: #000000aa;
    }
    .modal_textToUs {
      width: 500px;
      height: 400px;
      background-color: #fff;
      border-radius: 10px;
    }
    .forms {
      width: 100%;
      height: 100%;
      padding: 30px 30px;
      box-sizing: border-box;
    }
    .forms input,
    .forms textarea {
      font-family: 'Fira Sans',sans-serif;
      margin: 0;
      padding: 0;
      outline: 0;
      height: 40px;
      border-radius: 3px;
      border: 1px solid #aaa;
      display: block;
      width: 300px;
      margin: 10px auto;
      padding: 0 10px;
    }
    .forms textarea {
      height: 100px;
      resize: none;
      padding: 5px 10px;
    }
    .forms .subBtn {
      width: unset;
      border-radius: 100px;
      background-color: #0aa440;
      color: #fff;
      padding: 10px 25px;
      cursor: pointer;
    }
  </style>
<style>
  .success p {
      color: #0aa440;
      text-align: center;
      font-size: 1.5em;
  }
</style>
@endsection
@section('content')


<section class="mp-contacts">
      @if(Session::has('status2'))
        <div class="success">
          <p>{{ Session::get('status2') }}</p>
        </div>
      @endif
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
            <a href="#dddd" class="mp-contacts__feedback-link">
              <img src="/img/oah-mail.svg" class="mp-contacts__feedback-icon" alt="">
              <span class="mp-link" id="textToUs">Написать нам</span>
            </a>
          </li>
        </ul>
        <hr class="mp-contacts__line">
        <h2 class="mp-contacts__block-title">Мы в соцсетях</h2>
        <ul class="mp-contacts__feedback-list">
          <li class="mp-contacts__feedback-item">
            <a rel="nofollow" target="_blank" class="mp-contacts__feedback-link">
              <img src="/img/oah-social-fb.svg" class="mp-contacts__feedback-icon" alt="" rel="nofollow">
              <span class="mp-link">hitech_hq</span>
            </a>
          </li>
          <li class="mp-contacts__feedback-item">
            <a  href="https://www.instagram.com/hitech_hq/?hl=ru" rel="nofollow" target="_blank" class="mp-contacts__feedback-link">
              <img src="/img/oah-social-in.svg" class="mp-contacts__feedback-icon" alt="">
              <span class="mp-link">hitech_hq</span>
            </a>
          </li>
          <li class="mp-contacts__feedback-item">
            <a  href="https://plus.google.com/112943585374850274017" rel="nofollow" target="_blank" class="mp-contacts__feedback-link">
              <svg aria-hidden="true" class="mp-contacts__feedback-icon" style="width: 20px;     margin-left: 3.5px;
    margin-right: 18px;" data-prefix="fab" data-icon="google" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512" class="svg-inline--fa fa-google fa-w-16 fa-3x"><path fill="#d44032" d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z" class=""></path></svg>
              <span class="mp-link">hitech_hq</span>
            </a>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</section>



              

<div id="overlay">
  <div class="modal_textToUs">
    <div id="hide_overlay" class="services__close js-close-popup"></div>
    <form action="{{ route('mail_textToUs') }}" method="POST" class="forms">
      {{ csrf_field() }}
      <input type="text" name="name" placeholder="Ваше имя">
      <input type="text" name="email" placeholder="Ваш email">
      <input type="text" name="phone" placeholder="+7 (7xx) xxx-xx-xx">
      <textarea name="text" placeholder="Написать..."></textarea>
      <input type="submit" class="subBtn">
    </form>
  </div>
</div>
@endsection

@section('scripts')

<script>
  $('#textToUs').click(function() {
    $('#overlay').css('display','flex');
  });
  $('#hide_overlay').click(function() {
    $('#overlay').css('display','none');
  });
  setTimeout(function() {
    $('.success').hide();
  }, 5000);
</script>

@endsection