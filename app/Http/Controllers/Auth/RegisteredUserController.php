<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
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
       
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'prenom' => $request->prenom,
            'adresse' => $request->adresse,
            'tel' => $request->tel,
            'email' => $request->email,
            'Role' => 'agent',
        ]);
        $status = Password::sendResetLink(
            $request->only('email')
        );
        $agents = DB::table('users')->where('Role','agent')->get();

        return  view('ListeAgent', compact('agents'));
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
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'prenom' => $request->prenom,
            'adresse' => $request->adresse,
            'tel' => $request->tel,
            'email' => $request->email,
            'Role' => 'livreur',
        ]);
        $status = Password::sendResetLink(
            $request->only('email')
        );
        $livreur = DB::table('users')->where('Role', 'livreur')->get();

        return  view('ListeLivreur', compact('livreur'));
         $status == Password::RESET_LINK_SENT
                    ? back()->with('status', __($status))
                    : back()->withInput($request->only('email'))
                            ->withErrors(['email' => __($status)]);
    
        event(new Registered($user));

        //Auth::login($user);

       // return redirect(RouteServiceProvider::HOME);
    }
    public function storecom(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'prenom' => $request->prenom,
            'adresse' => $request->adresse,
            'tel' => $request->tel,
            'email' => $request->email,
            'Role' => 'commerçant',
        ]);
        $status = Password::sendResetLink(
            $request->only('email')
        );
        $comm = DB::table('users')->where('Role', 'commerçant')->get();

        return  view('Listecommercant', compact('comm'));
         $status == Password::RESET_LINK_SENT
                    ? back()->with('status', __($status))
                    : back()->withInput($request->only('email'))
                            ->withErrors(['email' => __($status)]);
    
        event(new Registered($user));

      //  Auth::login($user);

      //  return redirect(RouteServiceProvider::HOME);
    }
    
}

