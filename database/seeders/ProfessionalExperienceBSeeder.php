<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SupervisionExperience;

class ProfessionalExperienceBSeeder extends Seeder
{
    public function run(): void
    {
        SupervisionExperience::create([

            'position' => 'Executive Engineer',

            'duration' => '23-09-1993 to 02-03-2003',

            'location' => 'Jhalokathi, Gopalganj, Bhola, Jessore & Barisal',

            'description' => '
Served as Executive Engineer (Current Charge) from 23-09-1993 to 23-01-2002 and formally joined as Executive Engineer on 24-01-2002.

Worked as Executive Engineer at RDP-13 and in the districts of Jhalokathi, Gopalganj, Bhola, Jessore and Barisal.
',

            'responsibilities' => '
• Preparation of Annual Procurement Plans.
• Contract Management.
• Supervision of Road Schemes.
• Supervision of Drainage Schemes.
• Supervision of Bridge and Culvert Construction.
• Supervision of Building Construction Projects.
• Supervision of Water Resource Development Schemes.
• Monitoring of all ongoing development works.
• Management of District Quality Control Laboratory.
• Management of LGED construction equipment.
• Conducted on-the-job training for technical staff.
• Conducted classroom training for Upazila technical personnel.

Major Achievement:
• Supervised construction of 81m PC Girder Bridge over Bhola Khal.
• Location: Bhola Sadar, Bhola District.
• Completion Year: 2000.
',

            'sort_order' => 2

        ]);
    }
}
