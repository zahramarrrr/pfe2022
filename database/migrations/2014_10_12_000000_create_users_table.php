<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('Nom')->default('');
            $table->string('Prenom')->default('');
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->string('Role')->default('');
            $table->string('Adresse')->default('');
            $table->string('Telephone')->default('');
            $table->string('TelephoneSociete')->default('');
            $table->string('EmailSociete')->default('');
            $table->string('RaisonSociale')->default('');
            $table->string('NomSociete')->default('');
            $table->float('Salaire')->default(0);
            $table->date('DateNaiss')->useCurrent();
            $table->string('TypePermis')->default('');
            $table->string('TypeVehicule')->default('');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
