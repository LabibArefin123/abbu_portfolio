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
