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


class CommandeController extends Controller
{
    public function addCommande()
    {
        $comm = DB::table('users')->where('id', Auth::user()->id)->first();

        return view('Declarer-commande', compact('comm'));
    }
    //pour declarer une commande
    public function saveCommande(request $request)
    {
       
        //dd($request);
        $newcommande = Commande::create([

            'ID_commande' => $request->ID_commande->validate(),

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

        DB::table('Notifications')->insert([
            'ID_Personnel' =>  Auth::user()->id,
            'Type' => 'commerçant',
            'texte' => 'a déclaré la commande',
            'Notifiable' => 'admin',
            'ID_commande' => $newcommande->ID_commande
        ]);

        event(new MyEvenet([route('commande.details', ['id' => $newcommande->id]), Auth::user()->id, 'a déclaré la commande', $request->ID_commande]));
        $commandes = DB::table('commandes')->get();
        $comm = DB::table('users')->where('id', Auth::user()->id)->first();

        return view('liste-commande-declare', compact('commandes', 'comm'));
    }
    public function CommandeList()
    {
        $commandes = DB::table('commandes')->get();
        $comm = DB::table('users')->where('id', Auth::user()->id)->first();

        return view('liste-commande-declare', compact('commandes', 'comm'));
    }


    //affichage des listes des commandes pour admin
    //pour afficher la liste des commandes declarees 
    public function CommandeListAdmin()
    {
        $notif = Notifications::query()->where('Notifiable', 'admin')->take(5)->get();
        $admin = DB::table('users')->where('id', Auth::user()->id)->first();

        $commandes = DB::table('commandes')->where('Etat', 'declaree')->get();
        return view('liste-commande-declare-admin', compact('commandes', 'admin', 'notif'));
    }

    //pour afficher la liste des commandes validées

    public function listecommandevalidee()
    {
        $commandes = DB::table('commandes')->where('Etat', 'validee')->get();
        $agents = DB::table('users')->where('role', 'agent')->get();
        $notif = Notifications::query()->where('Notifiable', 'admin')->take(5)->get();
        $admin = DB::table('users')->where('id', Auth::user()->id)->first();

        return view('liste-commande-validee', compact('commandes', 'agents', 'notif', 'admin'));
    }
       //pour afficher la liste des commandes preparées
       public function ListprepareeAdmin()
       {
           $commandes = DB::table('commandes')->where('Etat', 'preparee')->get();
           $livreurs = DB::table('users')->where('role', 'livreur')->get();
           $notif = Notifications::query()->where('Notifiable', 'admin')->take(5)->get();
           $admin = DB::table('users')->where('id', Auth::user()->id)->first();
   
           return view('liste-commande-preparee', compact('commandes', 'livreurs','admin','notif'));
       }

    public function Commandevalider()
    {
        $commandes = DB::table('commandes')->where('Etat', 'validee')->get();
        return view('details', compact('commandes'));
    }
 
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


    //pour details commerçant 
    public function CommandedetailCommerssant($id)
    {
        $commandes = DB::table('commandes')->where('id', $id)->first();
        return view('detailsview/{id}', compact('commandes'));
    }



    //pour afficher la page details
    public function Commandedetails($id)
    {
        $commande = DB::table('commandes')->where('ID_commande', $id)->first();
        return view('details', compact('commande'));
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
        $notif = Notifications::query()->where('Type', 'agent')->take(5)->get();

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
        $notif = Notifications::query()->where('Notifiable', 'admin')->take(5)->get();
        $admin = DB::table('users')->where('id', Auth::user()->id)->first();

       // return view('Admin', compact('notif', 'admin'));

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
            event(new MyEvenet([route('commande.details', ['id' => $cmd->id]), Auth::user()->id, 'vous a affecté la commande', $cmd->ID_commande]));
        }



        return response()->json(['success' => 'commande affected']);
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
            DB::table('Notifications')->updateOrInsert([
                'ID_Personnel' => $livreurid,
                'ID_commande' => $cmd->id,
                'Type' => 'livreur',

            ]);
            event(new MyEvenet([route('commande.details', ['id' => $cmd->id]), $livreurid, $cmd->id]));
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

        $search_text = isset($_GET['query']);
        $commandes = DB::table('commandes')->where('ID_Agent', Auth::user()->id)
            ->where('ID_commande', 'LIKE', '%' . $search_text . '%')->get();
        $notif = Notifications::query()->where('Notifiable', 'agent')->take(5)->get();
        $agents = DB::table('users')->where('Role', 'agent')->get();
        return view('ListeAgent', compact('agents', 'notif', 'commandes', 'admin'));
    }

    public function listecommercant()
    {
        $notif = Notifications::query()->where('Notifiable', 'admin')->take(5)->get();
        $admin = DB::table('users')->where('id', Auth::user()->id)->first();

        $comm = DB::table('users')->where('Role', 'commerçant')->get();
        return view('Listecommercant', compact('comm', 'notif', 'admin'));
    }

    public function listeLivreur()
    {
        $notif = Notifications::query()->where('Notifiable', 'admin')->take(5)->get();
        $admin = DB::table('users')->where('id', Auth::user()->id)->first();

        $livreur = DB::table('users')->where('Role', 'livreur')->get();
        return view('ListeLivreur', compact('livreur', 'admin', 'notif'));
    }





    //pour la supression de tout personnels
    public function Deletepersonnel($id)
    {
        DB::table('users')->where('id', $id)->delete();
        return back()->with('delete', ' deleted successfuly');
    }
    //pour editer les informations d'un agent
    public function Editagent($id)
    {
        $agent = DB::table('users')->where('id', $id)->first();
        return view('edit-agent', compact('agent'));
    }
    //pour editer les informations d'un livreur

    public function Editlivreur($id)
    {
        $livreur = DB::table('users')->where('id', $id)->first();
        return view('edit-livreur', compact('livreur'));
    }
    public function Editcommercant($id)
    {
        $comm = DB::table('users')->where('id', $id)->first();
        return view('edit-commercant', compact('comm'));
    }

    //editer agent

    public function updateLivreur(Request $request)
    {
        DB::table('users')->where('id', $request->id)->update([

            'Nom' => $request->Nom,
            'Prenom' => $request->Prenom,
            'telephone' => $request->telephone,
            'email' => $request->email,
            'adresse' => $request->adresse,
            'Role' => 'livreur',
            'password' => Hash::make($request->password),
        ]);
        return back()->with('agent_update', 'agent updated succefully');
    }
    public function updatecommercant(Request $request)
    {
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
    public function updateAgent(Request $request)
    {
        DB::table('users')->where('id', $request->id)->update([

            'Nom' => $request->Nom,
            'Prenom' => $request->Prenom,
            'telephone' => $request->telephone,
            'email' => $request->email,
            'adresse' => $request->adresse,
            'Role' => 'agent',
        ]);
        return back()->with('agent_update', 'agent updated succefully');
    }


    // profil commerçant 
    // veiw profil

    public function profilagent()
    {
        $agent = DB::table('users')->where('id', Auth::user()->id)->first();
        return view('profilAgent', compact('agent'));
    }
    public function EditerprofilAgent($id)
    {
        $id = Auth::user()->id;
        $agent = DB::table('users')->where('id', $id)->first();
        return view('editer-profil-agent', compact('agent'));
    }
    public function profileUpDatAagent(Request $request)
    {

        DB::table('users')->where('id', Auth::user()->id)->update([
            'Nom' => $request->Nom,

            'Prenom' => $request->Prenom,
            'Role' => 'agent',
            'adresse' => $request->adresse,
            'email' => $request->email,
            'telephone' => $request->telephone,


        ]);
        $agent = DB::table('users')->where('id', Auth::user()->id)->first();

        return view('profilAgent', compact('agent'));
    }
    public function profillivreur()
    {
        $livreur = DB::table('users')->where('id', Auth::user()->id)->first();
        return view('profilLivreur', compact('livreur'));
    }
    public function EditerprofilLivreur($id)
    {
        $id = Auth::user()->id;
        $livreur = DB::table('users')->where('id', $id)->first();
        return view('editer-profil-livreur', compact('livreur'));
    }
    public function profileUpDateLivreur(Request $request)
    {

        DB::table('users')->where('id', Auth::user()->id)->update([
            'Nom' => $request->Nom,

            'Prenom' => $request->Prenom,
            'Role' => 'livreur',
            'adresse' => $request->adresse,
            'email' => $request->email,
            'telephone' => $request->telephone,


        ]);
        $livreur = DB::table('users')->where('id', Auth::user()->id)->first();

        return view('profilLivreur', compact('livreur'));
    }
    public function profilcommercant()
    {
        $comm = DB::table('users')->where('id', Auth::user()->id)->first();
        return view('profilCommercant', compact('comm'));
    }
    public function Editerprofilcommercant($id)
    {
        $id = Auth::user()->id;
        $comm = DB::table('users')->where('id', $id)->first();
        return view('editer-profil-commercant', compact('comm'));
    }
    public function profileUpDateCommercant(Request $request)
    {

        DB::table('users')->where('id', Auth::user()->id)->update([
            'Nom' => $request->Nom,

            'Prenom' => $request->Prenom,
            'Role' => 'commerçant',
            'adresse' => $request->adresse,
            'email' => $request->email,
            'telephone' => $request->telephone,


        ]);
        $commercant = DB::table('users')->where('id', Auth::user()->id)->first();

        return view('profilCommercant', compact('commercant'));
    }
    public function profiladmin()
    {
        $notif = DB::table('notifications')->where('Notifiable', 'admin')->get();

        $admin = DB::table('users')->where('id', Auth::user()->id)->first();
        return view('profilAdmin', compact('admin', 'notif'));
    }
    public function Editerprofiladmin($id)
    {
        $id = Auth::user()->id;
        $admin = DB::table('users')->where('id', $id)->first();
        return view('editer-profil-admin', compact('admin'));
    }
    public function profileUpDatAadmin(Request $request)
    {

        DB::table('users')->where('id', Auth::user()->id)->update([
            'Nom' => $request->Nom,

            'Prenom' => $request->Prenom,
            'Role' => 'admin',
            'adresse' => $request->adresse,
            'email' => $request->email,
            'telephone' => $request->telephone,


        ]);
        $admin = DB::table('users')->where('id', Auth::user()->id)->first();

        return view('profilAdmin', compact('admin'));
    }
    // editert Etat a preparee plusieurs commandes
    public function preparer(Request $request)
    {

        now("Europe/Rome");
        $commandesids = $request->vals;
        foreach ($commandesids as $commande) {
            $cmd = Commande::find($commande);
            $cmd->Etat = 'preparée';
            $cmd->date_validation = Carbon::now();


            $cmd->save();
        }
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
        $agent = DB::table('users')->where('id', Auth::user()->id)->first();
        $search_text = isset($_GET['query']);
        $commandes = DB::table('commandes')->where('agent', Auth::user()->id)
            ->where('ID_commande', 'LIKE', '%' . $search_text . '%')->get();
        $notif = Notifications::query()->where('Notifiable', 'agent')->take(5)->get();
        return view('Agent', compact('notif', 'agent', 'commandes'));
    }
    public function livrercommande($id)
    {
        now("Europe/Rome");

        DB::table('commandes')->where('id', $id)->update([
            'Etat' => 'livrée',

            'Date_Livraison' => Carbon::now(),


        ]);
        $search_text = isset($_GET['query']);
        $notif = Notifications::query()->where('Type', 'livreur')->take(5)->get();
        $livreur = DB::table('users')->where('id', Auth::user()->id)->first();
        $commandes = DB::table('commandes')->where('livreur', Auth::user()->id)
            ->where('ID_commande', 'LIKE', '%' . $search_text . '%')->get();

        return view('Livreur', compact('commandes', 'livreur', 'notif'));
    }
    public function mdp(Request $request)
    {
        return view('MDPagent', ['request' => $request]);
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
    /*  @if(Session::has('commande_valider'))
    <span>{{Session::get('commande_valider')}} </span>
    @endif
    <form method="post" action="{{ route('valider' , ['id' => $commande->id])}}">
      @csrf */
}
