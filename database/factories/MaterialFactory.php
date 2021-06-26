<?php

namespace Database\Factories;

use App\Models\Material;
use Illuminate\Database\Eloquent\Factories\Factory;

class MaterialFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Material::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'author' => $this->faker->firstName,
            'type_id' => $this->faker->numberBetween(1, 3),
            'category_id' => $this->faker->numberBetween(1, 3),
            'tag_id' => $this->faker->numberBetween(1, 3),
            'description' => $this->faker->realTextBetween(50, 100),
            'url_id' => $this->faker->numberBetween(1, 3),
        ];
    }
}
