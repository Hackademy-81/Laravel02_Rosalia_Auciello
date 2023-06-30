<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PublicController::class, "cardWelcome"])->name("welcome");
Route::get('/descrizioneviaggio/{idTour}', [PublicController::class, "tourDescription"])->name("tourDescription");

Route::get('/chisiamo', [PublicController::class, "cardFounders"])->name("chisiamo");

Route::get('/chisiamoruolo/{idRole}', [PublicController::class, "ourDescription"])->name("descrizioneRuolo"); 

Route::get('/servizi', [PublicController::class, "cardService"])->name("servizi");

Route::get('/servizi/dettaglio/{idService}', [PublicController::class, "descriptionService"])->name("dettaglioservizio"); 
