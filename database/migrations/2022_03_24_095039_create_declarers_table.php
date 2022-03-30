<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeclarersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('declarers', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->time('temps');
            $table->string('nom')->default('');
            $table->string('prenom')->default('');
            $table->integer('telephone');
            $table->string('email')->default('');
            $table->string('adresse1')->default('');
            $table->string('adresse2')->default('');
            $table->string('governorat')->default('');
            $table->string('ville')->default('');
            $table->integer('code_postal');
            $table->string('ID_commande')->default('');
            $table->string('paiement')->default('');
            $table->integer('poids')->default(0);
            $table->integer('prix')->default(0);
            $table->string('description')->default('');






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
        Schema::dropIfExists('declarers');
    }
}
