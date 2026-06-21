<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Achievement;

class AchievementSeeder extends Seeder
{
    public function run(): void
    {
        Achievement::create([

            'title' => '180m PC Girder Purlodhi Bridge',

            'location' => 'Kalkini Upazila, Madaripur District',

            'completion_year' => '1993',

            'position' => 'Assistant Engineer / Upazila Engineer',

            'duration' => '10 July 1983 - 22 September 1993',

            'description' => 'Successfully supervised planning, design, estimation and construction activities of the 180m PC Girder Purlodhi Bridge at Kalkini Upazila.',

            'sort_order' => 1,
        ]);

        Achievement::create([

            'title' => '81m PC Girder Bridge over Bhola Khal',

            'location' => 'Bhola Sadar, Bhola District',

            'completion_year' => '2000',

            'position' => 'Executive Engineer',

            'duration' => '23 September 1993 - 02 March 2003',

            'description' => 'Supervised the successful construction and implementation of the 81m PC Girder Bridge over Bhola Khal under district development programs.',

            'sort_order' => 2,
        ]);
    }
}
