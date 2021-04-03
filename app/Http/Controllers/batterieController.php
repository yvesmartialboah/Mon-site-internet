<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class batterieController extends Controller
{
    //
    public function Batterie()
    {
        return view('details_services.batterie');
    }
}
