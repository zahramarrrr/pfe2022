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
 * @property int $Prix
 * @property string|null $Description
 * @property string $Etat
 * @property int|null $ID_Agent
 * @property int|null $ID_Livreur
 * @property string $Date_Validation
 * @property string $Date_Affect_Agent
 * @property string $Date_Preparation
 * @property string $Date_Affect_Livreur
 * @property string $Date_Livraison
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Commande newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Commande newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Commande query()
 * @method static \Illuminate\Database\Eloquent\Builder|Commande whereAdresse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commande whereCodePostal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commande whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commande whereDateAffectAgent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commande whereDateAffectLivreur($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commande whereDateLivraison($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commande whereDatePreparation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commande whereDateValidation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commande whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commande whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commande whereEtat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commande whereGovernorat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commande whereIDAgent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commande whereIDCommande($value)
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
 * App\Models\Contact
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Contact newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact query()
 */
	class Contact extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Notifications
 *
 * @property int $id
 * @property string $Type
 * @property int $ID_Personnel
 * @property string $Notifiable
 * @property string $texte
 * @property string|null $read_at
 * @property int $ID_commande
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Notifications newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Notifications newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Notifications query()
 * @method static \Illuminate\Database\Eloquent\Builder|Notifications whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notifications whereIDCommande($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notifications whereIDPersonnel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notifications whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notifications whereNotifiable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notifications whereReadAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notifications whereTexte($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notifications whereType($value)
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
 * @property string $password
 * @property string $Role
 * @property string $adresse
 * @property string $telephone
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAdresse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePrenom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTelephone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

