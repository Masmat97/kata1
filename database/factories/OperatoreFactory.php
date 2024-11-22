<?php

namespace Database\Factories;

use App\Models\Operatore;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Operatore>
 */
class OperatoreFactory extends Factory
{
    protected $model = Operatore::class;

    public function definition()
    {
        return [
            'nome' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'telefono' => $this->faker->phoneNumber,
            'stato' => $this->faker->boolean, // true o false
        ];
    }
}