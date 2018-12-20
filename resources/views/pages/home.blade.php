@extends('layouts.layout')
@section('content')
@foreach($advertenties as $key => $value)
{{$value-> id}}
{{$value-> omschrijving}}
{{$value-> ini_prijs}}
@endforeach

@stop
