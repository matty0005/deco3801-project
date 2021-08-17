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
                "questions" => "[{\"type\": \"multiselect\", \"answers\": [\"Worries\", \"Feels sad\", \"Feels hopeless\", \"Is down\", \"Gets disracted\", \"Is stressed\", \"Teases others\", \"Left out\", \"Refuses to share\", \"Fights with others\", \"Refuses to share\"], \"question\": \"Your child often:\", \"required\": false}, {\"type\": \"multiselect\", \"answers\": [\"Worries\", \"Feels sad\", \"Feels hopeless\", \"Is down\", \"Gets disracted\", \"Is stressed\", \"Teases others\", \"Left out\", \"Refuses to share\", \"Fights with others\", \"Refuses to share\"], \"question\": \"Your child sometimes:\", \"required\": false}, {\"type\": \"multiselect\", \"answers\": [\"Worries\", \"Feels sad\", \"Feels hopeless\", \"Is down\", \"Gets disracted\", \"Is stressed\", \"Teases others\", \"Left out\", \"Refuses to share\", \"Fights with others\", \"Refuses to share\"], \"question\": \"Your child never:\", \"required\": false}]",
                          
            ),
            array(
                "id" => 2,
                "name" => "Is your child retarded Quiz",
                "type" => "parent",
                "questions" => "[{\"type\": \"multiselect\", \"answers\": [\"Worries\", \"Feels sad\", \"Feels hopeless\", \"Is down\", \"Gets disracted\", \"Is stressed\", \"Teases others\", \"Left out\", \"Refuses to share\", \"Fights with others\", \"Refuses to share\"], \"question\": \"Your child often:\", \"required\": false}, {\"type\": \"multiselect\", \"answers\": [\"Worries\", \"Feels sad\", \"Feels hopeless\", \"Is down\", \"Gets disracted\", \"Is stressed\", \"Teases others\", \"Left out\", \"Refuses to share\", \"Fights with others\", \"Refuses to share\"], \"question\": \"Your child sometimes:\", \"required\": false}, {\"type\": \"multiselect\", \"answers\": [\"Worries\", \"Feels sad\", \"Feels hopeless\", \"Is down\", \"Gets disracted\", \"Is stressed\", \"Teases others\", \"Left out\", \"Refuses to share\", \"Fights with others\", \"Refuses to share\"], \"question\": \"Your child never:\", \"required\": false}]",
            ),
        ));
        
    }
}
