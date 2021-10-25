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
                "name" => "Pre-Consult Questionairre",
                "description" => "Provide the therapist of your choosing information about your concerns for your child ahead of time to make the most of your session.",
                "type" => "parent",
                "questions" => "[
                {\"type\": \"select\", \"answers\": [\"4 to 7\", \"7 to 10\", \"10 to 13\", \"13 or older\"], \"question\": \"How old is your child?\", \"required\": true},
                {\"type\": \"select\", \"answers\": [\"None\", \"1 to 3\", \"3 to 5\", \"5+\"], \"question\": \"Has your child been to other therapists before?\", \"required\": true},
                {\"type\": \"multiselect\", \"answers\": [\"Anxiety\", \"Mood\", \"Attention\", \"Behavioural\", \"Eating\", \"Learning\", \"Stress\", \"Social\"], \"question\": \"Select any of these conditions you think may apply to your child.\", \"required\": false},
                {\"type\": \"multiselect\", \"answers\": [\"Conversing\", \"Drawing\", \"Activities\", \"Listening\"], \"question\": \"Select any of the following which may be best suited for your child for communication.\", \"required\": false},
                {\"type\": \"colour\", \"answers\": [], \"question\": \"Your child has a very stressful home life\", \"required\": false},
                {\"type\": \"colour\", \"answers\": [], \"question\": \"Your child struggles in social situations\", \"required\": false},
                {\"type\": \"colour\", \"answers\": [], \"question\": \"Your child is nervous around strangers\", \"required\": false},
                {\"type\": \"colour\", \"answers\": [], \"question\": \"Your child struggles to pay attention for extended periods of time\", \"required\": false},
                {\"type\": \"colour\", \"answers\": [], \"question\": \"Your child rarely smiles or enjoys activities\", \"required\": false},
                {\"type\": \"multiselect\", \"answers\": [\"Present during Sessions\", \"Provided updates\", \"Post-consult discussion\", \"No involvement\"], \"question\": \"Select any of the following that apply for your involvement in your child's sessions?\", \"required\": false}
                ]"                          
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
