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


        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.

        $request->validate(
            [
                'Nom' => 'required|alpha',
                'Prenom' => 'required|alpha',
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            ],
            [
                'Nom.required' => 'le nom  est obligatoir',
                'Nom.alpha' => 'Le nom ne doit contenir que des lettres.',
                'Prenom.required' => 'le Prenom  est obligatoir',
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
        return redirect()->route('ListeAgent');

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
        return redirect()->route('Listecommercant');

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
        $cmd = Notifications::join('commandes', 'commandes.ID_commande', '=', 'notifications.ID_commande')
        ->first(['commandes.*', 'notifications.*']);

        $notif = Notifications::query()->where('Notifiable', 'admin')->take(5)->get();
        $admin = DB::table('users')->where('id', Auth::user()->id)->first();
        $search_text = isset($_GET['query']);
        $user = User::join('notifications', 'notifications.ID_Personnel', '=', 'users.id')
            ->first(['users.*', 'notifications.*']);
        $comm = DB::table('users')->where('Role', 'commerçant')
            ->where('id', 'LIKE', '%' . $search_text . '%')->get();
        return view('ajout-commerçant', compact('comm', 'notif', 'admin', 'user','cmd'));
    }
    public function ajoutagent()
    {
        $cmd = Notifications::join('commandes', 'commandes.ID_commande', '=', 'notifications.ID_commande')
        ->first(['commandes.*', 'notifications.*']);

        $user = User::join('notifications', 'notifications.ID_Personnel', '=', 'users.id')
            ->first(['users.*', 'notifications.*']);
        $admin = DB::table('users')->where('id', Auth::user()->id)->first();
        $search_text = isset($_GET['query']);
        $commandes = DB::table('commandes')->where('ID_Agent', Auth::user()->id)
            ->where('ID_commande', 'LIKE', '%' . $search_text . '%')->get();
        $notif = Notifications::query()->where('Notifiable', 'agent')->take(5)->get();
        return view('ajout-agent', compact('commandes', 'notif', 'admin', 'user','cmd'));
    }
    public function ajoutlivreur()
    {
        $cmd = Notifications::join('commandes', 'commandes.ID_commande', '=', 'notifications.ID_commande')
        ->first(['commandes.*', 'notifications.*']);

        $user = User::join('notifications', 'notifications.ID_Personnel', '=', 'users.id')
            ->first(['users.*', 'notifications.*']);
        $admin = DB::table('users')->where('id', Auth::user()->id)->first();
        $search_text = isset($_GET['query']);
        $commandes = DB::table('commandes')->where('ID_Agent', Auth::user()->id)
            ->where('ID_commande', 'LIKE', '%' . $search_text . '%')->get();
        $notif = Notifications::query()->where('Notifiable', 'livreur')->take(5)->get();
        return view('ajout-livreur', compact('commandes', 'notif', 'admin', 'user','cmd'));
    }
}
