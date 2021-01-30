<?php

namespace Database\Factories;

use App\Models\Coletor;
use Illuminate\Database\Eloquent\Factories\Factory;

class ColetorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Coletor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'perfil' => $this->faker->text,
            'telefone' => $this->faker->word,
        ];
    }
}
