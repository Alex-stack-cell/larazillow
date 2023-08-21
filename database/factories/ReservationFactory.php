<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => fake()->uuid(),
            'number_of_people' => fake()->numberBetween(1, 20),
            'reservation_date' => fake()->dateTimeBetween('now', '+1 month'),
            'reservation_hour' => fake()->time('H:i:s', '22:30:00'),
            'is_company' => fake()->boolean(),
            'company_name' => fake()->company(),
            'vat_number' => fake()->vat(),
            'first_name' => fake()->firstName(),
            'name' => fake()->name(),
            'email' => fake()->email(),
            'special_needs' => fake()->paragraph(3, true)
        ];
    }
}
