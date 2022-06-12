<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Commande
 *
 * @property int $id
 * @property string $Date_Declaration
 * @property int $ID_commande
 * @property string $Nom
 * @property string $Prenom
 * @property int $Telephone
 * @property string|null $Email
 * @property string $Adresse
 * @property string $Governorat
 * @property string $Ville
 * @property int $Code_postal
 * @property string $Paiement
 * @property int|null $Poids
 * @property int|null $Prix
 * @property string|null $Description
 * @property string $Etat
 * @property int|null $ID_Commercant
 * @property int|null $ID_Agent
 * @property int|null $ID_Livreur
 * @property string $Date_Validation
 * @property string $Date_Affect_Agent
 * @property string $Date_Preparation
 * @property string $Date_Affect_Livreur
 * @property string $Date_Livraison
 * @property string $Date_Retour
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Notifications[] $notif_cmd
 * @property-read int|null $notif_cmd_count
 * @method static \Illuminate\Database\Eloquent\Builder|Commande newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Commande newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Commande query()
 * @method static \Illuminate\Database\Eloquent\Builder|Commande whereAdresse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commande whereCodePostal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commande whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commande whereDateAffectAgent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commande whereDateAffectLivreur($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commande whereDateDeclaration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commande whereDateLivraison($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commande whereDatePreparation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commande whereDateRetour($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commande whereDateValidation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commande whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commande whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commande whereEtat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commande whereGovernorat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commande whereIDAgent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commande whereIDCommande($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commande whereIDCommercant($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commande whereIDLivreur($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commande whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commande whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commande wherePaiement($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commande wherePoids($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commande wherePrenom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commande wherePrix($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commande whereTelephone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commande whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commande whereVille($value)
 */
	class Commande extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Notifications
 *
 * @property int $id
 * @property string|null $Notifieur
 * @property int|null $ID_Notifieur
 * @property string $Notifiable
 * @property string $Text_Notif
 * @property string|null $DateNotifPrep
 * @property string|null $DateNotifLiv
 * @property string|null $DateNotifDec
 * @property string|null $DateNotifRet
 * @property int|null $ID_Notifiable
 * @property string|null $read_at
 * @property int $ID_commande
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Commande|null $cmd_notif
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $user
 * @property-read int|null $user_count
 * @method static \Illuminate\Database\Eloquent\Builder|Notifications newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Notifications newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Notifications query()
 * @method static \Illuminate\Database\Eloquent\Builder|Notifications whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notifications whereDateNotifDec($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notifications whereDateNotifLiv($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notifications whereDateNotifPrep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notifications whereDateNotifRet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notifications whereIDCommande($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notifications whereIDNotifiable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notifications whereIDNotifieur($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notifications whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notifications whereNotifiable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notifications whereNotifieur($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notifications whereReadAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notifications whereTextNotif($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notifications whereUpdatedAt($value)
 */
	class Notifications extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $Nom
 * @property string $Prenom
 * @property string $email
 * @property string|null $password
 * @property string $Role
 * @property string $Adresse
 * @property string $Telephone
 * @property string $TelephoneSociete
 * @property string $EmailSociete
 * @property string $RaisonSociale
 * @property string $NomSociete
 * @property float $Salaire
 * @property string $DateNaiss
 * @property string $TypePermis
 * @property string $TypeVehicule
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @property-read \App\Models\Notifications|null $usernotif
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAdresse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDateNaiss($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailSociete($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereNomSociete($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePrenom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRaisonSociale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereSalaire($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTelephone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTelephoneSociete($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTypePermis($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTypeVehicule($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

