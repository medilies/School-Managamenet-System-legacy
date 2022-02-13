<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstablishmentExample extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('establishments')->insert([
            ['id' => 'sabah'],
            ['id' => 'maraval'],
            ['id' => 'gambetta'],
        ]);

        DB::table('years')->insert([
            [
                'id' => '2022',
                "state" => "upcoming"
            ],
        ]);
    }
}
