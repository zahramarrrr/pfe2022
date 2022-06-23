<?php

namespace App\Http\Controllers;

use App\Mail\client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class clientController extends Controller
{   public function create()
    {
       

        return view('client');
    }
    public function store(Request $request)
    {
  
       
     
          Mail::to('commandetrack2022@gmail.com')->send(new client($request));
     
          return back()->with('email', 'message envoyée');
        }
    //
}
