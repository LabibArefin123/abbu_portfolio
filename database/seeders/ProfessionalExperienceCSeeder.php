<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SupervisionExperience;

class ProfessionalExperienceCSeeder extends Seeder
{
    public function run(): void
    {
        SupervisionExperience::create([

            'position' => 'Deputy Project Director',

            'duration' => '03-03-2003 to 31-12-2004',

            'location' => 'STIDP-2 & UGIIP-1 Projects',

            'description' => '
Served as Deputy Project Director under:

• STIDP-2
• UGIIP-1

Both projects were funded by ADB and Government of Bangladesh (GOB).
',

            'responsibilities' => '
• Assisted in preparation of Annual Procurement Plans.
• Contract Management.
• Supervision of Road Construction Projects.
• Supervision of Drain Construction Projects.
• Supervision of Bridge and Culvert Construction.
• Supervision of Kitchen Market Development Projects.
• Supervision of Bus Terminal Development Projects.
• Monitoring of all project activities.
• Assisted Project Director in administrative activities.
• Performed special assignments assigned by Project Director.
• Executed responsibilities assigned by departmental higher authorities.
',

            'sort_order' => 3

        ]);
    }
}
