<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    //Creiamo una funzione per visualizzare la pagina
    public function index()
    {
        return view('homepage');
    }
}
