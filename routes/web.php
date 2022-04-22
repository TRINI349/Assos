<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VillesController;
use App\Http\Controllers\ActionsController;
use App\Http\Controllers\ActivitesController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::resource('Action',ActionsController::class);
Route::resource('activite',ActivitesController::class);
Route::resource('RapportsDesActivites',RapportsDesActivitesController::class);
Route::resource('ville',VillesController::class);
Route::resource('Role',RoleController::class);
Route::resource('partenaire',PartenairesController::class);

Route::get('/admin',[AdminController::class])->middleware(['OnlyAdmin'])->name('OnlyAdmin');


// Route::get('Action',[ActionsController::class,'index']);
// Route::get('Action'.'createAction',[ActionsController::class,'create']);
// Route::post('Action'.'modifierAction{$id}',[ActionsController::class,'edit']);
// Route::put('Action'.'modifierAction',[ActionsController::class,'update']);
// Route::delete('Action'.'Action{$id}',[ActionsController::class,'destroy']);


// Route::get('Activite'.'Activite',[ActiviteController::class,'index']);
// Route::get('Activite'.'createActivite',[ActiviteController::class,'create']);
// Route::post('Activite'.'modifierActivite{$id}',[ActiviteController::class,'edit']);
// Route::put('Activite'.'modifierActivite',[ActiviteController::class,'update']);
// Route::delete('Activite'.'Activite{$id}',[ActiviteController::class,'destroy']);


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
