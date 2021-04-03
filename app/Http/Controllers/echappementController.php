<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class echappementController extends Controller
{
    //
    public function Echappement()
    {
        return view('details_services.echappement');
    }
}
