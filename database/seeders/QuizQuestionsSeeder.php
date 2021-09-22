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
                "description" => "This questionnaire can be used as a precursor to identify possible behavioural and emotional difficulities your child is experiencing.",
                "type" => "parent",
                "questions" => "[
                {\"type\": \"multiselect\", \"answers\": [\"Is disobedient\", \"Has trouble concentrating\", \"Struggles socially\", \"Daydreams too much\"], \"question\": \"Select all of the following issues that concern you about your child:\", \"required\": true},
                {\"type\": \"multiselect\", \"answers\": [\"Fights with others\", \"Teases others\", \"Refuses to share\", \"Acts impulsively\", \"Blames others for their troubles\", \"Takes things that aren't theirs\", \"Does not follow rules\"], \"question\": \"Select all of the following behaviours that your child exhibits:\", \"required\": false},
                {\"type\": \"colour\", \"answers\": [], \"question\": \"Your child is frequently sad or unhappy\", \"required\": true},
                {\"type\": \"colour\", \"answers\": [], \"question\": \"Your child often worries\", \"required\": true},
                {\"type\": \"colour\", \"answers\": [], \"question\": \"Placeholder\", \"required\": true},
                {\"type\": \"colour\", \"answers\": [], \"question\": \"Placeh0lder\", \"required\": true}]",
                          
            ),
            array(
                "id" => 2,
                "name" => "Is your child displaying common symptoms of autism?",
                "description" => "This questionnaire provides targeted questions about your child's emotional and social behaviours which can are common signs of autism. Your answers are confidential and this is not a diagnosis.",
                "type" => "parent",
                "questions" => "[
                {\"type\": \"multiselect\", \"answers\": [\"Worries\", \"Feels sad\", \"Feels hopeless\", \"Is down\", \"Gets disracted\", \"Is stressed\", \"Teases others\", \"Left out\", \"Refuses to share\", \"Fights with others\"], \"question\": \"Select all of the behaviours that your child exhibits:\", \"required\": false}, {\"type\": \"multiselect\", \"answers\": [\"Worries\", \"Feels sad\", \"Feels hopeless\", \"Is down\", \"Gets disracted\", \"Is stressed\", \"Teases others\", \"Left out\", \"Refuses to share\", \"Fights with others\", \"Refuses to share\"], \"question\": \"Your child sometimes:\", \"required\": false},
                {\"type\": \"multiselect\", \"answers\": [\"Worries\", \"Feels sad\", \"Feels hopeless\", \"Is down\", \"Gets disracted\", \"Is stressed\", \"Teases others\", \"Left out\", \"Refuses to share\", \"Fights with others\", \"Refuses to share\"], \"question\": \"Your child never:\", \"required\": false}]",
            ),
            array(
                "id" => 3,
                "name" => "Is your child displaying common symptoms of depression?",
                "description" => "This questionnaire provides targeted questions about your child's emotional and social behaviours which can are common signs of autism. Your answers are confidential and this is not a diagnosis.",
                "type" => "parent",
                "questions" => "[{\"type\": \"multiselect\", \"answers\": [\"Worries\", \"Feels sad\", \"Feels hopeless\", \"Is down\", \"Gets disracted\", \"Is stressed\", \"Teases others\", \"Left out\", \"Refuses to share\", \"Fights with others\"], \"question\": \"Select all of the behaviours that your child exhibits:\", \"required\": false}, {\"type\": \"multiselect\", \"answers\": [\"Worries\", \"Feels sad\", \"Feels hopeless\", \"Is down\", \"Gets disracted\", \"Is stressed\", \"Teases others\", \"Left out\", \"Refuses to share\", \"Fights with others\", \"Refuses to share\"], \"question\": \"Your child sometimes:\", \"required\": false},
                {\"type\": \"multiselect\", \"answers\": [\"Worries\", \"Feels sad\", \"Feels hopeless\", \"Is down\", \"Gets disracted\", \"Is stressed\", \"Teases others\", \"Left out\", \"Refuses to share\", \"Fights with others\", \"Refuses to share\"], \"question\": \"Your child never:\", \"required\": false}]",
            ),
            array(
                "id" => 4,
                "name" => "Is your child displaying common symptoms of anxiety?",
                "description" => "This questionnaire provides targeted questions about your child's emotional and social behaviours which can are common signs of autism. Your answers are confidential and is not a diagnosis.",
                "type" => "parent",
                "questions" => "[{\"type\": \"multiselect\", \"answers\": [\"Worries\", \"Feels sad\", \"Feels hopeless\", \"Is down\", \"Gets disracted\", \"Is stressed\", \"Teases others\", \"Left out\", \"Refuses to share\", \"Fights with others\"], \"question\": \"Select all of the behaviours that your child exhibits:\", \"required\": false}, {\"type\": \"multiselect\", \"answers\": [\"Worries\", \"Feels sad\", \"Feels hopeless\", \"Is down\", \"Gets disracted\", \"Is stressed\", \"Teases others\", \"Left out\", \"Refuses to share\", \"Fights with others\", \"Refuses to share\"], \"question\": \"Your child sometimes:\", \"required\": false},
                {\"type\": \"multiselect\", \"answers\": [\"Worries\", \"Feels sad\", \"Feels hopeless\", \"Is down\", \"Gets disracted\", \"Is stressed\", \"Teases others\", \"Left out\", \"Refuses to share\", \"Fights with others\", \"Refuses to share\"], \"question\": \"Your child never:\", \"required\": false}]",
            ),
        ));
        
    }
}
