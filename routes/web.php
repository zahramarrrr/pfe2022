<?php

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\Auth\RegisteredUserController;




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



Route::get('/liste-commande-declare', function () {
    return view('liste-commande-declare');
});
Route::get('/liste-commande-valide', function () {
    return view('liste-commande-valide');
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
Route::get('/list', 'CommandeController@list')->name('list');
//pour laffichage de view form
Route::get('/ajout-agent', function () {
    return view('ajout-agent');
});
Route::get('/ajout-livreur', function () {
    return view('ajout-livreur');
});
Route::get('/ajout-commerçant', function () {
    return view('ajout-commerçant');
});
Route::get('/Statut', function () {
    return view('Statut');
});

Route::get('/liste-notification', function () {
    return view('liste-notification');
});

Route::get('/MDPagent', function () {
    return view('MDPagent');
});


//route pour voir tout les notifications 
route::get('liste-notification', [CommandeController::class, 'listenotif'])->name('listenotif');
route::get('liste-notification-agent', [CommandeController::class, 'listenotifagent'])->name('listenotifagent');
route::get('liste-notification-livreur', [CommandeController::class, 'listenotiflivreur'])->name('listenotiflivreur');

route::get('Declarer-commande', [CommandeController::class, 'addCommande'])->name('commande.add');
route::post('Declarer-commande', [CommandeController::class, 'saveCommande'])->name('save.post');
route::get('liste-commande-declare', [CommandeController::class, 'CommandeList'])->name('commande.List');
route::get('edit-commande/{id}', [CommandeController::class, 'EditCommande'])->name('commande.edit');
route::get('/delete-commande/{id}', [CommandeController::class, 'DeleteCommande'])->name('commande.delete');
route::post('update-commande', [CommandeController::class, 'updateCommande'])->name('update.commande');
route::post('valider/{id}', [CommandeController::class, 'valider'])->name('valider');

route::post('affecteragent', [CommandeController::class, 'affecteragent'])->name('affecteragent');
route::post('affecterlivreur', [CommandeController::class, 'affecterlivreur'])->name('affecterlivreur');

route::get('liste-commandes-preparee', [CommandeController::class, 'ListprepareeAdmin'])->name('commande.preparee');

route::get('liste-commande-declare-admin', [CommandeController::class, 'CommandeListAdmin'])->name('commande.ListAdmin');
route::get('Admin', [CommandeController::class, 'Commandenotif'])->name('Commande.notif');
route::get('details', [CommandeController::class, 'Commandevalider'])->name('Commande.valider');
route::get('Agent', [CommandeController::class, 'notifAgent'])->name('notif.Agent');
route::get('Livreur', [CommandeController::class, 'notiflivreur'])->name('notif.livreur');

route::get('details/{id}', [CommandeController::class, 'Commandedetails'])->name('commande.details');
route::get('detailsview', [CommandeController::class, 'CommandedetailCommerssant'])->name('details');
route::get('/search', 'CommandeController@search');







route::get('liste-commande-validee', [CommandeController::class, 'listecommandevalidee'])->name('commande.validee');

route::post('liste-commande-validee', [CommandeController::class, 'maj'])->name('maj.validee');






//pour l'ajout des agents livreurs et commerçants ( les fonctions)
route::post('ajouter-agent', [RegisteredUserController::class, 'storeagent'])->name('create.agent');
route::post('ajouter-livreur', [RegisteredUserController::class, 'storelivreur'])->name('create.livreur');
route::post('ajouter-comm', [RegisteredUserController::class, 'storecom'])->name('create.com');
route::post('motdp', [CommandeController::class, 'store'])->name('sotemdp');

//route pour la liste des agents livreurs commerçant
route::get('ListeAgent', [CommandeController::class, 'listeagent'])->name('listeagent');
route::get('ListeLivreur', [CommandeController::class, 'listeLivreur'])->name('listeLivreur');
route::get('Listecommercant', [CommandeController::class, 'listecommercant'])->name('listecommercant');

//pour la supression des personnels
route::get('Deletepersonnel/{id}', [CommandeController::class, 'Deletepersonnel'])->name('personnel.delete');
// pour editer les informations du personnels
// editer agent
route::get('edit-agent/{id}', [CommandeController::class, 'Editagent'])->name('agent.edit');
route::post('update-agent', [CommandeController::class, 'updateAgent'])->name('update.agent');
route::get('edit-livreur/{id}', [CommandeController::class, 'Editlivreur'])->name('livreur.edit');
route::post('update-livreur', [CommandeController::class, 'updateLivreur'])->name('update.livreur');
route::get('edit-commercant/{id}', [CommandeController::class, 'Editcommercant'])->name('commercant.edit');
route::post('update-commercant', [CommandeController::class, 'updatecommercant'])->name('update.commercant');


//profil
route::get('profilAgent', [CommandeController::class, 'profilagent'])->name('profilAgent');
route::get('editer-profil-agent/{id}', [CommandeController::class, 'EditerprofilAgent'])->name('editer-profil-agent');
route::post('update-profilAgent', [CommandeController::class, 'profileUpDatAagent'])->name('update.profilAgent');

// preparer commande
route::post('preparer', [CommandeController::class, 'preparer'])->name('preparer');

route::post('updatemdp', [CommandeController::class, 'updatemdp'])->name('updatemdp');


route::get('mdp', [CommandeController::class, 'mdp'])->name('mdp');
Route::get('/index', function () {
    return view('index');
});

Route::get('/declare', function () {
    return view('declare');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/contact-admin', function () {
    return view('contact-admin');
});

Route::get('/Commerçant', function () {
    return view('Commerçant');
});




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');




require __DIR__ . '/auth.php';
Route::get('redirects', 'HomeController@index');
// route pour mail
/*
Route::get('send-mail', function () {
   
    $details = [
        'title' => 'Mail from ItSolutionStuff.com',
        'body' => 'This is for testing email using smtp'
    ];
   
   Mail::to('Manager@rmdp.tn')->send(new \App\Mail\testmail($details));
    dd("Email is Sent.");
});
*/

