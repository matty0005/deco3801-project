<?php

namespace Database\Seeders; 

use Illuminate\Database\Seeder; 
use Illuminate\Support\Facades\DB; 

class DoctorSeeder extends Seeder {
    /**
     * Run the database seeds. 
     * 
     * @return void
     */
    public function run() {

        $doctors = array(
            array(
                "id" => 1,
                "user_id" => 15,
                "gender" => 1,
                "specialisation" => "ADHD",
            ),
            array(
                "id" => 2,
                "user_id" => 9,
                "gender" => 0,
                "specialisation" => "Depression",
            ),
            array(
                "id" => 3,
                "user_id" => 5,
                "gender" => 1,
                "specialisation" => "Learning Disabilities",
            ),
            array(
                "id" => 4,
                "user_id" => 6,
                "gender" => 0,
                "specialisation" => "Autism",
            ),
            array(
                "id" => 5,
                "user_id" => 13,
                "gender" => 0,
                "specialisation" => "Depression",
            ),
            array(
                "id" => 6,
                "user_id" => 14,
                "gender" => 0,
                "specialisation" => "Autism",
            ),
        );

        \DB::table('doctors')->delete();
        \DB::table('doctors')->insert($doctors);  
    }
}