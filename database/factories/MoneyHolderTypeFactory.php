<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MoneyHolderType>
 */
class MoneyHolderTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     *
     */
    protected $types = ["Crypto wallet", "Bank Account", "Credit Card", "Vault"];
    public function definition(): array
    {
        return [
            "name" => fake()->randomElement($this->types),
            "enabled" => 1,
        ];
    }
}
