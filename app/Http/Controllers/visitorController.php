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
    public function Vidange()
    {
        return view('details_services.vidange');
    }
    public function Batterie()
    {
        return view('details_services.batterie');
    }
    public function Visibilite()
    {
        return view('details_services.visibilite');
    }
    public function Suspension()
    {
        return view('details_services.suspension');
    }
    public function Revision()
    {
        return view('details_services.revision');
    }
    public function ReparationPiece()
    {
        return view('details_services.reparation_piece');
    }
    public function PromotionPiece()
    {
        return view('promotion_piece.promotion_piece');
    }
    public function PreControlTechnique()
    {
        return view('details_services.pre_control_technique');
    }
    public function Pneumatique()
    {
        return view('details_services.pneumatique');
    }
    public function PareBrise()
    {
        return view('details_services.pare_brise');
    }
    public function Mecanique()
    {
        return view('details_services.mecanique');
    }
    public function KitDistribution()
    {
        return view('details_services.kit_distribution');
    }
    public function Freinage()
    {
        return view('details_services.freinage');
    }
    public function Echappement()
    {
        return view('details_services.echappement');
    }
    public function Climatisation()
    {
        return view('details_services.climatisation');
    }
    public function Faq()
    {
        return view('faq.faq');
    }
}
