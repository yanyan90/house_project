<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ExterieurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Exterieur::factory(6)->create();
    }
}
