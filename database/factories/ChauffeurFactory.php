<?php

namespace Database\Factories;

use App\Models\Chauffeur;
use App\Models\Voiture;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Chauffeur>
 */
class ChauffeurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $chauffeurs = Voiture::select('id')->get();
        return [
            'nom' => fake()->firstName(),
            'prénom' => fake()->lastName(),
            'age' => fake()->numberBetween(18, 60),
            'numéro_permis' => fake()->unique()->iban(),
            'type_permis' => fake()->randomElement(["A", "B", "C", "D", "E"]),
            'cin' => fake()->unique()->iban(),
            'voiture_id'=>fake()->randomElement([...$chauffeurs,null])
        ];
    }
}
