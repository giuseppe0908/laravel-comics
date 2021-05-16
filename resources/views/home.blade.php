@extends('layout.app')
@section('main')
<main id="home">
  <div class="rettangolo">
    <p>CURRENT SERIES</p>
  </div>
  <div class="container">

    @foreach ($comics as $index =>  $value)

      <div class="card">
        <a href="{{route('singola',['id' => $index])}}">
          <div class="image">
            <img src="{{$value['thumb']}}" alt="">
          </div>
        <div class="text">
          <p>{{$value['series']}}</p>
        </div>
        </a>
      </div>
    @endforeach
    <div class="load">
      <a href="#">LOAD MORE</a>
    </div>
  </div>
    <section class="banner-info">
      <div class="container">
        <ul>
          <li><img src="/images/buy-comics-digital-comics.png" alt="">DIGITAL COMICS </li>
          <li><img src="/images/buy-comics-merchandise.png" alt="">DC MERCHANDISE </li>
          <li><img src="/images/buy-comics-subscriptions.png" alt="">SUBSCRIPTION</li>
          <li><img id="local" src="/images/buy-comics-shop-locator.png" alt="">COMIC SHOP LOCATOR </li>
          <li><img src="/images/buy-dc-power-visa.svg" alt="">DC POWER VISA</li>
        </ul>
      </div>

    </section>
</main>
@endsection
