<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mecaniqueController extends Controller
{
    //
    public function Mecanique()
    {
        return view('details_services.mecanique');
    }
}
