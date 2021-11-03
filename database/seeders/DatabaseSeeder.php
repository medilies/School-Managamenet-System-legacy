<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();

        // https://stackoverflow.com/questions/28924859/laravel-5-multiple-seeders-in-databaseseeder-php
        $this->call([EducSystem::class,EstablishmentExample::class]);

    }
}
