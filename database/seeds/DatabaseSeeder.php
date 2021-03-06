<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$this->call(MenusTableSeeder::class);
		$this->call(CategoriasTableSeeder::class);
        $this->call(PiattosTableSeeder::class);
        $this->call(EventosTableSeeder::class);
        $this->call(SchedariosTableSeeder::class);
        $this->call(UserTableSeeder::class);
    }
}
