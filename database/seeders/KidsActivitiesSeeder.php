<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KidsActivitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kids_activities = array(
            array(
                "id" => 1,
                "level" => 1,
                "time" => 2,
                "level_name" => "Start",
                "data" => '[{"end":false,"hint":null,"type":"select","offset":0,"draw":false,"answers":["Yes","No"],"chatbox":"Hey! {user_name}, do you like drawing?"},{"end":false,"hint":null,"type":"select","offset":1,"draw":false,"answers":["Yes","No"],"chatbox":"Can you draw something cool for me?"},{"end":false,"hint":null,"type":"select","offset":2,"draw":false,"answers":["I cant draw","Im not creative","I dont like it"],"chatbox":"How come?"},{"end":true,"hint":null,"type":"select","offset":0,"draw":true,"answers":[],"chatbox":"Go over to the drawing board and show me :)"},{"end":true,"hint":null,"type":"select","offset":0,"draw":false,"answers":[],"chatbox":"Okay! If you ever change your mind, show me on the drawing board!"},{"end":true,"hint":null,"type":"select","offset":0,"draw":false,"answers":[],"chatbox":"Bad drawings dont exist!"},{"end":true,"hint":null,"type":"select","offset":0,"draw":false,"answers":[],"chatbox":"Not all drawings need to be creative!"},{"end":true,"hint":null,"type":"select","offset":0,"draw":false,"answers":[],"chatbox":"Aww, if you ever change your mind you should give it a try!"}]',
            ),
            array(
                "id" => 2,
                "level" => 1,
                "time" => 2,
                "level_name" => "Start",
                "data" => '[{"end":false,"hint":null,"type":"select","offset":0,"draw":false,"answers":["Yes","No"],"chatbox":"Hi, have you been feeling happy recently?"},{"end":false,"hint":null,"type":"select","offset":1,"draw":false,"answers":["Yes","No"],"chatbox":"Can you draw for me what makes you feel happiest?"},{"end":false,"hint":null,"type":"select","offset":0,"draw":false,"answers":["Yes","No"],"chatbox":"Can you draw for me whats made you unhappy?"},{"end":true,"hint":null,"type":"select","offset":0,"draw":true,"answers":[],"chatbox":"Go over to the drawing board and show me :)"},{"end":true,"hint":null,"type":"select","offset":0,"draw":false,"answers":[],"chatbox":"Okay! If you ever change your mind, show me on the drawing board!"}]'
            ),
            array(
                "id" => 3,
                "level" => 1,
                "time" => 2,
                "level_name" => "Start",
                "data" => '[{"end":false,"hint":null,"type":"select","offset":0,"draw":false,"answers":["Happy!","Sad :(","I don\'t have a favourite toy"],"chatbox":"Hey! How does your favourite toy make you feel?"},{"end":false,"hint":null,"type":"select","offset":2,"draw":false,"answers":["Yes","No"],"chatbox":"Can you draw for me your happiest moment with your toy?"},{"end":false,"hint":null,"type":"select","offset":1,"draw":false,"answers":["Yes","No"],"chatbox":"Can you draw for me your saddest moment with your toy?"},{"end":false,"hint":null,"type":"select","offset":0,"draw":false,"answers":["Yes","No"],"chatbox":"Can you draw for me your happiest moment?"},{"end":true,"hint":null,"type":"select","offset":0,"draw":true,"answers":[],"chatbox":"Go over to the drawing board and show me :)"},{"end":true,"hint":null,"type":"select","offset":0,"draw":false,"answers":[],"chatbox":"Okay! If you ever change your mind, show me on the drawing board!"}]'
            ),
            array(
                "id" => 4,
                "level" => 1,
                "time" => 2,
                "level_name" => "Start",
                "data" => '[{"end":false,"hint":null,"type":"select","offset":0,"draw":false,"answers":["He helped me a lot!","I did not like him","He was alright"],"chatbox":"Hey {user_name}!, what did you think of the doctor?"},{"end":false,"hint":null,"type":"select","offset":2,"draw":false,"answers":["Yes","No"],"chatbox":"Would you want to see the doctor again?"},{"end":false,"hint":null,"type":"select","offset":3,"draw":false,"answers":["Talked too much","Too strict","I dont trust them","Other"],"chatbox":"Why didnt you like them?"},{"end":false,"hint":null,"type":"select","offset":2,"draw":false,"answers":["Talk less","Give me more opportunity to talk","Appear more trusting","Other"],"chatbox":"What could they do better?"},{"end":true,"hint":null,"type":"select","offset":0,"draw":false,"answers":[],"chatbox":"Thanks for letting me know!"},{"end":true,"hint":null,"type":"select","offset":0,"answers":[],"chatbox":"Okay! Ill see what I can do about that :)"},{"end":false,"hint":null,"type":"select","offset":3,"draw":false,"answers":["Yes","No"],"chatbox":"Do you want a new doctor?"},{"end":false,"hint":null,"type":"select","offset":2,"draw":false,"answers":["Yes","No"],"chatbox":"Do you want a new doctor?"},{"end":false,"hint":null,"type":"select","offset":1,"draw":false,"answers":["Yes","No"],"chatbox":"Do you want a new doctor?"},{"end":false,"hint":null,"type":"select","offset":2,"draw":false,"answers":["Yes","No"],"chatbox":"Can you draw for me what they could do better?"},{"end":true,"hint":null,"type":"select","offset":0,"draw":false,"answers":[],"chatbox":"Okay! Ill see what I can do about that :)"},{"end":true,"hint":null,"type":"select","offset":0,"draw":false,"answers":[],"chatbox":"Thanks for letting me know!"},{"end":true,"hint":null,"type":"select","offset":0,"draw":true,"answers":[],"chatbox":"Go over to the drawing board and show me :)"},{"end":true,"hint":null,"type":"select","offset":0,"draw":false,"answers":[],"chatbox":"Okay! If you ever change your mind, show me on the drawing board!"}]'
            )
        );
        


        \DB::table('kids_activities')->delete();
        \DB::table('kids_activities')->insert($kids_activities);  

        

    }
}
