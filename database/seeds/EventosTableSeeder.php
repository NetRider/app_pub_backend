<?php

use Illuminate\Database\Seeder;

class EventosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('eventos')->insert([
            'titolo' => "evento 1",
            'immagine' => "abc",
            'descrizione' => "yellow pecora",
            'data' => "mer feb 07 18:49:02 2018",
            'ora_inizio' => "mer feb 07 18:50:02 2018",
            'ora_fine' => "mer feb 07 18:53:02 2018",
            'created_at' => \Carbon\Carbon::Now(),
            'updated_at' => \Carbon\Carbon::Now(),
        ]);
    }
}
