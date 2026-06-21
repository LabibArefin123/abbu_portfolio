<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SupervisionExperience;

class ProfessionalExperienceASeeder extends Seeder
{
    public function run(): void
    {
        SupervisionExperience::create([

            'position' => 'Assistant Engineer / Upazila Engineer',

            'duration' => '10-07-1983 to 22-09-1993',

            'location' => 'Bakergong, Bamna, Mehendigonj, Wazirpur & Madaripur Sadar',

            'description' => 'Served as Assistant Engineer at Bakergong Zila Parishad. Also served as Upazila Engineer at Bamna Upazila Parishad, Mehendigonj Upazila Parishad, Wazirpur Upazila Parishad and Madaripur Sadar Upazila Parishad.',

            'responsibilities' => '
• Supervision and monitoring of road construction works.
• Supervision of bridges and culverts.
• Construction supervision of Union Parishad buildings.
• Construction supervision of Primary School buildings.
• Irrigation canal development and maintenance.
• Preparation of plans and designs.
• Preparation of cost estimates.
• Procurement management of construction works.
• Implementation of decisions taken by Upazila Parishad.

Major Achievement:
• Construction of 180m PC Girder Purlodhi Bridge at Kalkini Upazila, Madaripur District.
• Completion Year: 1993.
',

            'sort_order' => 1

        ]);
    }
}
