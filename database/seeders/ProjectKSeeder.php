<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectKSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [

            [
                'project_name' => 'Ershadnagar Hat–Demra UP Office Bridge',
                'project_type' => 'Bridge',
                'location' => 'Faridpur, Pabna',
                'river_name' => 'Boral River',
                'length_m' => 280,
                'position' => 'Design & Supervision Engineer',
                'project_year' => 2025,
                'description' => 'Construction of 280m PSC Girder Bridge over Boral River on Ershadnagar Hat–Demra UP Office Road under Faridpur Upazila, Pabna.',
                'featured' => false,
                'sort_order' => 62,
            ],

            [
                'project_name' => 'Haragach–Nazirdha Bridge',
                'project_type' => 'Bridge',
                'location' => 'Kaunia, Rangpur',
                'river_name' => 'Mora Tista River',
                'length_m' => 60,
                'position' => 'Design & Supervision Engineer',
                'project_year' => 2025,
                'description' => 'Construction of 60m PSC Girder Bridge over Mora Tista River on Haragach UP Office–Nazirdha Road under Kaunia Upazila, Rangpur.',
                'featured' => false,
                'sort_order' => 63,
            ],

            [
                'project_name' => 'Nundaha Ghat Bridge',
                'project_type' => 'Bridge',
                'location' => 'Pirganj, Rangpur',
                'river_name' => 'Kartoa River',
                'length_m' => 301,
                'position' => 'Design & Supervision Engineer',
                'project_year' => 2025,
                'description' => 'Construction of 301m PSC Girder Bridge over Kartoa River at Nundaha Ghat on Chatra GC–Gillabari Ghat Road under Pirganj Upazila, Rangpur.',
                'featured' => true,
                'sort_order' => 64,
            ],

            [
                'project_name' => 'Joyntapur Ghat–Gopinathpur Bridge',
                'project_type' => 'Bridge',
                'location' => 'Pirganj, Rangpur',
                'river_name' => 'Kartoa River',
                'length_m' => 294,
                'position' => 'Design & Supervision Engineer',
                'project_year' => 2025,
                'description' => 'Construction of 294m PSC Girder Bridge over Kartoa River on Joyntapur Ghat–Gopinathpur Road under Pirganj Upazila, Rangpur.',
                'featured' => false,
                'sort_order' => 65,
            ],

            [
                'project_name' => 'Gopalganj Ghat Bridge',
                'project_type' => 'Bridge',
                'location' => 'Mithapukur, Rangpur',
                'river_name' => 'Ghaghat River',
                'length_m' => 96,
                'position' => 'Design & Supervision Engineer',
                'project_year' => 2025,
                'description' => 'Construction of 96m PSC Girder Bridge over Ghaghat River at Gopalganj Ghat on Jaiger Hat–Pirgasa Road under Mithapukur Upazila, Rangpur.',
                'featured' => false,
                'sort_order' => 66,
            ],

            [
                'project_name' => 'Jadukuta River Bridge',
                'project_type' => 'Bridge',
                'location' => 'Tahirpur, Sunamganj',
                'river_name' => 'Jadukuta River',
                'length_m' => 750,
                'position' => 'Design & Supervision Engineer',
                'project_year' => 2025,
                'description' => 'Construction of 750m PSC Girder Bridge over Jadukuta River on Dharmapasha–Sunamganj Road under Tahirpur Upazila, Sunamganj.',
                'featured' => true,
                'sort_order' => 67,
            ],

            [
                'project_name' => 'Takarghat–Sunamganj Bridge',
                'project_type' => 'Bridge',
                'location' => 'Tahirpur, Sunamganj',
                'river_name' => 'Patlai River',
                'length_m' => 450,
                'position' => 'Design & Supervision Engineer',
                'project_year' => 2025,
                'description' => 'Construction of 450m PSC Girder Bridge over Patlai River on Takarghat–Sunamganj Road under Tahirpur Upazila, Sunamganj.',
                'featured' => true,
                'sort_order' => 68,
            ],

            [
                'project_name' => 'Islampur UP–Chhatak Bridge',
                'project_type' => 'Bridge',
                'location' => 'Chhatak, Sunamganj',
                'river_name' => 'Pian River',
                'length_m' => 470,
                'position' => 'Design & Supervision Engineer',
                'project_year' => 2025,
                'description' => 'Construction of 470m PSC Girder Bridge over Pian River on Islampur UP–Chhatak Road under Chhatak Upazila, Sunamganj.',
                'featured' => true,
                'sort_order' => 69,
            ],

            [
                'project_name' => 'Dharmapasha–Sunamganj Bridge (Ubdha Khali)',
                'project_type' => 'Bridge',
                'location' => 'Dharmapasha, Sunamganj',
                'river_name' => 'Ubdha Khali River',
                'length_m' => 320,
                'position' => 'Design & Supervision Engineer',
                'project_year' => 2025,
                'description' => 'Construction of 320m PSC Girder Bridge over Ubdha Khali River on Dharmapasha–Sunamganj Road under Dharmapasha Upazila, Sunamganj.',
                'featured' => false,
                'sort_order' => 70,
            ],

            [
                'project_name' => 'Dharmapasha–Sunamganj Bridge (Sumsachsuri)',
                'project_type' => 'Bridge',
                'location' => 'Dharmapasha, Sunamganj',
                'river_name' => 'Sumsachsuri River',
                'length_m' => 310,
                'position' => 'Design & Supervision Engineer',
                'project_year' => 2025,
                'description' => 'Construction of 310m PSC Girder Bridge over Sumsachsuri River on Dharmapasha–Sunamganj Road under Dharmapasha Upazila, Sunamganj.',
                'featured' => false,
                'sort_order' => 71,
            ],

            [
                'project_name' => 'Barahar–Tatulia Hat Bridge',
                'project_type' => 'Bridge',
                'location' => 'Ullahpara, Sirajganj',
                'river_name' => 'Fulzory River',
                'length_m' => 294,
                'position' => 'Design & Supervision Engineer',
                'project_year' => 2025,
                'description' => 'Construction of 294m PSC Girder Bridge over Fulzory River on Barahar UP Office–Tatulia Hat Road under Ullahpara Upazila, Sirajganj.',
                'featured' => false,
                'sort_order' => 72,
            ],

            [
                'project_name' => 'Magura Bazar–Islamkathi Bridge',
                'project_type' => 'Bridge',
                'location' => 'Tala, Satkhira',
                'river_name' => 'Kopotakho River',
                'length_m' => 80,
                'position' => 'Design & Supervision Engineer',
                'project_year' => 2025,
                'description' => 'Construction of 80m PSC & RCC Girder Bridge with Viaduct over Kopotakho River on Magura Bazar–Islamkathi Road under Tala Upazila, Satkhira.',
                'featured' => false,
                'sort_order' => 73,
            ],

        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
