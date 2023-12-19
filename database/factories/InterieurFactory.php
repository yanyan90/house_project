<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class InterieurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $produits = [
            'Salle de bain', 'Planchers', 'Cuisines', 'Systèmes intérieurs', 'Sous-sol', 'Peinture'
        ];
        return [
            'nom' => $this->faker->unique()->randomElement($produits),
        ];
    }
}
