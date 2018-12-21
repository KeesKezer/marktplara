@extends('layouts.layout')
@section('content')
@foreach($advertentie as $key => $value)
 <div class="card text-center">
  <img class="card-img-top" src="" alt="Card image cap">
  <div class="card-body">
      <h5 class="card-title"><a href="{{$value-> tid}}" class="card-link">{{$value-> titel}}</a></h5>

    <p class="card-text"><small class="text-muted">{{$value-> ini_prijs}}<br>{{$value-> omschrijving}}</small></p>
  </div>
</div>



@endforeach

@stop
