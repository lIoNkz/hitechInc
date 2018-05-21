<!DOCTYPE html>
<html lang="ru" class="wf-lato-n4-active wf-lato-n7-active wf-active">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<meta name="description" content="">
	<meta name="theme-color" content="#0c9737">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="создание сайтов, разработка сайтов, цена сайта, Шымкент, Казахстан, Астана, Алматы, заказ сайта, заказать сайт, сайт визитка, бизнес сайт, веб студия, hitech">
  	<meta property="og:type" content="website">
    <meta property="og:title" content="">
    <meta property="og:description" content="Веб-студия Hitech Inc">
    <meta property="og:locale" content="ru_RU">
    <meta property="og:url" content="https://qaz-tech.kz/">
    <meta property="og:site_name" content="Hitech Inc">


	<title>Создание и разработка сайтов в HITECH Inc – Шымкент</title>

	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">


  	<link rel="stylesheet" href="/css/slick.min.css">
  	<link rel="stylesheet" href="/css/all.min.css">
  	<link rel="stylesheet" href="/css/style.css">
  	<link rel="stylesheet" href="/css/partials.css">
	{!! $cssFile !!}
	<link rel="stylesheet" href="/css/app.css">

</head>
<body class="cd-notouch">
	
	<header>
		@include('frontend.partials._header')
	</header>
	<main>
		@yield('content')
	</main>
	<footer class="mp-footer">
		@include('frontend.partials._footer')
	</footer>


	<script  src="/js/jquery-3.3.1.min.js"></script>
	<script  src="/js/jquery.tooltip.js"></script>
	<script  src="/js/selectbox.js"></script>
	<script  src="/js/slick.min.js"></script>
	<script  src="/js/app.js"></script>
</body>
</html>