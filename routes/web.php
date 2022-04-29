<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VillesController;
use App\Http\Controllers\ActionsController;
use App\Http\Controllers\ActivitesController;
use App\Http\Controllers\PartenairesController;
use App\Http\Controllers\RapportsDesActivitesController;

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


Route::get('/contact',[Controller::class,"contactForm"]);
Route::post('/contact',[Controller::class,"envoyerEmail"]);
Route::get('refreshcaptcha',[Controller::class, 'refreshCaptcha'])->name('refreshcaptcha');
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::resource('action',ActionsController::class);
Route::resource('activite',ActivitesController::class);
Route::resource('rapportsDesActivites',RapportsDesActivitesController::class);
Route::resource('ville',VillesController::class);
Route::resource('Role',RoleController::class);
Route::resource('partenaire',PartenairesController::class);

Route::get('/admin',[AdminController::class,'dashboard'])->middleware(['eAdmin'])->name('eAdmin'); // le nom de la route peut etre nomme differament


// Route::get('action.action',[ActionsController::class,'index']);
// Route::get('action.createAction',[ActionsController::class,'create']);
// Route::post('action.modifierAction{$id}',[ActionsController::class,'edit']);
// Route::put('action.modifierAction',[ActionsController::class,'update']);
// Route::delete('action.action{$id}',[ActionsController::class,'destroy']);


// Route::get('activite.activite',[ActiviteController::class,'index']);
// Route::get('activite.createActivite',[ActiviteController::class,'create']);
// Route::post('activite.modifierActivite{$id}',[ActiviteController::class,'edit']);
// Route::put('activite.modifierActivite',[ActiviteController::class,'update']);
// Route::delete('activite.activite{$id}',[ActiviteController::class,'destroy']);


// Route::get('RapportsDesActivites'.'rapportsDesActivites',[RapportsDesActivitesController::class,'index']);
// Route::get('RapportsDesActivites'.'creatRapport',[RapportsDesActivitesController::class,'create']);
// Route::post('RapportsDesActivites'.'modifierRapport{$id}',[RapportsDesActivitesController::class,'edit']);
// Route::put('RapportsDesActivites'.'modifierRapport',[RapportsDesActivitesController::class,'update']);
// Route::delete('RapportsDesActivites{$id}'.'RapportsDesActivites{$id}',[RapportsDesActivitesController::class,'destroy']);




// Route::get('ville'.'ville',[VillesController::class,'index']);
// Route::get('ville'.'creatVille',[VillesController::class,'create']);
// Route::post('ville'.'modifierVille{$id}',[VillesController::class,'edit']);
// Route::put('ville'.'modifierVille',[VillesController::class,'update']);
// Route::delete('ville'.'ville{$id}',[VillesController::class,'destroy']);


// Route::get('Role'.'Role',[RoleController::class,'index']);
// Route::get('Role'.'creatRole',[RoleController::class,'create']);
// Route::post('Role'.'modifierRole{$id}',[RoleController::class,'edit']);
// Route::put('Role'.'modifierRole',[RoleController::class,'update']);
// Route::delete('Role'.'Role{$id}',[RoleController::class,'destroy']);
