<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2,8)),
            'slug' => $this->faker->slug(),
            'deskripsi' => collect($this->faker->paragraphs(mt_rand(1,1)))
                        ->implode(''),                     
            'bahan' => $this->faker->paragraph(),
            'langkah' => collect($this->faker->paragraphs(mt_rand(3,5)))
                        ->implode(''), 
            'user_id' =>  mt_rand(1,5),
            'category_id' =>  mt_rand(1,3)
        ];
    }
}
