<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\Notifications;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Notification;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    // redirection apres le register 
    public function index()
    {
        $role = Auth::user()->Role;
        if ($role == 'admin') {
            $notif = Notifications::query()->where('Notifiable', 'admin')
            ->orderBy('id', 'desc')->take(5)
            ->get();
            $user = User::join('notifications', 'notifications.ID_Personnel', '=', 'users.id')
            ->first(['users.*', 'notifications.*']);

            $admin = DB::table('users')->where('id', Auth::user()->id)->first();
           
            return view('Admin', compact('notif', 'admin','user'));
        } elseif ($role == 'agent') {
            $agent = DB::table('users')->where('id', Auth::user()->id)->first();
            $search_text = isset($_GET['query']);
            $commandes = DB::table('commandes')->where('ID_Agent', Auth::user()->id)
                ->where('ID_commande', 'LIKE', '%' . $search_text . '%')
                ->orderBy('created_at', 'desc')->get();
            $notif = Notifications::query()->where('Notifiable', 'agent')->orderBy('id', 'desc')->take(5)->get();
                  $commercant = User::join('commandes', 'commandes.commercant', '=', 'users.id')
            ->first(['users.*', 'commandes.*']);
            return view('Agent', compact('notif', 'agent', 'commandes','commercant'));
        } elseif ($role == 'livreur') {
            $search_text = isset($_GET['query']);

            $notif = Notifications::query()->where('Notifiable', 'livreur')->take(5)->get();
            $livreur = DB::table('users')->where('id', Auth::user()->id)->first();
            $url=Notification::join('commandes', 'commandes.ID_commande', '=', 'notifications.ID_commande')
            ->first(['notifications.*', 'commandes.*']);
            $commandes = DB::table('commandes')->where('ID_Livreur', Auth::user()->id)
                ->where('ID_commande', 'LIKE', '%' . $search_text . '%')->get();
                $commercant = User::join('commandes', 'commandes.commercant', '=', 'users.id')
                ->first(['users.*', 'commandes.*']);
            return view('Livreur', compact('notif', 'livreur', 'commandes','commercant','url'));
        } else {
            $search_text = isset($_GET['query']);
            $comm = DB::table('users')->where('id', Auth::user()->id)->first();
            $commandes = DB::table('commandes')->where('commercant', Auth::user()->id)
            ->where('ID_commande', 'LIKE', '%' . $search_text . '%')->get();

            return view('Commerçant', compact('comm', 'commandes'));
        }
    }
    public function admin()
    {
        $notif = Notifications::query()->where('Notifiable', 'admin')
        ->orderBy('id', 'desc')->take(5)
        ->get();
        $user = User::join('notifications', 'notifications.ID_Personnel', '=', 'users.id')
        ->first(['users.*', 'notifications.*']);

        $admin = DB::table('users')->where('id', Auth::user()->id)->first();
       
        return view('Admin', compact('notif', 'admin','user'));
    }

    public function agent()
    {
        $agent = DB::table('users')->where('id', Auth::user()->id)->first();
            $search_text = isset($_GET['query']);
            $commandes = DB::table('commandes')->where('ID_Agent', Auth::user()->id)
                ->where('ID_commande', 'LIKE', '%' . $search_text . '%')
                ->orderBy('created_at', 'desc')->get();
            $notif = Notifications::query()->where('Notifiable', 'agent')->orderBy('id', 'desc')->take(5)->get();
                  $commercant = User::join('commandes', 'commandes.commercant', '=', 'users.id')
            ->first(['users.*', 'commandes.*']);
            return view('Agent', compact('notif', 'agent', 'commandes','commercant'));
    }
    public function livreur()
    {
        $search_text = isset($_GET['query']);

        $notif = Notifications::query()->where('Notifiable', 'livreur')->orderBy('id', 'desc')->take(5)->get();
        $livreur = DB::table('users')->where('id', Auth::user()->id)->first();
        $commandes = DB::table('commandes')->where('ID_Livreur', Auth::user()->id)
            ->where('ID_commande', 'LIKE', '%' . $search_text . '%')->get();
            $commercant = User::join('commandes', 'commandes.commercant', '=', 'users.id')
            ->first(['users.*', 'commandes.*']);
        return view('Livreur', compact('notif', 'livreur', 'commandes','commercant'));
    }
    public function livreurs(){
        return redirect()->route('livreur');


    }

}
/**
 * Show the application dashboard.
 *
 * @return \Illuminate\Contracts\Support\Renderable
 */
    /*public function index()
    {
        return view('home');
    }
}*/
