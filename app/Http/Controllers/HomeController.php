<?php

namespace App\Http\Controllers;

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
        $role=Auth::user()->Role;
        if($role=='admin')
        {
            $notif = Notifications::query()->where('notifiable','admin')->take(5)->get();
            $admin = DB::table('users')->where('id', Auth::user()->id)->first();

            return view('Admin',compact('notif','admin'));
        }
        elseif($role=='agent'){
            $agent = DB::table('users')->where('id', Auth::user()->id)->first();
            $search_text = isset($_GET['query']);
            $commandes = DB::table('commandes')->where('agent',Auth::user()->id)
            ->where('ID_commande', 'LIKE', '%' . $search_text . '%')->get();
            $notif = Notifications::query()->where('notifiable','agent')->take(5)->get();
            return view('Agent',compact('notif','agent','commandes'));

        }
        elseif($role=='livreur'){
            $search_text = isset($_GET['query']);

            $notif = Notifications::query()->where('type','livreur')->take(5)->get();
            $livreur = DB::table('users')->where('id', Auth::user()->id)->first();
            $commandes = DB::table('commandes')->where('livreur',Auth::user()->id)
            ->where('ID_commande', 'LIKE', '%' . $search_text . '%')->get();


            return view('Livreur',compact('notif' , 'livreur','commandes'));
        }
        else{
            $search_text = isset($_GET['query']);

            $comm = DB::table('users')->where('id', Auth::user()->id)->first();
            $commandes = DB::table('commandes')->where('ID_commande', 'LIKE', '%' . $search_text . '%')->get();

            return view('Commerçant',compact('comm','commandes'));
        }
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
