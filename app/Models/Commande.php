<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;
    protected $table = "commandes";
    protected $fillable=['ID_commande',

    'date',
    'temps',
    'nom',
    'prenom',
    'telephone',
    'email',
    'adresse1',
    'governorat',
    'ville',
    'code_postal',
    'paiement',
    'poids',
    'prix',

    'description'];

   
}
