@extends('frontend.layouts.master')
@section('meta')


      <title>{{ $metadata->title }}</title>
      {!! $metadata->meta !!}

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