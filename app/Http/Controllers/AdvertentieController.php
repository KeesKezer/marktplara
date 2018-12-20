<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

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

    public function create()
    {

        return \View::make('pages.advert');
    }

    public function store(Request $Request) {
        // store new advertentie
        $advertentie = new \App\Advertentie;
        $advertentie->titel            = Input::get('advertentieTitel');
        $advertentie->omschrijving     = Input::get('advertentieOmschrijving');
        $advertentie->ini_prijs        = Input::get('advertentieIni_prijs');
        $advertentie->user_id          = Auth::user()->id;

        $advertentie->save();

        // redirect
        return \Redirect::to('/');
    }
}
