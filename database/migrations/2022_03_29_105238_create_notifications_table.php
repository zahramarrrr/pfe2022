<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            
            $table->string('type')->default('');
            $table->string('ID_personnel')->default('');
            $table->string('notifiable')->default('');
            $table->string('texte')->default('');
            $table->timestamp('read_at')->nullable();
            $table->unsignedBigInteger('ID_commande');
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
        Schema::dropIfExists('notifications');
    }
}
