<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kitDistributionController extends Controller
{
    //
    public function KitDistribution()
    {
        return view('details_services.kit_distribution');
    }
}
