<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Controllers
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\ExamenController;
use App\Http\Controllers\FiliereController;
use App\Http\Controllers\MatiereController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\ProfesseurController;
use App\Http\Controllers\PropositionController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ReponseController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('filieres',FiliereController::class);
Route::apiResource('etudiants',EtudiantController::class);
Route::apiResource('departements',DepartementController::class);
Route::apiResource('examens',ExamenController::class);
Route::apiResource('matieres',MatiereController::class);
Route::apiResource('professeurs',ProfesseurController::class);
Route::apiResource('propositions',PropositionController::class);
Route::apiResource('questions',QuestionController::class);
Route::apiResource('reponses',ReponseController::class);
Route::apiResource('notes',NoteController::class);