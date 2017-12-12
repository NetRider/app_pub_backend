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
			'nome' => 'Primi Piatti',
			'immagine' => 'public/primi_piatti.jpg',
			'descrizione' => 'I primi piatti sono importanti per iniziare la serata',
			'menu_id' => 1,
			'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
		]);

		DB::table('categorias')->insert([
			'nome' => 'Secondi Piatti',
			'immagine' => 'public/secondi_piatti.jpg',
			'descrizione' => 'I secondi piatti sono i più buoni',
			'menu_id' => 1,
			'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
		]);
    }
}
