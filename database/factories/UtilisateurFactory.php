<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Utilisateur>
 */
class UtilisateurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
           
            'nom' => $this->faker->lastName(),
            'prenom' => $this->faker->firstName(),
            'sexe' => fake()->randomElement(['F','M']),
            'email' => fake()->unique()->safeEmail(),
            'ville' => $this->faker->city(),
            'je_suis' => fake()->randomElement(['Etudiant','Autre']),
        ];
    }
}
