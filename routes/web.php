<?php

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ContactsController;

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

Route::get('login', function () {
    return view('login');
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







Route::get('/liste-personnels-Agent', function () {
    return view('liste-personnels-Agent');
});


Route::get('/notification', function () {
    return view('notification');
});
Route::get('/edit-commande', function () {
    return view('edit-commande');
});

Route::get('/list', 'CommandeController@list')->name('list');
//pour laffichage de view form
Route::get('/ajout-agent', function () {
    return view('ajout-agent');
});
Route::get('/ajout-livreur', function () {
    return view('ajout-livreur');
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
Route::get('MDPadmin', function () {
    return view('MDPadmin');
});
Route::get('/MDPcommercant', function () {
    return view('MDPcommercant');
});
Route::get('/MDPlivreur', function () {
    return view('MDPlivreur');
});
Route::get('/liste-commande-declare-admin', function () {
    return view('liste-commande-declare-admin');
});

//route pour voir tout les notifications 
route::get('liste-notification', [CommandeController::class, 'listenotif'])->name('listenotif');
route::get('liste-notification-agent', [CommandeController::class, 'listenotifagent'])->name('listenotifagent');
route::get('liste-notification-livreur', [CommandeController::class, 'listenotiflivreur'])->name('listenotiflivreur');
//pour afficher le formulaire de declaration pour le commerçant
route::get('Declarer', [CommandeController::class, 'addCommande'])->name('commande.add');
route::post('Declarer-commande', [CommandeController::class, 'saveCommande'])->name('save.post');
route::get('liste-commande-declare', [CommandeController::class, 'commande_declare'])->name('commande.declaree');
route::get('edit-commande/{id}', [CommandeController::class, 'EditCommande'])->name('commande.edit');
route::get('/delete-commande/{id}', [CommandeController::class, 'DeleteCommande'])->name('commande.delete');
route::post('update-commande', [CommandeController::class, 'updateCommande'])->name('update.commande');
route::post('valider', [CommandeController::class, 'valider'])->name('valider');
route::post('validercommande/{id}', [CommandeController::class, 'validercommande'])->name('validercommande');
route::post('preparercommande/{id}', [CommandeController::class, 'preparercommande'])->name('preparercommande');
route::post('livrercommande/{id}', [CommandeController::class, 'livrercommande'])->name('livrercommande');

route::post('affecteragent', [CommandeController::class, 'affecteragent'])->name('affecteragent');
route::post('affecterlivreur', [CommandeController::class, 'affecterlivreur'])->name('affecterlivreur');

route::get('liste-commandes-preparee', [CommandeController::class, 'ListprepareeAdmin'])->name('commande.preparee');
route::get('liste-commandes-livree', [CommandeController::class, 'ListlivreeAdmin'])->name('commande.livree');
route::get('liste-commandes-retournee', [CommandeController::class, 'ListretourneeAdmin'])->name('commande.retournee');

route::get('commande_declaree_admin', [CommandeController::class, 'CommandeListAdmin'])->name('commande_declaree_admin');
route::get('Admin', [CommandeController::class, 'Commandenotif'])->name('Commande.notif');
route::get('details', [CommandeController::class, 'Commandevalider'])->name('Commande.valider');
route::get('Agent', [CommandeController::class, 'notifAgent'])->name('notif.Agent');
route::get('Livreur', [CommandeController::class, 'notiflivreur'])->name('notif.livreur');

route::get('details/{id}', [CommandeController::class, 'Commandedetails'])->name('commande.details');
route::get('detailsview', [CommandeController::class, 'CommandedetailCommerssant'])->name('details');
route::get('/search', 'CommandeController@search');







route::get('liste-validee', [CommandeController::class, 'listecommandevalidee'])->name('commande.validee');

route::post('liste-commande-validee', [CommandeController::class, 'maj'])->name('maj.validee');


route::post('savemessage', [ContactsController::class, 'store'])->name('savemessage');
route::get('contactview', [ContactsController::class, 'create'])->name('contactview');




//pour l'ajout des agents livreurs et commerçants ( les fonctions)
route::get('ajoutcom', [RegisteredUserController::class, 'ajoutcom'])->name('ajoutcom');
route::get('ajoutagent', [RegisteredUserController::class, 'ajoutagent'])->name('ajoutagent');

route::get('ajoutlivreur', [RegisteredUserController::class, 'ajoutlivreur'])->name('ajoutlivreur');

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

//profil
route::get('profilAgent', [CommandeController::class, 'profilagent'])->name('profilAgent');
route::get('profilcommercant', [CommandeController::class, 'profilcommercant'])->name('profilcommercant');
route::get('profillivreur', [CommandeController::class, 'profillivreur'])->name('profillivreur');
route::get('profilAdmin', [CommandeController::class, 'profiladmin'])->name('profiladmin');

// editer agent

route::get('editer-profil-agent/{id}', [CommandeController::class, 'EditerprofilAgent'])->name('editer-profil-agent');
route::post('update-profilAgent', [CommandeController::class, 'profileUpDatAagent'])->name('update.profilAgent');
route::get('editer-profil-livreur/{id}', [CommandeController::class, 'EditerprofilLivreur'])->name('Editer-profil-Livreur');
route::post('update-profillivreur', [CommandeController::class, 'profileUpDateLivreur'])->name('update.profillivreur');
route::get('editer-profil-commercant/{id}', [CommandeController::class, 'Editerprofilcommercant'])->name('Editer-profil-commercant');
route::post('update-profilcommercant', [CommandeController::class, 'profileUpDateCommercant'])->name('update.profilcommercant');
route::get('editer-profil-admin/{id}', [CommandeController::class, 'Editerprofilcommercant'])->name('editer-profil-admin');
route::post('update-profiladmin', [CommandeController::class, 'profileUpDateadmin'])->name('update.profiladmin');

// preparer et livrer plusieurs commandes
route::post('preparer', [CommandeController::class, 'preparer'])->name('preparer');
route::post('livrer', [CommandeController::class, 'livrer'])->name('livrer');

route::post('updatemdp', [CommandeController::class, 'updatemdp'])->name('updatemdp');

route::get('mdpcommercant', [CommandeController::class, 'mdp_commercant'])->name('mdp_commercant');

route::get('mdp', [CommandeController::class, 'mdp'])->name('mdp');
Route::get('/index', function () {
    return view('index');
});

Route::get('/declare', function () {
    return view('declare');
});


Route::get('/contact-admin', function () {
    return view('contact-admin');
});






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');




require __DIR__ . '/auth.php';
Route::get('redirects', 'HomeController@index');
// route pour mail
Route::get('/contact', function () {
    return new App\Mail\Contact([
      'nom' => 'Durand',
      'email' => 'durand@chezlui.com',
      'message' => 'Je voulais vous dire que votre site est magnifique !'
      ]);
});
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

