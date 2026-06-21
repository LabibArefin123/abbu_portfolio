<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SupervisionExperience;

class ProfessionalExperienceGSeeder extends Seeder
{
    public function run(): void
    {
        SupervisionExperience::updateOrCreate(
            [
                'position' => 'Design & Supervision Engineer (Individual Consultant)',
            ],
            [
                'duration' => '04-04-2018 to 30-06-2025',

                'location' => 'LGED - CIBRR Project',

                'description' => '
Design & Supervision Engineer (Individual Consultant)
From: 04-04-2018 to 30-06-2025

Worked as Design & Supervision Engineer for the Construction of Important Bridges on Rural Roads (CIBRR) under LGED.

Major Bridge Projects (Part-1)

• 252m RCC BOX Girder Bridge with 100m RCC Viaduct over Dhaleshwari-2 River, Keraniganj, Dhaka.

• 105m PSC Girder Bridge over Dhaleshwari Branch River, Dhamrai, Dhaka.

• 90m PSC Girder Bridge over Ichamoti River, Nababganj, Dhaka.

• 250m PSC Girder Bridge over Bongshi River, Savar, Dhaka.

• 320m PSC Girder Bridge over Balu River, Rupganj, Narayanganj.

• 81m PSC Girder Bridge over Dhaleshwari Branch River, Tangail.

• 96m PSC Girder Bridge with 30m RCC Viaduct over Jinai Branch River, Tangail.

• 296m PSC Girder Bridge over Louhajong River, Tangail.

• 264m PSC Girder Bridge over Zogarchar River, Tangail.

• 282m PSC Girder Bridge over Jhinai (Pungli) River, Tangail.

• 270m PSC Girder Bridge over Jhinai (Pungli) River, Tangail.

• 256m PSC Girder Bridge over Jhinai (Pungli) River, Tangail.

• 81m PSC Girder Bridge over Toak River, Tangail.

• 88m RCC & Arch Girder Bridge including 120m RCC Viaduct, Akhaura, Brahmanbaria.

• 96m PSC Girder Bridge over Mathavanga River, Chuadanga.

• 495m PSC Girder Bridge with 144m RCC Viaduct over Meghna Branch River, Cumilla.

• 81m PSC Girder Bridge over Dakatia River, Cumilla.

• 150m PSC Girder Bridge over Dakatia River, Cumilla.

• 675m PSC Girder Bridge over Meghna Branch River, Cumilla.

• 472m PSC Girder Bridge over Meghna Branch River, Cumilla.
',

                'sort_order' => 7,
            ]
        );
    }
}
