<?php

namespace App\Imports;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Commande;
use Maatwebsite\Excel\Concerns\ToModel;
use PhpOffice\PhpSpreadsheet\Calculation\DateTimeExcel\Date;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Commande([
            'id' => $row[0],
            'Nom' => $row[1],
            'Prenom' =>$row[2],
            'Telephone' => $row[3],
            'Email' => $row[4],
            'Adresse' =>$row[5],
            'Governorat' => $row[6],
            'Ville' => $row[7],
            'Code_postal' => $row[8],
            'Paiement' =>$row[9],
            'Poids' =>$row[10],
            'Prix' =>$row[11],

            'Description' =>$row[12],
            'Etat' =>$row[13],
            'ID_commande ' =>$row[14],
            'ID_Agent  ' =>$row[15],
            'ID_Livreur  ' =>$row[16], 
            'Date_Declaration ' =>$row[17],
             'Date_Validation ' =>$row[18],
             'Date_Affect_Agent ' =>$row[19],
             'Date_Preparation ' =>$row[20],
            'Date_Affect_Livreur ' =>$row[21],
            'Date_Livraison ' =>$row[22],
            'Date_Retour ' =>$row[23],


               
            //
        ]);
       Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[17]));

    }
}
