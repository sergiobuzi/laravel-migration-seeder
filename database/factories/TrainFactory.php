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
            'azienda' =>fake() -> word(),
            'stazione_di_partenza' => fake() -> sentence(3),
            'stazione_di_arrivo' => fake() -> sentence(3),
            'orario_di_partenza'=> fake() -> time(),
            'orario_di_arrivo' => fake() -> time(),
            'codice_treno' => fake() -> bothify('?????-#####'),
            'numero_carrozze' => fake() -> randomDigit(),
            'in_orario' => fake() -> boolean(),
            'cancellato'=> fake() -> boolean(),
            
        ];
    }
}
