<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Commande;
use App\Models\User;
use  App\Events\MyEvenet;
use Illuminate\Http\Request;
use App\Models\Notifications;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;

class CommandeController extends Controller
{
  
    //admin ajoute une cmd 
    public function ajoutCommande()
    {
        $notif = Notifications::query()->where('Notifiable', 'admin')
        ->orderBy('id', 'desc')->take(5)
        ->get();
        $user = User::join('notifications', 'notifications.ID_Personnel', '=', 'users.id')
        ->first(['users.*', 'notifications.*']);

        $admin = DB::table('users')->where('id', Auth::user()->id)->first();
        return view('ajouter-commande', compact('notif','user','admin'));
    }
    public function adminajoutCommande(request $request)
{
    $request->validate(
        [
            'Code_postal' => 'required|alpha_num',
            'ID_commande' => 'required|unique:commandes,ID_commande',
            'Nom' => 'required|alpha',
            'Prenom' => 'required|alpha',
            'Telephone' => 'required|alpha_num',
            'Adresse' => 'required',
            'Governorat' => 'required',
            'Ville' => 'required',
           // 'Email' => 'email:rfc,dns',
            'Prix' => 'required_if:Paiement,livraison',

],
        [
            'Nom.required' => 'le nom du client est obligatoir',
            'Nom.alpha' => 'Le nom ne doit contenir que des lettres.',
            'Prenom.required' => 'le Prenom du client est obligatoir',
            'Prenom.alpha' => 'le Prenom ne doit contenir que des lettres.',
            'Telephone.required' => 'le numéro du téléphone est obligatoire',
            'Telephone.digits_between' => 'le numéro du téléphone est invalide',

            'Adresse.required' => ' Adresse du client est obligatoir',
            'Governorat.required' => ' Governorat du client est obligatoir',
            'Ville.required' => ' Ville du client est obligatoir',
            'Prix.required_if' => ' le prix est obligatoire car le paiement est a la livraison',
           // 'Email.email' => 'email invalide',
            'Code_postal.required' => 'le code postal doit etre de 4 chiffre',
            'Code_postal.digits_between' => 'le code postal  est obligatoir',

            'ID_commande.required' => 'la références du commande est obligatoire',
            'ID_commande.unique' => 'la références du commande doit etre unique'
        ]
    );
    $newcommande = Commande::create([
        'ID_commande' => $request->ID_commande,
        'Nom' => $request->Nom,
        'Prenom' => $request->Prenom,
        'Telephone' => $request->Telephone,
        'Email' => $request->Email,
        'Adresse' => $request->Adresse,
        'Governorat' => $request->Governorat,
        'Ville' => $request->Ville,
        'Code_postal' => $request->Code_postal,
        'Paiement' => $request->Paiement,
        'Poids' => $request->Poids,
        'Prix' => $request->Prix,

        'Description' => $request->Description,
    ]);
 
    return redirect()->route('commande_declaree_admin');


}
//afficher form declaration commerçant
public function addCommande()
{
    $comm = DB::table('users')->where('id', Auth::user()->id)->first();

    return view('Declar', compact('comm'));
}

    //pour declarer une commande
    public function saveCommande(request $request)
    {
        $request->validate(
            [
                'Code_postal' => 'required|alpha_num',
                'ID_commande' => 'required|unique:commandes,ID_commande',
                'Nom' => 'required|alpha',
                'Prenom' => 'required|alpha',
                'Telephone' => 'required|alpha_num',
                'Adresse' => 'required',
                'Governorat' => 'required',
                'Ville' => 'required',
               // 'Email' => 'email:rfc,dns',
                'Prix' => 'required_if:Paiement,livraison',

 ],
            [
                'Nom.required' => 'le nom du client est obligatoir',
                'Nom.alpha' => 'Le nom ne doit contenir que des lettres.',
                'Prenom.required' => 'le Prenom du client est obligatoir',
                'Prenom.alpha' => 'le Prenom ne doit contenir que des lettres.',
                'Telephone.required' => 'le numéro du téléphone est obligatoire',
                'Telephone.digits_between' => 'le numéro du téléphone est invalide',

                'Adresse.required' => ' Adresse du client est obligatoir',
                'Governorat.required' => ' Governorat du client est obligatoir',
                'Ville.required' => ' Ville du client est obligatoir',
                'Prix.required_if' => ' le prix est obligatoire car le paiement est a la livraison',
               // 'Email.email' => 'email invalide',
                'Code_postal.required' => 'le code postal doit etre de 4 chiffre',
                'Code_postal.digits_between' => 'le code postal  est obligatoir',

                'ID_commande.required' => 'la références du commande est obligatoire',
                'ID_commande.unique' => 'la références du commande doit etre unique'
            ]
        );
        $newcommande = Commande::create([
            'ID_commande' => $request->ID_commande,
            'Nom' => $request->Nom,
            'Prenom' => $request->Prenom,
            'Telephone' => $request->Telephone,
            'Email' => $request->Email,
            'Adresse' => $request->Adresse,
            'Governorat' => $request->Governorat,
            'Ville' => $request->Ville,
            'Code_postal' => $request->Code_postal,
            'Paiement' => $request->Paiement,
            'Poids' => $request->Poids,
            'Prix' => $request->Prix,

            'Description' => $request->Description,
        ]);
        $newcommande->save();
        DB::table('commandes')->where('id',$newcommande->id)->update([
            'commercant' => Auth::user()->id
        ]);


        DB::table('Notifications')->insert([
            'ID_Personnel' =>  Auth::user()->id,
            'Type' => 'commerçant',
            'texte' => 'a déclaré la commande',
            'Notifiable' => 'admin',
            'ID_commande' => $newcommande->id
        ]);

        event(new MyEvenet([route('commande.details', ['id' => $newcommande->id]), Auth::user()->Nom, 'a déclaré la commande',  $newcommande->id]));
        return redirect()->route('commande.declaree');

    }
   

    //affichage des listes des commandes pour admin
    //pour afficher la liste des commandes declarees 
    public function CommandeListAdmin()
    {
        $notif = Notifications::query()->where('Notifiable', 'admin')->orderBy('id', 'desc')->take(5)->get();
        $admin = DB::table('users')->where('id', Auth::user()->id)->first();
        $user = User::join('notifications', 'notifications.ID_Personnel', '=', 'users.id')
        ->first(['users.*', 'notifications.*']);
        $cmd = Notifications::join('commandes', 'commandes.ID_commande', '=', 'notifications.ID_commande')
        ->first(['commandes.*', 'notifications.*']);
        $commandes = DB::table('commandes')->where('Etat', 'declaree')->get();
        $commercant = User::join('commandes', 'commandes.commercant', '=', 'users.id')
        ->first(['users.*', 'commandes.*']);
        return view('liste-commande-declare-admin', compact('cmd','commandes', 'admin', 'notif','user','commercant'));
    }

    //pour afficher la liste des commandes validées

    public function listecommandevalidee()
    {
        $commandes = DB::table('commandes')->where('Etat', 'validee')->get();
        $agents = DB::table('users')->where('role', 'agent')->get();
        $notif = Notifications::query()->where('Notifiable', 'admin')->orderBy('id', 'desc')->take(5)->get();
        $admin = DB::table('users')->where('id', Auth::user()->id)->first();
        $user = User::join('notifications', 'notifications.ID_Personnel', '=', 'users.id')
        ->first(['users.*', 'notifications.*']);
        $commercant = User::join('commandes', 'commandes.commercant', '=', 'users.id')
        ->first(['users.*', 'commandes.*']);
        return view('liste-commande-validee', compact('commandes', 'agents', 'notif', 'admin','user','commercant'));
    }
    //pour afficher la liste des commandes preparées
    public function ListprepareeAdmin()
    {
        $commandes = DB::table('commandes')->where('Etat', 'preparee')->get();
        $livreurs = DB::table('users')->where('role', 'livreur')->get();
        $notif = Notifications::query()->where('Notifiable', 'admin')->orderBy('id', 'desc')->take(5)->get();
        $admin = DB::table('users')->where('id', Auth::user()->id)->first();
        $user = User::join('notifications', 'notifications.ID_Personnel', '=', 'users.id')
        ->first(['users.*', 'notifications.*']);
        $commercant = User::join('commandes', 'commandes.commercant', '=', 'users.id')
        ->first(['users.*', 'commandes.*']);
        return view('liste-commande-preparee', compact('commandes', 'livreurs', 'admin', 'notif','user','commercant'));
    }
    public function ListlivreeAdmin()
    {
        $commandes = DB::table('commandes')->where('Etat', 'livree')->get();
        $livreurs =User::join('commandes', 'commandes.ID_Livreur', '=', 'users.id')
        ->first(['users.*', 'commandes.*']);
        $notif = Notifications::query()->where('Notifiable', 'admin')->orderBy('id', 'desc')->take(5)->get();
        $admin = DB::table('users')->where('id', Auth::user()->id)->first();
        $user = User::join('notifications', 'notifications.ID_Personnel', '=', 'users.id')
        ->first(['users.*', 'notifications.*']);
        $commercant = User::join('commandes', 'commandes.commercant', '=', 'users.id')
        ->first(['users.*', 'commandes.*']);
        return view('liste-commande-livree', compact('commandes', 'livreurs', 'admin', 'notif','user','commercant'));
    }
       public function ListretourneeAdmin()
    {
        $commande = DB::table('commandes')->where('Etat', 'retournee')->get();
        $livreurs =User::join('commandes', 'commandes.ID_Livreur', '=', 'users.id')
        ->first(['users.*', 'commandes.*']);
        $notif = Notifications::query()->where('Notifiable', 'admin')->orderBy('id', 'desc')->take(5)->get();
        $admin = DB::table('users')->where('id', Auth::user()->id)->first();
        $user = User::join('notifications', 'notifications.ID_Personnel', '=', 'users.id')
        ->first(['users.*', 'notifications.*']);
        $commercant = User::join('commandes', 'commandes.commercant', '=', 'users.id')
        ->first(['users.*', 'commandes.*']);
        return view('liste-commande-retournee', compact('commande', 'livreurs', 'admin', 'notif','user','commercant'));
    }

 /*    public function Commandevalider()
    {
        $commandes = DB::table('commandes')->where('Etat', 'validee')->get();
        return view('details', compact('commandes'));
    }
 */
    public function CommandeListAgent()
    {
        $agents = DB::table('users')->where('role', 'agent')->get();
        return view('liste-personnels-agent', compact('agents'));
    }
    //pour modal liste livreur
    public function CommandeListLivreur()
    {
        $livreurs = DB::table('users')->where('role', 'livreur')->get();
        return view('liste-personnels-livreur', compact('livreurs'));
    }


 /*    //pour details commerçant 
    public function CommandedetailCommerssant($id)
    {
        $commandes = DB::table('commandes')->where('id', $id)->first();
        return view('detailsview/{id}', compact('commandes'));
    }
 */


    //pour afficher la page details
    public function Commandedetails($id)
    {
        $commande = DB::table('commandes')->where('id', $id)->first();
        $comm = DB::table('users')->where('id', Auth::user()->id)->first();
        $cmd = Notifications::join('commandes', 'commandes.ID_commande', '=', 'notifications.ID_commande')
            ->first(['commandes.*', 'notifications.*']);

        $user = User::join('notifications', 'notifications.ID_Personnel', '=', 'users.id')
        ->first(['users.*', 'notifications.*']);
        $commandes = Notifications::join('commandes', 'commandes.ID_commande', '=', 'notifications.ID_commande')
        ->first(['commandes.*', 'notifications.*']);

        $agent = DB::table('users')->where('id', Auth::user()->id)->first();
        $admin = DB::table('users')->where('id', Auth::user()->id)->first();
        $livreur = DB::table('users')->where('id', Auth::user()->id)->first();

        if(Auth::user()->Role=='agent')
{        $type = "layouts.Agent" ;
    $notif = Notifications::query()->where('Notifiable', 'agent')
    ->orderBy('id', 'desc')->take(5)
    ->get();
}        else if(Auth::User()->Role == 'admin')
       { $type = "layouts.admin" ;
        $notif = Notifications::query()->where('Notifiable', 'admin')
        ->orderBy('id', 'desc')->take(5)
        ->get();}
        else if(Auth::User()->Role == 'livreur')
    {    $type = "layouts.livreur";
        $notif = Notifications::query()->where('Notifiable', 'livreur')
        ->orderBy('id', 'desc')->take(5)
        ->get(); }
        else
        $type = "layouts.commerçant" 
        ;
        return view('details', compact('cmd','commande','comm','notif','user','agent','admin','type','livreur','commandes'));
   
    }
    //pour afficher 5 notifications

    public function Commandenotif()
    {
        $commandes = DB::table('commandes')->get();
        $notif = Notifications::query()->take(5)->get();


        return view('Admin', compact('commandes', 'notif'));
    }
    public function notifAgent()
    {
        $notif = Notifications::query()->where('Type', 'agent')->orderBy('id', 'desc')->take(5)->get();

        return view('Agent', compact('notif'));
    }
    public function notiflivreur()
    {


        $commandes = DB::table('commandes')->get();
        $notif = Notifications::query()->where('Type', 'livreur')->take(5)->get();

        return view('Livreur', compact('commandes', 'notif'));
    }

    //pour editer la commande
    public function EditCommande($id)
    {
        $commandes = DB::table('commandes')->where('id', $id)->first();
        return view('edit-commande', compact('commandes'));
    }
    //pour supprimer la commande
    public function DeleteCommande($id)
    {
        DB::table('commandes')->where('id', $id)->delete();
        return back()->with('commande_delete', 'commande deleted successfuly');
    }
    //pour supprimer la commande


    //pour changer l'Etat de declaree a validee
    //pour valider plusieurs commandes
    public function valider(Request $request)
    {
        now("Europe/Rome");
        $commandesids = $request->vals;
        foreach ($commandesids as $commande) {
            $cmd = Commande::find($commande);
            $cmd->Etat = 'validée';
            $cmd->date_validation = Carbon::now();


            $cmd->save();
        }
    }
    //pour valider depuis la view details
    public function validercommande($id)
    {
        now("Europe/Rome");

        DB::table('commandes')->where('id', $id)->update([
            'Etat' => 'validée',

            'date_validation' => Carbon::now(),


        ]);
     
        return redirect()->route('commande.validee');
    }
    //pour laffectation des agents
    public function affecteragent(Request $request)
    {

        now("Europe/Rome");
        $agentid = $request->agentid;
        $commandesids = $request->vals;
        //$agent=DB::table('users')->where('role' , 'agent')
        //->where('id',$agentid)->get(['id']);
        foreach ($commandesids as $commande) {
            $cmd = Commande::find($commande);
            $cmd->ID_Agent = $agentid;
            $cmd->Etat = 'affecter a un agent';
            $cmd->Date_Affect_Agent = Carbon::now();


            $cmd->save();
            DB::table('Notifications')->insert([
                'ID_Personnel' =>  Auth::user()->id,
                'Type' => 'admin',
                'texte' => 'vous a affecté la commande',
                'Notifiable' => 'agent',
                'ID_commande' => $cmd->ID_commande
            ]);
        
            event(new MyEvenet([route('commande.details', ['id' => $cmd->id]), 'Admin vous a affecté la commande', $cmd->ID_commande]));
        }



        return response()->json(['success' => 'commande affectée avec succées']);
    }
    //affecter livreur
    public function affecterlivreur(Request $request)
    {

        now("Europe/Rome");
        $livreurid = $request->livreurid;
        $commandesids = $request->vals;
        //$agent=DB::table('users')->where('role' , 'agent')
        //->where('id',$agentid)->get(['id']);
        foreach ($commandesids as $commande) {
            $cmd = Commande::find($commande);
            $cmd->ID_Livreur = $livreurid;
            $cmd->Etat = 'affecter a un livreur';
            $cmd->Date_Affect_Livreur = Carbon::now();


            $cmd->save();
            DB::table('Notifications')->insert([
                'ID_Personnel' =>  Auth::user()->id,
                'Type' => 'admin',
                'texte' => 'Admin vous a affecté la commande',
                'Notifiable' => 'livreur',
                'ID_commande' => $cmd->ID_commande
            ]);
            event(new MyEvenet([route('commande.details', ['id' => $cmd->id]), 'Admin vous a affecté la commande', $cmd->ID_commande]));
        }



        return response()->json(['success' => 'commande affected']);
    }
    //pour modifier la commande ( pour le moment pas dutilisation)
    public function updateCommande(Request $request)
    {
        DB::table('commandes')->where('id', $request->id)->update([
            'date' => $request->date,

            'temps' => $request->temps,
            'Nom' => $request->Nom,
            'Prenom' => $request->Prenom,
            'Telephone' => $request->Telephone,
            'Email' => $request->Email,
            'Adresse' => $request->Adresse,
            'Governorat' => $request->Governorat,
            'Ville' => $request->Ville,
            'Code_postal' => $request->Code_postal,
            'ID_commande' => $request->ID_commande,
            'Paiement' => $request->Paiement,
            'Poids' => $request->Poids,
            'Prix' => $request->Prix,
            'Description' => $request->Description,

        ]);
        return back()->with('commandes_update', 'commande updated succefully');
    }
    //pour la recherche dans les data table

    public function search()
    {
        $search_text = $_GET['query'];
        $commandes = DB::table('commandes')->where('ID_commande', 'LIKE', '%' . $search_text . '%')->get();
        return view('liste-commande-declare', compact('commandes'));
    }



    //les fonctions pour view all notification 
    //afficher la liste des notification pour agent

    public function listenotifagent()
    {
        $notifs  = Notifications::where('Type', 'agent')->orderBy('id', 'desc')->get();

        return view('liste-notification-agent', compact('notifs'));
    }
    //afficher la liste des notification pour livreur

    public function listenotiflivreur()
    {
        $notifs  = Notifications::where('Type', 'livreur')->orderBy('id', 'desc')->get();

        return view('liste-notification-livreur', compact('notifs'));
    }
    //pour afficher la liste des notifiactions pour admin
    public function listenotif()
    {
        $notif = DB::table('notifications')->orderBy('id', 'desc')->get();


        return view('liste-notification', compact('notif'));
    }



    //les fonction d'affichage des personnels(sprint2)
    //pour afficher la liste des agents 
    public function listeagent()
    {
        $admin = DB::table('users')->where('id', Auth::user()->id)->first();
        $user = User::join('notifications', 'notifications.ID_Personnel', '=', 'users.id')
        ->first(['users.*', 'notifications.*']);
        $search_text = isset($_GET['query']);
        $commandes = DB::table('commandes')->where('ID_Agent', Auth::user()->id)
            ->where('ID_commande', 'LIKE', '%' . $search_text . '%')->get();
        $notif = Notifications::query()->where('Notifiable', 'agent')->take(5)->get();
        $agents = DB::table('users')->where('Role', 'agent')->get();
        return view('ListeAgent', compact('agents', 'notif', 'commandes', 'admin','user'));
    }

    public function listecommercant()
    {
        $notif = Notifications::query()->where('Notifiable', 'admin')->take(5)->get();
        $admin = DB::table('users')->where('id', Auth::user()->id)->first();
        $user = User::join('notifications', 'notifications.ID_Personnel', '=', 'users.id')
        ->first(['users.*', 'notifications.*']);
        $comm = DB::table('users')->where('Role', 'commerçant')->get();
        return view('Listecommercant', compact('comm', 'notif', 'admin','user'));
    }

    public function listeLivreur()
    {
        $notif = Notifications::query()->where('Notifiable', 'admin')->take(5)->get();
        $admin = DB::table('users')->where('id', Auth::user()->id)->first();
        $user = User::join('notifications', 'notifications.ID_Personnel', '=', 'users.id')
        ->first(['users.*', 'notifications.*']);
        $livreur = DB::table('users')->where('Role', 'livreur')->get();
        return view('ListeLivreur', compact('livreur', 'admin', 'notif','user'));
    }





    //pour la supression de tout personnels
    public function Deletepersonnel($id)
    {
        DB::table('users')->where('id', $id)->delete();
        return back()->with('delete', ' deleted successfuly');
    }
    //pour editer les informations d'un agent
   

   
    
    public function updatecommercant(Request $request)
    {
        $request->validate(
            [
               
                'Nom' => 'required|regex:/^[\pL\s\-]+$/u',
                'Prenom' => 'required|regex:/^[\pL\s\-]+$/u',
                'telephone' => 'required|numeric',
               'email' => 'email:rfc,dns',
               
    ],
            [
                'Nom.required' => 'le nom du client est obligatoir',
                'Nom.regex' => 'Le nom ne doit contenir que des lettres.',
                'Prenom.required' => 'le Prenom du client est obligatoir',
                'Prenom.regex' => 'le Prenom ne doit contenir que des lettres.',
                'telephone.required' => 'le numéro du téléphone est obligatoire',
                'telephone.numeric' => 'le numéro du téléphone est invalide',
    
                 'email.email' => 'email invalide',

               
            ]
        );
        DB::table('users')->where('id', $request->id)->update([

            'Nom' => $request->Nom,
            'Prenom' => $request->Prenom,
            'telephone' => $request->telephone,
            'email' => $request->email,
            'adresse' => $request->adresse,
            'Role' => 'commerçant',
            'password' => Hash::make($request->password),
        ]);
        return back()->with('commercant_update', 'commerçant updated succefully');
    }
  
    // profil agent 
    // veiw profil

   
   
    // editert Etat a preparee pour  plusieurs commandes
    public function preparer(Request $request)
    {

        now("Europe/Rome");
        $commandesids = $request->vals;
        foreach ($commandesids as $commande) {
            $cmd = Commande::find($commande);
            $cmd->Etat = 'preparée';
            $cmd->date_validation = Carbon::now();


            $cmd->save();
        
        DB::table('Notifications')->insert([
            'ID_Personnel' =>  Auth::user()->id,
            'Type' => 'agent',
            'texte' => 'a préparée la commande',
            'Notifiable' => 'admin',
            'ID_commande' => $cmd->ID_commande
        ]);
        event(new MyEvenet([route('commande.details', ['id' => $cmd->id]), Auth::user()->id, 'a préparée la commande', $cmd->ID_commande]));
    }
}
public function preparation(Request $request)
{

    now("Europe/Rome");
    $commande = $request->vals;
        $cmd = Commande::find($commande);
        $cmd->Etat = 'preparée';
        $cmd->date_validation = Carbon::now();


        $cmd->save();
    
    DB::table('Notifications')->insert([
        'ID_Personnel' =>  Auth::user()->id,
        'Type' => 'agent',
        'texte' => 'a préparée la commande',
        'Notifiable' => 'admin',
        'ID_commande' => $cmd->ID_commande
    ]);
    event(new MyEvenet([route('commande.details', ['id' => $cmd->id]), Auth::user()->id, 'a préparée la commande', $cmd->ID_commande]));
}

    public function preparercommande($id)
    {
        now("Europe/Rome");

        DB::table('commandes')->where('id', $id)->update([
            'Etat' => 'préparée',

            'Date_Preparation' => Carbon::now(),


        ]);
        $cmd= DB::table('commandes')->where('id', $id)->first();
        event(new MyEvenet([route('commande.details', ['id' => $id]), Auth::user()->id, 'a livré la commande', $cmd->ID_commande]));

       /*  $agent = DB::table('users')->where('id', Auth::user()->id)->first();
        $search_text = isset($_GET['query']);
        $commercant = User::join('commandes', 'commandes.commercant', '=', 'users.id')
        ->first(['users.*', 'commandes.*']);
        $commandes = DB::table('commandes')->where('ID_Agent', Auth::user()->id)
            ->where('ID_commande', 'LIKE', '%' . $search_text . '%')->get();
        $notif = Notifications::query()->where('Notifiable', 'agent')->take(5)->get();
        $cmd= DB::table('commandes')->where('id', $id)->first();

        return view('Agent', compact('notif', 'agent', 'commandes','commercant')); */
        return redirect()->route('agent');

    }
    //livrer page details
    public function livrercommande($id)
    {
        now("Europe/Rome");

        DB::table('commandes')->where('id', $id)->update([
            'Etat' => 'livrée',

            'Date_Livraison' => Carbon::now(),


        ]);
        $cmd= DB::table('commandes')->where('id', $id)->first();

        event(new MyEvenet([route('commande.details', ['id' => $id]), Auth::user()->id, 'a livré la commande', $cmd->ID_commande]));

   /*      $cmd= DB::table('commandes')->where('id', $id)->first();
        $search_text = isset($_GET['query']);
        $notif = Notifications::query()->where('Type', 'livreur')->take(5)->get();
        $livreur = DB::table('users')->where('id', Auth::user()->id)->first();
        $commandes = DB::table('commandes')->where('ID_Livreur', Auth::user()->id)
            ->where('ID_commande', 'LIKE', '%' . $search_text . '%')->get();
            $commercant = User::join('commandes', 'commandes.commercant', '=', 'users.id')
            ->first(['users.*', 'commandes.*']);
        return view('Livreur', compact('commandes', 'livreur', 'notif','commercant')); */
        return redirect()->route('livreur');

    }
    //retournee de page details
    
public function retourner(Request $request)
{

    now("Europe/Rome");
    $commande = $request->vals;
        $cmd = Commande::find($commande);
        $cmd->Etat = 'retournée';
       // $cmd->date_retour = Carbon::now();


        $cmd->save();
    
    DB::table('Notifications')->insert([
        'ID_Personnel' =>  Auth::user()->id,
        'Type' => 'livreur',
        'texte' => 'a retournée la commande',
        'Notifiable' => 'admin',
        'ID_commande' => $cmd->ID_commande
    ]);
   event(new MyEvenet([route('commande.details', ['id' => $cmd->id]), Auth::user()->id, 'a retournée la commande', $cmd->ID_commande]));

   return response()->json(["redirect_url"=>url('livreur')]);

}

    //livreur plusieurs
    public function livrer(Request $request)
    {

        now("Europe/Rome");
        $commandesids = $request->vals;
        foreach ($commandesids as $commande) {
            $cmd = Commande::find($commande);
            $cmd->Etat = 'livree';
            $cmd->Date_Livraison = Carbon::now();


            $cmd->save();
        
        DB::table('Notifications')->insert([
            'ID_Personnel' =>  Auth::user()->id,
            'Type' => 'livreur',
            'texte' => 'a livré la commande',
            'Notifiable' => 'admin',
            'ID_commande' => $cmd->ID_commande
        ]);
        event(new MyEvenet([route('commande.details', ['id' => $cmd->id]), Auth::user()->id, 'a livré la commande', $cmd->ID_commande]));
        }}
        //livrer 1 seul
    public function livraison(Request $request){

        now("Europe/Rome");
        $commande = $request->vals;
            $cmd = Commande::find($commande);
            $cmd->Etat = 'livree';
            $cmd->Date_Livraison = Carbon::now();


            $cmd->save();
        
        DB::table('Notifications')->insert([
            'ID_Personnel' =>  Auth::user()->id,
            'Type' => 'livreur',
            'texte' => 'a livré la commande',
            'Notifiable' => 'admin',
            'ID_commande' => $cmd->ID_commande
        ]);
        event(new MyEvenet([route('commande.details', ['id' => $cmd->id]), Auth::user()->id, 'a livré la commande', $cmd->ID_commande]));
    
}
    public function mdpagent(Request $request)
    {
        $agent = DB::table('users')->where('id', Auth::user()->id)->first();
        $search_text = isset($_GET['query']);
        $commande= DB::table('commandes')->where('ID_Agent', Auth::user()->id)
            ->where('ID_commande', 'LIKE', '%' . $search_text . '%')
            ->orderBy('created_at', 'desc')->get();
        $notif = Notifications::query()->where('Notifiable', 'agent')->orderBy('id', 'desc')->take(5)->get();
              $commercant = User::join('commandes', 'commandes.commercant', '=', 'users.id')
        ->first(['users.*', 'commandes.*']);
        $commandes = Notifications::join('commandes', 'commandes.ID_commande', '=', 'notifications.ID_commande')
        ->first(['commandes.*', 'notifications.*']);
      
        return view('MDPagent',compact('notif','agent','commandes','commande'));
    }
    public function mdplivreur(Request $request)
    {
        $search_text = isset($_GET['query']);

            $notif = Notifications::query()->where('Notifiable', 'livreur')->take(5)->get();
            $livreur = DB::table('users')->where('id', Auth::user()->id)->first();
            $commandes = Notifications::join('commandes', 'commandes.ID_commande', '=', 'notifications.ID_commande')
            ->first(['commandes.*', 'notifications.*']);
    
            $commande = DB::table('commandes')->where('ID_Livreur', Auth::user()->id)
                ->where('ID_commande', 'LIKE', '%' . $search_text . '%')->get();
                $commercant = User::join('commandes', 'commandes.commercant', '=', 'users.id')
                ->first(['users.*', 'commandes.*']);
        return view('MDPlivreur',compact('notif','livreur','commandes','commande','commercant'));
    }
    public function mdpadmin(Request $request)
    {
        $notif = Notifications::query()->where('Notifiable', 'admin')
        ->orderBy('id', 'desc')->take(5)
        ->get();
        $user = User::join('notifications', 'notifications.ID_Personnel', '=', 'users.id')
        ->first(['users.*', 'notifications.*']);
        $search_text = isset($_GET['query']);

        $admin = DB::table('users')->where('id', Auth::user()->id)->first();
        $cmd = Notifications::join('commandes', 'commandes.ID_commande', '=', 'notifications.ID_commande')
        ->first(['commandes.*', 'notifications.*']);

        return view('MDPadmin',compact('notif','admin','user','cmd'));
    }
    public function mdp_commercant(Request $request)
    {
        $comm = DB::table('users')->where('id', Auth::user()->id)->first();

        return view('MDPcommercant',compact('comm'));
    }
    public function updatemdp(Request  $request)
    {
        $pass = Auth::user()->password;
        //   dd( password_verify($request->old_password, $pass));

        //   $oldpassword = Hash::make($request->oldpassword);
        //   dd(Auth::user()->password , $oldpassword);

        if (!(password_verify($request->old_password, $pass))) {
            // dd($request);
            return back()->with('old password', 'old password');
        } elseif ($request->password !== $request->password_confirmation) {
            return back()->with('erreur', 'erreur confirmation');
        } else {
            /* $user = Auth::user();
            Auth::user()->fill([
                'password' => bcrypt($request->Password)
            ])->save(); */
            //Change Password
            $user = Auth::user();
            $user->password = bcrypt($request->password);
            $user->save();

            return redirect()->back()->with("success", "Password successfully changed!");
        }
    }
    public function client()
    {

            
        $commandes = DB::table('commandes')->where('id_commande', 'ID_commande')->get();
        return view('client',compact('commandes'));
    }
    public function chercher(Request $request){

        $ID = $request->ID;


 
  $data = DB::table('commandes')->where('ID_commande', $ID)->first();

$etat=$data->Etat;  
  
     return response()->json(['etat'=>$etat]);

return view('client', compact('etat'));

}
public function cmd_retournee(Request $request)
{
    $search_text = isset($_GET['query']);
    $commandes = Notifications::join('commandes', 'commandes.ID_commande', '=', 'notifications.ID_commande')
    ->first(['commandes.*', 'notifications.*']);
    $notif = Notifications::query()->where('type', 'livreur')->take(5)->get();
    $livreur = DB::table('users')->where('id', Auth::user()->id)->first();
    $commande = DB::table('commandes')->where('ID_Livreur', Auth::user()->id)
        ->where('ID_commande', 'LIKE', '%' . $search_text . '%')
        ->where('Etat', 'retournee')->get();
        $commercant = User::join('commandes', 'commandes.commercant', '=', 'users.id')
        ->first(['users.*', 'commandes.*']);
    return view('retourne_livreur',compact('commercant','commande','livreur','notif','commandes'));
}
}
