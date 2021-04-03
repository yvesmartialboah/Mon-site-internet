<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\faqController;
use App\Http\Controllers\vidangeController;
use App\Http\Controllers\visitorController;
use App\Http\Controllers\batterieController;
use App\Http\Controllers\freinageController;
use App\Http\Controllers\revisionController;
use App\Http\Controllers\mecaniqueController;
use App\Http\Controllers\pareBriseController;
use App\Http\Controllers\suspensionController;
use App\Http\Controllers\visibiliteController;
use App\Http\Controllers\echappementController;
use App\Http\Controllers\pneumatiqueController;
use App\Http\Controllers\climatisationController;
use App\Http\Controllers\promotionPieceController;
use App\Http\Controllers\kitDistributionController;
use App\Http\Controllers\reparationPieceController;
use App\Http\Controllers\preControlTechniqueController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [visitorController::class, 'Accueil']);
Route::get('/faq', [faqController::class, 'Faq']);
Route::get('/promotion_piece', [promotionPieceController::class, 'PromotionPiece']);
Route::get('/vidange', [vidangeController::class, 'Vidange']);
Route::get('/revision', [revisionController::class, 'Revision']);
Route::get('/pneumatique', [pneumatiqueController::class, 'Pneumatique']);
Route::get('/freinage', [freinageController::class, 'Freinage']);
Route::get('/climatisation', [climatisationController::class, 'Climatisation']);
Route::get('/batterie', [batterieController::class, 'Batterie']);
Route::get('/visibilite', [visibiliteController::class, 'Visibilite']);
Route::get('/reparation_piece_electrique', [reparationPieceController::class, 'ReparationPiece']);
Route::get('/echappement', [echappementController::class, 'Echappement']);
Route::get('/kit_distribution', [kitDistributionController::class, 'KitDistribution']);
Route::get('/suspension', [suspensionController::class, 'Suspension']);
Route::get('/pre_control_technique', [preControlTechniqueController::class, 'PreControlTechnique']);
Route::get('/mecanique', [mecaniqueController::class, 'Mecanique']);
Route::get('/pare_brise', [pareBriseController::class, 'PareBrise']);