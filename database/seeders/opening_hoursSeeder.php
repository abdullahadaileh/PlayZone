<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\opening_hours;
use Illuminate\Database\Seeder;

class opening_hoursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        opening_hours::factory(9)->create();
    }
}
