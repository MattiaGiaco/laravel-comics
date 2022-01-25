@extends('layouts.app')
@section('content')
<main>
  <div class="junbotron">
    
  </div>

  <div class="current-series">
    <div class="title">
      current series
    </div>
    <div class="container box">
      @foreach ($comics as $comic)
        <div class="card">
          <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
          <h5 class="text-center">{{ $comic['series'] }}</h5>
        </div>
      @endforeach
    </div>

    <div class="button">
      <button>load more</button>
    </div>
  </div>
</main>
@endsection