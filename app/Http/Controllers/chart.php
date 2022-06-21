<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Charts\duree;
use App\Charts\moyenne;
use App\Models\Commande;
use App\Charts\cmdparjour;
use App\Charts\parsociete;
use App\Charts\cmdparagent;
use App\Charts\preparation;
use Illuminate\Http\Request;
use App\Charts\cmdparlivreur;
use App\Models\Notifications;
use App\Charts\MonthlyUsersChart;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class chart extends Controller
{
    public function cmd_jour()
    {
        
$notif = Notifications::query()->where('Notifiable', 'admin')
->orderBy('created_at', 'desc')
->take(5)
->get();
    $admin = DB::table('users')->where('id', Auth::user()->id)->first();
        return view('cmd_parjour' , compact('notif','admin'));
        //

    }
   
    public function cmd_societe(parsociete $chart3)
    {
        
$notif = Notifications::query()->where('Notifiable', 'admin')
->orderBy('created_at', 'desc')
->take(5)
->get();
    $admin = DB::table('users')->where('id', Auth::user()->id)->first();
    $chart3=$chart3->build();
        return view('cmd_parsociete' , compact('notif','admin','chart3'));
        //
    }
    public function cmd_region(parsociete $chart1)
    {
        
$notif = Notifications::query()->where('Notifiable', 'admin')
->orderBy('created_at', 'desc')
->take(5)
->get();
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
    ->setTitle('Les nombres des commandes pour les 24 gouvernorats')
    ->setXAxis(['tunis','ariana','beja','ben arous','bizerte' , 'gabes','gafsa','jendouba','KAIROUAN','KASSERINE','KEBILI','KEF','MAHDIA','MANOUBA','MEDENINE','MONASTIR','NABEUL','SFAX','SIDI BOUZID','SILIANA','SOUSSE','TATAOUINE','TOZEUR','ZAGHOUAN'])
->setDataset([$tunis, $ariana,$beja,$barous,$bizerte,$gabes,$gafsa,$jendouba,$KAIROUAN,$KASSERINE,$KEBILI,$KEF,$MAHDIA,$MANOUBA,$MEDENINE,$MONASTIR,$NABEUL,$SFAX,$SIDIBOUZID,$SILIANA,$SOUSSE,$TATAOUINE,$TOZEUR,$ZAGHOUAN])
->setlabels(['tunis','ariana','beja','ben arous','bizerte' , 'gabes','gafsa','jendouba','KAIROUAN','KASSERINE','KEBILI','KEF','MAHDIA','MANOUBA','MEDENINE','MONASTIR','NABEUL','SFAX','SIDI BOUZID','SILIANA','SOUSSE','TATAOUINE','TOZEUR','ZAGHOUAN']);


    return view('cmd_parregion' , compact('notif','admin','chart'));
        //
    }
    public function jour_bat(cmdparjour $chart5){
                
$notif = Notifications::query()->where('Notifiable', 'admin')
->orderBy('created_at', 'desc')
->take(5)
->get();
    $admin = DB::table('users')->where('id', Auth::user()->id)->first();
        $chart5=$chart5->build();
        return view('cmd_jour_bat' , compact('notif','admin','chart5'));

    }
    public function employee(){
        $notif = Notifications::query()->where('Notifiable', 'admin')
->orderBy('created_at', 'desc')
->take(5)
->get();
    $admin = DB::table('users')->where('id', Auth::user()->id)->first();
        return view('employee',compact('admin','notif'));
    }
    public function cmd_agent(cmdparagent $chart10){
        $notif = Notifications::query()->where('Notifiable', 'admin')
->orderBy('created_at', 'desc')
->take(5)
->get();
    $admin = DB::table('users')->where('id', Auth::user()->id)->first();
    $chart10=$chart10->build();

        return view('cmd_prep',compact('admin','notif','chart10'));
    }
    public function cmd_livreur(cmdparlivreur $chart11){
        $notif = Notifications::query()->where('Notifiable', 'admin')
->orderBy('created_at', 'desc')
->take(5)
->get();
    $admin = DB::table('users')->where('id', Auth::user()->id)->first();
    $chart11=$chart11->build();

        return view('cmd_livreur',compact('admin','notif','chart11'));
    }
    public function diff_affect_liv(){
        $notif = Notifications::query()->where('Notifiable', 'admin')
->orderBy('created_at', 'desc')
->take(5)
->get();
    $admin = DB::table('users')->where('id', Auth::user()->id)->first();

        return view('diff_affect_liv',compact('admin','notif'));
    }


    public function diff_affect_prep(){
        $notif = Notifications::query()->where('Notifiable', 'admin')
->orderBy('created_at', 'desc')
->take(5)
->get();
    $admin = DB::table('users')->where('id', Auth::user()->id)->first();
   

        return view('diff_affect_prep',compact('admin','notif'));
    }
    
    
   /*  public function duree( duree $chart20){
        $notif = Notifications::query()->where('Notifiable', 'admin')
->orderBy('created_at', 'desc')
->take(5)
->get();
    $admin = DB::table('users')->where('id', Auth::user()->id)->first();
    $chart20=$chart20->build();

        return view('duree',compact('admin','notif','chart20'));
    } */

    public function duree()
{
    $notif = Notifications::query()->where('Notifiable', 'admin')
->orderBy('created_at', 'desc')
->take(5)
->get();
    $admin = DB::table('users')->where('id', Auth::user()->id)->first();
 


    return view('duree',compact('admin','notif'));

}
}
