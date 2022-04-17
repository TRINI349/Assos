<?php

use App\Models\ActiviteController;
use App\Models\RapportsDesActivites;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\VillesController;
use App\Http\Controllers\ActionsController;


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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();


Route::resource('Activite',ActivitesController::class);

Route::get('Actions',[ActionsController::class,"index"]);
Route::get("Action.createAction",[ActionsController::class,"create"]);
Route::get("Action.modifierAction",[ActionsController::class,"edit"]);
Route::put("Action.modifierAction",[ActionsController::class,"update"]);
Route::delete("Action.Action",[ActionController::class,"destroy"]);

Route::get("Activite",[ActiviteController::class,"index"]);
Route::get("Activite.creatActivite",[ActiviteController::class,"create"]);
Route::get("Activite.modifierActivite",[ActiviteController::class,"edit"]);
Route::put("Activite.modifierActivite",[ActiviteController::class,"update"]);
Route::delete("Activite.Activite",[ActiviteController::class,"destroy"]);

Route::get("RapportsDesActivites",[RapportsDesActivites::class,"index"]);
Route::get("RapportsDesActivites.creatRapport",[RapportsDesActivites::class,"create"]);
Route::get("RapportsDesActivites.modifierRapport",[RapportsDesActivitesController::class,"edit"]);
Route::put("RapportsDesActivites.modifierActivite",[RapportsDesActivites::class,"update"]);
Route::delete("RapportsDesActivites.RapportsDesActivites",[RapportsDesActivites::class,"destroy"]);

Route::get("ville",[VillesController::class,"index"]);
Route::get("ville.creatVille",[VillesController::class,"create"]);
Route::get("ville.modifierVille",[VillesController::class,"edit"]);
Route::put("ville.modifierVille",[VillesController::class,"update"]);
Route::delete("ville.ville",[VillesController::class,"destroy"]);

Route::get("Role",[RoleController::class,"index"]);
Route::get("Role.creatRole",[RoleController::class,"create"]);
Route::get("Role.modifierRole",[RoleController::class,"edit"]);
Route::put("Role.modifierRole",[RoleController::class,"update"]);
Route::delete("Role.Role",[RoleController::class,"destroy"]);




