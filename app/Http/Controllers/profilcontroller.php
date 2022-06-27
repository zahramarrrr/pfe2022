<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Notifications;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class profilcontroller extends Controller
{ //
    // view profil ,editer , changer mdp  pour admin

    public function profiladmin()
    {
        $notif = Notifications::query()->where('Notifiable', 'admin')
            ->orderBy('id', 'desc')->take(5)
            ->get();


        $admin = DB::table('users')->where('id', Auth::user()->id)->first();

        return view('profilAdmin', compact('admin', 'notif'));
    }
    public function Editerprofiladmin($id)
    {
        $notif = Notifications::query()->where('Notifiable', 'admin')
            ->orderBy('id', 'desc')->take(5)
            ->get();


        $admin = DB::table('users')->where('id', Auth::user()->id)->first();


        return view('editer-profil-admin', compact('admin', 'notif'));
    }
    public function profileUpDatAadmin(Request $request)
    {
        $request->validate(
            [
                'Nom' => 'required|regex:/^[\pL\s\-]+$/u',
                'Prenom' => 'required|alpha',


                'Telephone' => 'required|alpha_num',

            ],
            [
                'Nom.required' => 'le nom est obligatoir',
                'Nom.alpha' => 'Le nom ne doit contenir que des lettres.',
                'Prenom.required' => 'le Prenom est obligatoir',
                'Prenom.alpha' => 'le Prenom ne doit contenir que des lettres.',
                'Telephone' => 'Telephone invalide',

            ]
        );
        DB::table('users')->where('id', Auth::user()->id)->update([
            'Nom' => $request->Nom,

            'Prenom' => $request->Prenom,
            'Role' => 'admin',
            'Adresse' => $request->Adresse,
            'email' => $request->email,
            'Telephone' => $request->Telephone,
            'DateNaiss' => $request->DateNaiss,
            'test' => $request->test,



        ]);

        return redirect()->route('profiladmin');
    }
    //
    // view profil ,editer , changer mdp  pour agent 
    public function profilagent()
    {
        $agent = DB::table('users')->where('id', Auth::user()->id)->first();
        $search_text = isset($_GET['query']);
        $commande = DB::table('commandes')->where('ID_Agent', Auth::user()->id)
            ->where('ID_commande', 'LIKE', '%' . $search_text . '%')
            ->orderBy('created_at', 'desc')->get();
        $notif = Notifications::query()->where('Notifiable', 'agent')->orderBy('id', 'desc')->take(5)->get();


        return view('profilAgent', compact('agent', 'notif', 'commande'));
    }
    public function EditerprofilAgent($id)
    {
        $id = Auth::user()->id;
        $agent = DB::table('users')->where('id', Auth::user()->id)->first();
        $search_text = isset($_GET['query']);
        $commande = DB::table('commandes')->where('ID_Agent', Auth::user()->id)
            ->where('ID_commande', 'LIKE', '%' . $search_text . '%')
            ->orderBy('created_at', 'desc')->get();
        $notif = Notifications::query()->where('Notifiable', 'agent')->orderBy('id', 'desc')->take(5)->get();


        return view('editer-profil-agent', compact('agent', 'notif', 'commande'));
    }
    public function profileUpDatAagent(Request $request)
    {  $request->validate(
        [
            'Nom' => 'required|regex:/^[\pL\s\-]+$/u',
            'Prenom' => 'required|alpha',


            'email' => 'email:rfc,dns',
            'Telephone' => 'required|alpha_num',

        ],
        [
            'Nom.required' => 'le nom est obligatoir',
            'Nom.alpha' => 'Le nom ne doit contenir que des lettres.',
            'Prenom.required' => 'le Prenom est obligatoir',
            'Prenom.alpha' => 'le Prenom ne doit contenir que des lettres.',
            'Telephone' => 'Telephone invalide',

        ]
    );

        DB::table('users')->where('id', Auth::user()->id)->update([
            'Nom' => $request->Nom,

            'Prenom' => $request->Prenom,
            'Role' => 'agent',
            'Adresse' => $request->Adresse,
            'email' => $request->email,
            'Telephone' => $request->Telephone,
            'DateNaiss' => $request->DateNaiss,


        ]);

        return redirect()->route('profilAgent');
    }

    //
    // view profil ,editer , changer mdp  pour livreur
    public function profillivreur()
    {
        $search_text = isset($_GET['query']);

        $notif = Notifications::query()->where('Notifiable', 'livreur')->take(5)->get();
        $livreur = DB::table('users')->where('id', Auth::user()->id)->first();


        $commande = DB::table('commandes')->where('ID_Livreur', Auth::user()->id)
            ->where('ID_commande', 'LIKE', '%' . $search_text . '%')->get();

        return view('profilLivreur', compact('livreur', 'notif', 'commande'));
    }
    public function EditerprofilLivreur($id)
    {
        $id = Auth::user()->id;
        $search_text = isset($_GET['query']);

        $notif = Notifications::query()->where('Notifiable', 'livreur')->take(5)->get();
        $livreur = DB::table('users')->where('id', Auth::user()->id)->first();

        $commande = DB::table('commandes')->where('ID_Livreur', Auth::user()->id)
            ->where('ID_commande', 'LIKE', '%' . $search_text . '%')->get();

        return view('editer-profil-livreur', compact('livreur', 'notif', 'commande'));
    }
    public function profileUpDateLivreur(Request $request)
    {
        $request->validate(
            [
                'Nom' => 'required|regex:/^[\pL\s\-]+$/u',
                'Prenom' => 'required|alpha',


                'email' => 'email:rfc,dns',
                'Telephone' => 'required|alpha_num',

            ],
            [
                'Nom.required' => 'le nom est obligatoir',
                'Nom.alpha' => 'Le nom ne doit contenir que des lettres.',
                'Prenom.required' => 'le Prenom est obligatoir',
                'Prenom.alpha' => 'le Prenom ne doit contenir que des lettres.',
                'Telephone' => 'Telephone invalide',

            ]
        );
        DB::table('users')->where('id', Auth::user()->id)->update([
            'Nom' => $request->Nom,

            'Prenom' => $request->Prenom,
            'Role' => 'livreur',
            'Adresse' => $request->Adresse,
            'email' => $request->email,
            'Telephone' => $request->Telephone,
            'DateNaiss' => $request->DateNaiss,
            'TypePermis' => $request->TypePermis,
            'TypeVehicule' => $request->TypeVehicule,


        ]);
        return redirect()->route('profillivreur');
    }
    //
    // view profil ,editer , changer mdp  pour commerçant

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
        $request->validate(
            [
                'Nom' => 'required|regex:/^[\pL\s\-]+$/u',
                'Prenom' => 'required|alpha',


                'email' => 'email:rfc,dns',
                'Telephone' => 'required|alpha_num',

            ],
            [
                'Nom.required' => 'le nom est obligatoir',
                'Nom.alpha' => 'Le nom ne doit contenir que des lettres.',
                'Prenom.required' => 'le Prenom est obligatoir',
                'Prenom.alpha' => 'le Prenom ne doit contenir que des lettres.',
                'Telephone' => 'Telephone invalide',

            ]
        );

        DB::table('users')->where('id', Auth::user()->id)->update([
            'Nom' => $request->Nom,
            'Prenom' => $request->Prenom,
            'Role' => 'commerçant',
            'Adresse' => $request->Adresse,
            'email' => $request->email,
            'Telephone' => $request->Telephone,
            'TelephoneSociete' => $request->TelephoneSociete,
            'EmailSociete' => $request->EmailSociete,
            'RaisonSociale' => $request->RaisonSociale,
            'NomSociete' => $request->NomSociete,
            'DateNaiss' => $request->DateNaiss,

        ]);

        return redirect()->route('profilcommercant');
    }
}
