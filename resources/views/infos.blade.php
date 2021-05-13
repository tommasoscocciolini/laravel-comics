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
      <img src="img/adv.jpg" alt="">
    </div>
  </div>

  <div class="container-infos-specs">
    <div class="container">
      <div class="left-specs">
        <h2>Talent</h2>
        <div class="specs-names">
          <div class="spec-title">
            <span>Art by:</span>
          </div>
          <div class="artists">
            @foreach ($comic['artists'] as $artist)
            <a href="#">{{$artist}}</a>
            @endforeach
          </div>
        </div>
        <div class="specs-names">
          <div class="spec-title">
            <span>Written by:</span>
          </div>
          <div class="artists">
            @foreach ($comic['writers'] as $writer)
            <a href="#">{{$writer}}</a>
            @endforeach
          </div>
        </div>
      </div>
      <div class="right-specs">
        <h2>Specs</h2>
        <div class="specs-names">
          <div class="spec-title">
            <span>Series:</span>
          </div>
          <div class="artists">
            <a href="#">{{$comic['series']}}</a>
          </div>
        </div>
        <div class="specs-names">
          <div class="spec-title">
            <span>U.S. Price: </span>
          </div>
          <div class="artists">
            <a href="#">{{$comic['price']}}</a>
          </div>
        </div>
        <div class="specs-names">
          <div class="spec-title">
            <span>On Sale Date: </span>
          </div>
          <div class="artists">
            <a href="#">{{$comic['sale_date']}}</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
