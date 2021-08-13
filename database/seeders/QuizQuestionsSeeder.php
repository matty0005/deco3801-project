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
                "questions" => "[{\"answers\": [\"Never\", \"Sometimes\", \"Regularly\"], \"question\": \"worries\", \"required\": false}, {\"answers\": [\"Never\", \"Sometimes\", \"Regularly\"], \"question\": \"Sad or unhappy\", \"required\": false}]",            
            ),
            array(
                "id" => 2,
                "name" => "Is your child retarded Quiz",
                "type" => "parent",
                "questions" => "[{\"answers\": [\"Never\", \"Sometimes\", \"Regularly\"], \"question\": \"worries\", \"required\": false}, {\"answers\": [\"Never\", \"Sometimes\", \"Regularly\"], \"question\": \"Sad or unhappy\", \"required\": false}]"            ),
        ));
        
    }
}
