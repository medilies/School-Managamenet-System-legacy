<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EducSystem extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cycles')->insert([
            ['id' => 'prescolaire'],
            ['id' => 'primaire'],
            ['id' => 'moyen'],
            ['id' => 'secondaire'],
        ]);

        DB::table('class_types')->insert([
            ['id' => 1, 'cycle_id' => 'prescolaire', 'name' => 'préscolaire'],
            ['id' => 2, 'cycle_id' => 'primaire', 'name' => '1re AP'],
            ['id' => 3, 'cycle_id' => 'primaire', 'name' => '2e AP'],
            ['id' => 4, 'cycle_id' => 'primaire', 'name' => '3e AP'],
            ['id' => 5, 'cycle_id' => 'primaire', 'name' => '4e AP'],
            ['id' => 6, 'cycle_id' => 'primaire', 'name' => '5e AP'],
            ['id' => 7, 'cycle_id' => 'moyen', 'name' => '1re AM'],
            ['id' => 8, 'cycle_id' => 'moyen', 'name' => '2e AM'],
            ['id' => 9, 'cycle_id' => 'moyen', 'name' => '3e AM'],
            ['id' => 10, 'cycle_id' => 'moyen', 'name' => '4e AM'],
            ['id' => 11, 'cycle_id' => 'secondaire', 'name' => '1re AS TC sciences et technologie'],
            ['id' => 12, 'cycle_id' => 'secondaire', 'name' => '1re AS TC lettres'],
            ['id' => 13, 'cycle_id' => 'secondaire', 'name' => '2e AS sciences expérimentales'],
            ['id' => 14, 'cycle_id' => 'secondaire', 'name' => '2e AS gestion et economie'],
            ['id' => 15, 'cycle_id' => 'secondaire', 'name' => '2e AS math'],
            ['id' => 16, 'cycle_id' => 'secondaire', 'name' => '2e AS technique mathematique'],
            ['id' => 17, 'cycle_id' => 'secondaire', 'name' => '2e AS langues étrangères'],
            ['id' => 18, 'cycle_id' => 'secondaire', 'name' => '2e AS lettres - philosophie'],
            ['id' => 19, 'cycle_id' => 'secondaire', 'name' => '3e AS sciences expérimentales'],
            ['id' => 20, 'cycle_id' => 'secondaire', 'name' => '3e AS gestion et economie'],
            ['id' => 21, 'cycle_id' => 'secondaire', 'name' => '3e AS math'],
            ['id' => 22, 'cycle_id' => 'secondaire', 'name' => '3e AS technique mathematique'],
            ['id' => 23, 'cycle_id' => 'secondaire', 'name' => '3e AS langues étrangères'],
            ['id' => 24, 'cycle_id' => 'secondaire', 'name' => '3e AS lettres - philosophie'],
        ]);
    }
}
