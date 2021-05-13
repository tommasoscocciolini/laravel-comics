@extends('layouts.app')

@section('content-main')
<main class="home-main">

  <div class="container">
    <div class="over-text">
      <h1>CURRENT SERIES</h1>
    </div>
    @foreach ($comics as $index => $comic)
    <div class="card">
      <a href="{{route('detail', ['id' => $index])}}" class="thumb">
        <img src="{{$comic['thumb']}}" alt="">
      </a>
      <h5 class="text-caps">{{$comic['series']}}</h5>
    </div>
    @endforeach

    <button type="button" name="button" class="btn-page-blue">LOAD MORE</button>
  </div>

</main>
@endsection
