<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Contact;
use App\Charts\paiement;
use App\Models\Commande;
use App\Charts\cmdparjour;
use App\Charts\parsociete;
use Illuminate\Http\Request;
use App\Models\Notifications;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    // redirection apres le register 
    public function index(paiement $chart1 , parsociete $chart3, cmdparjour $chart4)
    {
        $role = Auth::user()->Role;
        if ($role == 'admin') {
            $notif = Notifications::query()->where('Notifiable', 'admin')
            ->orderBy('created_at', 'desc')
           ->take(5)
            ->get();
 
            $search_text = isset($_GET['query']);
            $admin = DB::table('users')->where('id', Auth::user()->id)->first();
            $tunis= Commande::where('Governorat','TUNIS')->count();
            $ariana= Commande::where('Governorat','ARIANA')->count();
            $beja= Commande::where('Governorat','BEJA')->count();
            $barous= Commande::where('Governorat','BEN AROUS')->count();
            $bizerte= Commande::where('Governorat','BIZERTE')->count();
            $gabes= Commande::where('Governorat',' GABES')->count();
            $gafsa= DB::table('commandes')->where('Governorat','GAFSA')->count();
            $jendouba= Commande::where('Governorat','JENDOUBA')->count();
            $KAIROUAN= Commande::where('Governorat','KAIROUAN')->count();
            $KASSERINE= Commande::where('Governorat','KASSERINE')->count();
            $KEBILI= Commande::where('Governorat','KEBILI')->count();
            $KEF= Commande::where('Governorat','KEF')->count();
            $MAHDIA= Commande::where('Governorat','MAHDIA')->count();
            $MANOUBA= Commande::where('Governorat','MANOUBA')->count();
            $MEDENINE= Commande::where('Governorat','MEDENINE')->count();
            $MONASTIR= Commande::where('Governorat','MONASTIR')->count();
            $NABEUL= Commande::where('Governorat','NABEUL')->count();
            $SFAX= Commande::where('Governorat','SFAX')->count();
            $SIDIBOUZID= Commande::where('Governorat','SIDI BOUZID')->count();
            $SILIANA= Commande::where('Governorat','SILIANA')->count();
            $SOUSSE= Commande::where('Governorat','SOUSSE')->count();
            $TATAOUINE= Commande::where('Governorat','TATAOUINE')->count();
            $TOZEUR= Commande::where('Governorat','TOZEUR')->count();
            $ZAGHOUAN= Commande::where('Governorat','ZAGHOUAN')->count();
    
    
    
            $chart=( new LarapexChart)
            ->setTitle('commande par governorat')
            ->setXAxis(['tunis','ariana','beja','ben arous','bizerte' , 'gabes','gafsa','jendouba','KAIROUAN','KASSERINE','KEBILI','KEF','MAHDIA','MANOUBA','MEDENINE','MONASTIR','NABEUL','SFAX','SIDI BOUZID','SILIANA','SOUSSE','TATAOUINE','TOZEUR','ZAGHOUAN'])
    ->setDataset([$tunis, $ariana,$beja,$barous,$bizerte,$gabes,$gafsa,$jendouba,$KAIROUAN,$KASSERINE,$KEBILI,$KEF,$MAHDIA,$MANOUBA,$MEDENINE,$MONASTIR,$NABEUL,$SFAX,$SIDIBOUZID,$SILIANA,$SOUSSE,$TATAOUINE,$TOZEUR,$ZAGHOUAN])
    ->setlabels(['tunis','ariana','beja','ben arous','bizerte' , 'gabes','gafsa','jendouba','KAIROUAN','KASSERINE','KEBILI','KEF','MAHDIA','MANOUBA','MEDENINE','MONASTIR','NABEUL','SFAX','SIDI BOUZID','SILIANA','SOUSSE','TATAOUINE','TOZEUR','ZAGHOUAN']);
   
    
    
            $chart1=$chart1->build();
            $chart3=$chart3->build();
            $chart4=$chart4->build();
            $cmd = Commande::orderby("Date_Declaration")->get();

            return view('Admin',compact('notif', 'admin','chart','chart1','chart3','chart4','cmd'));

        } elseif ($role == 'agent') {
            $notif = Notifications::query()->where('Notifiable', 'agent')
            ->orderBy('created_at', 'desc')
           ->take(5)
            ->get();
            $agent = DB::table('users')->where('id', Auth::user()->id)->first();
            $search_text = isset($_GET['query']);
            $commande=Commande::where('ID_Agent',Auth::user()->id)
                ->where('ID_commande', 'LIKE', '%' . $search_text . '%')
                ->get();

              
            return view('Agent', compact('notif', 'agent','commande'));
        } elseif ($role == 'livreur') {
            $search_text = isset($_GET['query']);

            $notif = Notifications::query()->where('Notifiable', 'livreur')
            ->orderBy('created_at', 'desc')
           ->take(5)
            ->get();           
             $livreur = DB::table('users')->where('id', Auth::user()->id)->first();
          
    
            $commande = DB::table('commandes')->where('ID_Livreur', Auth::user()->id)
            ->where('Etat', 'livree')

                ->where('ID_commande', 'LIKE', '%' . $search_text . '%')->get();
        
            return view('Livreur', compact('notif', 'livreur','commande'));
        } else {
            $search_text = isset($_GET['query']);
            $comm = DB::table('users')->where('id', Auth::user()->id)->first();
            $commandes = DB::table('commandes')->where('ID_Commercant', Auth::user()->id)
            ->where('ID_commande', 'LIKE', '%' . $search_text . '%')->get();

            return view('Commerçant', compact('comm', 'commandes'));
        }
    }
    public function admin(paiement $chart1 , parsociete $chart3)
    {
       


$notif = Notifications::query()->where('Notifiable', 'admin')
        ->orderBy('created_at', 'desc')
       ->take(5)
        ->get();
            $admin = DB::table('users')->where('id', Auth::user()->id)->first();
          $chart1=$chart1->build();
          $chart3=$chart3->build();

            return view('Admin',compact('notif', 'admin','chart1','chart3'));

    }

    public function agent()
    {
        $agent = DB::table('users')->where('id', Auth::user()->id)->first();
        $search_text = isset($_GET['query']);
        $commande= DB::table('commandes')->where('ID_Agent', Auth::user()->id)
     
                ->where('ID_commande', 'LIKE', '%' . $search_text . '%')
                ->orderBy('created_at', 'desc')->get();
                $notif = Notifications::query()->where('Notifiable', 'agent')
                ->orderBy('created_at', 'desc')
               ->take(5)
                ->get();            
     
        return view('Agent', compact('notif', 'agent', 'commande'));
    }
    public function livreur()
    {
        $search_text = isset($_GET['query']);

        $notif = Notifications::query()->where('Notifiable', 'livreur')
        ->where('ID_Notifiable', Auth::user()->id)

        ->orderBy('created_at', 'desc')
       ->take(5)
        ->get();
                $livreur = DB::table('users')->where('id', Auth::user()->id)->first();
        $commande = DB::table('commandes')->where('ID_Livreur', Auth::user()->id)
        ->where('Etat','livree')
            ->where('ID_commande', 'LIKE', '%' . $search_text . '%')->get();
            return view('Livreur', compact('notif', 'livreur','commande'));
    }
    public function commercant()
    {
        $search_text = isset($_GET['query']);
        $comm = DB::table('users')->where('id', Auth::user()->id)->first();
        $commandes = DB::table('commandes')->where('ID_Commercant', Auth::user()->id)
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
