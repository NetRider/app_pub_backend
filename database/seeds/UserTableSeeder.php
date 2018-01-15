<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Monthy',
            'email' => 'MonthysPub@laquila.it',
            'password' => bcrypt('monthypub23UJ'),
            'remember_token' => "C6ZfVWU9uaMcSZYoZPSuN6uqk9E6tt6q4P92lrZ6DxLRYf8GQfbwuiTcRObK",
            'created_at' => \Carbon\Carbon::Now(),
            'updated_at' => \Carbon\Carbon::Now(),
        ]);
    }
}
