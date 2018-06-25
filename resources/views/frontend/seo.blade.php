@extends('frontend.layouts.master')
@section('meta')


      <title>{{ $metadata->title }}</title>
      {!! $metadata->meta !!}

@endsection
@section('styles')

<link rel="stylesheet" href="/css/submenu.css">
<style>
.fixed-wall {
	background-image: url(/img/banners/banner-review.jpg) !important;
      animation: main 5s linear infinite;
    }

    @keyframes main {
      from {
        -webkit-filter: brightness(100%);
        filter: brightness(100%);
      }
      50% {
        -webkit-filter: brightness(110%);
        filter: brightness(110%);
      }
      to {
        -webkit-filter: brightness(100%);
        filter: brightness(100%);
      }
    }
</style>
<style>
	main {
		background-image: url(/img/seo.jpg);
		background-repeat: no-repeat;
		background-size: 100%;
	}
	.center-h1 {
		padding-top: 80px;
		margin-top: 0;
		padding-bottom: 40px;
	}
	main {
		margin-top: -40px;
	}
	.seo1 {
		min-height: 320px;
		height: 320px;
		margin: 50px 0;
	}
	.seo2 {
		min-height: 320px;
		height: 380px;
		margin: 50px 0;
	}
	.seo1 img {
		display: block;
		float: right;
		width: 50%;
	}
	.seo2 img {
		display: block;
		float: left;
		width: 50%;
	}
	.seo1 ul {
		display: flex;
		height: 320px;
		justify-content: center;
		flex-direction: column;
		padding-right: 20px;
	}
	.seo2 ul {
		display: flex;
		height: 380px;
		justify-content: center;
		flex-direction: column;
		margin-left: 20px;
	}
	.seo1 ul li,
	.seo2 ul li {
		margin: 10px 0;
	}
</style>
@endsection
@section('content')

<div class="container">
	<h1 class="center-h1">SEO оптимизация и продвижение сайта в ТОП Google и Яндекса</h1>
	<p>Специализацией нашей компании Hitech является SEO-оптимизация сайта для поисковых систем Google и Yandex. Мы осуществляем комплексное SEO-продвижение, предоставляя также такие дополнительные услуги, как контекстная реклама и разработка сайтов. Заказав SEO-услуги в компании Hitech, Вы сможете воспользоваться следующими нашими преимуществами:</p>
	<div class="seo1">
		<img src="/img/seo1.jpg">
		<ul>
			<li>индивидуальный подход к любому клиенту, заказывающему SEO-продвижение сайта;</li>
			<li>гарантия высокого качества услуг, обеспечиваемая высоким профессионализмом и большим опытом, которыми обладает каждый наш SEO-специалист;</li>
			<li>продвижение сайтов осуществляется по прозрачной схеме;</li>
			<li>доступная на SEO-продвижение цена;</li>
			<li>компетентное консультирование, которое осуществляет наш SEO-консультант, подробные отчёты на каждом этапе выполнения наших работ по интернет-SEO.</li>
		</ul>
	</div>
		
<!-- 	<h2 class="_center">Что такое seo оптимизация</h2> -->
	<p>Наша компания осуществляет SEO-продвижение в Казахстане, реализуя проекты продажи товаров и оказания услуг, выполняя SEO продвижение в Астане, Алмате и Шымкенте «под ключ». Благодаря комплексному подходу в своей работе наша студия имеет немало благодарных клиентов, заказывавших у нас SEO продвижение и оставшихся исключительно довольными сотрудничеством.</p>
	<p>Заказав продвижение сайтов у нас, Вы получите эффективный результат, повышающий уровень Ваших продаж. Осуществляя SEO-продвижение поисковых системах, наша компания придерживается принципа открытости и честности, всегда предоставляя достоверные данные о нас и нашей работе. Проводимые нами SEO оптимизация и продвижение дают возможность повысить популярность своего сайта, увеличить охват целевой аудитории, привлекая потенциальных покупателей.</p>
	<div class="seo2">
				<img src="/img/seo2.jpg">
		<ul>
			<p>Осуществляя SEO-продвижение мы совершаем целый комплекс работ. В частности, к ним относятся:</p>
			<li>поисковая оптимизация сайта SEO;</li>
			<li>подбор ключевых слов;</li>
			<li>cоздание уникального контента;</li>
			<li>Повышение юзабилити web сайта</li>
			<li>повышаем трафика на сайте;</li>
			<li>отчётность, аналитика.</li>
		</ul>

	</div>
	
	<p>Оптимизация и продвижение сайтов для бизнеса - специализация нашей студии. Мы обеспечиваем качественный и при этом максимально быстрый результат. Доверив эту работу нам, Вы обязательно повысите свой доход и завоюете прочное место на рынке.</p>
	
	

</div><!-- container end -->




@endsection

@section('scripts')


@endsection