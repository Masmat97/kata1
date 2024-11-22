<?php

namespace Database\Factories;

use App\Models\Ticket;
use App\Models\Operatore;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    protected $model = Ticket::class;

    public function definition()
    {
        return [
            'titolo' => $this->faker->sentence,
            'descrizione' => $this->faker->paragraph,
            'stato' => $this->faker->randomElement([0, 1]), // 0 = aperto, 1 = chiuso
            'data_creazione' => $this->faker->dateTimeThisYear(),
            'data_chiusura' => $this->faker->optional()->dateTimeThisYear(), // Campo opzionale
            'operatore_id' => Operatore::factory(), // Collega un operatore
        ];
    }
}
