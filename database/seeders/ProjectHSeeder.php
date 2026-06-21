<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectHSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [

            [
                'project_name' => 'Kashil UP Office–Bilpara Hat Bridge',
                'project_type' => 'Bridge',
                'location' => 'Basail, Tangail',
                'river_name' => 'Jhinai (Pungli) River',
                'length_m' => 270,
                'position' => 'Design & Supervision Engineer',
                'project_year' => 2021,
                'description' => 'Construction of 270m PSC Girder Bridge over Jhinai (Pungli) River on Kashil UP Office–Bilpara Hat via Kashil High School Road under Basail Upazila, Tangail.',
                'featured' => true,
                'sort_order' => 32,
            ],

            [
                'project_name' => 'Natiapara–Kanchanpur Bridge',
                'project_type' => 'Bridge',
                'location' => 'Basail, Tangail',
                'river_name' => 'Jhinai (Pungli) River',
                'length_m' => 256,
                'position' => 'Design & Supervision Engineer',
                'project_year' => 2021,
                'description' => 'Construction of 256m PSC Girder Bridge over Jhinai (Pungli) River on Natiapara NHW–Kanchanpur GC via Kazirapara Road under Basail Upazila, Tangail.',
                'featured' => false,
                'sort_order' => 33,
            ],

            [
                'project_name' => 'Toak River Bridge',
                'project_type' => 'Bridge',
                'location' => 'Ghatail, Tangail',
                'river_name' => 'Toak River',
                'length_m' => 81,
                'position' => 'Design & Supervision Engineer',
                'project_year' => 2021,
                'description' => 'Construction of 81m PSC Girder Bridge over Toak River on Baniapara–Baichail Road under Ghatail Upazila, Tangail.',
                'featured' => false,
                'sort_order' => 34,
            ],

            [
                'project_name' => 'Bangoj Krishnanagar Bridge',
                'project_type' => 'Bridge',
                'location' => 'Akhaura, Brahmanbaria',
                'length_m' => 88,
                'position' => 'Design & Supervision Engineer',
                'project_year' => 2021,
                'description' => 'Construction of 88m RCC & Arch Girder Bridge with 120m RCC Viaduct on Bangoj Krishnanagar Road under Akhaura Upazila, Brahmanbaria.',
                'featured' => true,
                'sort_order' => 35,
            ],

            [
                'project_name' => 'Mathavanga River Bridge',
                'project_type' => 'Bridge',
                'location' => 'Damurhuda, Chuadanga',
                'river_name' => 'Mathavanga River',
                'length_m' => 96,
                'position' => 'Design & Supervision Engineer',
                'project_year' => 2022,
                'description' => 'Construction of 96m PSC Girder Bridge over Mathavanga River on Damurhuda–Karpashdanga Road under Damurhuda Upazila, Chuadanga.',
                'featured' => false,
                'sort_order' => 36,
            ],

            [
                'project_name' => 'Calibanga Bazar–Islampur Bridge',
                'project_type' => 'Bridge',
                'location' => 'Meghna, Cumilla',
                'river_name' => 'Meghna Branch River',
                'length_m' => 495,
                'position' => 'Design & Supervision Engineer',
                'project_year' => 2022,
                'description' => 'Construction of 495m PSC Girder Bridge with 144m RCC Viaduct over Meghna Branch River on Calibanga Bazar–Islampur Road under Meghna Upazila, Cumilla.',
                'featured' => true,
                'sort_order' => 37,
            ],

            [
                'project_name' => 'Shantir Bazar–Pipodda Bridge',
                'project_type' => 'Bridge',
                'location' => 'Nangalkot, Cumilla',
                'river_name' => 'Dakatia River',
                'length_m' => 81,
                'position' => 'Design & Supervision Engineer',
                'project_year' => 2022,
                'description' => 'Construction of 81m PSC Girder Bridge over Dakatia River on Shantir Bazar–Pipodda Road under Nangalkot Upazila, Cumilla.',
                'featured' => false,
                'sort_order' => 38,
            ],

            [
                'project_name' => 'Dhalua Bazar–Dorkar Bridge',
                'project_type' => 'Bridge',
                'location' => 'Nangalkot, Cumilla',
                'river_name' => 'Dakatia River',
                'length_m' => 150,
                'position' => 'Design & Supervision Engineer',
                'project_year' => 2022,
                'description' => 'Construction of 150m PSC Girder Bridge over Dakatia River on Dhalua Bazar GC–Dorkar Road under Nangalkot Upazila, Cumilla.',
                'featured' => false,
                'sort_order' => 39,
            ],

            [
                'project_name' => 'Araila–Haripur–Rampur Bridge',
                'project_type' => 'Bridge',
                'location' => 'Meghna, Cumilla',
                'river_name' => 'Meghna Branch River',
                'length_m' => 675,
                'position' => 'Design & Supervision Engineer',
                'project_year' => 2023,
                'description' => 'Construction of 675m PSC Girder Bridge over Meghna Branch River on Araila (Muddarkandi) Ghat–Haripur–Rampur Road under Meghna Upazila, Cumilla.',
                'featured' => true,
                'sort_order' => 40,
            ],

            [
                'project_name' => 'Boraia Kandi–Tulatuli Bazar Bridge',
                'project_type' => 'Bridge',
                'location' => 'Meghna, Cumilla',
                'river_name' => 'Meghna Branch River',
                'length_m' => 472,
                'position' => 'Design & Supervision Engineer',
                'project_year' => 2023,
                'description' => 'Construction of 472m PSC Girder Bridge over Meghna Branch River on Boraia Kandi–Tulatuli Bazar Road under Meghna Upazila, Cumilla.',
                'featured' => true,
                'sort_order' => 41,
            ],

        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
