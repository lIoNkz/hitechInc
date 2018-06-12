@extends('frontend.layouts.master')
@section('meta')


      <title>{{ $metadata->title }}</title>
      {!! $metadata->meta !!}

@endsection
@section('styles')
<link rel="stylesheet" href="/css/portfolioPage.css">
  <style>
.fixed-wall {
  background-image: url(/img/banners/banner-portfolio.jpg) !important;
}
</style>
@endsection
@section('content')





<div class="main">

  <h1 class="main-title">Наши работы</h1>
  <div class="gallery-wrap">
    <div class="gallery">
      @foreach($portfolio as $site)
      <a href="{{ $site->url }}">
        <div class="gallery-item">
          <div class="gallery-item-inner">
            <div>Перейти на сайт<br>{{ $site->title }}</div>
            <img src="/img/@if (!$site->photos->isEmpty()){{ $site->photos->first()->path }}@endif" alt="">
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