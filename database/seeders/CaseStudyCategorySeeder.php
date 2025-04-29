<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CaseStudyCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('case_study_categories')->insert([
            ['name' => 'Data Protection and Advisory Services'],
            ['name' => 'Corporate Law'],
            ['name' => 'Family Law'],
            ['name' => 'Litigation'],
            ['name' => 'Real Estate Law'],
            ['name' => 'Debt Recovery'],
            ['name' => 'Banking and Finance Law'],
            ['name' => 'Others'],
        ]);
    }
}
