<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePokemonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pokemons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('level');
            $table->integer('users_id')->unsigned();
            $table->date('captured_at')->useCurrent();
            $table->json('type');
            $table->enum('gender',['male','female']);
            $table->text('description');
            $table->string('category');
            $table->timestamps();

            $table->foreign('users_id')
                ->references('id')
                ->on('users')
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
        Schema::dropIfExists('pokemons');
    }
}
