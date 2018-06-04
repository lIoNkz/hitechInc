@extends('frontend.layouts.master')
@section('meta')


      <title>{{ $metadata->title }}</title>
      {!! $metadata->meta !!}

@endsection
@section('styles')
<link rel="stylesheet" href="/css/submenu.css">

@endsection
@section('content')

<h1>Техническая поддержка</h1>





@endsection

@section('scripts')


@endsection