<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

		DB::table('categorias')->insert([
			'nome' => 'Secondi Piatti',
			'immagine' => 'secondi_piatti.jpg',
			'descrizione' => 'I secondi piatti sono i più buoni.',
			'menu_id' => 1,
			'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
		]);

        DB::table('categorias')->insert([
            'nome' => 'Contorni',
            'immagine' => 'contorni.jpg',
            'descrizione' => 'Insalatine per tutti i gusti.',
            'menu_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

		DB::table('categorias')->insert([
			'nome' => 'Aggiunte',
			'immagine' => 'Lardo-di-colonnata.jpg',
			'descrizione' => 'Dai un tocco in più ai nostri piatti.',
			'menu_id' => 1,
			'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
		]);
    }
}
