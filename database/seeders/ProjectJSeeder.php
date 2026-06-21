<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectJSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [

            [
                'project_name' => 'Nilkuti–Gotgari Hat Bridge',
                'project_type' => 'Bridge',
                'location' => 'Manda, Naogaon',
                'river_name' => 'Atari River',
                'length_m' => 217,
                'position' => 'Design & Supervision Engineer',
                'project_year' => 2024,
                'description' => 'Construction of 217m PSC Girder Bridge over Atari River on Nilkuti R&H–Gotgari Hat Road under Manda Upazila, Naogaon.',
                'featured' => false,
                'sort_order' => 52,
            ],

            [
                'project_name' => 'Debipur Hat–Alampur Bridge',
                'project_type' => 'Bridge',
                'location' => 'Dhamoirhat, Naogaon',
                'river_name' => 'Atari River',
                'length_m' => 280,
                'position' => 'Design & Supervision Engineer',
                'project_year' => 2024,
                'description' => 'Construction of 280m PSC Girder Bridge over Atari River on Debipur Hat–Alampur UP Road under Dhamoirhat Upazila, Naogaon.',
                'featured' => false,
                'sort_order' => 53,
            ],

            [
                'project_name' => 'Kalnamor–Kalna Bisnopur Bridge',
                'project_type' => 'Bridge',
                'location' => 'Mohadebpur, Naogaon',
                'river_name' => 'Atrai River',
                'length_m' => 262,
                'position' => 'Design & Supervision Engineer',
                'project_year' => 2024,
                'description' => 'Construction of 262m PSC Girder Bridge over Atrai River on Kalnamor–Kalna Bisnopur Road under Mohadebpur Upazila, Naogaon.',
                'featured' => false,
                'sort_order' => 54,
            ],

            [
                'project_name' => 'Shibganj Bazar–Bagador Bazar Bridge',
                'project_type' => 'Bridge',
                'location' => 'Mohadebpur, Naogaon',
                'river_name' => 'Atrai River',
                'length_m' => 259,
                'position' => 'Design & Supervision Engineer',
                'project_year' => 2024,
                'description' => 'Construction of 259m PSC Girder Bridge over Atrai River on Shibganj Bazar–Bagador Bazar Road under Mohadebpur Upazila, Naogaon.',
                'featured' => false,
                'sort_order' => 55,
            ],

            [
                'project_name' => 'Mohesh Chandopur Bridge',
                'project_type' => 'Bridge',
                'location' => 'Singra, Natore',
                'river_name' => 'Atrai River',
                'length_m' => 285,
                'position' => 'Design & Supervision Engineer',
                'project_year' => 2024,
                'description' => 'Construction of 285m PSC Girder Bridge over Atrai River near Mohesh Chandopur Government Primary School Road under Singra Upazila, Natore.',
                'featured' => true,
                'sort_order' => 56,
            ],

            [
                'project_name' => 'Madan–Tarail Bridge',
                'project_type' => 'Bridge',
                'location' => 'Madan, Netrakona',
                'river_name' => 'Banni River',
                'length_m' => 140,
                'position' => 'Design & Supervision Engineer',
                'project_year' => 2024,
                'description' => 'Construction of 140m PSC Girder Bridge over Banni River on Madan–Tarail Road under Madan Upazila, Netrakona.',
                'featured' => false,
                'sort_order' => 57,
            ],

            [
                'project_name' => 'Gawkandia–Janjail Bazar Bridge',
                'project_type' => 'Bridge',
                'location' => 'Durgapur, Netrakona',
                'river_name' => 'Sumeswari River',
                'length_m' => 240,
                'position' => 'Design & Supervision Engineer',
                'project_year' => 2024,
                'description' => 'Construction of 240m PSC Girder Bridge over Sumeswari River on Gawkandia UP Office–Janjail Bazar Road under Durgapur Upazila, Netrakona.',
                'featured' => false,
                'sort_order' => 58,
            ],

            [
                'project_name' => 'Tegachia–Jamainagar Bridge',
                'project_type' => 'Bridge',
                'location' => 'Kalapara, Patuakhali',
                'river_name' => 'Tagasia Khal',
                'length_m' => 41,
                'position' => 'Design & Supervision Engineer',
                'project_year' => 2025,
                'description' => 'Construction of 41m RCC Girder Bridge over Tagasia Khal on Tegachia–Jamainagar Bazar Road under Kalapara Upazila, Patuakhali.',
                'featured' => false,
                'sort_order' => 59,
            ],

            [
                'project_name' => 'Kathaltali–Betagi Bridge',
                'project_type' => 'Bridge',
                'location' => 'Mirzaganj, Patuakhali',
                'river_name' => 'Srimonto River',
                'length_m' => 96,
                'position' => 'Design & Supervision Engineer',
                'project_year' => 2025,
                'description' => 'Construction of 96m PSC Girder Bridge over Srimonto River on Kathaltali GC–Patuakhali–Betagi Road under Mirzaganj Upazila, Patuakhali.',
                'featured' => false,
                'sort_order' => 60,
            ],

            [
                'project_name' => 'Jaganathkati–Chandkati Bridge',
                'project_type' => 'Bridge',
                'location' => 'Nesarabad, Pirojpur',
                'river_name' => 'Kaliganga River',
                'length_m' => 614,
                'position' => 'Design & Supervision Engineer',
                'project_year' => 2025,
                'description' => 'Construction of 614m PSC Girder Bridge over Kaliganga River on Jaganathkati–Chandkati GC Road under Nesarabad Upazila, Pirojpur.',
                'featured' => true,
                'sort_order' => 61,
            ],

        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
