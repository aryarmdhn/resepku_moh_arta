<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();

        Category::create([
            'name' =>'Food',
            'slug' =>'food'
        ]);
        Category::create([
            'name' =>'Snack',
            'slug' =>'snack'
        ]);
        Category::create([
            'name' =>'Drink',
            'slug' =>'drink'
        ]);

        Post::factory(20)->create();
    }
}
