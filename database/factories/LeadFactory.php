<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Lead;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lead>
 */
class LeadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(2),
            'phone' => $this->faker->randomNumber(),
            'time' =>$this->faker->time('Y-m-d H:i:s'),
            'message' => $this->faker->text('35'),
            'process' =>'new',
            //
        ];
    }
}
