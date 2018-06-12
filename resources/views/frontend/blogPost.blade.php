@extends('frontend.layouts.master')
@section('meta')
@endsection
@section('styles')

<style>
  .mainImg {
    width: 50%;
    float: left;
    margin: 0 20px 10px 0;
  }
  main .container {
    min-height: 600px;
    padding-bottom: 80px;
    display: -webkit-flex;
    display: -moz-flex;
    display: -ms-flex;
    display: -o-flex;
    display: flex;
  }
  .main-text p {
    text-align: justify;
    padding-bottom: 10px;
    font-size: 1.2em;
    margin-top: 0;
  }
  .center-h1 {
    font-size: 2em;
    margin-top: 50px;
  }
  .bleft {
    flex: 0 0 80%;
  }
  .bright {
    flex: 0 0 18%;
    padding-left: 2%;
  }
  .date {
    margin-top: 10px;
    color: #555;
    text-align: right;
    
  }
  .author {
    text-align: right;
    
  }
  .hideOnPost {
    display: none;
  }
  .showOnPost {
    display: block;
  }
</style>
@endsection



@section('content')
  <h1 class="center-h1">{!! $post->title !!}</h1>
<div class="container">

  <div class="bleft">
   <img src="/img/@if (!$post->photos->isEmpty()){{ $post->photos->first()->path }}@endif" alt="" class="mainImg">
      <div class="main-text">
        {!! $post->text !!}
    </div>    
  </div>
  <div class="bright">
      <p class="date">5.02.2018</p>
      <p class="author">{!! $post->author !!}</p>
  </div>
  

</div>

@endsection



@section('scripts')

<script>
  var link = '<a>{{ $post->title }}</a>'
  $('.showOnPost').append(link);
</script>
@endsection