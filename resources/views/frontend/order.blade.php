@extends('frontend.layouts.master')
@section('meta')


      <title>{{ $metadata->title }}</title>
      {!! $metadata->meta !!}

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
        <form class="form js-form2" data-form_id="47484021">
            <input name="des_type" type="hidden" value="">
            <input name="des_sale" type="hidden" value="">
            <input name="d[1]" type="hidden" value="Karaganda">
                        <input name="d[11]" type="hidden" value="">
            <input name="d[12]" type="hidden" value="">
            <input name="d[13]" type="hidden" value="">
            <input name="d[15]" type="hidden" value="0">
            <div class="form__outer">
                <div class="form__inner">
                    <label class="cd-input cd-input--required js-required">
                        <input type="text" class="cd-input__input" name="name" placeholder="например, Иван Петрович Сидоров">
                        <span class="cd-input__text">
          <span class="cd-input__label">Как вас зовут?</span>
          <span class="cd-input__error">Ошибка ввода</span>
        </span>
                    </label>
                    <label class="cd-input cd-input--required js-required">
                        <input type="text" class="cd-input__input" name="d[2]" data-type="phone" placeholder="8 (ххх) ххх-хх-хх">
                        <span class="cd-input__text">
          <span class="cd-input__label">Телефон (с кодом города)</span>
          <span class="cd-input__error">Ошибка ввода</span>
        </span>
                    </label>
                    <label class="cd-input">
                        <input type="text" class="cd-input__input" name="d[3]" data-type="email" placeholder="ivan@example.ru">
                        <span class="cd-input__text">
             <span class="cd-input__label">E-mail (желательно)</span>
             <span class="cd-input__error">Ошибка ввода</span>
           </span>
                    </label>
                    <label class="cd-selectbox cd-selectbox--required">
                        <span class="cd-selectbox__label">Тип сайта</span>
                        <input type="hidden" class="js-selectbox" name="d[6]" value="выберу после разговора с менеджером
">
                        <span class="cd-selectbox__select">
               <span class="cd-selectbox__selected">
                  выберу после разговора с менеджером

               </span>
               <span class="cd-selectbox__list" style="display: none;">
               <span data-id="1" class="cd-selectbox__item">Сайт-Визитка — 2 950 ₽</span>
               <span data-id="12" class="cd-selectbox__item">Посадочная страница — 5 950 ₽</span>
               
               <span class="cd-selectbox__test">Сайт Бизнес</span>
               <span data-id="3" class="cd-selectbox__item">Готовые сайты — 5 950 ₽</span>
               <span data-id="4" class="cd-selectbox__item">Дизайн на выбор — 7 950 ₽</span>
               <span data-id="5" class="cd-selectbox__item">Индивидуальный — 9 950 ₽</span>
               
               <span class="cd-selectbox__test">Интернет магазин</span>
               <span data-id="7" class="cd-selectbox__item">Готовый магазин — 9 950 ₽</span>
                              <span data-id="9" class="cd-selectbox__item">Индивидуальный — 24 950 ₽</span>
             </span>
           </span>
                    </label>
                    <div class="form__control">
                        <button class="form__slide js-form-slide"></button>
                        <a href="https://megagroup.ru/zakazsite#" class="form__link js-form-slide">Комментарий к заказу</a>
                    </div>
                    <label class="cd-textarea form__comment js-slide">
                        <textarea class="cd-textarea__area" name="d[16]" placeholder="Комментарий к заказу"></textarea>
                        <span class="cd-textarea__text">
                <span class="cd-textarea__error">Ошибка ввода</span>
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
                    <span class="cd-checkbox__pseudo-wr">
            <span class="cd-checkbox__pseudo">
              <svg class="cd-checkbox__indeterminate" xmlns="http://www.w3.org/2000/svg" version="1.1" width="8.5" height="7.5" viewBox="0 0 8.5 7.5">
                  <path d="M13.5 8H8V13" fill-opacity="0" stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="50" stroke-width="2.5" transform="matrix(1,0,0,1,-6.75,-6.75)"></path>
              </svg>
              <svg class="cd-checkbox__check" xmlns="http://www.w3.org/2000/svg" version="1.1" width="14.5" height="11.5" viewBox="0 0 14.5 11.5">
                  <path d="M20 7L12 16L8 12" fill-opacity="0" fill="#fff" stroke-linejoin="round" stroke-linecap="round" stroke-opacity="1" stroke="#fff" stroke-miterlimit="50" stroke-width="2.5" transform="matrix(1,0,0,1,-6.75,-5.75)"></path>
              </svg>
            </span>
          </span>
                    <span class="cd-checkbox__text form__privacy">
            Я согласен(а) с <a target="_blank" href="https://megagroup.ru/privacy">политикой обработки персональных данных</a>
          </span>
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