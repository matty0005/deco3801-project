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
                "title" => "Dr",
                "gender" => 1,
                "specialisation" => "ADHD",
                "link" => "Zoom Link Here",
                "desc" => "Long",
            ),
            array(
                "id" => 2,
                "user_id" => 9,
                "title" => "Mr",
                "gender" => 0,
                "specialisation" => "Depression",
                "link" => "Zoom Link Here",
                "desc" => "Long",
            ),
            array(
                "id" => 3,
                "user_id" => 5,
                "title" => "Ms",
                "gender" => 1,
                "specialisation" => "Learning Disabilities",
                "link" => "Zoom Link Here",
                "desc" => "Long",
            ),
            array(
                "id" => 4,
                "user_id" => 6,
                "title" => "Dr",
                "gender" => 0,
                "specialisation" => "Autism",
                "link" => "Zoom Link Here",
                "desc" => "Long",
            ),
            array(
                "id" => 5,
                "user_id" => 13,
                "title" => "Mr",
                "gender" => 0,
                "specialisation" => "Depression",
                "link" => "Zoom Link Here",
                "desc" => "Long",
            ),
            array(
                "id" => 6,
                "user_id" => 14,
                "title" => "Dr",
                "gender" => 0,
                "specialisation" => "Autism",
                "link" => "Zoom Link Here",
                "desc" => "Long",
            ),
        );

        \DB::table('doctors')->delete();
        \DB::table('doctors')->insert($doctors);  
    }
}