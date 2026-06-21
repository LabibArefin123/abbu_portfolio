<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SupervisionExperience;

class ProfessionalExperienceDSeeder extends Seeder
{
    public function run(): void
    {
        SupervisionExperience::create([

            'position' => 'Project Director',

            'duration' => '01-01-2005 to 16-08-2011',

            'location' => 'LGED Various Development Projects',

            'description' => '
Served as Project Director (Executive Engineer) in different projects including:

• Rehabilitation of 2004 Flood Damage Urban Physical Infrastructure Development Project Part-A
• Upazila Town Infrastructure Development Project
• Important Urban Infrastructure Development Project

Responsible for overall planning, implementation, monitoring and financial management of large infrastructure development projects.
',

            'responsibilities' => '
• Preparation of Development Project Proposal (DPP).
• Preparation of Annual Budget.
• Preparation of Annual Work Plan.
• Preparation of Annual Procurement Plan.
• Review of Design, Drawings and Cost Estimates.
• Approval of Schemes.
• Contract Management.
• Supervision and Monitoring of Road Construction Works.
• Supervision and Monitoring of Bridge Construction Works.
• Master Plan preparation for Upazila level Pourashavas.
• Liaison with Ministries.
• Liaison with Planning Commission.
• Liaison with Economic Relations Division (ERD).
• Liaison with IMED.
• Liaison with BRM-ADB.
• Fund Release from respective Ministries.
• Project Financial Management.
• Project Administration.
',

            'sort_order' => 4

        ]);
    }
}
