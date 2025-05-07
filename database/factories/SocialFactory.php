<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Social>
 */
class SocialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'linkedin_link' => 'https://linkedin.com/company/law-accent-uk',
            'facebook_link' => 'https://www.youtube.com/@LawAccentUK',
            'x_link' => 'https://x.com/accent_uk57423',
        ];
    }
}
