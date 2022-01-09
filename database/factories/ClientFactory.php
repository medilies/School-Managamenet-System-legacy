<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        // App\Models\Client::factory()->times(5)->create();

        $faker = \Faker\Factory::create('ar_JO');

        return [
            'fname' => $this->faker->firstName(),
            'lname' => $this->faker->name(),
            'profession' => $this->faker->sentence(1, false),
            'phone' => $this->faker->unique()->regexify('08[0-9]{8}'),
            'email' => $this->faker->unique()->safeEmail(),
            'address' => $this->faker->sentence(5, false),
        ];
    }
}
