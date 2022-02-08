<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

     protected $model=Category::class;


    public function definition()
    {
        $name = $this->faker->sentence(rand(4, 9));

        return [
            'name'=> $name,
            'slug'=> Str::slug($name),
            'description'=> $this->faker->paragraph(),
            'status'=> $this->faker->boolean(50),
            'popular'=> $this->faker->boolean(50),
            'image'=> $this->faker->image('public/assets/uploads/category',640,480),
            'meta_title'=> $this->faker->sentences(),
            'meta_descrip'=> $this->faker->sentences(),
            'meta_keywords'=> $this->faker->sentences(),
            //
        ];
    }
}
