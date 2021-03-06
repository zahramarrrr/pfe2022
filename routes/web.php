<?php

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\chart;
use App\Http\Controllers\clientController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\profilcontroller;
use App\Imports\UsersImport;

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







Route::get('/list', 'CommandeController@list')->name('list');
//pour laffichage de view form

Route::get('/Statut', function () {
    return view('Statut');
});
//les espaces
route::get('preparee_agent', [HomeController::class, 'preparee_agent'])->name('preparee_agent');
route::get('livree_livreur', [HomeController::class, 'livree_livreur'])->name('livree_livreur');
route::get('declaree_commercant', [HomeController::class, 'declaree_commercant'])->name('declaree_commercant');

//pour afficher les listes pour chaque espace 
route::get('livreur', [HomeController::class, 'livreur'])->name('livreur');
route::get('agent', [HomeController::class, 'agent'])->name('agent');
route::get('admin', [HomeController::class, 'admin'])->name('admin');
route::get('commercant', [HomeController::class, 'commercant'])->name('commercant');

// declarer cmd retournee
route::get('retournee', [CommandeController::class, 'cmd_retournee'])->name('retournee');


//route pour voir tout les notifications 
route::get('liste-notification', [CommandeController::class, 'listenotif'])->name('listenotif');
route::get('liste-notification-agent', [CommandeController::class, 'listenotifagent'])->name('listenotifagent');
route::get('liste-notification-livreur', [CommandeController::class, 'listenotiflivreur'])->name('listenotiflivreur');
//pour afficher le formulaire de declaration pour le commer??ant
route::get('Declarer', [CommandeController::class, 'addCommande'])->name('commande.add');
route::post('Declarer-commande', [CommandeController::class, 'saveCommande'])->name('save.post');
route::get('edit-commande/{id}', [CommandeController::class, 'EditCommande'])->name('commande.edit');
route::get('/delete-commande/{id}', [CommandeController::class, 'DeleteCommande'])->name('commande.delete');
route::post('update-commande', [CommandeController::class, 'updateCommande'])->name('update.commande');
route::post('valider', [CommandeController::class, 'valider'])->name('valider');
// les fonctions de la pagee details
route::post('validercommande', [CommandeController::class, 'validercommande'])->name('validercommande');
route::post('preparercommande', [CommandeController::class, 'preparercommande'])->name('preparercommande');
route::post('livrercommande', [CommandeController::class, 'livrercommande'])->name('livrercommande');
route::post('retournercommande', [CommandeController::class, 'retourner'])->name('retourner');
// les fonctions d'addectation
route::post('affecteragent', [CommandeController::class, 'affecteragent'])->name('affecteragent');
//route::get('affecteragent', [CommandeController::class, 'affecteragent'])->name('affecteragent');
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

//admin ajout une commande
route::get('ajoutCommande', [CommandeController::class, 'ajoutCommande'])->name('ajoutCommande');
route::post('adminajoutCommande', [CommandeController::class, 'adminajoutCommande'])->name('ajouter.commande');

route::get('livreurs', [CommandeController::class, 'livreurs'])->name('livreurs');




route::get('liste-validee', [CommandeController::class, 'listecommandevalidee'])->name('commande.validee');

route::post('liste-commande-validee', [CommandeController::class, 'maj'])->name('maj.validee');


route::post('savemessage', [ContactsController::class, 'store'])->name('savemessage');
route::get('contactview', [ContactsController::class, 'create'])->name('contactview');
//contact client
route::post('savemessage1', [clientController::class, 'store'])->name('savemessage1');
route::get('contactview1', [clientController::class, 'create'])->name('contactview1');




//pour l'ajout des agents livreurs et commer??ants ( les fonctions)
route::get('ajoutcom', [RegisteredUserController::class, 'ajoutcom'])->name('ajoutcom');
route::get('ajoutagent', [RegisteredUserController::class, 'ajoutagent'])->name('ajoutagent');

route::get('ajoutlivreur', [RegisteredUserController::class, 'ajoutlivreur'])->name('ajoutlivreur');

route::post('ajouter-agent', [RegisteredUserController::class, 'storeagent'])->name('create.agent');
route::post('ajouter-livreur', [RegisteredUserController::class, 'storelivreur'])->name('create.livreur');
route::post('ajouter-comm', [RegisteredUserController::class, 'storecom'])->name('create.com');
route::post('motdp', [CommandeController::class, 'store'])->name('sotemdp');

//route pour la liste des agents livreurs commer??ant
route::get('ListeAgent', [CommandeController::class, 'listeagent'])->name('listeagent');
route::get('ListeLivreur', [CommandeController::class, 'listeLivreur'])->name('listeLivreur');
route::get('Listecommercant', [CommandeController::class, 'listecommercant'])->name('listecommercant');

//pour la supression des personnels
route::delete('Deletepersonnel/{id}', [CommandeController::class, 'Deletepersonnel'])->name('personnel.delete');

// preparer et livrer plusieurs commandes
route::post('preparer', [CommandeController::class, 'preparer'])->name('preparer');
route::post('livrer', [CommandeController::class, 'livrer'])->name('livrer');
route::post('preparation', [CommandeController::class, 'preparation'])->name('preparation');
route::post('livraison', [CommandeController::class, 'livraison'])->name('livraison');

route::post('updatemdp', [CommandeController::class, 'updatemdp'])->name('updatemdp');

route::get('mdpcommercant', [CommandeController::class, 'mdp_commercant'])->name('mdp_commercant');
route::get('mdpagent', [CommandeController::class, 'mdpagent'])->name('mdpagent');

route::get('mdpadmin', [CommandeController::class, 'mdpadmin'])->name('mdpadmin');
route::get('mdplivreur', [CommandeController::class, 'mdplivreur'])->name('mdplivreur');

Route::get('/index', function () {
    return view('index');
});
//pour afficher view recherche commande(client)
route::get('client', [CommandeController::class, 'client'])->name('client');

route::post('chercher', [CommandeController::class, 'chercher'])->name('chercher');
//page contact pour client

route::get('contact_client', [HomeController::class, 'contact_client'])->name('contact_client');


// afficher liste retournee pour livreur
route::get('cmd_retournee', [CommandeController::class, 'cmd_retournee'])->name('cmd_retournee');

//a effacer excel
route::get('model/{id}', [UsersImport::class, 'model'])->name('model');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');




require __DIR__ . '/auth.php';
Route::get('redirects', 'HomeController@index');
// 
// la gestion du profil 

//afficher view profil
route::get('profilAgent', [profilcontroller::class, 'profilagent'])->name('profilAgent');
route::get('profilcommercant', [profilcontroller::class, 'profilcommercant'])->name('profilcommercant');
route::get('profillivreur', [profilcontroller::class, 'profillivreur'])->name('profillivreur');
route::get('profilAdmin', [profilcontroller::class, 'profiladmin'])->name('profiladmin');

// afficher page edit et fonction update

route::get('editer-profil-agent/{id}', [profilcontroller::class, 'EditerprofilAgent'])->name('editer-profil-agent');
route::post('update-profilAgent', [profilcontroller::class, 'profileUpDatAagent'])->name('update.profilAgent');
route::get('editer-profil-livreur/{id}', [profilcontroller::class, 'EditerprofilLivreur'])->name('Editer-profil-Livreur');
route::post('update-profillivreur', [profilcontroller::class, 'profileUpDateLivreur'])->name('update.profillivreur');
route::get('editer-profil-commercant/{id}', [profilcontroller::class, 'Editerprofilcommercant'])->name('Editer-profil-commercant');
route::post('update.profilcommercant', [profilcontroller::class, 'profileUpDateCommercant'])->name('update.profilcommercant');
route::get('editer-profil-admin/{id}', [profilcontroller::class, 'Editerprofiladmin'])->name('editer-profil-admin');
route::post('update-profiladmin', [profilcontroller::class, 'profileUpDatAadmin'])->name('update.profiladmin');
//route pour dashboard
route::get('cmd_jour', [chart::class,'cmd_jour'])->name('cmd_jour');

route::get('cmd_societe', [chart::class,'cmd_societe'])->name('cmd_societe');
route::get('cmd_region', [chart::class,'cmd_region'])->name('cmd_region');
route::get('jour_bat', [chart::class,'jour_bat'])->name('jour_bat');
route::get('employee', [chart::class,'employee'])->name('employee');
route::get('cmd_agent', [chart::class,'cmd_agent'])->name('cmd_agent');
route::get('cmd_livreur', [chart::class,'cmd_livreur'])->name('cmd_livreur');
route::get('diff_affect_liv', [chart::class,'diff_affect_liv'])->name('diff_affect_liv');
route::get('diff_affect_prep', [chart::class,'diff_affect_prep'])->name('diff_affect_prep');
route::get('duree', [chart::class,'duree'])->name('duree');