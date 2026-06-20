<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Training;

class TrainingSeeder extends Seeder
{
    public function run(): void
    {
        $trainings = [

            [
                'title' => 'Thana Administration Reorganization',
                'duration' => '19 October - 1 November 1983',
                'location' => 'Rural Development Academy, Bogra',
                'type' => 'Bangladesh',
            ],

            [
                'title' => 'ToT Course',
                'duration' => '1985-1986',
                'location' => 'LGED Training Unit, Dhaka',
                'type' => 'Bangladesh',
            ],

            [
                'title' => 'Special Foundation Training',
                'duration' => '15 December 1990 - 12 February 1991',
                'location' => 'Rural Development Academy, Comilla',
                'type' => 'Bangladesh',
            ],

            [
                'title' => 'Satellite Imagery Interpretation and Remote Sensing',
                'duration' => '18-30 April 1992',
                'location' => 'SPARRSO, Dhaka',
                'type' => 'Bangladesh',
            ],

            [
                'title' => 'Gender Planning For Development',
                'duration' => 'September 1994',
                'location' => 'RESP, Faridpur',
                'type' => 'Bangladesh',
            ],

            [
                'title' => 'MS Word 6 and Excel 5',
                'duration' => '20-24 August 1995',
                'location' => 'RESP, Faridpur',
                'type' => 'Bangladesh',
            ],

            [
                'title' => 'Results-Based Management and Sector Approach',
                'duration' => '17-20 November 2002',
                'location' => 'ADB Resident Mission, Dhaka',
                'type' => 'Bangladesh',
            ],

            [
                'title' => 'Training Skill Development',
                'duration' => '26-29 May 2003',
                'location' => 'ITN Centre, BUET',
                'type' => 'Bangladesh',
            ],

            [
                'title' => 'Project Management',
                'duration' => '13-18 September 2003',
                'location' => 'NILG, Dhaka',
                'type' => 'Bangladesh',
            ],

            [
                'title' => 'Involuntary Resettlement Management',
                'duration' => '7-8 December 2003',
                'location' => 'ADB Resident Mission, Dhaka',
                'type' => 'Bangladesh',
            ],

            [
                'title' => 'Financial Governance & Management of Investment Projects',
                'duration' => '30-31 March 2004',
                'location' => 'Asian Development Bank',
                'type' => 'Bangladesh',
            ],

            [
                'title' => 'Road Safety Design',
                'duration' => '17-18 April 2004',
                'location' => 'Roads & Highways Department',
                'type' => 'Bangladesh',
            ],

            [
                'title' => 'Traffic Engineering (Module-2)',
                'duration' => '16-21 July 2005',
                'location' => 'BUET',
                'type' => 'Bangladesh',
            ],

            [
                'title' => 'Training on Project Management',
                'duration' => '3-5 December 2005',
                'location' => 'RDEC Bhaban, Dhaka',
                'type' => 'Bangladesh',
            ],

            [
                'title' => 'Professional Development Program on Small Scale Water Resources Development',
                'location' => 'Bangkok, Thailand',
                'type' => 'International',
            ],

            [
                'title' => 'Rural Road Maintenance',
                'location' => 'Tokyo, Japan',
                'type' => 'International',
            ],

            [
                'title' => 'High Impact Project Management',
                'location' => 'Ho Chi Minh & Hanoi, Vietnam',
                'type' => 'International',
            ],

            [
                'title' => 'EU-ASIA Solid Waste Management Conference',
                'location' => 'Malaysia',
                'type' => 'International',
            ],

            [
                'title' => 'Sustainable Urban Mobility in Asia Summit',
                'location' => 'Delhi & Ahmedabad, India',
                'type' => 'International',
            ],

            [
                'title' => 'International Conference on Fiscal Decentralization',
                'location' => 'Jakarta, Indonesia',
                'type' => 'International',
            ],

            [
                'title' => 'Monitoring & Evaluation of Infrastructure Development Project',
                'location' => 'Vietnam & China',
                'type' => 'International',
            ],

            [
                'title' => 'Environment Management Study Tour cum Training',
                'location' => 'South Korea, China & Thailand',
                'type' => 'International',
            ],

            [
                'title' => 'Electronic Government Procurement Training',
                'location' => 'Turin & Rome, Italy',
                'type' => 'International',
            ],

            [
                'title' => 'Study Tour in Portugal',
                'location' => 'Portugal',
                'type' => 'International',
            ],

        ];

        foreach ($trainings as $training) {
            Training::create($training);
        }
    }
}
