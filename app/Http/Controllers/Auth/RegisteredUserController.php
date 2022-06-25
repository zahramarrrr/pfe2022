<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Notifications;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Password;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function storeagent(Request $request)
    {
             $request->validate(
            [
                'Nom' => 'required|alpha',
                'Prenom' => 'required|alpha',
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            ],
            [
                'Nom.required' => 'Le nom  est obligatoire',
                'Nom.alpha' => 'Le nom doit contenir que des lettres.',
                'Prenom.required' => 'Le Prénom est obligatoire',
                'Prenom.alpha' => 'le Prénom ne doit contenir que des lettres.',

                'email.required' => 'Email est obligatoire ',
                'email.unique' => 'Email doit être unique',
                'email.email' => 'Email invalide',



            ]
        );


        $user = User::create([
            'Nom' => $request->Nom,
            'Prenom' => $request->Prenom,
            'adresse' => $request->adresse,
            'telephone' => $request->telephone,
            'email' => $request->email,
            'DateNaiss' => $request->DateNaiss,
            'Salaire' => $request->Salaire,

            'Role' => 'agent',
        ]);
        $status = Password::sendResetLink(
            $request->only('email')
        );
 /*        $agents = DB::table('users')->where('Role', 'agent')->get();
        $notif = Notifications::query()->where('Notifiable', 'admin')->take(5)->get();
        $admin = DB::table('users')->where('id', Auth::user()->id)->first();
        $user = User::join('notifications', 'notifications.ID_Personnel', '=', 'users.id')
            ->first(['users.*', 'notifications.*']);

        return  view('ListeAgent', compact('agents', 'notif', 'admin', 'user')); */
        return redirect()->route('listeagent');

        $status == Password::RESET_LINK_SENT
            ? back()->with('status', __($status))
            : back()->withInput($request->only('email'))
            ->withErrors(['email' => __($status)]);

        event(new Registered($user));

        // pour connecter directement apres la creation ->      Auth::login($user);

        //return redirect(RouteServiceProvider::HOME);
    }
    public function storelivreur(Request $request)
    {
        $request->validate(
            [
                'Nom' => 'required|alpha',
                'Prenom' => 'required|alpha',
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            ],
            [
                'Nom.required' => 'le nom du livreur est obligatoir',
                'Nom.alpha' => 'Le nom ne doit contenir que des lettres.',
                'Prenom.required' => 'le Prenom du livreur est obligatoir',
                'Prenom.alpha' => 'le Prenom ne doit contenir que des lettres.',

                'email.required' => 'email est obligatoir ',
                'email.unique' => 'email doit etre unique',
                'email.email' => 'email invalide',



            ]
        );


        $user = User::create([
            'Nom' => $request->Nom,
            'Prenom' => $request->Prenom,
            'adresse' => $request->adresse,
            'telephone' => $request->telephone,
            'email' => $request->email,
            'DateNaiss' => $request->DateNaiss,
            'TypePermis' => $request->TypePermis,
            'TypeVehicule' => $request->TypeVehicule,

            'Role' => 'livreur',
        ]);
        $status = Password::sendResetLink(
            $request->only('email')
        );

        $status == Password::RESET_LINK_SENT
            ? back()->with('status', __($status))
            : back()->withInput($request->only('email'))
            ->withErrors(['email' => __($status)]);

        event(new Registered($user));
        // 2 façon pour fair le redirect 
        /*     $user = User::join('notifications', 'notifications.ID_Personnel', '=', 'users.id')
        ->first(['users.*', 'notifications.*']);
      
        $livreur = DB::table('users')->where('Role', 'livreur')->get();
        $notif = Notifications::query()->where('Notifiable', 'admin')->take(5)->get();
        $admin = DB::table('users')->where('id', Auth::user()->id)->first();

        return  view('ListeLivreur', compact('livreur','notif','admin','user')); */
        return redirect()->route('listeLivreur');

        //Auth::login($user);

        // return redirect(RouteServiceProvider::HOME);
    }
    public function storecom(Request $request)
    {
        $request->validate(
            [
                'Nom' => 'required|alpha',
                'Prenom' => 'required|alpha',
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            ],
            [
                'Nom.required' => 'le nom  est obligatoir',
                'Nom.alpha' => 'Le nom ne doit contenir que des lettres.',
                'Prenom.required' => 'le Prenom est obligatoir',
                'Prenom.alpha' => 'le Prenom ne doit contenir que des lettres.',

                'email.required' => 'email est obligatoir ',
                'email.unique' => 'email doit etre unique',
                'email.email' => 'email invalide',



            ]
        );


        $user = User::create([
            'Nom' => $request->Nom,
            'Prenom' => $request->Prenom,
            'adresse' => $request->adresse,
            'telephone' => $request->telephone,
            'email' => $request->email,
            'TelephoneSociete'=>$request->TelephoneSociete,
            'EmailSociete' => $request->EmailSociete,
            'RaisonSociale' => $request->RaisonSociale,
            'NomSociete' => $request->NomSociete,
            'DateNaiss' => $request->DateNaiss,

            
            'Role' => 'commerçant',
        ]);
        $status = Password::sendResetLink(
            $request->only('email')
        );
     /*    $comm = DB::table('users')->where('Role', 'commerçant')->get();
        $notif = Notifications::query()->where('Notifiable', 'admin')->take(5)->get();
        $admin = DB::table('users')->where('id', Auth::user()->id)->first();
        $user = User::join('notifications', 'notifications.ID_Personnel', '=', 'users.id')
            ->first(['users.*', 'notifications.*']);

        return  view('Listecommercant', compact('comm', 'admin', 'notif', 'user')); */
        return redirect()->route('listecommercant');

        $status == Password::RESET_LINK_SENT
            ? back()->with('status', __($status))
            : back()->withInput($request->only('email'))
            ->withErrors(['email' => __($status)]);

        event(new Registered($user));

        //  Auth::login($user);

        //  return redirect(RouteServiceProvider::HOME);

    }
    public function ajoutcom()
    {
     
        $notif = Notifications::query()->where('Notifiable', 'admin')->take(5)->get();
        $admin = DB::table('users')->where('id', Auth::user()->id)->first();
      
        return view('ajout-commerçant', compact( 'notif', 'admin'));
    }
    public function ajoutagent()
    {
       $admin = DB::table('users')->where('id', Auth::user()->id)->first();
      
        $notif = Notifications::query()->where('Notifiable', 'agent')->take(5)->get();
        return view('ajout-agent', compact( 'notif', 'admin'));
    }
    public function ajoutlivreur()
    {
         $admin = DB::table('users')->where('id', Auth::user()->id)->first();
       
        $notif = Notifications::query()->where('Notifiable', 'livreur')->take(5)->get();
        return view('ajout-livreur', compact( 'notif', 'admin'));
    }
}
