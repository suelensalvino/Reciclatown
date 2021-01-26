<?php

namespace Database\Factories;

use App\Models\AgendamentoDescarte;
use Illuminate\Database\Eloquent\Factories\Factory;

class AgendamentoDescarteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AgendamentoDescarte::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'horario' => $this->faker->time,
            'local' => $this->faker->word,
        ];
    }
}
