<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // App\Models\Student::factory()->times(5)->create();

        $faker = \Faker\Factory::create('ar_JO');

        return [
            'fname' => $this->faker->firstName(),
            'ar_fname' => $faker->firstName(),
            'lname' => $this->faker->name(),
            'ar_lname' => $faker->name(),
            'bday' => $this->faker->dateTime('2004-12-1'),
            'bplace' => $this->faker->sentence(1, false),
        ];
    }
}
