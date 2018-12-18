<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class AdvertentieController extends Controller
{
    public function index() {
        // get all the customers
        $advertentie = \App\Advertentie::all();

        // load the view and pass the customers
        return \View::make('advertentie.index')
            ->with('advertentie', $advertentie);
    }

    public function create() {
        return \View::make('customers.create');
    }

    public function store() {
        // store new customer
        $advertentie = new \App\advertentie;
        $advertentie->titel     = Input::get('advertentieTitel');
        $advertentie->omschrijving     = Input::get('advertentieOmschrijving');
        $advertentie->ini_prijs     = Input::get('advertentieIni_prijs');
        $advertentie->titel     = Input::get('advertentieTitel');
        $advertentie->save();

        // redirect
        return \Redirect::to('advertentie');
    }
}
