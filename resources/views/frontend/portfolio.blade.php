@extends('frontend.layouts.master')
@section('meta')


      <title>{{ $metadata->title }}</title>
      {!! $metadata->meta !!}

@endsection
@section('styles')
<link rel="stylesheet" href="/css/portfolioPage.css">

@endsection
@section('content')





<div class="main">

  <h1 class="main-title">Наши работы</h1>
  <div class="gallery-wrap">
    <div class="gallery">
      @foreach($portfolio as $photo)
      <a href="#">
        <div class="gallery-item">
          <div class="gallery-item-inner">
            <div>Перейти на сайт</div>
            <img src="/img/{{ $photo->path }}" alt="">
          </div>
        </div>
      </a>
      @endforeach
    </div>
       {{ $portfolio->links() }}
   </div>
   <div class="free">
     
   </div>

</div>






@endsection

@section('scripts')


@endsection