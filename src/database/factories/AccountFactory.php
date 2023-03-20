<?php

namespace Database\Factories;

use App\Models\AccountType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type_id' => AccountType::factory(),
            'name' => fake()->name(),
            'address' => fake()->address(),
            'contact_number' => fake('lt_LT')->phoneNumber(),
            'email' => fake()->unique()->email(),
            'password' => bcrypt('password'),
        ];
    }
}
