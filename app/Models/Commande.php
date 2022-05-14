<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{


    use HasFactory;
    protected $table = "commandes";
    protected $fillable = [
        'ID_commande',
     
   
        'Nom',
        'Prenom',
        'Telephone',
        'Email',
        'Adresse',
        'Governorat',
        'Ville',
        'Code_postal',
        'Paiement',
        'Poids',
        'Prix',
        'Description'
    ];
}
