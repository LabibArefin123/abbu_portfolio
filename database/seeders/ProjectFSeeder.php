<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectFSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [

            [
                'project_name' => 'Tejgaon – Holy Family Hospital Flyover',
                'project_type' => 'Flyover',
                'location' => 'Dhaka',
                'length_m' => 2250,
                'position' => 'Additional Chief Engineer',
                'project_year' => 2016,
                'description' => 'Provided high-level technical supervision, monitoring and implementation support for the 2.25 km flyover connecting Tejgaon, Sonargaon Hotel and Holy Family Hospital areas.',
                'featured' => true,
                'sort_order' => 16,
            ],

            [
                'project_name' => 'Rampura–Malibag–Mouchak–Rajarbag–Bangla Motor Flyover',
                'project_type' => 'Flyover',
                'location' => 'Dhaka',
                'length_m' => 6000,
                'position' => 'Additional Chief Engineer',
                'project_year' => 2017,
                'description' => 'Supervised and monitored implementation of the 6.00 km urban flyover project aimed at reducing traffic congestion in central Dhaka.',
                'featured' => true,
                'sort_order' => 17,
            ],

            [
                'project_name' => 'Sultaner Kheya Ghat Bridge',
                'project_type' => 'Bridge',
                'location' => 'Charfashion, Bhola',
                'river_name' => 'Maya River',
                'length_m' => 350.4,
                'position' => 'Additional Chief Engineer',
                'project_year' => 2018,
                'description' => 'Provided technical oversight and project monitoring for the 350.4m PC Girder Bridge over Maya River at Sultaner Kheya Ghat.',
                'featured' => true,
                'sort_order' => 18,
            ],

            [
                'project_name' => 'Muladi Bridge',
                'project_type' => 'Bridge',
                'location' => 'Muladi Upazila, Barishal',
                'length_m' => 432,
                'position' => 'Additional Chief Engineer',
                'project_year' => 2018,
                'description' => 'Monitored implementation and ensured quality control for the 432m bridge project at Muladi Upazila.',
                'featured' => true,
                'sort_order' => 19,
            ],

            [
                'project_name' => 'Bakerganj PC Girder Bridge',
                'project_type' => 'Bridge',
                'location' => 'Bakerganj Upazila, Barishal',
                'length_m' => 440,
                'position' => 'Additional Chief Engineer',
                'project_year' => 2018,
                'description' => 'Provided technical supervision and project monitoring support for the 440m PC Girder Bridge at Bakerganj Upazila.',
                'featured' => true,
                'sort_order' => 20,
            ],

            [
                'project_name' => 'Large Bridge Development Projects',
                'project_type' => 'Bridge',
                'location' => 'Islampur Upazila, Jamalpur',
                'position' => 'Additional Chief Engineer',
                'project_year' => 2018,
                'description' => 'Supervised implementation and monitoring of two major bridge construction projects in Islampur Upazila under LGED development programs.',
                'featured' => true,
                'sort_order' => 21,
            ],

        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
