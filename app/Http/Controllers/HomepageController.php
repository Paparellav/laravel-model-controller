<?php

namespace App\Http\Controllers;

use App\Film;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    //Creiamo una funzione per visualizzare la pagina
    public function index()
    {
        $films = Film::all();
        return view('homepage', compact('films'));
    }
}
