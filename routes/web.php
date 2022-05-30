<?php

use App\Models\Actions;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
     return view('admin.dashboard'); })->middleware(['auth'])->name('dashboard');
//php artisan make:middleware OnlyAdmin pour crer un middleware
require __DIR__.'/auth.php';

// site
//post pour la creation
//la page welcome correspond à l apge laravel
//blade c est un moteru de template qui va inserer des donnée qui va s'occuper de la logique de presentation
//wuand on definie un argument dans une function on appel sa un callback
//quand il lui precise un calback
Route::get('/formulaire',[Controller::class,"contactForm"]);  //captcha dans le formulaire de contact
Route::post('/contact',[Controller::class,"envoyerEmail"]);
Route::get('refreshcaptcha',[Controller::class, 'refreshCaptcha'])->name('refreshcaptcha');

Route::get('/Accueil',function(){
    return view('site.Accueil');
});

Route::get('/Auto-Ecole',function(){
    return view('site.Auto-Ecole');
});

Route::get('/Histoire',function(){
    return view('site.Histoire');
});
//si je veux mappe l'url faut que j 'envoie avec post
Route::get('/pageActions',function(){
    $actions = Actions::paginate(5);
    return view('site.Nos-Actions')->with('actions', $actions);
});

Route::get('/NOS-PARTENAIRES',function(){
    return view('site.NOS-PARTENAIRES');
});

Route::get('/Prévention-Spécialisée',function(){
    return view('site.Prévention-Spécialisée');
});


// dashboard

//
Route::middleware('eAdmin')->group(function(){
    Route::resource('action',ActionsController::class)->except('show');
    Route::resource('activite',ActivitesController::class)->except('show');
    Route::resource('rapportsDesActivites',RapportsDesActivitesController::class)->except('show')->parameters(['rapportsDesActivites'=>'rapportsDesActivites']);//pour dire que c est ecrit dans le parametres c est activite et dans le controlleur c est aussi activite
    Route::resource('ville',VillesController::class)->except('show')->parameters(['ville'=>'ville']); //il y a des parametres cle et valeurs la cle correspond la resources et le valeurs le nom du parametres dans les methodes du controlleurs
    Route::resource('Role',RoleController::class)->except('show');
    Route::resource('partenaire',PartenairesController::class)->except('show');

    Route::resource('user', UserController::class)->except('show')->parameters(['user'=>'user']);

    Route::get('/dashboard',[AdminController::class,'dashboard']);
});





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
