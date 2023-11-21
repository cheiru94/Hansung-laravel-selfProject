<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ContactForm>
 */
class ContactFormFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
      $types = ['house', 'villa', 'apartment', 'shop', 'supervision'];
      $regions = ['남구', '중구', '북구', '북구', '동구','울주군','그 외 지역'];
        return [
          'title' => $this->faker->realText(50), 
          'name' => $this->faker->name(20), 
          'email' => $this->faker->email(), 
          'type' => $this->faker->randomElement($types),
          'region' => $this->faker->randomElement($regions), 
          'contact' => $this->faker->realText(200),
        ];
    }
}
