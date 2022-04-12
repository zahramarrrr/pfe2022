<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Commande;
use Carbon\Carbon;
use  App\Events\MyEvenet;
use Illuminate\Http\Request;
use App\Http\Controllers\commandes;
=======
use DB;
use APP\Models\User;



class CommandeController extends Controller
{
    public function addCommande(){
        return view('Declarer-commande');
    }
    public function saveCommande(request $request){
        //dd($request);
$newcommande=Commande::create([

    'ID_commande'=>$request->ID_commande,

    'date'=>$request->date,
    'temps'=>$request->temps,
    'nom'=>$request->nom,
    'prenom'=>$request->prenom,
    'telephone'=>$request->telephone,
    'email'=>$request->email,
    'adresse1'=>$request->adresse1,
    'governorat'=>$request->governorat,
    'ville'=>$request->ville,
    'code_postal'=>$request->code_postal,
    'paiement'=>$request->paiement,
    'poids'=>$request->poids,
    'prix'=>$request->prix,

    'description'=>$request->description,
]);
DB::table('Notifications')->insert([
    'nomCommerçant'=>$request->nomCommerçant,
'ID_commande'=>$newcommande->id
]);

event(new MyEvenet('commande ajoutée'));
        $commandes=DB::table('commandes')->get();

return view('liste-commande-declare', compact('commandes'));
    }
    public function CommandeList(){
        $commandes=DB::table('commandes')->get();
        return view('liste-commande-declare', compact('commandes'));
    }
 
    

    public function listeagent(){
        $commandes=DB::table('commandes')->get();
        return view('ListeAgent', compact('commandes'));
    }
    public function listecommandevalidee(){
        $commandes=DB::table('commandes')->get();
        $agents=DB::table('users')->where('role' , 'agent')->get();
        return view('liste-commande-validee', compact('commandes'),  compact('agents'));
    }
   
   
    
    public function CommandeListAdmin(){
        $commandes=DB::table('commandes')->where('etat' , 'declaree')->get();
        return view('liste-commande-declare-admin', compact('commandes'));
    }

    public function CommandeListvalide(){
        $commandes=DB::table('commandes')->where('etat' , 'validee')->get();
        return view('liste-commande-validee', compact('commandes'));

    }
    public function Commandevalider(){
        $commandes=DB::table('commandes')->where('etat' , 'validee')->get();
        return view('details', compact('commandes'));

    public function CommandeListAdminpreparee(){
        $commandes=DB::table('commandes')->get();
        $livreurs=DB::table('users')->where('role' , 'livreur')->get();
        return view('liste-commandes-preparee', compact('livreurs'));
    }
    public function CommandeListAgent(){
        $agents=DB::table('users')->where('role' , 'agent')->get();
        return view('liste-commandes-preparee.', compact('agents'));
        

    }
    public function CommandeListLivreur(){
        $livreurs=DB::table('users')->where('role' , 'livreur')->get();
        return view('liste-personnels-livreur', compact('livreurs'));
        

    }

    
    }
    //pour notification
    public function CommandedetailAdmin($id){ 
        $commande=DB::table('commandes')->where('id' , $id)->first();
        return view('details/{id}' , compact('commande'));

}
    public function Commandedetails($id){ 
        $commande=DB::table('commandes')->where('id' , $id)->first();
        return view('details', compact('commande'));

}

public function Commandenotif(){
        $commandes=DB::table('commandes')->get();
        $notif=DB::table('notifications')->get();

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
  public function assignmentagentDB(){
     $idagent=DB::table('user')->where('role','agent');
     DB::table('commandes')->update([
     'agent'->$idagent

     ]);
    }
     
    
    public function valider($id){
        now("Europe/Rome");
        DB::table('commandes')->where('id',$id)
        ->update([
            
            'etat'=>'validee',
            'date_validation' =>Carbon::now()
        ]);

        return back()->with('commande_valider' , 'commande validée successfuly');


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

