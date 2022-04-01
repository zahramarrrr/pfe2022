<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class declarerController extends Controller
{
    public function addDeclarer(){
        return view('Declarer-commande');
    }
    public function saveDeclarer(request $request){
DB::table('declarers')->insert([
    'date'=>$request->date,
    'temps'=>$request->temps,
    'nom'=>$request->nom,
    'prenom'=>$request->prenom,
    'telephone'=>$request->telephone,
    'email'=>$request->email,
    'adresse1'=>$request->adresse1,
    'adresse2'=>$request->adresse2,
    'governorat'=>$request->governorat,
    'ville'=>$request->ville,
    'code_postal'=>$request->code_postal,
    'ID_commande'=>$request->ID_commande,
    'paiement'=>$request->paiement,
    'poids'=>$request->poids,
    'prix'=>$request->prix,

    'description'=>$request->description,






]);
return back()->with('post_add', 'post added successfully');
    }
    public function declarerList(){
        $declarers=DB::table('declarers')->get();
        return view('liste-commande-declare', compact('declarers'));
    }
    //
}
