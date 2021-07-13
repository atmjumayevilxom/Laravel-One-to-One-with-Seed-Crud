<?php

namespace Database\Seeders;

use App\Models\Director;
use App\Models\Film;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Film::factory(30)->create();
    }
}
