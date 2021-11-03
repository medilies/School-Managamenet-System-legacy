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
            ['cycle' => 'préscolaire'],
            ['cycle' => 'primaire'],
            ['cycle' => 'moyen'],
            ['cycle' => 'secondaire'],
        ]);

        DB::table('classes_types')->insert([
            ['cycle' => 'préscolaire', 'name' => 'préscolaire'],
            ['cycle' => 'primaire', 'name' => '1re AP'],
            ['cycle' => 'primaire', 'name' => '2e AP'],
            ['cycle' => 'primaire', 'name' => '3e AP'],
            ['cycle' => 'primaire', 'name' => '4e AP'],
            ['cycle' => 'primaire', 'name' => '5e AP'],
            ['cycle' => 'moyen', 'name' => '1re AM'],
            ['cycle' => 'moyen', 'name' => '2e AM'],
            ['cycle' => 'moyen', 'name' => '3e AM'],
            ['cycle' => 'moyen', 'name' => '4e AM'],
            ['cycle' => 'secondaire', 'name' => '1re AS TC sciences et technologie'],
            ['cycle' => 'secondaire', 'name' => '1re AS TC lettres'],
            ['cycle' => 'secondaire', 'name' => '2e AS sciences expérimentales'],
            ['cycle' => 'secondaire', 'name' => '2e AS gestion et economie'],
            ['cycle' => 'secondaire', 'name' => '2e AS math'],
            ['cycle' => 'secondaire', 'name' => '2e AS technique mathematique'],
            ['cycle' => 'secondaire', 'name' => '2e AS langues étrangères'],
            ['cycle' => 'secondaire', 'name' => '2e AS lettres - philosophie'],
            ['cycle' => 'secondaire', 'name' => '3e AS sciences expérimentales'],
            ['cycle' => 'secondaire', 'name' => '3e AS gestion et economie'],
            ['cycle' => 'secondaire', 'name' => '3e AS math'],
            ['cycle' => 'secondaire', 'name' => '3e AS technique mathematique'],
            ['cycle' => 'secondaire', 'name' => '3e AS langues étrangères'],
            ['cycle' => 'secondaire', 'name' => '3e AS lettres - philosophie'],
        ]);
    }
}
