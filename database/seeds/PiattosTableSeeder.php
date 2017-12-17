<?php

use Illuminate\Database\Seeder;

class PiattosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('piattos')->insert([
            'nome' => "Zucchine Grigliate",
            'immagine' => "zucchineGrigliate.jpg",
            'descrizione' => "Descrizione",
            'prezzo' => "1",
            'categoria_id' => 4,
            'created_at' => \Carbon\Carbon::Now(),
            'updated_at' => \Carbon\Carbon::Now(),
        ]);

		DB::table('piattos')->insert([
            'nome' => "Sottilette",
            'immagine' => "sottilette.jpg",
            'descrizione' => "Descrizione",
            'prezzo' => "0.50",
            'categoria_id' => 4,
            'created_at' => \Carbon\Carbon::Now(),
            'updated_at' => \Carbon\Carbon::Now(),
        ]);

		DB::table('piattos')->insert([
            'nome' => "Ceddar",
            'immagine' => "ceddar.jpg",
            'descrizione' => "Descrizione",
            'prezzo' => "0.50",
            'categoria_id' => 4,
            'created_at' => \Carbon\Carbon::Now(),
            'updated_at' => \Carbon\Carbon::Now(),
        ]);

		DB::table('piattos')->insert([
            'nome' => "Mozzarella",
            'immagine' => "mozzarella.jpg",
            'descrizione' => "Descrizione",
            'prezzo' => "1.00",
            'categoria_id' => 4,
            'created_at' => \Carbon\Carbon::Now(),
            'updated_at' => \Carbon\Carbon::Now(),
        ]);

		DB::table('piattos')->insert([
            'nome' => "Gorgonzola",
            'immagine' => "gorgonzola.jpg",
            'descrizione' => "Descrizione",
            'prezzo' => "1.00",
            'categoria_id' => 4,
            'created_at' => \Carbon\Carbon::Now(),
            'updated_at' => \Carbon\Carbon::Now(),
        ]);

		DB::table('piattos')->insert([
            'nome' => "Pecorino",
            'immagine' => "pecorino.jpg",
            'descrizione' => "Descrizione",
            'prezzo' => "1.50",
            'categoria_id' => 4,
            'created_at' => \Carbon\Carbon::Now(),
            'updated_at' => \Carbon\Carbon::Now(),
        ]);

		DB::table('piattos')->insert([
            'nome' => "Cipolla Cruda",
            'immagine' => "cipolla.jpg",
            'descrizione' => "Descrizione",
            'prezzo' => "0.50",
            'categoria_id' => 4,
            'created_at' => \Carbon\Carbon::Now(),
            'updated_at' => \Carbon\Carbon::Now(),
        ]);

		DB::table('piattos')->insert([
            'nome' => "Burger di Pollo",
            'immagine' => "BurgerPollo.jpg",
            'descrizione' => "Descrizione",
            'prezzo' => "6.00",
            'categoria_id' => 0,
            'created_at' => \Carbon\Carbon::Now(),
            'updated_at' => \Carbon\Carbon::Now(),
        ]);

		DB::table('piattos')->insert([
			'nome' => "Hamburger Cinghiale",
			'immagine' => "hamburgercinghiale.jpg",
			'descrizione' => "Descrizione",
			'prezzo' => "8.00",
			'categoria_id' => 0,
			'created_at' => \Carbon\Carbon::Now(),
			'updated_at' => \Carbon\Carbon::Now(),
		]);

    }
}
