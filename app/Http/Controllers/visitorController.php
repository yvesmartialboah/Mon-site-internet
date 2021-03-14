<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class visitorController extends Controller
{
    //
    public function Accueil()
    {
        return view('accueil.index');
    }
}
