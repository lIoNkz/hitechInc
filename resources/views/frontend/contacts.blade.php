@extends('frontend.layouts.master')
@section('content')


      <div class="section contact-us animation fadeInUp" id="contact-us">
         <div class="container">
            <h2 class="head">Связаться с нами</h2>
            <h3 class="sub-head">Всегда стремиться к лучшей работе</h3>
            <div class="outer-box">
               <div class="company-data">
                  <ul class="row">
                                       <li class="col-xs-4 col-mob">
                        <div class="box">
                           <span class="ico icon-location"></span>
                           <p>г.Шымкент,<br />
ул. Адырбекова, № 76</p><br>
              
                        </div>
                     </li>
                     <li class="col-xs-4 col-mob">
                        <div class="box">
                           <span class="ico icon-phone"></span>
              +7 (702) 175 5597 - Нурсултан<br>+7 (775) 324 6699 - Аян
              <!--<br>
              -->
                        </div>
                     </li>
                     <li class="col-xs-4 col-mob">
                        <div class="box">
                           <span class="ico icon-bubble"></span>
                           sales.infomob@mail.ru<br>
                        </div>
                     </li>
                                       </ul>
               </div>
               <!-- Contact Form Start -->
               <div class="form-box clearfix">

                  <form action="http://qaz-tech.kz" method="POST" data-toggle="validator" class="shake scroll-reveal">

                     <div class="form-group col-sm-6">
                        <input name="name" type="text" class="form-control" placeholder="Ваше имя" required data-error="Name missing">
                        <!-- <div class="help-block with-errors"></div> -->
                     </div>
                     <div class="form-group col-sm-6">
                        <input name="email" type="email" class="form-control" placeholder="Ваш email" required>
                        <!-- <div class="help-block with-errors"></div> -->
                     </div>
                     <div class="form-group col-sm-12">
                        <textarea name="text" class="form-control" rows="6" placeholder="Напишите ваше сообщение здесь" required></textarea>
                        <!-- <div class="help-block with-errors"></div> -->
                     </div>
                     <div class="col-sm-12">
                        <button type="submit" class="btn btn-default btn-submit light-bg">Отправить сообщение</button>
                        <div id="msgSubmit"></div>
                     </div>
                     <input type="hidden" name="_token" value="KjA5qC4webGQuMwpvKH5ysEmSyopYquHuWO3v8RQ">
                  </form>

               </div>
            <!-- Contact Form End -->
            </div>
         </div>
      </div>
<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A04f25834411680cb16138fa2b38fa5346c53614050d3987ccd56c3372f05a840&amp;source=constructor" width="100%" height="452" frameborder="0"></iframe>

@endsection