<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DoctorAvailabilitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doctor_available_dates')->insert([
            'doctor_id' => 1, 
            'time' => "2021-07-31 04:14:24",
        ]);
    }
}
