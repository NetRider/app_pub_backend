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
            'nome' => "Hamburger",
            'immagine' => "abc",
            'descrizione' => "carne di lombrico",
            'prezzo' => "5",
            'categoria_id' => 1,
            'created_at' => \Carbon\Carbon::Now(),
            'updated_at' => \Carbon\Carbon::Now(),
        ]);

        DB::table('piattos')->insert([
            'nome' => "Tagliata",
            'immagine' => "abc",
            'descrizione' => "carne di pterosauro",
            'prezzo' => "13.90",
            'categoria_id' => 2,
            'created_at' => \Carbon\Carbon::Now(),
            'updated_at' => \Carbon\Carbon::Now(),
        ]);

        DB::table('piattos')->insert([
            'nome' => "Insalata",
            'immagine' => "abc",
            'descrizione' => "o meglio bulbasaur",
            'prezzo' => "2.99",
            'categoria_id' => 3,
            'created_at' => \Carbon\Carbon::Now(),
            'updated_at' => \Carbon\Carbon::Now(),
        ]);
    }
}
