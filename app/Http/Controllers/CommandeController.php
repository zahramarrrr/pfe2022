<?php

namespace App\Http\Controllers;
use App\Http\Controllers\commandes;
use  App\Events\MyEvenet;
use Illuminate\Http\Request;
use DB;



class CommandeController extends Controller
{
    public function addCommande(){
        return view('Declarer-commande');
    }
    public function saveCommande(request $request){
DB::table('commandes')->insert([
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
    'etat'=>$request->etat,







]);
event(new MyEvenet('commande ajoutée'));
        $commandes=DB::table('commandes')->get();

return view('liste-commande-declare', compact('commandes'));
    }
    public function CommandeList(){
        $commandes=DB::table('commandes')->get();
        return view('liste-commande-declare', compact('commandes'));
    }
    
    public function CommandeListAdmin(){
        $commandes=DB::table('commandes')->get();
        return view('listedec2', compact('commandes'));
    }
    
    public function Commandedetails($id){ 
        $commande=DB::table('commandes')->where('id' , $id)->first();
        return view('details', compact('commande'));
}
    public function Commandenotif(){
        $commandes=DB::table('commandes')->get();
        return view('Admin', compact('commandes'));
    }
    public function EditCommande ($id){ 
$commandes=DB::table('commandes')->where('id' , $id)->first();
return view('edit-commande',compact('commandes'));
    }
    public function DeleteCommande ($id){ 
        DB::table('commandes')->where('id' , $id)->delete();
        return back()->with('commande_delete' , 'commande deleted successfuly');

        
    }
    
    public function updateCommande(Request $request){
        DB::table('commandes')->where('id' , $request->id)->update([
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
        return back()->with('commandes_update' , 'commande updated succefully');

    }
    
    public function search (){ 
        $search_text=$_GET['query'];
        $commandes=DB::table('commandes')->where('ID_commande','LIKE','%'.$search_text.'%')->get();
        return view ('liste-commande-declare',compact('commandes'));        
    }
    
    
}
