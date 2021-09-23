<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DoctorConsultationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doctor_consultations')->insert([
            'doctor_id' => 1, 
            'user_id' => 1, 
            'time' => "2021-07-31 04:14:24",
        ])
    }
}
