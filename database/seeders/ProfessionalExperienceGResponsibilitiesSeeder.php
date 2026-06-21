<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SupervisionExperience;

class ProfessionalExperienceGResponsibilitiesSeeder extends Seeder
{
    public function run(): void
    {
        $experience = SupervisionExperience::where(
            'position',
            'Design & Supervision Engineer (Individual Consultant)'
        )->first();

        if (!$experience) {
            return;
        }

        $experience->update([
            'responsibilities' => '
Responsibilities:

a) Review all project documents like digital topographical survey, sub soil investigation report, land acquisition, hydrological & morphological study report, structural design, drawings, estimates, specifications and contract documents.

b) Assist Field Engineers and Upazila Engineers for smooth implementation and quality control.

c) Check correctness of TBM levels and fix levels of piers, soffit and related structures.

d) Verify sub-soil investigation and survey works used for design.

e) Check cast-in-situ pile boring works, bentonite usage, reinforcement placement and concrete consumption.

f) Collect random construction material samples and ensure compliance with specifications.

g) Collect concrete samples from batches and perform testing in LGED and site laboratories.

h) Collect reinforcement bars, post-tension cables and bearing pads for testing at BUET.

i) Supervise all casting works and support field engineers.

j) Collect market rates of construction materials and prepare variation analysis reports.

k) Prepare supervision plans, construction flowcharts, monitoring systems and approval procedures.

l) Supervise reinforcement fabrication, formwork, scaffolding and concrete casting.

m) Supervise post-tensioning and girder shifting works.

n) Prepare detailed estimates, BOQ, bar bending schedules, bridge estimates, culvert estimates, pavement works and building works.

o) Analysis of item rates and engineering cost schedules.
'
        ]);
    }
}
