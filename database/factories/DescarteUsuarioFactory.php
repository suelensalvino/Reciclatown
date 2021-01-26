<?php

namespace Database\Factories;

use App\Models\DescarteUsuario;
use Illuminate\Database\Eloquent\Factories\Factory;

class DescarteUsuarioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DescarteUsuario::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'quantidade' => $this->faker->randomNumber(2,false),
        ];
    }
}
