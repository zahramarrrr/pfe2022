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
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        $admin = DB::table('users')->where('id', Auth::user()->id)->first();
        return view('ajouter-commande', compact('notif', 'admin'));
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
            'ID_Commercant ' => null,

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
            'ID_Commercant' => Auth::user()->id,

            'Description' => $request->Description,
        ]);
        $newcommande->save();
        /*  DB::table('commandes')->where('id',$newcommande->id)->update([
            'ID_Commercant' => Auth::user()->id,
            
        ]); */
        Notifications::create([
            'ID_Notifieur' =>  Auth::user()->id,
            'Notifieur' => 'commerçant',
            'Text_Notif' => 'a déclaré la commande',
            'Notifiable' => 'admin',
            'ID_commande' => $newcommande->id,
            'DateNotifDec'=> Carbon::now(),

        ]);



        event(new MyEvenet([route('commande.details', ['id' => $newcommande->id]), Auth::user()->Nom, 'a déclaré la commande',  $request->ID_commande]));
        return redirect()->route('commercant');
    }


    //affichage des listes des commandes pour admin
    //pour afficher la liste des commandes declarees 
    public function CommandeListAdmin()
    {
        $notif = Notifications::query()->where('Notifiable', 'admin')->orderBy('id', 'desc')->take(5)->get();
        $admin = DB::table('users')->where('id', Auth::user()->id)->first();

        $commandes = DB::table('commandes')->where('Etat', 'declaree')->get();
        return view('liste-commande-declare-admin', compact('commandes', 'admin', 'notif'));
    }

    //pour afficher la liste des commandes validées

    public function listecommandevalidee()
    {
        $commandes = DB::table('commandes')->where('Etat', 'validee')->get();
        $agents = DB::table('users')->where('role', 'agent')->get();
        $notif = Notifications::query()->where('Notifiable', 'admin')->orderBy('id', 'desc')->take(5)->get();
        $admin = DB::table('users')->where('id', Auth::user()->id)->first();
        return view('liste-commande-validee', compact('commandes', 'agents', 'notif', 'admin'));
    }
    //pour afficher la liste des commandes preparées
    public function ListprepareeAdmin()
    {
        $commandes = DB::table('commandes')->where('Etat', 'preparee')->get();
        $livreurs = DB::table('users')->where('role', 'livreur')->get();
        $notif = Notifications::query()->where('Notifiable', 'admin')->orderBy('id', 'desc')->take(5)->get();
        $admin = DB::table('users')->where('id', Auth::user()->id)->first();
        return view('liste-commande-preparee', compact('commandes', 'livreurs', 'admin', 'notif'));
    }
    public function ListlivreeAdmin()
    {
        $commandes = DB::table('commandes')->where('Etat', 'livree')->get();


        $notif = Notifications::query()->where('Notifiable', 'admin')->orderBy('id', 'desc')->take(5)->get();
        $admin = DB::table('users')->where('id', Auth::user()->id)->first();

        return view('liste-commande-livree', compact('commandes', 'admin', 'notif'));
    }
    public function ListretourneeAdmin()
    {
        $commande = DB::table('commandes')->where('Etat', 'retournee')->get();

        $notif = Notifications::query()->where('Notifiable', 'admin')->orderBy('id', 'desc')->take(5)->get();
        $admin = DB::table('users')->where('id', Auth::user()->id)->first();

        return view('liste-commande-retournee', compact('commande', 'admin', 'notif'));
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

        $agent = DB::table('users')->where('id', Auth::user()->id)->first();
        $admin = DB::table('users')->where('id', Auth::user()->id)->first();
        $livreur = DB::table('users')->where('id', Auth::user()->id)->first();
        DB::table('notifications')->where('ID_commande', $id)->update([
          

            'read_at' => Carbon::now(),


        ]);
     
     


        if (Auth::user()->Role == 'agent') {
            $type = "layouts.Agent";
            $notif = Notifications::query()->where('Notifiable', 'agent')
                ->orderBy('created_at', 'desc')
                ->take(5)
                ->get();
        } else if (Auth::User()->Role == 'admin') {
            $type = "layouts.admin";
            $notif = Notifications::query()->where('Notifiable', 'admin')
                ->orderBy('created_at', 'desc')
                ->take(5)
                ->get();
        } else if (Auth::User()->Role == 'livreur') {
            $type = "layouts.livreur";
            $notif = Notifications::query()->where('Notifiable', 'livreur')
                ->orderBy('created_at', 'desc')
                ->take(5)
                ->get();
        } else
            $type = "layouts.commerçant";
        return view('details', compact('commande', 'comm', 'notif', 'agent', 'admin', 'type', 'livreur'));
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
        $notif = Notifications::query()->where('Notifieur', 'agent')->orderBy('id', 'desc')->take(5)->get();

        return view('Agent', compact('notif'));
    }
    public function notiflivreur()
    {


        $commandes = DB::table('commandes')->get();
        $notif = Notifications::query()->where('Notifieur', 'livreur')->take(5)->get();

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
        now("America/Los_Angeles");
        $commandesids = $request->vals;
        foreach ($commandesids as $commande) {
            $cmd = Commande::find($commande);
            $cmd->Etat = 'validée';
            $cmd->date_validation = Carbon::now();


            $cmd->save();
        }
    }
    //pour valider depuis la view details
    public function validercommande(Request $request)
    {

        now("Europe/Rome");
        $commande = $request->vals;
        $cmd = Commande::find($commande);
        $cmd->Etat = 'validee';
        $cmd->Date_Validation = Carbon::now();


        $cmd->save();

        return response()->json(["redirect_url" => url('admin')]);
        /* now("Europe/Rome");

        DB::table('commandes')->where('id', $id)->update([
            'Etat' => 'validée',

            'date_validation' => Carbon::now(),


        ]);
     
        return redirect()->route('commande.validee'); */
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
            
           Notifications::create([
                'ID_Notifieur' =>  Auth::user()->id,
                'ID_Notifiable' => $agentid,
                'Notifieur' => 'admin',
                'Text_Notif' => 'vous a affecté la commande',
                'Notifiable' => 'agent',
                'ID_commande' => $cmd->id
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
            Notifications::create([
                'ID_Notifieur' =>  Auth::user()->id,
                'ID_Notifiable' => $livreurid,

                'Notifieur' => 'admin',
                'Text_Notif' => 'vous a affecté la commande',
                'Notifiable' => 'livreur',
                'ID_commande' => $cmd->id
            ]);



            event(new MyEvenet([route('commande.details', ['id' => $cmd->id]), 'Admin vous a affecté la commande', $cmd->ID_commande]));
        }



        return response()->json(['success' => 'commande affectée avec succées']);
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
        $notification  = Notifications::where('Notifiable', 'agent')
        ->where('ID_Notifiable', Auth::user()->id)
        ->orderBy('id', 'desc')->get();
        $notif = Notifications::query()->where('Notifiable', 'agent')
            ->where('ID_Notifieur', Auth::user()->id)
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();
            $agent = DB::table('users')->where('id', Auth::user()->id)->first();
              
         

        return view('liste-notification-agent', compact('notification', 'notif','agent'));
    }
    //afficher la liste des notification pour livreur

    public function listenotiflivreur()
    {
        $notification  = Notifications::where('Notifiable', 'livreur')
            ->where('ID_Notifiable', Auth::user()->id)

            ->orderBy('id', 'desc')->get();
        $notif = Notifications::query()->where('Notifiable', 'livreur')
            ->where('ID_Notifiable', Auth::user()->id)
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();
        $livreur = DB::table('users')->where('id', Auth::user()->id)->first();

        return view('liste-notification-livreur', compact('notification', 'notif', 'livreur'));
    }
    //pour afficher la liste des notifiactions pour admin
    public function listenotif()
    {
        $notif = Notifications::query()->where('Notifiable', 'admin')
            ->where('ID_Notifieur', Auth::user()->id)

            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();
        $admin = DB::table('users')->where('id', Auth::user()->id)->first();

        $notification = DB::table('notifications')->where('Notifiable', 'admin')
            ->orderBy('read_at', 'asc')->get();


        return view('liste-notification', compact('notif', 'notification', 'admin'));
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
            Notifications::create([
                'ID_Notifieur' =>  Auth::user()->id,
                'Notifieur' => 'agent',
                'Text_Notif' => 'a préparée la commande',
                'Notifiable' => 'admin',
                'ID_commande' => $cmd->id,
                'DateNotifPrep'=> Carbon::now(),

            ]);

            event(new MyEvenet([route('commande.details', ['id' => $cmd->id]), Auth::user()->Nom, 'a préparée la commande', $cmd->ID_commande]));
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
        Notifications::create([
            'ID_Notifieur' =>  Auth::user()->id,
            'Notifieur' => 'agent',
            'Text_Notif' => 'a préparée la commande',
            'Notifiable' => 'admin',
            'ID_commande' => $cmd->id,
            'DateNotifPrep'=> Carbon::now(),

        ]);


        event(new MyEvenet([route('commande.details', ['id' => $cmd->id]), Auth::user()->Nom, 'a préparée la commande', $cmd->ID_commande]));
    }

    public function preparercommande(Request $request)
    {
        now("Europe/Rome");
        $commande = $request->vals;
        $cmd = Commande::find($commande);
        $cmd->Etat = 'preparee';
        $cmd->Date_Preparation = Carbon::now();


        $cmd->save();
        Notifications::create([
            'ID_Notifieur' =>  Auth::user()->id,
            'Notifieur' => 'agent',
            'Text_Notif' => 'a préparée la commande',
            'Notifiable' => 'admin',
            'ID_commande' => $cmd->id,
            'DateNotifPrep'=> Carbon::now(),

        ]);

        event(new MyEvenet([route('commande.details', ['id' => $cmd->id]), Auth::user()->Nom, 'a préparée la commande', $cmd->ID_commande]));

        return response()->json(['success' => 'xx']);

        return redirect()->route('agent');
    }
    //livrer page details
    public function livrercommande(Request $request)
    {
        now("Europe/Rome");
        $commande = $request->vals;
        $cmd = Commande::find($commande);
        $cmd->Etat = 'preparee';
        $cmd->Date_Preparation = Carbon::now();


        $cmd->save();

        return response()->json(["redirect_url" => url('livreur')]);

        Notifications::create([
            'ID_Notifieur' =>  Auth::user()->id,
            'Notifieur' => 'livreur',
            'Text_Notif' => 'a livré la commande',
            'Notifiable' => 'admin',
            'ID_commande' => $cmd->id,
            'DateNotifLiv'=> Carbon::now(),

        ]);
        event(new MyEvenet([route('commande.details', ['id' => $cmd->id]), Auth::user()->id, 'a livré la commande', $cmd->ID_commande]));
    }
    //retournee de page details

    public function retourner(Request $request)
    {

        now("Europe/Rome");
        $commande = $request->vals;
        $cmd = Commande::find($commande);
        $cmd->Etat = 'retournée';
        // $cmd->Date_Retour = Carbon::now();


        $cmd->save();


        Notifications::create([
            'ID_Notifieur' =>  Auth::user()->id,
            'Notifieur' => 'livreur',
            'Text_Notif' => 'a retournée la commande',
            'Notifiable' => 'admin',
            'ID_commande' => $cmd->id,
            'DateNotifRet'=> Carbon::now(),


        ]);
        event(new MyEvenet([route('commande.details', ['id' => $cmd->id]), Auth::user()->id, 'a retournée la commande', $cmd->ID_commande]));

        return response()->json(["redirect_url" => url('livreur')]);
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
            Notifications::create([
                'ID_Notifieur' =>  Auth::user()->id,
                'Notifieur' => 'livreur',
                'Text_Notif' => 'a livré la commande',
                'Notifiable' => 'admin',
                'ID_commande' => $cmd->id,
                'DateNotifLiv'=> Carbon::now(),

            ]);

            event(new MyEvenet([route('commande.details', ['id' => $cmd->id]), Auth::user()->id, 'a livré la commande', $cmd->ID_commande]));
        }
    }
    //livrer 1 seul
    public function livraison(Request $request)
    {

        now("Europe/Rome");
        $commande = $request->vals;
        $cmd = Commande::find($commande);
        $cmd->Etat = 'livree';
        $cmd->Date_Livraison = Carbon::now();


        $cmd->save();
        Notifications::create([

            'ID_Notifieur' =>  Auth::user()->id,
            'Notifieur' => 'livreur',
            'Text_Notif' => 'a livré la commande',
            'Notifiable' => 'admin',
            'ID_commande' => $cmd->id,
            'DateNotifLiv'=> Carbon::now(),


        ]);
        event(new MyEvenet([route('commande.details', ['id' => $cmd->id]), Auth::user()->Nom, 'a livré la commande', $cmd->ID_commande]));
        return response()->json(['success' => 'commande livree avec succées']);
    }
    public function mdpagent(Request $request)
    {
        $agent = DB::table('users')->where('id', Auth::user()->id)->first();
        $search_text = isset($_GET['query']);
        $commande = DB::table('commandes')->where('ID_Agent', Auth::user()->id)
            ->where('ID_commande', 'LIKE', '%' . $search_text . '%')
            ->orderBy('created_at', 'desc')->get();
        $notif = Notifications::query()->where('Notifiable', 'agent')->orderBy('id', 'desc')->take(5)->get();


        return view('MDPagent', compact('notif', 'agent', 'commande'));
    }
    public function mdplivreur(Request $request)
    {
        $search_text = isset($_GET['query']);

        $notif = Notifications::query()->where('Notifiable', 'livreur')->take(5)->get();
        $livreur = DB::table('users')->where('id', Auth::user()->id)->first();
        $commande = DB::table('commandes')->where('ID_Livreur', Auth::user()->id)
            ->where('ID_commande', 'LIKE', '%' . $search_text . '%')->get();
        return view('MDPlivreur', compact('notif', 'livreur', 'commande'));
    }
    public function mdpadmin(Request $request)
    {
        $notif = Notifications::query()->where('Notifiable', 'admin')
            ->orderBy('id', 'desc')->take(5)
            ->get();
        $search_text = isset($_GET['query']);

        $admin = DB::table('users')->where('id', Auth::user()->id)->first();

        return view('MDPadmin', compact('notif', 'admin'));
    }
    public function mdp_commercant(Request $request)
    {
        $comm = DB::table('users')->where('id', Auth::user()->id)->first();

        return view('MDPcommercant', compact('comm'));
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
        return view('client', compact('commandes'));
    }
    public function chercher(Request $request)
    {

        $ID = $request->ID;



        $data = DB::table('commandes')->where('ID_commande', $ID)->first();

        $etat = $data->Etat;

        return response()->json(['etat' => $etat]);

        return view('client', compact('etat'));
    }




    public function cmd_retournee(Request $request)
    {
        $search_text = isset($_GET['query']);
        $notif = Notifications::query()->where('Notifieur', 'livreur')->take(5)->get();
        $livreur = DB::table('users')->where('id', Auth::user()->id)->first();
        $commande = DB::table('commandes')->where('ID_Livreur', Auth::user()->id)
            ->where('ID_commande', 'LIKE', '%' . $search_text . '%')
            ->where('Etat', 'retournee')->get();
        return view('retourne_livreur', compact( 'commande', 'livreur', 'notif'));
    }
}
