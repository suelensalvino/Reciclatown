<?php

namespace Database\Factories;

use App\Models\ProdutoDescarte;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProdutoDescarteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProdutoDescarte::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'categoria' => $this->faker->word,
            'data' => $this->faker->date
        ];
    }
}
