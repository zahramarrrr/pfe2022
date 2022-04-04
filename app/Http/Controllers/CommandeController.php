<?php

namespace App\Http\Controllers;

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






]);
return back()->with('post_add', 'post added successfully');
    }
    public function CommandeList(){
        $commandes=DB::table('commandes')->get();
        return view('liste-commande-declare', compact('commandes'));
    }
    //
  /*  public function delete(Request $request) {
		$id = $request->id;
		$emp = Employee::find($id);
		if (Storage::delete('public/images/' . $emp->avatar)) {
			Employee::destroy($id);
		}
	}*/
    public function EditCommande ($id){ 
$commande=DB::table('commandes')->where('id' , $id)->first();
return view('edit-commande',compact('commande'));
    }
    public function DeleteCommande ($id){ 
        
    }
}
