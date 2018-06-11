@extends('frontend.layouts.master')
@section('meta')


      <title>{{ $metadata->title }}</title>
      {!! $metadata->meta !!}

@endsection
@section('styles')
<link rel="stylesheet" href="/css/reviewPage.css">
  <style>
.fixed-wall {
  background-image: url(/img/banners/banner-review.jpg) !important;
}
</style>
@endsection

@section('content')



<section>
        <div class="reviews-header">
          <div class="reviews-header__wrap">
            <h1 class="reviews-header__title">
              Отзывы наших клиентов
            </h1>
          </div>
        </div>
        <div class="reviews">    
          <ul class="reviews__wrap">
            @foreach($reviews as $review)
              <li class="reviews__item">
                <div class="reviews__item-inner">
                @if (!$review->photos->isEmpty())
                  <img src="/img/{{ $review->photos->first()->path }}" alt="" class="review_img">
                @endif
                  <div class="reviews__title">
                    {!! $review->name !!}  @if($review->site != "") , @endif {!! $review->site !!}
                  </div>
                  <div class="reviews__body">
                                          {!! $review->text !!}
                  </div>
                </div>
              </li> 
            @endforeach          
            </ul>
        </div>
      {{ $reviews->links() }}
</section>

@endsection

@section('scripts')


@endsection
