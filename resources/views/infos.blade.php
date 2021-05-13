@extends('layouts.app')

@section('content-main')
<main class="main-infos">
  <div class="bluebar">
    <img src="{{$comic['thumb']}}" alt="">
  </div>
  <div class="container-infos">
    <div class="left-main">
      <h2 class="text-caps">{{$comic['title']}}</h2>
      <div class="green-bar">
        <div class="left-bar">
          <p class="text-green">U.S. Price: <span class="text-white">{{$comic['price']}}</span></p>
          <span class="text-green">AVAILABLE</span>
        </div>
        <div class="right-bar">
          <span class="text-white">Check Availability</span>
        </div>
      </div>
      <p class="desc">{{$comic['description']}}</p>
    </div>
    <div class="right-adv">
      <span>ADVERTISEMENT</span>
      <img src="../img/adv.jpg" alt="">
    </div>


  </div>
</main>
@endsection
