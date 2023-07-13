<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tratta>
 */
class TrattaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'azienda' => fake() -> company(),
            'stazione_di_partenza' => fake() -> address(),
            'stazione_di_arrivo' => fake() -> address(),
            'orario_di_partenza' => fake() -> time(),
            'orario_di_arrivo' => fake() -> time(),
            'codice_treno' => fake() -> unique() -> numerify('##########'),
            'numero_carrozze' => fake() -> numberBetween(5, 15),
            'in_orario' => fake() -> boolean(),
            'cancellato' => fake() -> boolean()
        ];
    }
}


// $table->string('azienda', 50);
// $table->string('stazione_di_partenza', 64);
// $table->string('stazione_di_arrivo', 64);
// $table->time('orario_di_partenza');
// $table->time('orario_di_arrivo');
// $table->string('codice_treno', 32) -> unique();
// $table->integer('numero_carrozze');
// $table->boolean('in_orario') -> default(true);
// $table->boolean('cancellato') -> default(false);
