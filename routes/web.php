<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\faqController;
use App\Http\Controllers\serviceController;
use App\Http\Controllers\visitorController;
use App\Http\Controllers\promotionPieceController;


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
Route::get('/details', [serviceController::class, 'Service']);
Route::get('/faq', [faqController::class, 'Faq']);
Route::get('/promotion_piece', [promotionPieceController::class, 'PromotionPiece']);