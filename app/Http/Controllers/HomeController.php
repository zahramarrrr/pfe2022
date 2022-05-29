<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\Notifications;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
            ->orderBy('read_at', 'asc')
           ->take(5)
            ->get();
            $user = User::join('notifications', 'notifications.ID_Personnel', '=', 'users.id')
            ->first(['users.*', 'notifications.*']);
            $search_text = isset($_GET['query']);

            $admin = DB::table('users')->where('id', Auth::user()->id)->first();
            $cmd = Notifications::join('commandes', 'commandes.ID_commande', '=', 'notifications.ID_commande')
            ->first(['commandes.*', 'notifications.*']);
    
            return view('Admin', compact('notif', 'admin','user','cmd'));

        } elseif ($role == 'agent') {
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
    
            return view('Agent', compact('notif', 'agent', 'commandes','commercant','commande'));
        } elseif ($role == 'livreur') {
            $search_text = isset($_GET['query']);

            $notif = Notifications::query()->where('Notifiable', 'livreur')->take(5)->get();
            $livreur = DB::table('users')->where('id', Auth::user()->id)->first();
            $cmd = Notifications::join('commandes', 'commandes.ID_commande', '=', 'notifications.ID_commande')
            ->first(['commandes.*', 'notifications.*']);
    
            $commande = DB::table('commandes')->where('ID_Livreur', Auth::user()->id)
                ->where('ID_commande', 'LIKE', '%' . $search_text . '%')->get();
                $commercant = User::join('commandes', 'commandes.commercant', '=', 'users.id')
                ->first(['users.*', 'commandes.*']);
            return view('Livreur', compact('notif', 'livreur', 'cmd','commercant','commande'));
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
        ->orderBy('read_at', 'asc')
        ->take(5)
         ->get();
            $user = User::join('notifications', 'notifications.ID_Personnel', '=', 'users.id')
            ->first(['users.*', 'notifications.*']);

            $admin = DB::table('users')->where('id', Auth::user()->id)->first();
            $cmd = Notifications::join('commandes', 'commandes.ID_commande', '=', 'notifications.ID_commande')
            ->first(['commandes.*', 'notifications.*']);
            return view('Admin', compact('notif', 'admin','user','cmd'));

    }

    public function agent()
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

        return view('Agent', compact('notif', 'agent', 'commandes','commercant','commande'));
    }
    public function livreur()
    {
        $search_text = isset($_GET['query']);

        $notif = Notifications::query()->where('Notifiable', 'livreur')->take(5)->get();
        $livreur = DB::table('users')->where('id', Auth::user()->id)->first();
        $cmd = Notifications::join('commandes', 'commandes.ID_commande', '=', 'notifications.ID_commande')
        ->first(['commandes.*', 'notifications.*']);

        $commande = DB::table('commandes')->where('ID_Livreur', Auth::user()->id)
            ->where('ID_commande', 'LIKE', '%' . $search_text . '%')->get();
            $commercant = User::join('commandes', 'commandes.commercant', '=', 'users.id')
            ->first(['users.*', 'commandes.*']);
        return view('Livreur', compact('notif', 'livreur', 'cmd','commercant','commande'));
    }
    public function commercant()
    {
        $search_text = isset($_GET['query']);
        $comm = DB::table('users')->where('id', Auth::user()->id)->first();
        $commandes = DB::table('commandes')->where('commercant', Auth::user()->id)
        ->where('ID_commande', 'LIKE', '%' . $search_text . '%')->get();

        return view('Commerçant', compact( 'commandes','comm'));
    }
  
    public function contact_client(){
        return view('contactclient');


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
