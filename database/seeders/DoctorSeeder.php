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
                "link" => "https://uqz.zoom.us/j/4671522626",
                "desc" => "<div>
                <p>My name is Dr Samantha Tran, I am a registered counsellor with the ACA (Australian Counselling Association) and hold a Doctor in Clinical Psychology. I offer a professional and gentle approach to providing counselling.</p>
                <br>
                <p>I have over 5 years specialised experience with youth and troubled adolescents, extending to supporting children and their families.</p>
                <br>
                <p>My experience and education uniquely provides me with tools to assist your child with their troubles, family relationships and social struggles including stress, anxiety, mood and behavioural disorders.</p>
                </div>",
            ),
            array(
                "id" => 2,
                "user_id" => 9,
                "title" => "Mr",
                "gender" => 0,
                "specialisation" => "Depression",
                "link" => "https://uqz.zoom.us/j/4671522626",
                "desc" => "Long",
            ),
            array(
                "id" => 3,
                "user_id" => 5,
                "title" => "Ms",
                "gender" => 1,
                "specialisation" => "Learning Disabilities",
                "link" => "https://uqz.zoom.us/j/4671522626",
                "desc" => "Long",
            ),
            array(
                "id" => 4,
                "user_id" => 6,
                "title" => "Dr",
                "gender" => 0,
                "specialisation" => "Autism",
                "link" => "https://uqz.zoom.us/j/4671522626",
                "desc" => "Long",
            ),
            array(
                "id" => 5,
                "user_id" => 13,
                "title" => "Mr",
                "gender" => 0,
                "specialisation" => "Depression",
                "link" => "https://uqz.zoom.us/j/4671522626",
                "desc" => "Long",
            ),
            array(
                "id" => 6,
                "user_id" => 14,
                "title" => "Dr",
                "gender" => 0,
                "specialisation" => "Autism",
                "link" => "https://uqz.zoom.us/j/4671522626",
                "desc" => "Long",
            ),
        );

        \DB::table('doctors')->delete();
        \DB::table('doctors')->insert($doctors);  
    }
}