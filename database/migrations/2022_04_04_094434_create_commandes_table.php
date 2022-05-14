<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commandes', function (Blueprint $table) {
            now("Europe/Rome");

            $table->id();
            $table->date('Date')->default(Carbon::now());
            $table->time('Heure')->default(now());
            $table->unsignedBigInteger('ID_commande')->unique();
            $table->string('Nom')->default('');
            $table->string('Prenom')->default('');
            $table->integer('Telephone')->default(0);
            $table->string('Email')->default('')->nullable();
            $table->string('Adresse')->default('');
            $table->string('Governorat')->default('');
            $table->string('Ville')->default('');
            $table->integer('Code_postal')->default(0);
            $table->string('Paiement')->default('');
            $table->integer('Poids')->default(0)->nullable();
            $table->integer('Prix')->default(0);
            $table->string('Description')->default('')->nullable();
            $table->string('Etat')->default('declaree');
            $table->unsignedBigInteger('ID_Agent')->default(0)->nullable();
            $table->unsignedBigInteger('ID_Livreur')->default(0)->nullable();
            $table->dateTime('Date_Validation')->useCurrent();
            $table->dateTime('Date_Affect_Agent')->useCurrent();
            $table->dateTime('Date_Preparation')->useCurrent();
            $table->dateTime('Date_Affect_Livreur')->useCurrent();
            $table->dateTime('Date_Livraison')->useCurrent();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commandes');
     
    }
}
