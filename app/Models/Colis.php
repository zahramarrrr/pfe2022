<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colis extends Model
{
    use HasFactory;
    protected $table = "colis";

    protected $fillable=['date','temps','nom','prenom','telephone','email','adresse1','adresse2','pays','ville','code_postal','ID_commande','poids','paiement','prix','description'];

}
