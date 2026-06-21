<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SupervisionExperience;

class ProfessionalExperienceFSeeder extends Seeder
{
    public function run(): void
    {
        SupervisionExperience::create([

            'position' => 'Additional Chief Engineer (Current Charge) / Additional Chief Engineer',

            'duration' => '26-11-2015 to 29-01-2018',

            'location' => 'LGED Headquarters',

            'description' => '
Served as:

• Additional Chief Engineer (Current Charge)
  From: 26-11-2015 to 28-06-2016

• Additional Chief Engineer
  From: 29-06-2016 to 29-01-2018

Worked as Additional Chief Engineer (Urban Management) at LGED Headquarters.

Responsible for Urban Management, Procurement, Project Monitoring & Evaluation and Technical Support to various Ministries.
',

            'responsibilities' => '
• Preparation of Annual Development Programme (ADP).
• Preparation of Revised Annual Development Programme (RADP).
• Technical Guidance to Project Directors.
• Monitoring Project Implementation.
• Procurement Monitoring Coordinator of LGED.
• Procurement Reform Project (PPRP-2 AF) Coordination.
• Technical Support to Ministries.
• Technical Support to Planning Commission.
• Technical Support to ERD.
• Technical Support to IMED.
• Technical Support to Programming Division.
• Responsibilities assigned by Chief Engineer and Ministry.

Major Infrastructure Supervision Projects:

1. 2.25 km Tejgaon – Holy Family Hospital Flyover via Sonargaon Hotel (Completed 2016)

2. 6.00 km Rampura-Malibag-Mouchak-Rajarbag-Bangla Motor Flyover (Completed 2017)

3. 350.4m PC Girder Bridge over Sultaner Kheya Ghat, Maya River, Charfashion, Bhola (Completed 2018)

4. 432m Bridge at Muladi Upazila, Barishal (Completed 2018)

5. 440m PC Girder Bridge at Bakerganj Upazila, Barishal (Completed 2018)

6. Two Large Bridges at Islampur Upazila, Jamalpur District.
',

            'sort_order' => 6

        ]);
    }
}
