<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserTableSeeder::class,
            QuizQuestionsSeeder::class,
            ThreadTopicSeeder::class,
            UserSettingsSeeder::class,
            DrawingItemsSeeder::class,
            KidsSeeder::class,
            ParentsSeeder::class,
            CountrySeeder::class,
            DoctorSeeder::class, 
            DoctorRatingsSeeder::class, 
            DoctorAvailabilitiesSeeder::class, 
            KidsActivitiesSeeder::class
        ]);
    }
}
