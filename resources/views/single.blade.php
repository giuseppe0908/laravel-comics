@extends('layout.app')
@section('main')
<main id="single">
  <div class="img">
    <img src="{{$comic['thumb']}}" alt="ok">

  </div>
  <div class="bg-blue">

  </div>
  <div class="container">
    <div class="text">
      <p>{{$comic['title']}}</p>
      <div class="prezzo">
        <div class="price">
          <p>U.S.Price:{{$comic['price']}}</p>
        </div>
        <div class="check">
          <p>AVAILABLE</p>
          <p>Check Available<i class="fas fa-caret-down"></i></p>
        </div>
      </div>
      <p>{{$comic['description']}}</p>
    </div>
    <div class="copertina">
      <p>ADVERTISEMENT</p>
      <img src="/images/adc.jpg" alt="turuzzu">
    </div>
  </div>


</main>
@endsection
