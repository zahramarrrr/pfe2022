<?php

use Illuminate\Support\Facades\Route;




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
    return view('index');
});
Route::get('/Admin', function () {
    return view('Admin');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/ListeLivreur', function () {
    return view('ListeLivreur');
});
Route::get('/ListeAgent', function () {
    return view('ListeAgent');
});
Route::get('/liste-commande-declare', function () {
    return view('liste-commande-declare');
});
Route::get('/liste-commande-valide', function () {
    return view('liste-commande-valide');
});

Route::get('/Listecommercant', function () {
    return view('Listecommercant');
});
Route::get('/Admin', function () {
    return view('Admin');
});
Route::get('/ajout', function () {
    return view('ajout');
});
Route::get('/ajouter-commande', function () {
    return view('ajouter-commande');
});
Route::get('/Declarer-commande', function () {
    return view('Declarer-commande');
});
Route::get('/Declarer-commande', function () {
    return view('Declarer-commande');
});


Route::get('/liste-commande-declare-admin', function () {
    return view('liste-commande-declare-admin');
});


Route::get('/liste-personnels-Agent', function () {
    return view('liste-personnels-Agent');
});
Route::get('/liste-commande-validee', function () {
    return view('liste-commande-validee');
});

Route::get('/notification', function () {
    return view('notification');
});
Route::get('/edit-commande', function () {
    return view('edit-commande');
});
Route::get('/details', function () {
    return view('details');
});
Route::get('/list','CommandeController@list')->name('list');

Route::get('/ajout-agent', function () {
    return view('ajout-agent');
});
Route::get('/ajout-livreur', function () {
    return view('ajout-livreur');
});
Route::get('/Statut', function () {
    return view('Statut');
});

use App\Http\Controllers\ColisController;
use App\Http\Controllers\CommandeController;
route::get('Declarer-commande', [CommandeController::class,'addCommande'])->name('commande.add');
route::post('Declarer-commande', [CommandeController::class,'saveCommande'])->name('save.post');
route::get('liste-commande-declare', [CommandeController::class,'CommandeList'])->name('commande.List');
route::get('edit-commande/{id}', [CommandeController::class,'EditCommande'])->name('commande.edit');
route::get('/delete-commande/{id}', [CommandeController::class,'DeleteCommande'])->name('commande.delete');
route::post('update-commande', [CommandeController::class,'updateCommande'])->name('update.commande');
route::post('valider/{id}', [CommandeController::class,'valider'])->name('valider');

route::get('liste-commande-declare-admin', [CommandeController::class,'CommandeListAdmin'])->name('commande.ListAdmin');
route::get('Admin', [CommandeController::class,'Commandenotif'])->name('Commande.notif');
route::get('details/{id}', [CommandeController::class,'CommandedetailAdmin'])->name('Commande.detailAdmin');

route::get('details/{id}', [CommandeController::class,'Commandedetails'])->name('commande.details');
route::get('liste-personnels-Agent', [CommandeController::class,'CommandeListAgent'])->name('Liste.agent');
route::get('liste-personnels-livreur', [CommandeController::class,'CommandeListLivreur'])->name('Liste.livreur');



route::get('liste-commande-validee', [CommandeController::class,'CommandeListvalide'])->name('commande.Listvalide');
route::get('details', [CommandeController::class,'Commandevalider'])->name('Commande.valider');


route::get('/search','CommandeController@search');
route::get('liste-commande-validee', [CommandeController::class,'listecommandevalidee'])->name('commande.validee');
route::get('liste-commande-preparee', [CommandeController::class,'CommandeListAdminpreparee'])->name('commande.preparee');
route::get('liste-commande-validee', [CommandeController::class,'assignmentagentDB'])->name('commande.valideeDB');



Route::get('/index', function () {
    return view('index');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/commerçant', function () {
    return view('commerçant');
});




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');




require __DIR__.'/auth.php';
Route::get('redirects','HomeController@index');


