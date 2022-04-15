<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActionsController;
use App\Http\Controllers\autoEcoleController;
use App\Http\Controllers\PreventionSpecialiseeController;

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

Route::resource('Actions',ActionsController::class);
//Route::get('Actions',[ActionsConctroller::class,'index'])->name

//Route::get("Action/creatAction",[ActionController::class,"create"]);
Route::resource('creatAction', ActionController::class);



