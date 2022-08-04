<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Process>
 */
class ProcessFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'process_number'=> $this->faker->numerify('#######-##.####.#.##.####'),
            'client'=> $this->faker->name(),
            'claimant'=> $this->faker->name(),
            'defendant'=> $this->faker->name(),
            'court'=> $this->faker->stateAbbr(),
            'city'=> $this->faker->city(),
            'judge'=> $this->faker->name(),
            'subject'=> $this->faker->word(),
            'process_value'=> $this->faker->randomFloat(2, 100, 10000000),
            'processed_at'=> $this->faker->date(),
        ];
    }
}
