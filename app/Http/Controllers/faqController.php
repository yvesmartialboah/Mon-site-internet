<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class faqController extends Controller
{
    //
    public function Faq()
    {
        return view('faq.faq');
    }
}
