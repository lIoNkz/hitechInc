<!DOCTYPE html>
<html lang="ru" class="wf-lato-n4-active wf-lato-n7-active wf-active">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	@yield('meta')

	
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	

  	<link rel="stylesheet" href="/css/slick.min.css">
  	<link rel="stylesheet" href="/css/all.min.css">
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
	<footer class="footer">
		@include('frontend.partials._footer')
	</footer>


	<script  src="/js/jquery-3.3.1.min.js"></script>
	{!! $script !!}
	<script  src="/js/app.js"></script>
</body>
</html>