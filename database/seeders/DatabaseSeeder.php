<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\AboutUsMetric;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Database\Factories\SocialFactory;
use Database\Seeders\CaseStudyCategorySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Admin',
            'email' => 'hello@lawaccent.co.uk',
            'role' => 'admin',
            'password' => Hash::make('admin'),
        ]);

        AboutUsMetric::create();

        SocialFactory::times(1)->create();

        $this->call([
            BlogCategorySeeder::class,
            CaseStudyCategorySeeder::class,
        ]);

    }
}
