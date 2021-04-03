<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class preControlTechniqueController extends Controller
{
    //
    public function PreControlTechnique()
    {
        return view('details_services.pre_control_technique');
    }
}
