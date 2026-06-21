<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            // PermissionSeeder::class,
            // TrainingSeeder::class,
            // CareerSeeder::class,
            // AchievementSeeder::class,
            ProjectSeeder::class,
            // ProfessionalExperienceASeeder::class,
            // ProfessionalExperienceBSeeder::class,
            // ProfessionalExperienceCSeeder::class,
            // ProfessionalExperienceDSeeder::class,
            // ProfessionalExperienceESeeder::class,
            // ProfessionalExperienceFSeeder::class,
            // ProfessionalExperienceGSeeder::class,
            // ProfessionalExperienceGResponsibilitiesSeeder::class,
            // UserSeeder::class,
        ]);
    }
}
