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

            'ID_commande' => $request->ID_commande,

            'date' => $request->date,
            'temps' => $request->temps,
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'telephone' => $request->telephone,
            'email' => $request->email,
            'adresse1' => $request->adresse1,
            'governorat' => $request->governorat,
            'ville' => $request->ville,
            'code_postal' => $request->code_postal,
            'paiement' => $request->paiement,
            'poids' => $request->poids,
            'prix' => $request->prix,

            'description' => $request->description,
        ]);

        DB::table('Notifications')->insert([
            'ID_personnel' =>  Auth::user()->id,
            'type' => 'commerçant',
            'texte' => 'a déclaré la commande',
            'notifiable'=>'admin',
            'ID_commande' => $newcommande->ID_commande
        ]);

        event(new MyEvenet([route('commande.details', ['id' => $newcommande->id]), Auth::user()->id,'a déclaré la commande',$request->ID_commande]));
        $commandes = DB::table('commandes')->get();

        return view('liste-commande-declare', compact('commandes'));
    }
    public function CommandeList()
    {
        $commandes = DB::table('commandes')->get();
        return view('liste-commande-declare', compact('commandes'));
    }



    public function listecommandevalidee()
    {
        $commandes = DB::table('commandes')->where('etat', 'validee')->get();
        $agents = DB::table('users')->where('role', 'agent')->get();
        return view('liste-commande-validee', compact('commandes'),  compact('agents'));
    }



    public function CommandeListAdmin()
    {
        $commandes = DB::table('commandes')->where('etat', 'declaree')->get();
        return view('liste-commande-declare-admin', compact('commandes'));
    }


    public function Commandevalider()
    {
        $commandes = DB::table('commandes')->where('etat', 'validee')->get();
        return view('details', compact('commandes'));
    }
    public function ListprepareeAdmin()
    {
        $commandes = DB::table('commandes')->where('etat', 'preparee')->get();
        $livreurs = DB::table('users')->where('role', 'livreur')->get();
        return view('liste-commandes-preparee', compact('commandes', 'livreurs'));
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


    //pour notification
    public function CommandedetailAdmin($id)
    {
        $commande = DB::table('commandes')->where('id', $id)->first();
        return view('details', compact('commande'));
    }

    //pour afficher la page details
    public function Commandedetails($id)
    {
        $commande = DB::table('commandes')->where('id', $id)->first();
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
        $notif = Notifications::query()->where('type', 'agent')->take(5)->get();

        return view('Agent', compact('notif'));
    }
    public function notiflivreur()
    {


        $commandes = DB::table('commandes')->get();
        $notif = Notifications::query()->where('type', 'livreur')->take(5)->get();

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


    //pour changer l'etat de declaree a validee
    public function valider(Request $request)
    {
        now("Europe/Rome");
        $commandesids = $request->vals;
        foreach ($commandesids as $commande) {
            $cmd = Commande::find($commande);
            $cmd->etat = 'validée';
            $cmd->date_validation = Carbon::now();


            $cmd->save();
        }
      
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
            $cmd->agent = $agentid;
            $cmd->etat = 'affecter a un agent';
            $cmd->date_affect_agent = Carbon::now();


            $cmd->save();
            DB::table('Notifications')->insert([
                'ID_personnel' =>  Auth::user()->id,
                'type' => 'admin',
                'texte' => 'vous a affecté la commande',
                'notifiable'=>'agent',
                'ID_commande' => $cmd->ID_commande
            ]);
            event(new MyEvenet([route('commande.details', ['id' => $cmd->id]), Auth::user()->id, 'vous a affecté la commande' ,$cmd->ID_commande]));
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
            $cmd->livreur = $livreurid;
            $cmd->etat = 'affecter a un livreur';
            $cmd->date_affect_livreur = Carbon::now();


            $cmd->save();
            DB::table('Notifications')->updateOrInsert([
                'ID_personnel' => $livreurid,
                'ID_commande' => $cmd->id,
                'type' => 'livreur',

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
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'telephone' => $request->telephone,
            'email' => $request->email,
            'adresse1' => $request->adresse1,
            'adresse2' => $request->adresse2,
            'governorat' => $request->governorat,
            'ville' => $request->ville,
            'code_postal' => $request->code_postal,
            'ID_commande' => $request->ID_commande,
            'paiement' => $request->paiement,
            'poids' => $request->poids,
            'prix' => $request->prix,
            'description' => $request->description,

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
        $notifs  = Notifications::where('type', 'agent')->orderBy('id', 'desc')->get();

        return view('liste-notification-agent', compact('notifs'));
    }
    //afficher la liste des notification pour livreur

    public function listenotiflivreur()
    {
        $notifs  = Notifications::where('type', 'livreur')->orderBy('id', 'desc')->get();

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
        $agents = DB::table('users')->where('Role', 'agent')->get();
        return view('ListeAgent', compact('agents'));
    }

    public function listecommercant()
    {
        $comm = DB::table('users')->where('Role', 'commerçant')->get();
        return view('Listecommercant', compact('comm'));
    }
    public function listeLivreur()
    {
        $livreur = DB::table('users')->where('Role', 'livreur')->get();
        return view('ListeLivreur', compact('livreur'));
    }





    //pour la supression de tout personnels
    public function Deletepersonnel($id)
    {
        DB::table('users')->where('id', $id)->delete();
        return back()->with('agent_delete', 'agent deleted successfuly');
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
        $commercant = DB::table('users')->where('id', $id)->first();
        return view('edit-commercant', compact('commercant'));
    }

    //editer agent

    public function updateLivreur(Request $request)
    {
        DB::table('users')->where('id', $request->id)->update([

            'name' => $request->name,
            'prenom' => $request->prenom,
            'tel' => $request->tel,
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

            'name' => $request->name,
            'prenom' => $request->prenom,
            'tel' => $request->tel,
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

            'name' => $request->name,
            'prenom' => $request->prenom,
            'tel' => $request->tel,
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
            'name' => $request->name,

            'prenom' => $request->prenom,
            'Role' => 'agent',
            'adresse' => $request->adresse,
            'email' => $request->email,
            'tel' => $request->tel,


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
            'name' => $request->name,

            'prenom' => $request->prenom,
            'Role' => 'livreur',
            'adresse' => $request->adresse,
            'email' => $request->email,
            'tel' => $request->tel,


        ]);
        $livreur = DB::table('users')->where('id', Auth::user()->id)->first();

        return view('profilLivreur', compact('livreur'));
    }
    public function profilcommercant()
    {
        $commercant = DB::table('users')->where('id', Auth::user()->id)->first();
        return view('profilCommercant', compact('commercant'));
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
            'name' => $request->name,

            'prenom' => $request->prenom,
            'Role' => 'commerçant',
            'adresse' => $request->adresse,
            'email' => $request->email,
            'tel' => $request->tel,


        ]);
        $commercant = DB::table('users')->where('id', Auth::user()->id)->first();

        return view('profilCommercant', compact('commercant'));
    }
      public function profiladmin()
    {
        $admin = DB::table('users')->where('id', Auth::user()->id)->first();
        return view('profilAdmin', compact('admin'));
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
            'name' => $request->name,

            'prenom' => $request->prenom,
            'Role' => 'admin',
            'adresse' => $request->adresse,
            'email' => $request->email,
            'tel' => $request->tel,


        ]);
        $admin = DB::table('users')->where('id', Auth::user()->id)->first();

        return view('profilAdmin', compact('admin'));
    }
    // editert etat a preparee
    public function preparer(Request $request)
    {

        now("Europe/Rome");
        $commandesids = $request->vals;
        foreach ($commandesids as $commande) {
            $cmd = Commande::find($commande);
            $cmd->etat = 'preparée';
            $cmd->date_validation = Carbon::now();


            $cmd->save();
        }
        DB::table('Notifications')->insert([
            'ID_personnel' =>  Auth::user()->id,
            'type' => 'agent',
            'texte' => 'a préparée la commande',
            'notifiable'=>'admin',
            'ID_commande' => $cmd->ID_commande
        ]);
        event(new MyEvenet([route('commande.details', ['id' => $cmd->id]), Auth::user()->id, 'a préparée la commande' ,$cmd->ID_commande]));

    }
    public function mdp(Request $request)
    {
        return view('MDPagent', ['request' => $request]);
    }
    public function updatemdp(Request  $request)
    {
        $pass=Auth::user()->password;
     //   dd( password_verify($request->old_password, $pass));

     //   $oldpassword = Hash::make($request->oldpassword);
     //   dd(Auth::user()->password , $oldpassword);
        
        if (! (password_verify($request->old_password, $pass))) {
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

        return redirect()->back()->with("success","Password successfully changed!");
        }
    }
}
