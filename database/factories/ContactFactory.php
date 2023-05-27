<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    public function definition(): array
    {
        return [
            'identification'=> strval(fake()->unique()->numberBetween(1000000, 9999999)),
            'names' => fake()->firstName,
            'last_names' => fake()->lastName,
            'date_birth'=> fake()->date(),
            'phone' => strval(fake()->unique()->numberBetween(1000000000, 9999999999)),
            'address'=>fake()->address()
        ];
    }
}
