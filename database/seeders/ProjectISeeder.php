<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectISeeder extends Seeder
{
    public function run(): void
    {
        $projects = [

            [
                'project_name' => 'Fulbari H/Q–Sujapur Bridge',
                'project_type' => 'Bridge',
                'location' => 'Fulbari, Dinajpur',
                'river_name' => 'Small Jamuna River',
                'length_m' => 75,
                'position' => 'Design & Supervision Engineer',
                'project_year' => 2023,
                'description' => 'Construction of 75m RCC Girder Bridge over Small Jamuna River on Fulbari H/Q–Sujapur Road under Fulbari Upazila, Dinajpur.',
                'featured' => false,
                'sort_order' => 42,
            ],

            [
                'project_name' => 'Joinagar Bazar–Dowalatpur Bridge',
                'project_type' => 'Bridge',
                'location' => 'Fulbari, Dinajpur',
                'river_name' => 'Small Jamuna River',
                'length_m' => 96,
                'position' => 'Design & Supervision Engineer',
                'project_year' => 2023,
                'description' => 'Construction of 96m PSC Girder Bridge over Small Jamuna River on Joinagar Bazar–Dowalatpur Road under Fulbari Upazila, Dinajpur.',
                'featured' => false,
                'sort_order' => 43,
            ],

            [
                'project_name' => 'Kharkati Bazar–Vhait UP Office Bridge',
                'project_type' => 'Bridge',
                'location' => 'Chirirbandar, Dinajpur',
                'river_name' => 'Atrai River',
                'length_m' => 175,
                'position' => 'Design & Supervision Engineer',
                'project_year' => 2023,
                'description' => 'Construction of 175m PSC Girder Bridge over Atrai River on Kharkati Bazar–Vhait UP Office Road under Chirirbandar Upazila, Dinajpur.',
                'featured' => false,
                'sort_order' => 44,
            ],

            [
                'project_name' => 'Sujalpur–Pakerhat Bridge',
                'project_type' => 'Bridge',
                'location' => 'Birganj, Dinajpur',
                'river_name' => 'Atrai River',
                'length_m' => 450,
                'position' => 'Design & Supervision Engineer',
                'project_year' => 2023,
                'description' => 'Construction of 450m PSC Girder Bridge over Atrai River on Sujalpur UP Office–Pakerhat GC Road under Birganj Upazila, Dinajpur.',
                'featured' => true,
                'sort_order' => 45,
            ],

            [
                'project_name' => 'Buzruk Basantopur–Ghughudanga Bridge',
                'project_type' => 'Bridge',
                'location' => 'Biral, Dinajpur',
                'river_name' => 'Punorvoba River',
                'length_m' => 250,
                'position' => 'Design & Supervision Engineer',
                'project_year' => 2023,
                'description' => 'Construction of 250m PSC Girder Bridge over Punorvoba River on Buzruk Basantopur Ghat–Ghughudanga Road under Biral Upazila, Dinajpur.',
                'featured' => false,
                'sort_order' => 46,
            ],

            [
                'project_name' => 'Guthuma–Parshuram Bridge',
                'project_type' => 'Bridge',
                'location' => 'Parshuram, Feni',
                'river_name' => 'Mohua River',
                'length_m' => 56,
                'position' => 'Design & Supervision Engineer',
                'project_year' => 2024,
                'description' => 'Construction of 56m RCC Girder Bridge over Mohua River on Guthuma–Parshuram Road under Parshuram Upazila, Feni.',
                'featured' => false,
                'sort_order' => 47,
            ],

            [
                'project_name' => 'Majbari–Radhagonj Bridge',
                'project_type' => 'Bridge',
                'location' => 'Kotwalipara, Gopalganj',
                'river_name' => 'Kushla Khal',
                'length_m' => 24,
                'position' => 'Design & Supervision Engineer',
                'project_year' => 2024,
                'description' => 'Construction of 24m RCC Girder Bridge over Kushla Khal on Majbari R&H–Radhagonj Bazar Road under Kotwalipara Upazila, Gopalganj.',
                'featured' => false,
                'sort_order' => 48,
            ],

            [
                'project_name' => 'Modhumoti River Bridge',
                'project_type' => 'Bridge',
                'location' => 'Sadar, Gopalganj',
                'river_name' => 'Modhumoti River',
                'length_m' => 788,
                'position' => 'Design & Supervision Engineer',
                'project_year' => 2024,
                'description' => 'Construction of 788m PSC Girder Bridge over Modhumoti River on Gopinathpur–Ghaghadolia Road under Sadar Upazila, Gopalganj.',
                'featured' => true,
                'sort_order' => 49,
            ],

            [
                'project_name' => 'Goddimari Union Bridge',
                'project_type' => 'Bridge',
                'location' => 'Hatibandha, Lalmonirhat',
                'river_name' => 'Saniajan River',
                'length_m' => 220,
                'position' => 'Design & Supervision Engineer',
                'project_year' => 2024,
                'description' => 'Construction of 220m PSC Girder Bridge over Saniajan River on Goddimari Union Road under Hatibandha Upazila, Lalmonirhat.',
                'featured' => false,
                'sort_order' => 50,
            ],

            [
                'project_name' => 'Shalpi Bazar–Chakbarkot Bridge',
                'project_type' => 'Bridge',
                'location' => 'Dhamoirhat, Naogaon',
                'river_name' => 'Sree River',
                'length_m' => 40,
                'position' => 'Design & Supervision Engineer',
                'project_year' => 2024,
                'description' => 'Construction of 40m PSC Girder Bridge over Sree River on Shalpi Bazar–Chakbarkot UP Road under Dhamoirhat Upazila, Naogaon.',
                'featured' => false,
                'sort_order' => 51,
            ],

        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
