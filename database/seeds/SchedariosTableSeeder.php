<?php

use Illuminate\Database\Seeder;

class SchedariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schedarios')->insert([
            'schedario_version' => 1,
            'created_at' => \Carbon\Carbon::Now(),
            'updated_at' => \Carbon\Carbon::Now(),
        ]);
    }
}
