<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\faqController;
use App\Http\Controllers\visitorController;
use App\Http\Controllers\SendmailController;
use App\Http\Controllers\politiqueConfidentialiteController;


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
Route::get('/confidentialite', [politiqueConfidentialiteController::class, 'PolitiqueConfidentialite'])->name('confidentialite');
Route::get('/promotion_piece', [visitorController::class, 'PromotionPiece'])->name('promotion');
Route::get('/vidange', [visitorController::class, 'Vidange'])->name('vidange');
Route::get('/revision', [visitorController::class, 'Revision'])->name('revision');
Route::get('/pneumatique', [visitorController::class, 'Pneumatique'])->name('pneumatique');
Route::get('/freinage', [visitorController::class, 'Freinage'])->name('freinage');
Route::get('/climatisation', [visitorController::class, 'Climatisation'])->name('climatisation');
Route::get('/batterie', [visitorController::class, 'Batterie'])->name('batterie');
Route::get('/visibilite', [visitorController::class, 'Visibilite'])->name('visibilite');
Route::get('/reparation_piece_electrique', [visitorController::class, 'ReparationPiece'])->name('reparation_piece_electrique');
Route::get('/echappement', [visitorController::class, 'Echappement'])->name('echappement');
Route::get('/kit_distribution', [visitorController::class, 'KitDistribution'])->name('kit_distribution');
Route::get('/suspension', [visitorController::class, 'Suspension'])->name('suspension');
Route::get('/pre_control_technique', [visitorController::class, 'PreControlTechnique'])->name('pre_control_technique');
Route::get('/mecanique', [visitorController::class, 'Mecanique'])->name('mecanique');
Route::get('/pare_brise', [visitorController::class, 'PareBrise'])->name('pare_brise');
