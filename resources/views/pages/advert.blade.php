@extends('layouts.layout')
@section('title','Advertentie plaatsen')
@section('content')
<h2>Voeg advertentie toe</h2>

    <form method="post" action="{{ route('Pages.store')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="titleid" class="col-sm-3 col-form-label">Titel</label>
            <div class="col-sm-9">
                <input name="advertentieTitel" type="text" class="form-control" id="titleid" placeholder="Titel">
            </div>
        </div>
        <div class="form-group row">
            <label for="publisherid" class="col-sm-3 col-form-label">Omschrijving</label>
            <div class="col-sm-9">
                <input name="advertentieOmschrijving" type="text" class="form-control" id="omid"
                       placeholder="Ad omschrijving">
            </div>
        </div>
        <div class="form-group row">
            <label for="releasedateid" class="col-sm-3 col-form-label">Ini_prijs</label>
            <div class="col-sm-9">
                <input name="advertentieIni_prijs" type="text" class="form-control" id="adid"
                       placeholder="Initiele Prijs">
            </div>
        </div>

        <div class="form-group row">
            <div class="offset-sm-3 col-sm-9">
                <button type="submit" class="btn btn-primary">voeg toe</button>
            </div>
        </div>
    </form>
@stop
