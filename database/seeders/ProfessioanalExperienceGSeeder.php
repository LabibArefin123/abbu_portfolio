<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfessioanalExperienceGSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('supervision_experiences')->insert([
            [
                'position' => 'Design & Supervision Engineer (Individual Consultant)',
                'start_date' => '2018-04-04',
                'end_date' => '2025-06-30',
                'organization' => 'LGED Consultancy (Bridge Design & Supervision)',
                'description' => <<<EOD
Worked as a Design & Supervision Engineer of following Bridges (not limited):

Const. of 252m long RCC BOX Girder (100m RCC Viaduct) Bridge over Dhaleshwari-2 river on Dhaka-Mowwa at Thaghoria-Shaper Bazar via Deber Bazar & Mollar Hat road at Ch.5540m under Keraniganj, Dhaka.

Const. of 105m long PSC Girder Bridge over Dhaleshwari Branch river on Dhaka-Aricha Highway at Kalia to Araria road (Kella RHD-Vum Dakkhin Joyomontop GC) at Ch.9000m under Dhamrai, Dhaka.

Const. of 90m long PSC Girder Bridge over Ichamoti river on Horishkul bazaar (Kolakopa UP office–Jontrail UP office–Dhapari Bazar–Gobindopur Bilpolli–Bangla bazaar road) at Ch.2230m under Nababganj, Dhaka.

Const. of 250m long PSC Girder Bridge over Bongshi river on Dhaka-Aricha (RHD) 22 Mile Shimulia GC via Nolam road at Ch.3500m under Savar, Dhaka.

Const. of 320m long PSC Girder Bridge over Balu river at Ch.00.00m on Porshi GC–Rupganj–Kayetpara–Demra RHD road at Isapura, Narayanganj.

Construction of 81.00m PSC Girder Bridge over Dhaleshwari Branch river on Chitkabari–Charpouli road at Ch.0.00m under Tangail Sadar.

Const. of 96m PSC Girder Bridge with 30m RCC Viaduct over Jinai Branch river on Kharjana–Katuli road at Ch.2000m under Tangail Sadar.

Const. of 296m PSC Girder Bridge over Louhajong river on Niogijoair–Ranagacha ferryghat road at Ch.1925m under Tangail Sadar.

Const. of 264m PSC Girder Bridge over Zogarchar river on Alanga GC–Zogarchar JBA road via Durgapur UP road at Ch.10500m under Kalihati, Tangail.

Const. of 282m PSC Girder Bridge over Jhinai (Pungli) river on Karatia–Jashihati via Dawli road under Basail, Tangail.

Const. of 270m PSC Girder Bridge over Jhinai river on Kashil UP office–Bilpara Hat road under Basail, Tangail.

Const. of 256m PSC Girder Bridge over Jhinai river on Natiapara NHW–Kanchanpur GC road under Basail, Tangail.

Const. of 81m PSC Girder Bridge over Toak river on Baniapara–Baichail road under Ghatail, Tangail.

Const. of 88m RCC & Arch Girder Bridge with 120m RCC Viaduct on Bangoj Krishnanagor road under Akhaura, B-Baria.

Const. of 96m PSC Girder Bridge over Mathavanga river on Damurhuda–Karpashdanga road under Chuadanga.

Const. of 495m PSC Girder Bridge with 144m RCC Viaduct over Meghna Branch river on Calibanga bazar–Islampur road under Meghna, Cumilla.

Const. of 81m PSC Girder Bridge over Dakatia river on Shantir Bazar–Pipodda road under Nangalkot, Cumilla.

Const. of 150m PSC Girder Bridge over Dakatia river on Dhalua Bazar GC road under Nangalkot, Cumilla.

Const. of 675m PSC Girder Bridge over Meghna Branch river on Araila–Haripur–Rampur road under Meghna, Cumilla.

Const. of 472m PSC Girder Bridge over Meghna Branch river on Boraia Kandi–Tulatuli road under Meghna, Cumilla.

Const. of 75m RCC Girder Bridge over Small Jamuna river on Fulbari H/Q–Sujapur road under Dinajpur.

Const. of 96m PSC Girder Bridge over Small Jamuna river on RHD Joinagar–Dowalatpur road under Dinajpur.

Const. of 175m PSC Girder Bridge over Atrai river on Kharkati Bazar road under Chirirbandar, Dinajpur.

Const. of 450m PSC Girder Bridge over Atrai river on Sujalpur UP Office–Pakerhat GC road under Birganj, Dinajpur.

Const. of 250m PSC Girder Bridge over Punorvoba river under Biral, Dinajpur.

Const. of 56m RCC Girder Bridge over Mohua river under Parshuram, Feni.

Const. of 24m RCC Girder Bridge over Kushla Khal under Kotwalipara, Gopalganj.

Const. of 788m PSC Girder Bridge over Modhumoti river under Gopalganj Sadar.

Const. of 220m PSC Girder Bridge over Saniajan river under Hatibandha, Lalmonirhat.

Const. of 40m PSC Girder Bridge over Sree river under Joypurhat.

Const. of 217m PSC Girder Bridge over Atari river under Naogaon.

Const. of 280m PSC Girder Bridge over Atari river under Naogaon.

Const. of 262m PSC Girder Bridge over Atrai river under Naogaon.

Const. of 259m PSC Girder Bridge over Atrai river under Naogaon.

Const. of 285m PSC Girder Bridge over Atrai river under Singra, Natore.

Const. of 140m PSC Girder Bridge over Banni river under Madan, Netrokona.

Const. of 240m PSC Girder Bridge over Sumeswari river under Durgapur, Netrokona.

Const. of 41m RCC Girder Bridge over Tagasia Khal under Kalapara, Patuakhali.

Const. of 96m PSC Girder Bridge over Srimonto river under Mirzaganj, Patuakhali.

Const. of 614m PSC Girder Bridge over Kaliganga river under Nesarabad, Pirojpur.

Const. of 280m PSC Girder Bridge over Boral river under Faridpur.

Const. of 60m PSC Girder Bridge over Mora Tista river under Kaunia, Rangpur.

Const. of 301m PSC Girder Bridge over Kartoa river under Pirganj, Rangpur.

Const. of 294m PSC Girder Bridge over Kartoa river under Pirganj, Rangpur.

Const. of 96m PSC Girder Bridge over Ghaghat river under Mithapukur, Rangpur.

Const. of 750m PSC Girder Bridge over Jadukuta river under Tahirpur, Sunamganj.

Const. of 450m PSC Girder Bridge over Patlai river under Tahirpur, Sunamganj.

Const. of 470m PSC Girder Bridge over Pian river under Chhatak, Sunamganj.

Const. of 320m PSC Girder Bridge over Ubdha Khali river under Dharmapasha, Sunamganj.

Const. of 310m PSC Girder Bridge over Sumsachsuri river under Dharmapasha, Sunamganj.

Const. of 294m PSC Girder Bridge over Fulzory river under Ullahpara, Sirajganj.

Const. of 80m PSC & RCC Girder Bridge with viaduct over Kopotakho river under Satkhira.

Responsibilities:
a) Review all project documents including topographical survey, soil investigation, design, estimate, specification and contract documents and advise modifications.
b) Assist field and Upazila engineers for smooth construction progress and quality control.
c) Check TBM levels against PWD benchmark and set pier/soffit levels.
d) Verify subsoil investigation and survey data.
e) Check pile boring, bentonite use, reinforcement placement, concrete consumption.
f) Collect and test construction materials from contractor stockyard.
g) Collect concrete samples from batches for laboratory testing.
h) Send reinforcement, cable, bearing samples to BUET for testing.
i) Supervise casting works and quality control.
j) Collect material rates for variation orders.
k) Prepare supervision plan, flow chart, monitoring system.
l) Supervise reinforcement, formwork, scaffolding and casting.
m) Supervise post tensioning and girder shifting.
n) Prepare BOQ, bar bending schedule, estimates for all bridge types.
o) Rate analysis of construction items.
EOD
            ]
        ]);
    }
}
