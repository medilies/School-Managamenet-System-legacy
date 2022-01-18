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
            ['id' => 'préscolaire'],
            ['id' => 'primaire'],
            ['id' => 'moyen'],
            ['id' => 'secondaire'],
        ]);

        DB::table('class_types')->insert([
            ['cycle_id' => 'préscolaire', 'name' => 'préscolaire'],
            ['cycle_id' => 'primaire', 'name' => '1re AP'],
            ['cycle_id' => 'primaire', 'name' => '2e AP'],
            ['cycle_id' => 'primaire', 'name' => '3e AP'],
            ['cycle_id' => 'primaire', 'name' => '4e AP'],
            ['cycle_id' => 'primaire', 'name' => '5e AP'],
            ['cycle_id' => 'moyen', 'name' => '1re AM'],
            ['cycle_id' => 'moyen', 'name' => '2e AM'],
            ['cycle_id' => 'moyen', 'name' => '3e AM'],
            ['cycle_id' => 'moyen', 'name' => '4e AM'],
            ['cycle_id' => 'secondaire', 'name' => '1re AS TC sciences et technologie'],
            ['cycle_id' => 'secondaire', 'name' => '1re AS TC lettres'],
            ['cycle_id' => 'secondaire', 'name' => '2e AS sciences expérimentales'],
            ['cycle_id' => 'secondaire', 'name' => '2e AS gestion et economie'],
            ['cycle_id' => 'secondaire', 'name' => '2e AS math'],
            ['cycle_id' => 'secondaire', 'name' => '2e AS technique mathematique'],
            ['cycle_id' => 'secondaire', 'name' => '2e AS langues étrangères'],
            ['cycle_id' => 'secondaire', 'name' => '2e AS lettres - philosophie'],
            ['cycle_id' => 'secondaire', 'name' => '3e AS sciences expérimentales'],
            ['cycle_id' => 'secondaire', 'name' => '3e AS gestion et economie'],
            ['cycle_id' => 'secondaire', 'name' => '3e AS math'],
            ['cycle_id' => 'secondaire', 'name' => '3e AS technique mathematique'],
            ['cycle_id' => 'secondaire', 'name' => '3e AS langues étrangères'],
            ['cycle_id' => 'secondaire', 'name' => '3e AS lettres - philosophie'],
        ]);
    }
}
