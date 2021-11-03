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
        DB::table('years')->insert([
            'year' => date("Y"),
        ]);

        DB::table('establishments')->insert([
            ['establishment' => 'sabah'],
            ['establishment' => 'maraval'],
            ['establishment' => 'gambetta'],
        ]);
    }
}
