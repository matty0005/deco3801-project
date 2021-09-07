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
                "name" => "Your child's mental health",
                "description" => "This quick survey will provide feedback regarding possible needs for your child and actions you can take to best assist them.",
                "type" => "parent",
                "questions" => "[{\"type\": \"multiselect\", \"answers\": [\"Worries\", \"Feels sad\", \"Feels hopeless\", \"Is down\", \"Gets disracted\", \"Is stressed\", \"Teases others\", \"Left out\", \"Refuses to share\", \"Fights with others\"], \"question\": \"Select all of the following behaviour that your child exhibits:\", \"required\": false},
                {\"type\": \"select\", \"answers\": [\"Never\", \"Ocasionally\", \"Sometimes\", \"Often\"], \"question\": \"How often do your child display feelings of sadness?\", \"required\": true},
                {\"type\": \"slider\", \"answers\": [], \"question\": \"Slider:\", \"required\": true}, 
                {\"type\": \"colour\", \"answers\": [], \"question\": \"Regularly\", \"required\": true}]",
                          
            ),
            array(
                "id" => 2,
                "name" => "Is your child displaying symptoms of autism?",
                "description" => "Test for autism",
                "type" => "parent",
                "questions" => "[{\"type\": \"multiselect\", \"answers\": [\"Worries\", \"Feels sad\", \"Feels hopeless\", \"Is down\", \"Gets disracted\", \"Is stressed\", \"Teases others\", \"Left out\", \"Refuses to share\", \"Fights with others\"], \"question\": \"Select all of the behaviours that your child exhibits:\", \"required\": false}, {\"type\": \"multiselect\", \"answers\": [\"Worries\", \"Feels sad\", \"Feels hopeless\", \"Is down\", \"Gets disracted\", \"Is stressed\", \"Teases others\", \"Left out\", \"Refuses to share\", \"Fights with others\", \"Refuses to share\"], \"question\": \"Your child sometimes:\", \"required\": false},
                {\"type\": \"multiselect\", \"answers\": [\"Worries\", \"Feels sad\", \"Feels hopeless\", \"Is down\", \"Gets disracted\", \"Is stressed\", \"Teases others\", \"Left out\", \"Refuses to share\", \"Fights with others\", \"Refuses to share\"], \"question\": \"Your child never:\", \"required\": false}]",
            ),
            array(
                "id" => 3,
                "name" => "Is your child displaying symptoms of depression?",
                "description" => "Test",
                "type" => "parent",
                "questions" => "[{\"type\": \"multiselect\", \"answers\": [\"Worries\", \"Feels sad\", \"Feels hopeless\", \"Is down\", \"Gets disracted\", \"Is stressed\", \"Teases others\", \"Left out\", \"Refuses to share\", \"Fights with others\"], \"question\": \"Select all of the behaviours that your child exhibits:\", \"required\": false}, {\"type\": \"multiselect\", \"answers\": [\"Worries\", \"Feels sad\", \"Feels hopeless\", \"Is down\", \"Gets disracted\", \"Is stressed\", \"Teases others\", \"Left out\", \"Refuses to share\", \"Fights with others\", \"Refuses to share\"], \"question\": \"Your child sometimes:\", \"required\": false},
                {\"type\": \"multiselect\", \"answers\": [\"Worries\", \"Feels sad\", \"Feels hopeless\", \"Is down\", \"Gets disracted\", \"Is stressed\", \"Teases others\", \"Left out\", \"Refuses to share\", \"Fights with others\", \"Refuses to share\"], \"question\": \"Your child never:\", \"required\": false}]",
            ),
            array(
                "id" => 4,
                "name" => "Is your child displaying symptoms of anxiety?",
                "description" => "Test",
                "type" => "parent",
                "questions" => "[{\"type\": \"multiselect\", \"answers\": [\"Worries\", \"Feels sad\", \"Feels hopeless\", \"Is down\", \"Gets disracted\", \"Is stressed\", \"Teases others\", \"Left out\", \"Refuses to share\", \"Fights with others\"], \"question\": \"Select all of the behaviours that your child exhibits:\", \"required\": false}, {\"type\": \"multiselect\", \"answers\": [\"Worries\", \"Feels sad\", \"Feels hopeless\", \"Is down\", \"Gets disracted\", \"Is stressed\", \"Teases others\", \"Left out\", \"Refuses to share\", \"Fights with others\", \"Refuses to share\"], \"question\": \"Your child sometimes:\", \"required\": false},
                {\"type\": \"multiselect\", \"answers\": [\"Worries\", \"Feels sad\", \"Feels hopeless\", \"Is down\", \"Gets disracted\", \"Is stressed\", \"Teases others\", \"Left out\", \"Refuses to share\", \"Fights with others\", \"Refuses to share\"], \"question\": \"Your child never:\", \"required\": false}]",
            ),
        ));
        
    }
}
