<?php

namespace Database\Factories;

use App\Models\Employer;
use App\Models\JobListing;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<JobListing>
 */
class JobListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title" => fake()->jobTitle(),
            "description" => fake()->sentence(),
            "salary" => "600.000kr",
            "employer_id" => Employer::factory(),
        ];
    }
}
