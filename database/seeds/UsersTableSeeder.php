<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Pepito Pérez',
            'email' => 'pperez@gmail.com',
            'password' => bcrypt('gerente'),

        ]);
    }
}
