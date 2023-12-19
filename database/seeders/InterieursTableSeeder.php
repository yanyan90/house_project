<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class InterieurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Interieur::factory(6)->create();
    }
}
