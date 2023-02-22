<?php

namespace Database\Factories;

use App\Enums\AnnouncementType;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AnnouncementFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $this->faker->word,
            'status' => rand(0, 3),
            'slug' => Str::slug('title'),
            'type_transaction' => rand(0, 1),
            'condition' => rand(0, 1),
            'descriptions' => $this->faker->sentence,
            'price' => rand(10, 100),
            'unit' => $this->faker->word
        ];
    }
}
