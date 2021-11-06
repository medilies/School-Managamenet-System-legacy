<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ClassType;
use App\Models\Establishment;
use App\Models\EstablishmentClass;

class EstablishmentClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $class_types = ClassType::all();
        $establishments = Establishment::all();

        foreach ($establishments as $establishment) {
            foreach ($class_types as $class_type) {

                $establishment_class_data = [
                    'class_type_id' => $class_type->id,
                    'establishment' => $establishment->establishment,
                ];

                EstablishmentClass::create($establishment_class_data);
            }
        }
    }
}
