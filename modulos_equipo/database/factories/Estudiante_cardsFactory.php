<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Estudiante_cards>
 */
class Estudiante_cardsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre'=>$this->faker->name(),
            'proyecto'=>$this->faker->sentence(),
            'matricula'=>$this->faker->randomNumber(5),
            'correo'=>$this->faker->unique()->safeEmail(),
            'foto'=>$this->faker->image(),
        ];
    }
}
