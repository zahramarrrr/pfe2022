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
            
            $table->string('Notifieur')->default('');
            $table->unsignedBigInteger('ID_Notifieur');
            $table->string('Notifiable')->default('');
            $table->string('Text_Notif')->default('');
            $table->date('DateNotifPrep')->useCurrent();
            $table->date('DateNotifLiv')->useCurrent();
            $table->date('DateNotifDec')->useCurrent();
            $table->date('DateNotifRet')->useCurrent();

            $table->unsignedBigInteger('ID_Notifiable');

            $table->timestamp('read_at')->nullable();
            $table->unsignedBigInteger('ID_commande');
            $table->timestamps();
            $table->foreign('ID_Notifieur')->references('id')->on('users')
            ->onDelete('cascade');
            $table->foreign('ID_Notifiable')->references('id')->on('users')
            ->onDelete('cascade');
            $table->foreign('ID_commande')->references('id')->on('commandes')
            ->onDelete('cascade');


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
