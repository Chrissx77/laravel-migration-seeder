<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Train>
 */
class TrainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'azienda' => fake() -> word(),
            'stazione_partenza' => fake() -> word(),
            'stazione_arrivo' => fake() -> word(),
            'orario_partenza' => fake() -> word(),
            'orario_arrivo' => fake() -> word(),
            'codice_treno' => fake() -> word(),
            'num_carrozze' => fake() -> randomFloat(),
            'in_orario' => fake() -> boolean(),
            'cancellato' => fake() -> boolean(),
        ];
    }
}
