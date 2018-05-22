@extends('frontend.layouts.master')
@section('content')


<section class="mp-contacts">
  <h1 class="mp-contacts__title">Контакты</h1>
  <div class="mp-wrapp mp-contacts__wrapp">
    <ul class="mp-contacts__container">
      <li class="mp-contacts__block mp-contacts__sales">
        <h2 class="mp-contacts__block-title">Отдел продаж</h2>
        <p class="mp-contacts__block-worktime mp-time-work-js" data-hour_work_start="9:30" data-hour_work_end="18:00" data-time_zone_region="3" data-get_week_day_arr="[1,1,1,1,1,0,0]" data-weekend_days="29.4,30.4,1.5,2.5,9.5" data-day_off="false">
          9:30-18:00 (MSK) Пн-Пт
        </p>
        <ul class="mp-contacts__phones">
                <li class="mp-contacts__phones-item">
            <p class="mp-contacts__phones-item-title">Россия (бесплатный звонок)</p>
            <a href="tel:88005556342" class="mp-contacts__phone">8 800 555-63-42</a>
          </li>
                  <li class="mp-contacts__phones-item">
            <p class="mp-contacts__phones-item-title">Москва</p>
            <a href="tel:+74997053010" class="mp-contacts__phone">+7 (499) 705-30-10</a>
          </li>
                  <li class="mp-contacts__phones-item">
            <p class="mp-contacts__phones-item-title">Санкт-Петербург</p>
            <a href="tel:+78126007733" class="mp-contacts__phone">+7 (812) 600-77-33</a>
          </li>
                </ul>
        <div href="#" class="mp-contacts__phones-other js-regions">
          Региональные телефоны
          <div class="mp-regions-popup">
            <p class="mp-regions-popup__title">Региональные телефоны</p>
            <div class="mp-regions-popup__close js-regions-close"></div>
            <ul class="mp-regions-popup__phones">
                       <li class="mp-regions-popup__phones-item">
                <p class="mp-regions-popup__phones-item-title">Санкт-Петербург</p>
                <a href="tel:+78126007733" class="mp-regions-popup__phone">+7 (812) 600-77-33</a>
              </li>
                          <li class="mp-regions-popup__phones-item">
                <p class="mp-regions-popup__phones-item-title">Новосибирск</p>
                <a href="tel:+78126007733" class="mp-regions-popup__phone">+7 (383) 207-80-51</a>
              </li>
                          <li class="mp-regions-popup__phones-item">
                <p class="mp-regions-popup__phones-item-title">Ростов-на-Дону</p>
                <a href="tel:+78126007733" class="mp-regions-popup__phone">+7 (863) 209-81-90</a>
              </li>
                          <li class="mp-regions-popup__phones-item">
                <p class="mp-regions-popup__phones-item-title">Калининград</p>
                <a href="tel:+78126007733" class="mp-regions-popup__phone">+7 (401) 265-84-48</a>
              </li>
                          <li class="mp-regions-popup__phones-item">
                <p class="mp-regions-popup__phones-item-title">Казань</p>
                <a href="tel:+78126007733" class="mp-regions-popup__phone">+7 (843) 202-37-37</a>
              </li>
                          <li class="mp-regions-popup__phones-item">
                <p class="mp-regions-popup__phones-item-title">Екатеринбург</p>
                <a href="tel:+78126007733" class="mp-regions-popup__phone">+7 (343) 357-94-54</a>
              </li>
                        </ul>
          </div>
        </div>

      </li>
      <li class="mp-contacts__block mp-contacts__tech">
        <h2 class="mp-contacts__block-title">Техническая поддержка</h2>
        <p class="mp-contacts__block-worktime mp-time-work-js" data-hour_work_start="6:00" data-hour_work_end="19:00" data-time_zone_region="3" data-get_week_day_arr="[1,1,1,1,1,0,0]" data-weekend_days="29.4,30.4,1.5,2.5,9.5" data-day_off="false">
          6:00-19:00 (MSK) Пн-Вс
        </p>
        <ul class="mp-contacts__phones">
                <li class="mp-contacts__phones-item">
            <p class="mp-contacts__phones-item-title">Россия (бесплатный звонок)</p>
            <a href="tel:88005552214" class="mp-contacts__phone">8 800 555-22-14</a>
          </li>
                  <li class="mp-contacts__phones-item">
            <p class="mp-contacts__phones-item-title">Санкт-Петербург</p>
            <a href="tel:+78127033690" class="mp-contacts__phone">+7 (812) 703-36-90</a>
          </li>
                </ul>
        <a href="mailto:support@megagroup.ru" class="mp-contacts__link mp-link">
          <span>support@megagroup.ru</span>
        </a>
      </li>
      <li class="mp-contacts__block mp-contacts__office">
        <h2 class="mp-contacts__block-title">Наши офисы</h2>
        <ul class="mp-contacts__office-list">
                  <li class="mp-contacts__office-item">
            <a href="/msk" class="mp-contacts__office-link">
              <img src="/d/738331/d/oah-loc-msk.svg" class="mp-contacts__office-icon" alt="">
              <span>Москва</span>
            </a>
            <p class="mp-contacts__office-adress " data-day="">Цветной бульвар, 11/6, офис 406</p>
                   </li>
                    <li class="mp-contacts__office-item">
            <a href="/spb" class="mp-contacts__office-link">
              <img src="/d/738331/d/oah-loc-spb.svg" class="mp-contacts__office-icon" alt="">
              <span>Санкт-Петербург</span>
            </a>
            <p class="mp-contacts__office-adress " data-day="">Ленинский проспект, 151, офис 711</p>
                        <a href="/jobs" class="mp-contacts__office-vacancy mp-link">Вакансии в Санкт-Петербурге</a>
                      </li>
                    <li class="mp-contacts__office-item">
            <a href="/barnaul" class="mp-contacts__office-link">
              <img src="/d/738331/d/oah-loc-brn.svg" class="mp-contacts__office-icon" alt="">
              <span>Барнаул</span>
            </a>
            <p class="mp-contacts__office-adress " data-day="">Проспект Ленина 158А</p>
                   </li>
                  </ul>
      </li>
      <li class="mp-contacts__block mp-contacts__branches mapClass">
        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A04f25834411680cb16138fa2b38fa5346c53614050d3987ccd56c3372f05a840&amp;source=constructor" width="100%" height="100%" frameborder="0"></iframe>          
      </li>
      <li class="mp-contacts__block mp-contacts__feedback">
        <h2 class="mp-contacts__block-title">Свяжитесь с нами</h2>
        <ul class="mp-contacts__feedback-list">
                <li class="mp-contacts__feedback-item">
            <a href="/mail" class="mp-contacts__feedback-link">
              <img src="/d/738331/d/oah-mail.svg" class="mp-contacts__feedback-icon" alt="">
              <span class="mp-link">Написать нам</span>
            </a>
          </li>
                  <li class="mp-contacts__feedback-item">
            <a href="/feedgood" class="mp-contacts__feedback-link">
              <img src="/d/738331/d/oah-like.svg" class="mp-contacts__feedback-icon" alt="">
              <span class="mp-link">Похвалить</span>
            </a>
          </li>
                  <li class="mp-contacts__feedback-item">
            <a href="/feedbad" class="mp-contacts__feedback-link">
              <img src="/d/738331/d/oah-dislike.svg" class="mp-contacts__feedback-icon" alt="">
              <span class="mp-link">Пожаловаться</span>
            </a>
          </li>
                </ul>
        <hr class="mp-contacts__line">
        <h2 class="mp-contacts__block-title">Мы в соцсетях</h2>
        <ul class="mp-contacts__feedback-list">
                <li class="mp-contacts__feedback-item">
            <a href="https://vk.com/megagroup_ru" rel="nofollow" target="_blank" class="mp-contacts__feedback-link">
              <img src="/d/738331/d/oah-social-vk.svg" class="mp-contacts__feedback-icon" alt="">
              <span class="mp-link">megagroup_ru</span>
            </a>
          </li>
                  <li class="mp-contacts__feedback-item">
            <a href="https://www.facebook.com/megarussia" rel="nofollow" target="_blank" class="mp-contacts__feedback-link">
              <img src="/d/738331/d/oah-social-fb.svg" class="mp-contacts__feedback-icon" alt="">
              <span class="mp-link">megarussia</span>
            </a>
          </li>
                  <li class="mp-contacts__feedback-item">
            <a href="https://twitter.com/megagroup"  rel="nofollow" target="_blank" class="mp-contacts__feedback-link">
              <img src="/d/738331/d/oah-social-tw.svg" class="mp-contacts__feedback-icon" alt="">
              <span class="mp-link">@megagroup</span>
            </a>
          </li>
                  <li class="mp-contacts__feedback-item">
            <a href="https://www.instagram.com/megagroup_ru/"  rel="nofollow" target="_blank" class="mp-contacts__feedback-link">
              <img src="/d/738331/d/oah-social-in.svg" class="mp-contacts__feedback-icon" alt="">
              <span class="mp-link">megagroup_ru</span>
            </a>
          </li>
                  <li class="mp-contacts__feedback-item">
            <a href="https://www.youtube.com/megagrouptv" rel="nofollow" target="_blank" class="mp-contacts__feedback-link">
              <img src="/d/738331/d/oah-social-yt.svg" class="mp-contacts__feedback-icon" alt="">
              <span class="mp-link">megagrouptv</span>
            </a>
          </li>
                </ul>
      </li>
    </ul>
  </div>
</section>

@endsection