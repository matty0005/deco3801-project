<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class QuizQuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        \DB::table('quiz_questions')->delete();
        
        
        \DB::table('quiz_questions')->insert(array(
            array(
                "id" => 1,
                "name" => "Progressive Quiz",
                "type" => "parent",
                "questions" => "{\"Worries\": \"{'answers':['Never', 'Sometimes', 'Regularly'], 'required':false}\", \"Sad or Unhappy\": \"{'answers':['Never', 'Sometimes', 'Regularly'], 'required':true}\"}",
            ),
        )
        
    }
}
