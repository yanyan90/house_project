<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ExterieurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $produits = [
            'Agrandissement', 'Structures', 'Portes/Fenêtres', 'Capage aluminium', 'Toiture', 'Mini-excavation'
        ];
        return [
            'nom' => $this->faker->unique()->randomElement($produits),
        ];
    }
}
