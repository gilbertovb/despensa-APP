<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Gilberto Villani Brito',
            'email' => 'gilbertovb@gmail.com',
            'password' => bcrypt('123'),
            'level' => 0,
            'confirmed' => 1,
        ]);
    }
}
