<?php

namespace Database\Seeders;

use App\Models\People;
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
        People::factory(30)->create();
        // \App\Models\User::factory(10)->create();
    }
}
