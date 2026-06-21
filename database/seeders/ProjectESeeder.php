<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectESeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [

            [
                'project_name' => 'Horinbaria Bridge',
                'project_type' => 'Bridge',
                'location' => 'Taltoli, Barguna',
                'length_m' => 160,
                'position' => 'Superintending Engineer',
                'project_year' => 2011,
                'description' => 'Supervised planning, implementation, monitoring and quality control of the 160m Horinbaria Bridge project.',
                'featured' => true,
                'sort_order' => 8,
            ],

            [
                'project_name' => 'Badnikhali Bridge',
                'project_type' => 'Bridge',
                'location' => 'Betagi, Barguna',
                'length_m' => 120,
                'position' => 'Superintending Engineer',
                'project_year' => 2015,
                'description' => 'Provided technical supervision and monitoring for the construction of the 120m Badnikhali Bridge.',
                'featured' => true,
                'sort_order' => 9,
            ],

            [
                'project_name' => 'Fuljuri Bazar Bridge',
                'project_type' => 'Bridge',
                'location' => 'Barguna',
                'length_m' => 65,
                'position' => 'Superintending Engineer',
                'project_year' => 2010,
                'description' => 'Oversaw construction activities and ensured quality standards for the 65m Fuljuri Bazar Bridge.',
                'featured' => false,
                'sort_order' => 10,
            ],

            [
                'project_name' => 'Ghopkhali Bridge',
                'project_type' => 'Bridge',
                'location' => 'Betagi, Barguna',
                'length_m' => 95,
                'position' => 'Superintending Engineer',
                'project_year' => 2011,
                'description' => 'Supervised project implementation and construction monitoring of the 95m Ghopkhali Bridge.',
                'featured' => false,
                'sort_order' => 11,
            ],

            [
                'project_name' => 'Chapail Bridge',
                'project_type' => 'Bridge',
                'location' => 'Gopalganj Sadar, Gopalganj',
                'length_m' => 592,
                'position' => 'Superintending Engineer',
                'project_year' => 2014,
                'description' => 'Supervised the construction of the 592m PC Girder Chapail Bridge, ensuring technical compliance and project progress.',
                'featured' => true,
                'sort_order' => 12,
            ],

            [
                'project_name' => 'Shalotia Bridge',
                'project_type' => 'Bridge',
                'location' => 'Gafargaon, Mymensingh',
                'length_m' => 810,
                'position' => 'Superintending Engineer',
                'project_year' => 2013,
                'description' => 'Monitored and supervised the 810m Box Girder Shalotia Bridge project, one of the major bridge projects under LGED.',
                'featured' => true,
                'sort_order' => 13,
            ],

            [
                'project_name' => 'Y-Bridge',
                'project_type' => 'Bridge',
                'location' => 'Bancharampur, Brahmanbaria',
                'length_m' => 771,
                'position' => 'Superintending Engineer',
                'project_year' => 2017,
                'description' => 'Provided high-level supervision and monitoring support for the 771m PC & RCC Y-Bridge project.',
                'featured' => true,
                'sort_order' => 14,
            ],

            [
                'project_name' => 'Bridge over Maya River',
                'project_type' => 'Bridge',
                'location' => 'Charfashion, Bhola',
                'river_name' => 'Maya River',
                'length_m' => 378,
                'position' => 'Superintending Engineer',
                'project_year' => 2015,
                'description' => 'Supervised implementation and construction quality of the 378m PC Girder Bridge over Maya River.',
                'featured' => true,
                'sort_order' => 15,
            ],

        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
