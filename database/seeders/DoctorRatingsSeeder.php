<?php

namespace Database\Seeders; 

use Illuminate\Database\Seeder; 
use Illuminate\Support\Facades\DB; 

class DoctorRatingsSeeder extends Seeder {
    /**
     * Run the database seeds. 
     * 
     * @return void
     */
    public function run() {

        DB::table('ratings')->insert([
            'doctor_id' => 1, 
            'user_id' => 1, 
            'rating' => 4,
        ]); 

        DB::table('ratings')->insert([
            'doctor_id' => 1, 
            'user_id' => 2, 
            'rating' => 4, 
        ]); 

        DB::table('ratings')->insert([
            'doctor_id' => 2, 
            'user_id' => 1, 
            'rating' => 3,
        ]); 

        DB::table('ratings')->insert([
            'doctor_id' => 2, 
            'user_id' => 2, 
            'rating' => 3, 
        ]); 

        DB::table('ratings')->insert([
            'doctor_id' => 3, 
            'user_id' => 1, 
            'rating' => 2,
        ]); 

        DB::table('ratings')->insert([
            'doctor_id' => 3, 
            'user_id' => 2, 
            'rating' => 2, 
        ]); 

        DB::table('ratings')->insert([
            'doctor_id' => 4, 
            'user_id' => 1, 
            'rating' => 1,
        ]); 

        DB::table('ratings')->insert([
            'doctor_id' => 4, 
            'user_id' => 2, 
            'rating' => 1, 
        ]); 

        DB::table('ratings')->insert([
            'doctor_id' => 5, 
            'user_id' => 1, 
            'rating' => 5,
        ]); 

        DB::table('ratings')->insert([
            'doctor_id' => 5, 
            'user_id' => 2, 
            'rating' => 3, 
        ]); 

        DB::table('ratings')->insert([
            'doctor_id' => 6, 
            'user_id' => 1, 
            'rating' => 1,
        ]); 

        DB::table('ratings')->insert([
            'doctor_id' => 6, 
            'user_id' => 2, 
            'rating' => 3, 
        ]); 
    }
}