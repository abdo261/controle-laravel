<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Voiture>
 */
class VoitureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'immatricule' => fake()->unique()->iban(),
            'modèle' => fake()->year(),
            'type_carburant' => fake()->randomElement([
                'essence', 'diesel',
                'hybride', 'électrique'
            ])
        ];
    }
}
