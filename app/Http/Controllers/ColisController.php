<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\commande;
use app\Models\colis;

class ColisController extends Controller
{
    public function shiftdata(){
$commandes=commande::get();
dd($commandes);
    }
    public function colisList(){
        $colis=DB::table('commandes')->get();
        return view('liste-commande-valide', compact('colis'));
    }
}
