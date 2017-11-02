<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Category::create(['title' => 'Sport']);
        \App\Category::create(['title' => 'Cars']);
        \App\Category::create(['title' => 'Technology']);
        \App\Category::create(['title' => 'Lifestyle']);



    }
}
