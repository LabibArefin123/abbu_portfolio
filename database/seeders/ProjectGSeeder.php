<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectGSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'project_name' => 'Dhaleshwari-2 River Bridge',
                'project_type' => 'Bridge',
                'location' => 'Keraniganj, Dhaka',
                'river_name' => 'Dhaleshwari-2 River',
                'length_m' => 252,
                'position' => 'Design & Supervision Engineer',
                'project_year' => 2019,
                'description' => 'Construction of 252m RCC BOX Girder Bridge with 100m RCC Viaduct over Dhaleshwari-2 River on Dhaka-Mawa Road at Thaghoria–Shaper Bazar via Deber Bazar and Mollar Hat Road under Keraniganj Upazila, Dhaka.',
                'featured' => true,
                'sort_order' => 22,
            ],

            [
                'project_name' => 'Dhaleshwari Branch River Bridge',
                'project_type' => 'Bridge',
                'location' => 'Dhamrai, Dhaka',
                'river_name' => 'Dhaleshwari Branch River',
                'length_m' => 105,
                'position' => 'Design & Supervision Engineer',
                'project_year' => 2019,
                'description' => 'Construction of 105m PSC Girder Bridge over Dhaleshwari Branch River on Kalia–Araria Road under Dhamrai Upazila, Dhaka.',
                'featured' => false,
                'sort_order' => 23,
            ],

            [
                'project_name' => 'Ichamoti River Bridge',
                'project_type' => 'Bridge',
                'location' => 'Nababganj, Dhaka',
                'river_name' => 'Ichamoti River',
                'length_m' => 90,
                'position' => 'Design & Supervision Engineer',
                'project_year' => 2019,
                'description' => 'Construction of 90m PSC Girder Bridge over Ichamoti River on Horishkul Bazaar–Jontrail UP Office–Dhapari Bazar–Gobindopur–Bangla Bazaar Road under Nababganj Upazila, Dhaka.',
                'featured' => false,
                'sort_order' => 24,
            ],

            [
                'project_name' => 'Bongshi River Bridge',
                'project_type' => 'Bridge',
                'location' => 'Savar, Dhaka',
                'river_name' => 'Bongshi River',
                'length_m' => 250,
                'position' => 'Design & Supervision Engineer',
                'project_year' => 2020,
                'description' => 'Construction of 250m PSC Girder Bridge over Bongshi River on Dhaka-Aricha 22 Mile Shimulia GC via Nolam Road under Savar Upazila, Dhaka.',
                'featured' => true,
                'sort_order' => 25,
            ],

            [
                'project_name' => 'Balu River Bridge',
                'project_type' => 'Bridge',
                'location' => 'Rupganj, Narayanganj',
                'river_name' => 'Balu River',
                'length_m' => 320,
                'position' => 'Design & Supervision Engineer',
                'project_year' => 2020,
                'description' => 'Construction of 320m PSC Girder Bridge over Balu River on Porshi GC–Rupganj–Kayetpara–Demra RHD Road at Isapura under Rupganj Upazila, Narayanganj.',
                'featured' => true,
                'sort_order' => 26,
            ],

            [
                'project_name' => 'Chitkabari–Charpouli Bridge',
                'project_type' => 'Bridge',
                'location' => 'Tangail Sadar, Tangail',
                'river_name' => 'Dhaleshwari Branch River',
                'length_m' => 81,
                'position' => 'Design & Supervision Engineer',
                'project_year' => 2020,
                'description' => 'Construction of 81m PSC Girder Bridge over Dhaleshwari Branch River on Chitkabari–Charpouli Road under Tangail Sadar Upazila.',
                'featured' => false,
                'sort_order' => 27,
            ],

            [
                'project_name' => 'Jinai Branch River Bridge',
                'project_type' => 'Bridge',
                'location' => 'Tangail Sadar, Tangail',
                'river_name' => 'Jinai Branch River',
                'length_m' => 96,
                'position' => 'Design & Supervision Engineer',
                'project_year' => 2021,
                'description' => 'Construction of 96m PSC Girder Bridge with 30m RCC Viaduct over Jinai Branch River on Kharjana–Katuli Road under Tangail Sadar Upazila.',
                'featured' => false,
                'sort_order' => 28,
            ],

            [
                'project_name' => 'Louhajong River Bridge',
                'project_type' => 'Bridge',
                'location' => 'Tangail Sadar, Tangail',
                'river_name' => 'Louhajong River',
                'length_m' => 296,
                'position' => 'Design & Supervision Engineer',
                'project_year' => 2021,
                'description' => 'Construction of 296m PSC Girder Bridge over Louhajong River on Niogijoair–Ranagacha Ferry Ghat via CCP Budh Road under Tangail Sadar Upazila.',
                'featured' => true,
                'sort_order' => 29,
            ],

            [
                'project_name' => 'Zogarchar River Bridge',
                'project_type' => 'Bridge',
                'location' => 'Kalihati, Tangail',
                'river_name' => 'Zogarchar River',
                'length_m' => 264,
                'position' => 'Design & Supervision Engineer',
                'project_year' => 2021,
                'description' => 'Construction of 264m PSC Girder Bridge over Zogarchar River on Alanga GC–Zogarchar JBA Road via Durgapur UP Road under Kalihati Upazila.',
                'featured' => true,
                'sort_order' => 30,
            ],

            [
                'project_name' => 'Jhinai (Pungli) River Bridge',
                'project_type' => 'Bridge',
                'location' => 'Basail, Tangail',
                'river_name' => 'Jhinai (Pungli) River',
                'length_m' => 282,
                'position' => 'Design & Supervision Engineer',
                'project_year' => 2021,
                'description' => 'Construction of 282m PSC Girder Bridge over Jhinai (Pungli) River on Karatia–Jashihati via Dawli Road under Basail Upazila, Tangail.',
                'featured' => true,
                'sort_order' => 31,
            ],

        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
