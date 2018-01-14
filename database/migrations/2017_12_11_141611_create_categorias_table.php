<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->increments('id');
			$table->string('nome');
			$table->string('immagine');
			$table->text('descrizione');
			$table->integer('menu_id')->unsigned();
            $table->integer('order')->unsigned()->nullable();
            $table->timestamps();

			$table->foreign('menu_id')->references('id')->on('menus');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('categorias');
    }
}
