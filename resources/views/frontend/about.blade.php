@extends('frontend.layouts.master')
@section('content')



<section class="main">
  <h1 class="main__title">Веб-студия HITECH</h1>
  <div class="wrapp main__wrapp">
    <div class="timer">
      <div class="timer__layout timer__layout--text">
        @foreach($text5 as $text)
          {!! $text->text !!}
        @endforeach
      </div>
      <div class="timer__layout">
        <p>Разработано сайтов</p>
        <div class="timer__counter js-sites-counter"><ins>1</ins><ins>2</ins><ins>2</ins><ins>9</ins></div>
        <p>за 3 года</p>
      </div>
    </div>
    <ul class="big-features">
      @foreach($text6 as $text)
      <li class="big-features__item">
          {!! $text->text !!}
        <p class="big-features__note">
          {{ $text->title }}
        </p>
      </li>
      @endforeach
    </ul>
  </div>
</section>
<section class="features">
  <div class="wrapp features__wrapp">
    <h2 class="features__subtitle h3">Чем HITECH отличается от других?</h2>
    <div class="features__title h2">Мы обеспечим рост вашего бизнеса</div>
    <ul class="features__list">
            <li class="features__item">
        <div class="features__icon img"><svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64"><path d="M48 44a.997.997 0 0 0-1 1v3.998A2.001 2.001 0 0 1 45.008 51H18.992A2 2 0 0 1 17 48.997V26.991a1 1 0 0 0-2 0v22.006A4 4 0 0 0 18.992 53h26.016A4 4 0 0 0 49 48.998V45a.997.997 0 0 0-1-1zm.414-26.114l-6.3-6.3-.586-.586H19.01A4.001 4.001 0 0 0 15 15.003v7.006a1 1 0 0 0 2 0v-7.006A2.001 2.001 0 0 1 19.01 13H39v6a1.995 1.995 0 0 0 2 2h6v16.01a1 1 0 0 0 2 0V18.471zM46.672 19H41v-5.672zM47 41a1 1 0 1 0 2 0 1 1 0 1 0-2 0zm-22-7h14a1 1 0 1 0 0-2H25a1 1 0 1 0 0 2zm0-6h14a1 1 0 1 0 0-2H25a1 1 0 1 0 0 2zm-.003 12h6.006a1 1 0 0 0 0-2h-6.006a1 1 0 0 0 0 2zM37 36a3 3 0 1 0 3 3 3 3 0 0 0-3-3zm0 4a1 1 0 1 1 1-1 1 1 0 0 1-1 1z"></path></svg></div>
        <p class="features__text">
          Работа в рамках договора с гарантией
и ответственностью Исполнителя
        </p>
      </li>
            <li class="features__item">
        <div class="features__icon img"><svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64"><path d="M19 34a2 2 0 1 0 4 0 2 2 0 1 0-4 0zm38.006-.863a3.056 3.056 0 0 0-.007-.09L57 33a1 1 0 0 0-2 0 1.015 1.015 0 0 0 .019.196h-.013l.004.05a3.357 3.357 0 0 1-.255 1.535 2.002 2.002 0 0 1-1.845 1.173 15.037 15.037 0 0 0-5.515-9.7 1.03 1.03 0 0 0-.088-.08l-.635-.514a1.03 1.03 0 0 0-.158-.105l-.035-.027-.003.007a1 1 0 0 0-1.063 1.68l.21.168-.004.006A12.943 12.943 0 0 1 51 37.5c0 4.579-2.781 8.662-7.125 11.32L45.291 55h-5l-.944-4.124q-.9.288-1.845.507a24.849 24.849 0 0 1-10.69.07L26 55h-5l1.167-5.09A16.47 16.47 0 0 1 14.44 43H17a1 1 0 0 0 0-2H9.996A.992.992 0 0 1 9 39.997v-4.994A.999.999 0 0 1 9.996 34h3.561A14.295 14.295 0 0 1 19 26.925v-5.939l4.182 3.667a22.518 22.518 0 0 1 3.264-1.024 1.02 1.02 0 0 0 .137-.027l.105-.028.312-.067v-.016l.373-.1a1 1 0 1 0-.518-1.932l-.79.211a1.03 1.03 0 0 0-.139.048c-.784.21-1.57.468-2.265.695l-3.343-2.93L17 16.572v9.37A16.417 16.417 0 0 0 12.197 32H9.996A2.999 2.999 0 0 0 7 35.003v4.994A2.992 2.992 0 0 0 9.996 43h2.203a17.53 17.53 0 0 0 7.672 7.973L18.49 57h9.104l.746-3.258A26.86 26.86 0 0 0 32 54a26.523 26.523 0 0 0 5.896-.657c.218 1.04.802 3.657.802 3.657h9.104l-1.67-7.284c4.169-2.974 6.71-7.178 6.86-11.778a4.287 4.287 0 0 0 3.628-2.511 4.896 4.896 0 0 0 .386-2.29zM39 8a1 1 0 1 0 2 0 1 1 0 1 0-2 0zm-2 21a8.001 8.001 0 0 0 3.998-14.931L41 14v-3a1 1 0 0 0-2 0v2.252a8.062 8.062 0 0 0-4 0V9.991a1 1 0 0 0-2 0v4.018c0 .02 0 .04.002.06A8.001 8.001 0 0 0 37 29zm0-14a6 6 0 1 1-6 6 6 6 0 0 1 6-6zm-1.293 9.21h1.211v-1H39v-1h-2.082v-1.03h.52a2.464 2.464 0 0 0 1.638-.489 1.746 1.746 0 0 0 .576-1.41 1.63 1.63 0 0 0-.54-1.334 2.426 2.426 0 0 0-1.58-.447h-1.825v4.71H34v1h1.707zm1.211-5.718h.55a1.089 1.089 0 0 1 .73.203.792.792 0 0 1 .232.63.772.772 0 0 1-.278.642 1.327 1.327 0 0 1-.836.22h-.398z"></path></svg></div>
        <p class="features__text">
          Выгодные цены — сайты от 2 950 ₽, Интернет-магазины от 11 950 ₽
        </p>
      </li>
            <li class="features__item">
        <div class="features__icon img"><svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64"><path d="M53.364 27.67l-1.706-2.858-.009.005-.199-.331a.994.994 0 0 0-1.372-.34l-.084.05a.998.998 0 0 0-.344 1.371l.2.332-.01.005.8 1.34-7.061 3.18-4.49-14.529h4.78l.86 1.442.013-.008.622 1.078a.997.997 0 0 0 1.363.359l.085-.05a.995.995 0 0 0 .37-1.36l-.64-1.109.004-.002-.162-.271-.025-.043q-.013-.024-.028-.047l-.512-.857L45.206 14h-27.09l-.614 1.027-7.544 12.644-.636 1.065.842.953 19.753 22.338L31.66 54l1.744-1.973L53.157 29.69l.843-.953zm-33.866 4.941l8.66 14.306-15.81-17.881zm24.032.02l7.086-3.19-14.373 16.254zM41.523 31h-7.514a1 1 0 1 0 0 2h6.915l-8.912 15.98L22.338 33h7.653a1 1 0 1 0 0-2h-8.302l5.066-15.105h10.1zm-22.07-15.105h4.878l-4.857 14.48-6.67-3.335zm27.841 5.38a1 1 0 1 0 2 0 1 1 0 1 0-2 0z"></path></svg></div>
        <p class="features__text">
          Встроенная реклама в Яндекс и Google и генератор лидов (заявок)
        </p>
      </li>
            <li class="features__item">
        <div class="features__icon img"><svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64"><path d="M12 42c.6 0 1-.4 1-1V26c0-.6.4-1 .9-1h32.3c.5 0 .9.4.9 1v4c0 .6.5 1 1 1 .6 0 1-.4 1-1v-4c0-1.7-1.2-3-2.6-3H30c0-2.8-2.2-5-5-5s-5 2.2-5 5h-6.4c-1.4 0-2.6 1.3-2.6 3v15c0 .6.5 1 1 1zm13-22c1.7 0 3 1.3 3 3h-6c0-1.7 1.3-3 3-3zM11 45a1 1 0 1 0 2 0 1 1 0 1 0-2 0zm37 2c-.6 0-1 .4-1 1v4c0 .6-.4 1-.9 1H13.9c-.5 0-.9-.4-.9-1v-3c0-.6-.5-1-1-1-.6 0-1 .4-1 1v3c0 1.7 1.2 3 2.6 3h32.8c1.4 0 2.6-1.3 2.6-3v-4c0-.6-.5-1-1-1zm-5-14c-3.3 0-6 2.7-6 6s2.7 6 6 6h10V33H43zm8 10h-8c-2.2 0-4-1.8-4-4s1.8-4 4-4h8v8zm-9.5-4a1.5 1.5 0 1 0 3 0 1.5 1.5 0 1 0-3 0zM37 19c2.8 0 5-2.2 5-5s-2.2-5-5-5-5 2.2-5 5 2.2 5 5 5zm0-8c1.7 0 3 1.3 3 3s-1.3 3-3 3-3-1.3-3-3 1.3-3 3-3z"></path></svg></div>
        <p class="features__text">
          Гарантия возврата денег в случае ненадлежащего качества работ
        </p>
      </li>
            <li class="features__item">
        <div class="features__icon img"><svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64"><title>photo-2</title><path d="M36.998 40h-9.995a1 1 0 1 0 0 2h9.995a1 1 0 1 0 0-2z"></path><path d="M54.925 20.203L49 18.616v-3.618A2.998 2.998 0 0 0 46.002 12H17.998A2.998 2.998 0 0 0 15 14.998v3.618l-5.925 1.587a2.998 2.998 0 0 0-2.12 3.672l.921 3.437.004-.001.283 1.054a1 1 0 0 0 1.932-.517l-.777-2.898q-.012-.046-.028-.09l-.403-1.502a.999.999 0 0 1 .706-1.223L15 20.686v22.316A2.998 2.998 0 0 0 17.998 46h1.836l8.302 2.225-10.778 2.888a.999.999 0 0 1-1.223-.706L11.62 33.555l-.012.004-.246-.919a1 1 0 0 0-1.932.518l.777 2.898a1.012 1.012 0 0 0 .051.146l3.945 14.723a2.998 2.998 0 0 0 3.672 2.12L32 49.26l14.125 3.785a2.998 2.998 0 0 0 3.672-2.12l7.248-27.05a2.998 2.998 0 0 0-2.12-3.672zM17.998 44a.998.998 0 0 1-.998-.998V38h30v5.002a.998.998 0 0 1-.998.998H17.998zm3.87-8l5.852-8.777c.217-.326.343-.326.56 0L34.131 36H21.87zm12.619-3.073l2.8-2.8a.59.59 0 0 1 .995.1L42.132 36h-5.597zm20.626-9.57l-7.248 27.05a.998.998 0 0 1-1.223.706L27.562 46h18.44A2.998 2.998 0 0 0 49 43.002V33a1 1 0 0 0-2 0v3h-2.465l-4.588-6.883a2.581 2.581 0 0 0-4.074-.405l-2.518 2.518-3.41-5.116a2.233 2.233 0 0 0-3.89 0L19.466 36H17V14.998a.998.998 0 0 1 .998-.998h28.004a.998.998 0 0 1 .998.998V25a1 1 0 0 0 2 0v-4.314l5.407 1.45a.998.998 0 0 1 .706 1.222z"></path><circle cx="48" cy="29" r="1"></circle><path d="M40 17a4 4 0 1 0 4 4 4 4 0 0 0-4-4zm0 6a2 2 0 1 1 2-2 2 2 0 0 1-2 2z"></path></svg></div>
        <p class="features__text">
          Каталог уникальных дизайнов
из более чем 10 000 готовых работ
        </p>
      </li>
            <li class="features__item">
        <div class="features__icon img"><svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64"><title>mail-send</title><path d="M52.04 16H10a1 1 0 0 0 0 2h41.53L32.78 35.411a1.224 1.224 0 0 1-1.598.008l-3.513-3.162a1 1 0 0 0-1.338 1.486l3.513 3.162a3.222 3.222 0 0 0 4.296-.028l3.808-3.536L51.06 46.015H24a1 1 0 0 0 0 2h28.052a2.998 2.998 0 0 0 2.995-2.992v-26.03A3.004 3.004 0 0 0 52.039 16zm1.007 29.023a.99.99 0 0 1-.008.124L39.416 31.978l13.63-12.657v25.701z"></path><path d="M22.01 36h-4.02a1 1 0 0 0 0 2h4.02a1 1 0 0 0 0-2zM16.01 26h-4.02a1 1 0 0 0 0 2h4.02a1 1 0 0 0 0-2z"></path><circle cx="24" cy="30" r="1"></circle></svg></div>
        <p class="features__text">
          Бесплатная почтовая рассылка
для клиентов
        </p>
      </li>
            <li class="features__item">
        <div class="features__icon img"><svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64"><path d="M54 41.72a7.735 7.735 0 0 0-7.731-7.731H40V34h-1a1 1 0 0 0 0 2h3a1.02 1.02 0 0 0 .151-.011h4.118a5.736 5.736 0 0 1 5.364 7.755C49.843 49.59 41.734 54.001 32 54.001a27.57 27.57 0 0 1-12.951-3.02l-.004.005-.457-.253a1 1 0 1 0-.97 1.75l.837.463a1.01 1.01 0 0 0 .19.081A29.93 29.93 0 0 0 32 56.001c10.405 0 19.434-4.774 21.545-11.671v.17A7.965 7.965 0 0 0 54 41.72zm-36.269-5.731h4.118a1.016 1.016 0 0 0 .15.011H25a1 1 0 0 0 0-2h-1v-.011h-6.269A7.73 7.73 0 0 0 10 41.72a13.464 13.464 0 0 0 .448 2.587 11.147 11.147 0 0 0 .685 1.72 1.015 1.015 0 0 0 .071.15l.05.085q.149.285.314.564l.007-.006.108.186a1 1 0 1 0 1.732-1l-.394-.682a9.172 9.172 0 0 1-.66-1.598 5.733 5.733 0 0 1 5.37-7.737zm-3.837 13.285a1 1 0 1 0 2 0 1 1 0 1 0-2 0zM36 38a4 4 0 1 0-6.357 3.218l-3.88 6.79-.052.098a2.578 2.578 0 0 0-.168.437 2.898 2.898 0 0 0 .64 2.774C27.203 52.485 29.07 53 32 53s4.796-.515 5.818-1.683a2.898 2.898 0 0 0 .64-2.774 2.572 2.572 0 0 0-.17-.437l-.051-.098-3.88-6.79A3.984 3.984 0 0 0 36 38zm-4-2a2 2 0 1 1-2 2 2 2 0 0 1 2-2zm.5 6l4 7s1 2-4.5 2-4.5-2-4.5-2l4-7zm-.5-9a13 13 0 1 0-13-13 13 13 0 0 0 13 13zm0-24a11 11 0 1 1-11 11A11 11 0 0 1 32 9z"></path></svg></div>
        <p class="features__text">
          Персональный менеджер, ведущий заказ сайта
        </p>
      </li>
            <li class="features__item">
        <div class="features__icon img"><svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64"><path d="M51.1 26h-4.3c0-.1-.1-.2-.1-.2l3.1-3.1c.7-.7.7-1.9 0-2.6L44 14.3c-.7-.7-1.9-.7-2.6 0l-3.1 3.1c-.1 0-.2-.1-.2-.1V13c0-1-.8-1.9-1.9-1.9h-8.3c-1 0-1.9.8-1.9 1.9v4.3c-.1 0-.2.1-.2.1l-3.1-3.1c-.7-.7-1.9-.7-2.6 0l-5.8 5.8c-.7.7-.7 1.9 0 2.6l3.1 3.1c0 .1-.1.2-.1.2H13c-1 0-1.9.8-1.9 1.9v8.3c0 1 .8 1.9 1.9 1.9h4.3c0 .1.1.2.1.2l-3.1 3.1c-.7.7-.7 1.9 0 2.6l5.8 5.8c.7.7 1.9.7 2.6 0l3.1-3.1c.1 0 .2.1.2.1v4.3c0 1 .8 1.9 1.9 1.9h8.3c1 0 1.9-.8 1.9-1.9v-4.3c.1 0 .2-.1.2-.1l3.1 3.1c.7.7 1.9.7 2.6 0l5.8-5.8c.7-.7.7-1.9 0-2.6l-3.1-3.1c0-.1.1-.2.1-.2h4.3c1 0 1.9-.8 1.9-1.9v-8.3c0-1.1-.8-1.9-1.9-1.9zM51 36h-5.6l-.2.7c-.2.5-.4.9-.6 1.4l-.3.6.5.5 3.4 3.4-5.7 5.7-3.4-3.4-.5-.5-.6.2c-.4.2-.9.4-1.4.6l-.6.2V51h-8v-5.6l-.7-.2c-.5-.2-.9-.4-1.4-.6l-.6-.3-.5.5-3.4 3.4-5.7-5.7 3.4-3.4.5-.5-.2-.6c-.2-.4-.4-.9-.6-1.4l-.2-.6H13v-8h5.6l.2-.7c.2-.5.4-.9.6-1.4l.3-.6-.5-.5-3.4-3.4 5.7-5.7 3.4 3.4.5.5.6-.3c.4-.2.9-.4 1.4-.6l.7-.2V13h8v5.6l.7.2c.5.2.9.4 1.4.6l.6.3.5-.5 3.4-3.4 5.7 5.7-3.4 3.4-.5.5.3.6c.2.4.4.9.6 1.4l.2.7H51V36zm-10.1-5.3c0-.6-.5-1-1.1-.9-.6 0-1 .5-.9 1.1l.1.9v.2c0 3.9-3.1 7-7 7s-7-3.1-7-7 3.1-7 7-7c1.6 0 3 .5 4.2 1.4l.8.7c.4.4 1 .3 1.4-.1.4-.4.3-1-.1-1.4-.2-.2-.4-.4-.7-.6l-.1-.1s-.1-.1-.2-.1C35.8 23.7 34 23 32 23c-5 0-9 4-9 9s4 9 9 9 9-4 9-9v-.3l-.1-1zM31 32a1 1 0 1 0 2 0 1 1 0 1 0-2 0z"></path></svg></div>
        <p class="features__text">
          Удобная и простая в использовании система управления сайтом (CMS)
        </p>
      </li>
            <li class="features__item">
        <div class="features__icon img"><svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64"><title>message</title><circle cx="39" cy="32" r="2"></circle><circle cx="32" cy="32" r="2"></circle><path d="M10.217 28.999a1 1 0 0 0 2 .008h.005a20.001 20.001 0 1 1 34.13 16.922l.008.006a1 1 0 1 0 1.571 1.237 22 22 0 1 0-37.72-18.232h.008l-.002.059z"></path><circle cx="25" cy="32" r="2"></circle><path d="M42.89 51.12l.01-.006-1.793-1.303a20.01 20.01 0 0 1-28.885-14.818h-.005a1 1 0 0 0-2 .006l.002.06h-.008a22.015 22.015 0 0 0 30.661 17.079l6.547 4.676a1 1 0 0 0 1.162-1.628z"></path></svg></div>
        <p class="features__text">
          Возможность установки онлайн-консультанта и других сервисов
        </p>
      </li>
            <li class="features__item">
        <div class="features__icon img"><svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64"><path d="M31 11a1 1 0 1 0 2 0 1 1 0 1 0-2 0zm20.606 17.061a19.886 19.886 0 0 0-3.203-7.497 2.957 2.957 0 0 0-.383-3.632l.005-.005a21.999 21.999 0 0 0-9.776-6.027 1.03 1.03 0 0 0-.314-.122l-.634-.135q-.15-.037-.301-.072v.008l-1.003-.213a1 1 0 1 0-.416 1.956l1.419.302v.006a19.984 19.984 0 0 1 9.564 5.666l-.001.002a1 1 0 1 1-1.438 1.388l-.005.005a17.981 17.981 0 0 0-26.334.09l-.006-.006a.997.997 0 1 1-1.427-1.392 19.989 19.989 0 0 1 9.582-5.736l1.485-.343a1 1 0 1 0-.45-1.949l-.97.224v-.008q-.28.065-.559.137l-.401.093a1.04 1.04 0 0 0-.228.081 21.997 21.997 0 0 0-9.857 6.068l-.002-.002c-.008.008-.014.018-.022.027l-.01.009h.001a2.966 2.966 0 0 0-.397 3.68 19.889 19.889 0 0 0-3.131 7.397A4.984 4.984 0 0 0 8 32.997v6.006a5 5 0 0 0 10 0v-6.006a4.981 4.981 0 0 0-3.596-4.773 17.892 17.892 0 0 1 2.698-6.316 2.914 2.914 0 0 0 3.04-.676l.013.012a16 16 0 0 1 23.678-.014l.016-.015a2.912 2.912 0 0 0 2.992.611 17.89 17.89 0 0 1 2.755 6.399A4.984 4.984 0 0 0 46 32.997v6.006a4.98 4.98 0 0 0 3.508 4.745l-2.505 5.01A2.57 2.57 0 0 1 45.008 50h-2.009a1 1 0 0 0 0 2h2.009a4.543 4.543 0 0 0 3.784-2.348l2.859-5.718A4.985 4.985 0 0 0 56 39.003v-6.006a4.981 4.981 0 0 0-4.394-4.936zM16 32.997v6.006a3 3 0 0 1-6 0v-6.006a3 3 0 0 1 6 0zm38 6.006a3 3 0 0 1-6 0v-6.006a3 3 0 0 1 6 0zM39.001 50h-2.142a4 4 0 1 0 0 2H39a1 1 0 0 0 0-2zM33 53a2 2 0 1 1 2-2 2 2 0 0 1-2 2z"></path></svg></div>
        <p class="features__text">
          Бесплатная телефонная поддержка
7 дней в неделю
        </p>
      </li>
            <li class="features__item">
        <div class="features__icon img"><svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64"><path d="M53.9 42.7c-.3-.9-1-1.5-1.9-1.7-.5-.1-1-.1-1.5 0-.1 0-.2 0-.3.1l-7.4 1.7c-.2-.8-.7-1.5-1.4-1.9-.5-.3-1-.4-1.5-.4h-4.5c-.9 0-2.4-.4-3.1-.9l-2.1-1.4c-1.1-.7-2.9-1.2-4.2-1.2h-4c-.6 0-1 .4-1 1s.4 1 1 1h4c.9 0 2.4.4 3.1.9l2.1 1.4c1.1.7 2.9 1.2 4.2 1.2H40c.1 0 .3 0 .5.2.3.2.5.5.5 1.1 0 .6-.2.9-.5 1.1-.2.1-.4.1-.5.1h-9.5c-.6 0-1 .4-1 1s.4 1 1 1H40c.4 0 .9-.1 1.5-.4.7-.4 1.1-1 1.4-1.8l7.9-1.9h.8c.3.1.4.2.5.4.1.4 0 .7-.3 1-.1.2-.3.3-.3.3-.6.4-1.1.8-1.7 1.2-1.4.9-2.7 1.8-4.2 2.5-1.7 1-3.4 1.8-4.9 2.4-1.8.7-3.4 1.1-4.7 1.2-1.6.1-3.5-.1-5.7-.6-1.7-.4-3.5-.9-5.3-1.6-1.7-.6-3.4-1.3-5.1-2-.2-.1-.3-.2-.4-.2-.1-.1-.3-.1-.4-.1V36c0-1.7-1.3-3-3-3h-3c-1.7 0-3 1.3-3 3v5c0 .6.4 1 1 1s1-.4 1-1v-5c0-.6.4-1 1-1h3c.6 0 1 .4 1 1v14c0 .6-.4 1-1 1h-3c-.6 0-1-.4-1-1v-1c0-.6-.4-1-1-1s-1 .4-1 1v1c0 1.7 1.3 3 3 3h3c1.7 0 3-1.3 3-3v-.4c.4.2.8.4 1.2.5 1.3.6 2.7 1.1 4 1.6 1.9.7 3.8 1.2 5.5 1.6 2.4.5 4.5.8 6.3.6 1.6-.1 3.4-.6 5.3-1.4 1.6-.6 3.4-1.5 5.2-2.5 1.9-1.1 3.8-2.2 5.6-3.5.2-.2.4-.3.5-.3.2-.1.4-.3.7-.7.6-.7.9-1.7.5-2.8zM10 45a1 1 0 1 0 2 0 1 1 0 1 0-2 0zm23.7-15.5c.1 0 .3.1.4.1h.1c.3.1.5.1.8.1V38c0 .6.4 1 1 1s1-.4 1-1v-5.4h.2c2.2.2 5.6.2 7.7-1 3.2-1.9 3.1-4 2-6-1.2-2-2.9-3.1-6.2-1.3-1.5.8-2.7 2.5-3.7 4.2V27c0-3.6.5-6.1 1.4-7.7.3-.5.5-.9.8-1.1.8.5 1.8.8 2.8.8 2.8 0 5-2.2 5-5s-2.2-5-5-5-5 2.2-5 5c0 1 .3 1.9.8 2.7-.4.4-.8.9-1.2 1.7-.9 1.7-1.5 4.2-1.6 7.4-.5-1.9-1.3-4.1-2.6-5.4-2.7-2.7-4.7-2-6.4-.4-1.7 1.7-2.3 3.7.4 6.4 1.7 1.8 5.1 2.7 7.3 3.1zM42 11c1.7 0 3 1.3 3 3s-1.3 3-3 3-3-1.3-3-3 1.3-3 3-3zm-.3 15.1c1.9-1.1 2.6-.9 3.4.5.8 1.4.7 2.1-1.2 3.2-.7.4-1.8.7-3.2.8-.8.1-1.7.1-2.6 0 .3-.5.5-1 .9-1.5.9-1.4 1.8-2.5 2.7-3zm-14.3-4.6c1.2-1.2 2-1.2 3.6.4.7.7 1.3 1.8 1.8 3.4.2.7.4 1.4.6 2.2-.7-.2-1.5-.3-2.2-.6-1.5-.5-2.7-1.1-3.4-1.8-1.6-1.7-1.6-2.4-.4-3.6z"></path></svg></div>
        <p class="features__text">
          Постоянное обновление и развитие системы управления сайтами
и клиентских сервисов
        </p>
      </li>
            <li class="features__item">
        <div class="features__icon img"><svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64"><title>text</title><circle cx="30" cy="50" r="1"></circle><path d="M17.36 23.681h5.28L23.69 27H27l-5.132-14h-3.755L13 27h3.31zm2.645-8.516q.08.343.263.934t1.64 5.103h-3.776q1.546-4.816 1.873-6.037zM26.001 49H13.999a1 1 0 0 0 0 2h12.002a1 1 0 0 0 0-2zM31.999 15h18.002a1 1 0 0 0 0-2H31.999a1 1 0 0 0 0 2zM50.001 19H31.999a1 1 0 0 0 0 2h18.002a1 1 0 0 0 0-2zM50.001 43H13.999a1 1 0 0 0 0 2h36.002a1 1 0 0 0 0-2zM50.001 31H13.999a1 1 0 0 0 0 2h36.002a1 1 0 0 0 0-2zM50.001 25H31.999a1 1 0 0 0 0 2h18.002a1 1 0 0 0 0-2zM50.001 37H13.999a1 1 0 0 0 0 2h36.002a1 1 0 0 0 0-2z"></path></svg></div>
        <p class="features__text">
          Группа ВКонтакте с ежедневными полезными советами
        </p>
      </li>
          </ul>
  </div>
</section>
<section class="services-content">
  <div class="wrapp services-content__wrapp">
    <div class="h2 services-content__title">Наши партнеры</div>
    <nav class="services-content__list">
      <a href="https://onicon.ru/?roistat_visit=8953956" rel="nofollow" target="_blank" class="services-content__item img">
        <img src="/img/pic-onicon.png" alt="">
      </a>
      <a href="https://maliver.ru/?roistat_visit=8953956" rel="nofollow" target="_blank" class="services-content__item img">
        <img src="/img/pic-maliver.png" alt="">
      </a>
      <a href="https://rekmala.ru/?roistat_visit=8953956" rel="nofollow" target="_blank" class="services-content__item img">
        <img src="/img/pic-rekmala.png" alt="">
      </a>
      <a href="https://megacrm.ru/?roistat_visit=8953956" rel="nofollow" target="_blank" class="services-content__item img">
        <img src="/img/pic-crm.png" alt="">
      </a>
    </nav>
    <video class="services-content__video" width="560" height="315" controls>
      <source src="http://qaz-tech.kz/video/qaztech.mp4" type="video/mp4">
    </video>
  </div>
</section>
<section class="request">
  <div class="wrapp request__wrapp">
    @foreach($text7 as $text)
    <h2 class="h2 request__title">{!! $text->title !!}</h2>
    <div class="request__text">
      {!! $text->text !!}
    </div>
    @endforeach
    <form class="request__form js-form" data-form_id="107761241">
      <div class="request__form-inner">
        <label class="request__input cd-input cd-input--required js-required">
          <input type="text" class="cd-input__input" name="d[0]" placeholder="например, Иван Петрович Сидоров">
          <span class="cd-input__text">
          <span class="cd-input__label">Представьтесь</span>
          <span class="cd-input__error">Ошибка ввода</span>
        </span>
        </label>
        <label class="request__input cd-input cd-input--required js-required">
          <input type="text" class="cd-input__input" name="d[1]" data-type="phone" placeholder="+7 (***) ***-**-**">
          <span class="cd-input__text">
          <span class="cd-input__label">Ваш телефон</span>
          <span class="cd-input__error">Ошибка ввода</span>
        </span>
        </label>
      </div>
      <button class="cd-btn cd-btn--L request__btn">Заказать звонок</button>
      <p class="request__note">Оставляя заявку, вы принимаете <a href="https://megagroup.ru/privacy" target="_blank">политику конфиденциальности</a></p>
    </form>
  </div>
</section>
<section class="lp-feedback">
  <div class="wrapp lp-feedback__wrapp" role="toolbar">
    <div class="lp-feedback__title">Отзывы</div>
    <ul class="lp-cslider js-feedback-slider">
      @foreach($reviews as $review)
      <li class="lp-cslider__slide">
        <div class="lp-cslider__card">
          <p class="lp-cslider__title">{!! $review->name !!}</p>
          <p class="lp-cslider__link-wr">
            <a href="#" class="lp-cslider__link">{!! $review->site !!}</a>
          </p>
          <div class="lp-cslider__content">
                {!! $review->text !!}
          </div>
        </div>
      </li>
      @endforeach
  </div>
</section>



@endsection