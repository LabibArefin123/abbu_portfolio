<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SupervisionExperience;

class ProfessionalExperienceESeeder extends Seeder
{
    public function run(): void
    {
        SupervisionExperience::create([

            'position' => 'Superintending Engineer',

            'duration' => '17-08-2011 to 25-11-2015',

            'location' => 'Barishal & LGED Headquarters',

            'description' => '
Served as Superintending Engineer (Current Charge) from 17-08-2011 to 16-06-2012.

Joined as Superintending Engineer on 17-06-2012.

Worked as Superintending Engineer at Barishal and later as Superintending Engineer (Project Monitoring & Evaluation) at LGED Headquarters.
',

            'responsibilities' => '
• Preparation of Annual Development Programme (ADP).
• Preparation of Revised Annual Development Programme (RADP).
• Preparation of Work Plans.
• Preparation of ADP Reports.
• Preparation of IMED Reports.
• Preparation of Procurement Reports.
• Project Aid Disbursement.
• Project Aid Reimbursement.
• Providing information for Parliamentary Questions.
• Compilation of Inspection Reports.
• Compilation of Scheme-wise Progress Reports.
• Compilation of Newspaper Reports regarding LGED activities.
• Technical Guidance to Project Directors.
• Monitoring of Project Implementation.
• Preparation of LGED Annual Reports.
• Coordination with Chief Engineer.
• Coordination with Ministry.
• Coordination with Planning Commission.
• Coordination with ERD.
• Coordination with IMED.
• Coordination with Programming Division.
• Other responsibilities assigned by higher authorities.

Major Bridge Supervision Projects:

1. 160m Horinbaria Bridge, Taltoli, Barguna (2010-2011)
2. 120m Badnikhali Bridge, Betagi, Barguna (2014-2015)
3. 65m Fuljuri Bazar Bridge, Barguna (2009-2010)
4. 95m Ghopkhali Bridge, Betagi, Barguna (2010-2011)
5. 592m PC Girder Chapail Bridge, Gopalganj Sadar (2014)
6. 810m Box Girder Shalotia Bridge, Gafargaon, Mymensingh (2013)
7. 771m PC & RCC Y-Bridge, Bancharampur, Brahmanbaria (2017)
8. 378m PC Girder Bridge over Maya River, Charfashion, Bhola (2015)
',

            'sort_order' => 5

        ]);
    }
}
