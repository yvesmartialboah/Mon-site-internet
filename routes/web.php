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
Route::get('/', [visitorController::class, 'Accueil'])->name('accueil');
Route::get('/faq', [faqController::class, 'Faq'])->name('faq');
Route::get('/promotion_piece', [promotionPieceController::class, 'PromotionPiece'])->name('promotion');
Route::get('/vidange', [vidangeController::class, 'Vidange'])->name('vidange');
Route::get('/revision', [revisionController::class, 'Revision'])->name('revision');
Route::get('/pneumatique', [pneumatiqueController::class, 'Pneumatique'])->name('pneumatique');
Route::get('/freinage', [freinageController::class, 'Freinage'])->name('freinage');
Route::get('/climatisation', [climatisationController::class, 'Climatisation'])->name('climatisation');
Route::get('/batterie', [batterieController::class, 'Batterie'])->name('batterie');
Route::get('/visibilite', [visibiliteController::class, 'Visibilite'])->name('visibilite');
Route::get('/reparation_piece_electrique', [reparationPieceController::class, 'ReparationPiece'])->name('reparation_piece_electrique');
Route::get('/echappement', [echappementController::class, 'Echappement'])->name('echappement');
Route::get('/kit_distribution', [kitDistributionController::class, 'KitDistribution'])->name('kit_distribution');
Route::get('/suspension', [suspensionController::class, 'Suspension'])->name('suspension');
Route::get('/pre_control_technique', [preControlTechniqueController::class, 'PreControlTechnique'])->name('pre_control_technique');
Route::get('/mecanique', [mecaniqueController::class, 'Mecanique'])->name('mecanique');
Route::get('/pare_brise', [pareBriseController::class, 'PareBrise'])->name('pare_brise');