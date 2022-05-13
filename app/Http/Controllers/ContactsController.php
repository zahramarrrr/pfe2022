<?php
 
namespace App\Http\Controllers;
 
use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
 
class ContactsController extends Controller
{
    public function create()
    {
        $user = DB::table('users')->where('id', Auth::user()->id)->first();

        return view('contactadmin',compact('user'));
    }
 
    public function store(Request $request)
    {
  
        $email= Auth::user()->email;
     
          Mail::to($email)->send(new Contact($request));
     
          return back()->with('email', 'message envoyée');
        }
       // Mail::to('commandetrack2022@gmail.com')->send(new Contact($req));

  
}