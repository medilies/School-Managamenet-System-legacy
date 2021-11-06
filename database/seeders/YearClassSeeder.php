<?php

namespace Database\Seeders;

use App\Models\EstablishmentClass;
use App\Models\Year;
use App\Models\YearClass;
use Illuminate\Database\Seeder;

class YearClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $establishment_classes = EstablishmentClass::all();
        $years = Year::all();

        foreach ($years as $year) {
            foreach ($establishment_classes as $establishment_class) {

                $year_class_data = [
                    'year' => $year->year,
                    'establishment_class_id' => $establishment_class->id,
                ];

                YearClass::create($year_class_data);
            }
        }
    }
}
