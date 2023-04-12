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
            'name' => $this->faker->name(3),
            'phone' => $this->faker->phoneNumber(),
            'time' =>$this->faker->time('d-m-y H:i:s'),
            'message' => $this->faker->text('35'),
            'process' =>'Нет',
            //
        ];
    }
}
