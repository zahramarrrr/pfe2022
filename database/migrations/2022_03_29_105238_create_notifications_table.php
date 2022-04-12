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
            $table->integer('ID_commande')->default(0);
            $table->string('type')->default('');
            $table->string('nomCommerçant')->default('');
            $table->nullableMorphs('notifiable');
            $table->string('data')->default('');
            $table->timestamp('read_at')->nullable();
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
