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
            $table->date('date')->default(Carbon::now());
            $table->time('temps')->default(now());
            $table->string('ID_commande')->default('')->unique();
            $table->string('nom')->default('');
            $table->string('prenom')->default('');
            $table->integer('telephone')->default(0);
            $table->string('email')->default('');
            $table->string('adresse1')->default('');
            $table->string('governorat')->default('');
            $table->string('ville')->default('');
            $table->integer('code_postal')->default(0);
            $table->string('paiement')->default('');
            $table->integer('poids')->default(0);
            $table->integer('prix')->default(0);
            $table->string('description')->default('')->nullable();
            $table->string('etat')->default('declaree');
            $table->string('agent')->default('');
            $table->string('livreur')->default('');
            $table->dateTime('date_validation')->useCurrent();
            $table->dateTime('date_affect_agent')->useCurrent();
            $table->dateTime('date_preparation')->useCurrent();
            $table->dateTime('date_affect_livreur')->useCurrent();
            $table->dateTime('date_livraison')->useCurrent();

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
