<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePiattosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('piattos', function (Blueprint $table) {
            $table->increments('id');
			$table->string('nome');
			$table->string('immagine');
			$table->text('descrizione');
            $table->float('prezzo');
			$table->integer('categoria_id')->unsigned();
            $table->integer('order')->unsigned()->nullable();
            $table->timestamps();

			$table->foreign('categoria_id')->references('id')->on('categorias');

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
        Schema::dropIfExists('piattos');
    }
}
