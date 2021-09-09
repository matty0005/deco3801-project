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
        DB::table('doctors')->insert([
            'id' => 1, 
            'gender' => 0, 
            'first_name' => "Oskar", 
            "last_name" => "Gregurek",
            "email" => "opgregurek@gmail.com",
            "specialisation" => "loser"
        ]); 

        DB::table('doctors')->insert([
            'id' => 2,
            'gender' => 0, 
            'first_name' => "George", 
            "last_name" => "Mihnea",
            "email" => "george@gmail.com",
            "specialisation" => "loser"
        ]); 

        DB::table('doctors')->insert([
            'id' => 3,
            'gender' => 0, 
            'first_name' => "Matt", 
            "last_name" => "Gilpin",
            "email" => "matt@gmail.com",
            "specialisation" => "loser"
        ]); 

        DB::table('doctors')->insert([
            'id' => 4,
            'gender' => 0, 
            'first_name' => "Josh", 
            "last_name" => "Wallace",
            "email" => "josh@gmail.com",
            "specialisation" => "loser"
        ]); 

        DB::table('doctors')->insert([
            'id' => 5,
            'gender' => 1, 
            'first_name' => "Yilin", 
            "last_name" => "Su",
            "email" => "yilin@gmail.com",
            "specialisation" => "loser"
        ]);

        DB::table('doctors')->insert([
            'id' => 6,
            'gender' => 1, 
            'first_name' => "Samantha", 
            "last_name" => "Tran",
            "email" => "samantha@gmail.com",
            "specialisation" => "ADHD specialist"
        ]);

    }
}