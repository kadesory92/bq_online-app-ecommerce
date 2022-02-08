<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model=Product::class;


    public function definition()
    {
        $name = $this->faker->sentence(rand(4, 9));

        return [
            'name'=> $name,
            'slug'=> Str::slug($name),
            'small_description'=> $this->faker->sentences(),
            'description'=> $this->faker->paragraph(),
            'original_price'=> $this->faker->numberBetween($min = 100, $max = 9000),
            'selling_price'=> $this->faker->numberBetween($min = 1500, $max = 10000),
            'image'=> $this->faker->image('public/assets/uploads/product',640,480),
            'qty'=> $this->faker->numberBetween($min = 1, $max = 1000),
            'tax'=> $this->faker->numberBetween($min = 0, $max = 100),
            'status'=> $this->faker->boolean(),
            'trending'=> $this->faker->boolean(),
            'meta_title'=> $this->faker->sentences(),
            'meta_descrip'=> $this->faker->sentences(),
            'meta_keywords'=> $this->faker->sentences(),
            //
        ];
    }
}
