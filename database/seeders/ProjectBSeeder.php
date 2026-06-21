<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectBSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [

            [
                'project_name' => 'Bhola Khal Bridge',
                'project_type' => 'Bridge',
                'location' => 'Bhola Sadar, Bhola',
                'river_name' => 'Bhola Khal',
                'length_m' => 81,
                'position' => 'Executive Engineer',
                'project_year' => 2000,
                'description' => 'Supervised construction of 81m PC Girder Bridge over Bhola Khal including contract management, quality control, project monitoring and successful completion under LGED development activities.',
                'featured' => true,
                'sort_order' => 2,
            ],

        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
