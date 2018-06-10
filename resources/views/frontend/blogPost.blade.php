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
  }
  .main-text p {
    text-align: justify;
    padding-bottom: 10px;
    font-size: 1.2em;
    margin-top: 0;
  }
  .center-h1 {
    font-size: 2em;
  }
  .bleft {
    width: 80%;
    float: left;
  }
  .bright {
    width: 18%;
    float: right;
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
</style>
@endsection



@section('content')

<div class="container">
  <h1 class="center-h1">Название поста</h1>
  <div class="bleft">
    <img src="/img/blogs/blog1.jpg" class="mainImg">
      <div class="main-text">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo natus quia quasi ex quos illum necessitatibus, dignissimos rem pariatur animi, tenetur cum illo temporibus. Voluptate facilis, minima. Accusantium, iste. Ex maiores a iure! Eum ipsum dicta, vitae enim facilis totam.</p>  
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias pariatur aliquam blanditiis sint animi rem perspiciatis architecto quos neque, consequatur magni ipsam ullam enim ex illo quia, veniam dolores suscipit iste! Earum ipsa aliquam consequuntur mollitia enim nesciunt sint quibusdam.</p> 
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias pariatur aliquam blanditiis sint animi rem perspiciatis architecto quos neque, consequatur magni ipsam ullam enim ex illo quia, veniam dolores suscipit iste! Earum ipsa aliquam consequuntur mollitia enim nesciunt sint quibusdam.</p> 
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel ullam dolorum nisi, illum sapiente. Modi enim voluptas officiis, assumenda ut minima, aliquam sunt consequatur eaque labore voluptate reiciendis aliquid maxime distinctio minus similique. Voluptatibus optio enim neque distinctio quaerat voluptatem, dolor perspiciatis quibusdam voluptate magni vitae voluptatum repellendus aperiam maxime, dicta consectetur! Numquam consectetur veniam, inventore laboriosam impedit reiciendis molestias veritatis beatae, eos rerum, eum enim atque. Accusamus nihil, nostrum odio provident. Ex, facere maxime quaerat vel unde dolor. Laboriosam?</p>
    </div>    
  </div>
  <div class="bright">
      <p class="date">5.02.2018</p>
      <p class="author">Автор Супермен</p>
  </div>
  

</div>

@endsection



@section('scripts')
@endsection