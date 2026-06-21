<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectDSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [

            [
                'project_name' => 'Rehabilitation of 2004 Flood Damage Urban Physical Infrastructure Development Project Part-A',
                'project_type' => 'Infrastructure',
                'location' => 'Bangladesh',
                'position' => 'Project Director',
                'project_year' => 2005,
                'description' => 'Directed rehabilitation and reconstruction of urban infrastructure damaged by the 2004 flood. Responsible for project planning, procurement, contract management, implementation monitoring, financial management and coordination with government agencies.',
                'featured' => true,
                'sort_order' => 5,
            ],

            [
                'project_name' => 'Upazila Town Infrastructure Development Project',
                'project_type' => 'Infrastructure',
                'location' => 'Bangladesh',
                'position' => 'Project Director',
                'project_year' => 2007,
                'description' => 'Managed development of roads, bridges, drainage systems and municipal infrastructure in Upazila towns. Led project planning, budget preparation, procurement, supervision and stakeholder coordination.',
                'featured' => true,
                'sort_order' => 6,
            ],

            [
                'project_name' => 'Important Urban Infrastructure Development Project',
                'project_type' => 'Infrastructure',
                'location' => 'Bangladesh',
                'position' => 'Project Director',
                'project_year' => 2010,
                'description' => 'Oversaw implementation of major urban infrastructure development schemes including roads, bridges and public facilities. Responsible for project administration, financial management, monitoring and liaison with ministries, planning commission and development partners.',
                'featured' => true,
                'sort_order' => 7,
            ],

        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
