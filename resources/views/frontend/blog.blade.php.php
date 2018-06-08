@extends('frontend.layouts.master')
@section('meta')


      <title>{{ $metadata->title }}</title>
      {!! $metadata->meta !!}

@endsection
@section('styles')


@endsection
@section('content')

<div class="container">
	<h1 class="center-h1">Блог</h1>

<p style="font-size: 50px;"> Скоро запустим наш блог</p>


</div>


@endsection

@section('scripts')


@endsection