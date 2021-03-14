<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class serviceController extends Controller
{
    //
    public function Service()
    {
        return view('details_services.details');
    }
}
