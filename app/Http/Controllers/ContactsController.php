<?php
 
namespace App\Http\Controllers;
 
use App\Mail\Contact;
use Illuminate\Http\Request;
use App\Models\Notifications;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
 
class ContactsController extends Controller
{
    public function create()
    {
        $user = DB::table('users')->where('id', Auth::user()->id)->first();
$notif = Notifications::query()->where('type', 'livreur')->take(5)->get();
$agent = DB::table('users')->where('id', Auth::user()->id)->first();
$comm = DB::table('users')->where('id', Auth::user()->id)->first();
if(Auth::user()->Role=='agent')
$type = "layouts.Agent" ;
else if(Auth::User()->Role == 'admin')
$type = "layouts.admin" ;
else if(Auth::User()->Role == 'livreur')
$type = "layouts.livreur"; 
else
$type = "layouts.commerçant" 
;
        return view('contactadmin',compact('user','notif','agent','comm','type'));
    }

 
    public function store(Request $request)
    {
  
 
     
          Mail::to('commandetrack2022@gmail.com')->send(new Contact($request));
     
          return back()->with('email', 'message envoyée');
        }
       // Mail::to('commandetrack2022@gmail.com')->send(new Contact($req));

  
}