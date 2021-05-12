@extends('layout.app')
@section('main')

  <div class="container">
    @foreach ($fumetti as  $value)
    <div class="contenitore">
      <div class="card">
        <a href="#"><img src="{{$value['thumb']}}" alt=""></a>

        <div class="text">
          <p>{{$value['series']}}</p>
        </div>
      </div>
    </div>

    @endforeach;

  </div>
@endsection
