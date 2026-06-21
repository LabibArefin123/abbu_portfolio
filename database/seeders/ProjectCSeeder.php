<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectCSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [

            [
                'project_name' => 'Secondary Town Infrastructure Development Project (STIDP-2)',
                'project_type' => 'Infrastructure',
                'location' => 'Bangladesh',
                'position' => 'Deputy Project Director',
                'project_year' => 2003,
                'description' => 'Assisted in procurement planning, contract management, and supervision of roads, drains, bridges, culverts, kitchen markets, and other urban infrastructure development works under the ADB and GOB funded STIDP-2 project.',
                'featured' => false,
                'sort_order' => 3,
            ],

            [
                'project_name' => 'Urban Governance and Infrastructure Improvement Project (UGIIP-1)',
                'project_type' => 'Infrastructure',
                'location' => 'Bangladesh',
                'position' => 'Deputy Project Director',
                'project_year' => 2004,
                'description' => 'Supported project implementation, monitoring, contract administration, and supervision of urban infrastructure development including roads, drains, bridges, culverts, markets, and bus terminals under the ADB and GOB funded UGIIP-1 project.',
                'featured' => true,
                'sort_order' => 4,
            ],

        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}