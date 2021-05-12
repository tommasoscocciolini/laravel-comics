@extends('layouts.app')

@section('content-main')
  <div class="container">
    @foreach ($comics as $comic)
    <div class="card">
      {{$comic['title']}}
    </div>
    @endforeach
  </div>
@endsection
