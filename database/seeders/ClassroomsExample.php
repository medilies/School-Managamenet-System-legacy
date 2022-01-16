<?php

namespace Database\Seeders;

use App\Models\Classroom;
use App\Models\ClassType;
use App\Models\Establishment;
use App\Models\Year;
use Illuminate\Database\Seeder;

class ClassroomsExample extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $years = Year::all();
        $establishments = Establishment::all();
        $class_types = ClassType::all();

        foreach ($years as $year) {
            foreach ($establishments as $establishment) {
                foreach ($class_types as $class_type) {

                    if (in_array($class_type->id, [12, 14, 17, 18, 20, 23, 24])) continue;

                    Classroom::create([
                        'year_id' => $year->id,
                        'establishment_id' => $establishment->id,
                        'class_type_id' => $class_type->id,
                        'capacity' => rand(20, 80),

                    ]);
                }
            }
        }
    }
}
