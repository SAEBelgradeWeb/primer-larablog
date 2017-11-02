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

        \App\User::create(['name' => 'Admin', 'email' => 'v.lelicanin@sae.edu', 'password' => bcrypt('password')]);
        factory(App\User::class, 10)->create();
    }
}
