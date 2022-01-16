<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario',function(Blueprint $table){
            $table->increments('id');
            $table->string('username');
            $table->timestamps();
        });

        //nuestro caso: 1:M --> 1 usuario puede tener M contactos pero 1 contacto solo puede estar en 1 usuario
        Schema::create('contact-list',function (Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('phone');
            $table->timestamps();
            $table->unsignedInteger('usr_id');
            $table->foreign('usr_id')
                ->references('id')
                ->on('usuario')
                ->onDelete('cascade'); //if we  delete an specific user, deletes the contact-list
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact-list');
    }
}

//notes to self
//if you edit the table --> php artisan migrate:refresh
