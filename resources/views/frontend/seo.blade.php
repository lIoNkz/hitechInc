@extends('frontend.layouts.master')
@section('meta')


      <title>{{ $metadata->title }}</title>
      {!! $metadata->meta !!}

@endsection
@section('styles')

<link rel="stylesheet" href="/css/submenu.css">
<style>
.fixed-wall {
	background-image: url(/img/banner-seo.jpg) !important;
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
</style>
@endsection
@section('content')

<div class="container">
	<h1 class="center-h1">SEO продвижение</h1>
	<p>Вы запустили сайт с рекламой, но ваши продажи не увеличиваются? Это все потому, что человек, вводя фразу в поисковик запрос, просто не попадает на ваш портал. Причина - отсутствие поискового продвижения сайта.</p>

	<h2 class="_center">Что такое seo оптимизация</h2>
	<p>Любой поисковик представляет собой программу, которая исполняет алгоритмы по поиску ключевых фраз. Если на вашем сайте такие фразы не встречаются ни в текстах, ни в заголовках, то поисковик «пройдет мимо», а вы не получите покупателя.</p>

	<p>Для исправления этого, нужно очень грамотно и профессионально наполнить ваш сайт ключевыми фразами и словами. В противном случае, поисковик может посчитать ваш сайт спамом и проигнорировать.</p>

	<p>Провести эффективную seo оптимизацию, цена которой – многократное увеличение потока клиентов, смогут только специалисты в этой сфере технологий. Наша компания готова произвести seo сайта вашей компании, после которого seo анализ любого поисковика приведет ваш сайт в первый десяток списка при поиске по запросу.</p>
	
	

</div><!-- container end -->




@endsection

@section('scripts')


@endsection