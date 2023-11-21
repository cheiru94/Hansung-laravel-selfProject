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
        return [
          'title' => $this->faker->realText(50), 
          'name' => $this->faker->name(20), 
          'email' => $this->faker->email(), 
          'type' => $this->faker->randomElement($types),
          'region' => $this->faker->numberBetween(0, 5), 
          'contact' => $this->faker->realText(200),
        ];
    }
}
