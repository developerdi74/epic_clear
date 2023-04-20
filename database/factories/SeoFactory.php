<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Seo;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Seo>
 */
class SeoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'route' => '/',
            'title' => 'Лазерная эпиляция в Магнитогорске',
            'description' => Str::random(10),// password
            'keywords' => Str::random(10),
            'header' => Str::random(10),
            //
        ];
    }
}
