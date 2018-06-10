@extends('frontend.layouts.master')
@section('meta')


      <title>{{ $metadata->title }}</title>
      {!! $metadata->meta !!}

@endsection
@section('styles')

<style>
	.blog-wrap {
		display: -webkit-flex;
		display: -moz-flex;
		display: -ms-flex;
		display: -o-flex;
		display: flex;
		justify-content: space-between;
		flex-wrap: wrap;
	}
	.blog {
		margin-top: 20px;
		display: block;
		flex: 0 0 30%;
		height: 440px;
		padding: 20px 10px;
		background-color: #fff;
		cursor: pointer;
		border-bottom: 4px solid #aaa;
		text-decoration: none;
	}
	.blog:hover {
		border-bottom: 4px solid #383181;
	}

	.blog img {
		width: 100%;
		height: 200px;
	}
	.blog .time {
		text-align: right;
		color: #555;
		padding-top: 50px;
		float: right;
		
	}
	.blog .author {
		float: left;
		text-align: left;
		color: #555;
		padding-top: 50px;
	}
	.blog h3 {
		font-size: 1.375em;
		text-align: justify;
		color: #333;
	}
</style>
@endsection
@section('content')

<div class="container">
	<h1 class="center-h1">Блог</h1>
	<div class="blog-wrap">
		<a href="/blog/1" class="blog">
			<img src="/img/blogs/blog1.jpg" alt="">
			<h3>Название Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, explicabo!</h3>
			<div class="line">
			<p class="author">Автор Блогин</p>
			<p class="time">21.05.18</p>
				
			</div>
		</a>
		<a href="/blog/1" class="blog">
			<img src="/img/blogs/blog1.jpg" alt="">
			<h3>Название Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam, quis!</h3>
			<div class="line">
			<p class="author">Автор Блогин</p>
			<p class="time">21.05.18</p>
				
			</div>
		</a>
		<a href="/blog/1" class="blog">
			<img src="/img/blogs/blog1.jpg" alt="">
			<h3>Название Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, tempore.</h3>
			<div class="line">
			<p class="author">Автор Блогин</p>
			<p class="time">21.05.18</p>
				
			</div>
		</a>
		<a href="/blog/1" class="blog">
			<img src="/img/blogs/blog1.jpg" alt="">
			<h3>Название Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, eaque.</h3>
			<div class="line">
			<p class="author">Автор Блогин</p>
			<p class="time">21.05.18</p>
				
			</div>
		</a>
		<a href="/blog/1" class="blog">
			<img src="/img/blogs/blog1.jpg" alt="">
			<h3>Название Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam, quisquam.</h3>
			<div class="line">
			<p class="author">Автор Блогин</p>
			<p class="time">21.05.18</p>
				
			</div>
		</a>
		<a href="/blog/1" class="blog">
			<img src="/img/blogs/blog1.jpg" alt="">
			<h3>Название Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, sed!</h3>
			<div class="line">
			<p class="author">Автор Блогин</p>
			<p class="time">21.05.18</p>
				
			</div>
		</a>
	</div>


</div>


@endsection

@section('scripts')


@endsection