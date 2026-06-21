<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectASeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $projects = [

            [
                'project_name' => 'Bhola Khal Bridge',
                'project_type' => 'Bridge',
                'location' => 'Bhola',
                'position' => 'Assistant Engineer',
                'project_year' => 1988,
                'description' => 'Supervised planning, construction and implementation of Bhola Khal Bridge under local infrastructure development activities.'
            ],

            [
                'project_name' => 'Purlodhi Bridge',
                'project_type' => 'Bridge',
                'location' => 'Feni',
                'position' => 'Executive Engineer',
                'project_year' => 1998,
                'description' => 'Managed design review, construction supervision and quality control activities for Purlodhi Bridge.'
            ],
        ];

        foreach ($projects as $project) {

            Project::create($project);
        }
    }
}
