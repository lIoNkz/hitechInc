@extends('frontend.layouts.master')
@section('meta')


      <title>{{ $metadata->title }}</title>
      {!! $metadata->meta !!}

@endsection
@section('styles')
<link rel="stylesheet" href="/css/orderPage.css">

@endsection
@section('content')

<section class="main">
    <div class="wrapp main__wrapp">
        <h1 class="main__title">Заказать сайт</h1>
        <p class="main__text">Заполните заявку и персональный менеджер свяжется с вами для уточнения деталей
            заказа</p>
    </div>
</section>
<div class="request">
    <div class="wrapp request__wrapp">
        <form class="form js-form2" method="post" action="{{route('mail_order')}}">
            <div class="form__outer">{{ csrf_field() }}
                <div class="form__inner">
                    <label class="cd-input cd-input--required js-required">
                        <input type="text" class="cd-input__input" name="name" placeholder="Ваше имя">
                        <span class="cd-input__text">
          <span class="cd-input__label">Как вас зовут?</span>
          <span class="cd-input__error">Ошибка ввода</span>
        </span>
                    </label>
                    <label class="cd-input cd-input--required js-required">
                        <input type="text" class="cd-input__input" name="phone" data-type="phone" placeholder="+7 (ххх) ххх-хх-хх">
                        <span class="cd-input__text">
          <span class="cd-input__label">Телефон (с кодом города)</span>
          <span class="cd-input__error">Ошибка ввода</span>
        </span>
                    </label>
                    <label class="cd-input">
                        <input type="text" class="cd-input__input" name="email" data-type="email" placeholder="Ваша почта">
                        <span class="cd-input__text">
             <span class="cd-input__label">E-mail</span>
             <span class="cd-input__error">Ошибка ввода</span>
           </span>
                    </label>
                    <label class="cd-selectbox cd-selectbox--required">
                        <span class="cd-selectbox__label">Тип сайта</span>
            <!--             <input type="hidden" class="js-selectbox" name="site" value="выберу после разговора с менеджером
            "> -->
                        <span class="cd-selectbox__select">
               <span class="cd-selectbox__selected">
                  выберу после разговора с менеджером

               </span>
               <span class="cd-selectbox__list" style="display: none;">
               <span class="cd-selectbox__test">Сайт</span>
              <span data-id="1" class="cd-selectbox__item">Сайт-визитка — 15 950 тг</span>
               <span data-id="2" class="cd-selectbox__item">Landing Page — 27 950 тг</span>
               <span data-id="3" class="cd-selectbox__item">Интернет магазин — 99 950 тг</span>
               <span data-id="4" class="cd-selectbox__item">Корпоративный сайт — 99 950 тг</span>
               <span data-id="5" class="cd-selectbox__item">Сайт-каталог — 99 950 тг</span>
               <span data-id="6" class="cd-selectbox__item">Техническая поддержка вашего сайта</span>
               <span class="cd-selectbox__test">SEO</span>
               <span data-id="7" class="cd-selectbox__item">Контекстная реклама</span>
               <span data-id="8" class="cd-selectbox__item">Реклама в соцсетях</span>
               <span data-id="9" class="cd-selectbox__item">Видеообъявления в Youtube</span>
               <span class="cd-selectbox__test">Мобильное приложение</span>
               <span data-id="10" class="cd-selectbox__item">Разработка в Android</span>
               <span data-id="11" class="cd-selectbox__item">Разработка в IOs</span>
               <span class="cd-selectbox__test">Программное обеспечение</span>
               <span data-id="12" class="cd-selectbox__item">Разработка ПО для Windows</span>
               <span data-id="13" class="cd-selectbox__item">Разработка ПО для Mac</span>
             </span>
           </span>
                    </label>

                </div>
                <div class="img form__pic">
                    <img class="js-hint" src="https://megagroup.ru/d/738331/t/v15295/images/static/pages/zakazsite/img/pic-badge.png" alt="">
                    <div style="display: none;" class="hint">
                        <p><strong>Гарантия возврата денег за созданный сайт в течение 30 дней с момента оплаты. Если
                            Вас не устроит сайт, Вы вправе расторгнуть договор и вернуть уплаченные деньги!</strong>
                            <br><br> *При условии отказа от прав на созданный дизайн и HTML-файлы сайта. В случае, если
                            Клиентом был запрошен и получен архив сайта, оплата не возвращается.</p>
                        <p>Возврат денежных средств, уплаченных за дополнительные работы, сервисы и в рамках
                            эксклюзивных проектов осуществляется в общем порядке, предусмотренном российским
                            законодательств<br>ом.</p>
                    </div>
                </div>
            </div>
            <div class="form__send">
                <button class="cd-btn form__send-btn js-form">Отправить заявку</button>
                <label class="cd-checkbox cd-checkbox--required form__checkbox">
                    <input type="checkbox" checked="" class="cd-hidden" name="d[15]" required="">
                </label>
            </div>
                        <div class="form__note">
                <p>Не откладывайте на завтра то, что можно сделать сейчас!</p>
                <p><strong>Потерянное время стоит дороже!</strong></p>
            </div>
        </form>
    </div>
</div>

@endsection

@section('scripts')

<script  src="/js/jquery.tooltip.js"></script>
<script  src="/js/selectbox.js"></script>
@endsection