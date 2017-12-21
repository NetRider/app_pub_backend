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
            'name' => 'aaa',
            'email' => 'email@email.it',
            'password' => "\$2y$10\$jq.mHLglFPl8xIzqPgTCjeEJCCkrJjvhCDNcRFz6xY341k16WnFFy",
            'remember_token' => "C6ZfVWU9uaMcSZYoZPSuN6uqk9E6tt6q4P92lrZ6DxLRYf8GQfbwuiTcRObK",
            'created_at' => \Carbon\Carbon::Now(),
            'updated_at' => \Carbon\Carbon::Now(),
        ]);
    }
}
