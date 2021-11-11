<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ClassType;
use App\Models\Establishment;
use App\Models\EstablishmentClass;
use Illuminate\Support\Facades\DB;

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

                $class_type_id = $class_type->id;
                $establishment_establishment = $establishment->establishment;

                $establishment_class_data = [
                    'class_type_id' => $class_type_id,
                    'establishment' => $establishment_establishment,
                ];

                $already_exist = DB::table('establishment_classes')
                    ->where('class_type_id', $class_type_id)
                    ->where('establishment', $establishment_establishment)
                    ->exists();

                if (!$already_exist) {
                    EstablishmentClass::create($establishment_class_data);
                }
            }
        }
    }
}
