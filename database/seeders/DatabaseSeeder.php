<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Entrada;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\Entrada::factory(5)->create();

    }

}
