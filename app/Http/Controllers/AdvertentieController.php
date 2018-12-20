<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class AdvertentieController extends Controller
   {
    public function index() {
        // get all the advertenties
        $advertentie = \App\Advertentie::all();

        // load the view and pass the customers
        // return view('pages.home', ['advertentie' => $advertentie]);
        return \View::make('pages.home')
            ->with('advertentie', $advertentie);
    }

    public function create() {
        return \View::make('advertentie.create');
    }

    public function store() {
        // store new advertentie
        $advertentie = new \App\advertentie;
        $advertentie->titel     = Input::get('advertentieTitel');
        $advertentie->omschrijving     = Input::get('advertentieOmschrijving');
        $advertentie->ini_prijs     = Input::get('advertentieIni_prijs');

        $advertentie->save();

        // redirect
        return \Redirect::to('advertentie');
    }
}
