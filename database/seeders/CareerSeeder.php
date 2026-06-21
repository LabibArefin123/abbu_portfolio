<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Career;

class CareerSeeder extends Seeder
{
    public function run(): void
    {
        $careers = [

            [
                'position' => 'Assistant Engineer / Upazila Engineer',
                'duration' => '1983 - 1993',
                'summary' => 'Started engineering career with LGED. Responsible for planning, estimation, supervision and implementation of roads, bridges, culverts, schools, irrigation canals and local government infrastructure projects.',
                'sort_order' => 1
            ],

            [
                'position' => 'Executive Engineer',
                'duration' => '1993 - 2003',
                'summary' => 'Managed district-wide development projects including roads, bridges, drainage systems, buildings and water resources schemes. Led procurement, contract management and quality control activities.',
                'sort_order' => 2
            ],

            [
                'position' => 'Deputy Project Director',
                'duration' => '2003 - 2004',
                'summary' => 'Worked under major ADB-funded infrastructure projects focusing on procurement planning, project monitoring and urban infrastructure development.',
                'sort_order' => 3
            ],

            [
                'position' => 'Project Director',
                'duration' => '2005 - 2011',
                'summary' => 'Led several national infrastructure projects. Managed budgets, procurement, design approvals, construction supervision and liaison with ministries and development partners.',
                'sort_order' => 4
            ],

            [
                'position' => 'Superintending Engineer',
                'duration' => '2011 - 2015',
                'summary' => 'Oversaw project monitoring and evaluation activities at LGED Headquarters. Coordinated ADP, RADP, procurement reports and national development programmes.',
                'sort_order' => 5
            ],

            [
                'position' => 'Additional Chief Engineer',
                'duration' => '2015 - 2018',
                'summary' => 'Provided strategic leadership for urban management, procurement monitoring and implementation of major national infrastructure projects and flyovers.',
                'sort_order' => 6
            ],

            [
                'position' => 'Design & Supervision Consultant',
                'duration' => '2018 - 2025',
                'summary' => 'Served as Design & Supervision Engineer under the Construction of Important Bridges on Rural Roads (CIBRR) Project. Supervised numerous major bridge projects across Bangladesh.',
                'sort_order' => 7
            ],

        ];

        foreach ($careers as $career) {
            Career::create($career);
        }
    }
}
