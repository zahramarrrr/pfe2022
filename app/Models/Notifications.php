<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notifications extends Model
{
    use HasFactory;
    protected $keyType = 'string';
    protected $primaryKey = 'ID_commande';

    public $incrementing = false;
    protected $table = "notifications";
    protected $fillable = [
        'ID_commande',
     'Notifieur',
   'Notifiable',
   'Text_Notif',
        'ID_Notifieur',
        'ID_Notifiable'
       
    ];
    public function cmd_notif() {
        return $this->belongsTo(Commande::class);
    }
    public function user() {
        return $this->hasMany(User::class);
    }
}
