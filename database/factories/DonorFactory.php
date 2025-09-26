<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Donor>
 */
class DonorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'id_number' => $this->faker->unique()->numerify('#########'), // رقم هوية فريد من 11 رقم مثلا
            'blood_type' => $this->faker->randomElement(['A-', 'A+', 'O+', 'O-', 'B+', 'B-', 'AB+', 'AB-']),
            // أضف أي حقول أخرى حسب جدول المتبرعين لديك، مثلا:
            // 'phone' => $this->faker->phoneNumber(),
            // 'address' => $this->faker->address(),
        ];
    }
}
