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
                "data" => "[{\"end\": false, \"hint\": null, \"type\": \"select\", \"offset\": 0, \"answers\": [\"Good\", \"Ok\", \"Bad\"], \"chatbox\": \"Hello {user_name} How are you feeling today\"}, {\"end\": false, \"hint\": null, \"type\": \"select\", \"offset\": 2, \"answers\": [\"Sure\", \"Ok\", \"Not now\"], \"chatbox\": \"That's Great {user_name}, I'm feeling a bit sleepy, are you able to help me with something?\"}, {\"end\": false, \"hint\": null, \"type\": \"select\", \"offset\": 1, \"answers\": [\"Sure\", \"Ok\", \"Not now\"], \"chatbox\": \"Hey {user_name}, I'm feeling a bit sleepy, are you able to help me with something?\"}, {\"end\": false, \"hint\": null, \"type\": \"select\", \"offset\": 0, \"answers\": [\"Sure\", \"Ok\", \"Not now\"], \"chatbox\": \"Oh dear {user_name}, I'm also feeling a little bad too, are you able to help me with something?\"}, {\"end\": false, \"hint\": null, \"type\": \"select\", \"offset\": 2, \"answers\": [\"Wait, you're a nerd?\", \"Don't listen to him\", \"Square him up\", \"Leave\", \"Nothing\"], \"chatbox\": \"Great, I'm in a playground outside, and this kid is calling me a nerd, what should I do?' \"}, {\"end\": false, \"hint\": null, \"type\": \"select\", \"offset\": 1, \"answers\": [\"Wait, you're a nerd?\", \"Don't listen to him\", \"Square him up\", \"Leave\", \"Nothing\"], \"chatbox\": \"Great, I'm in a playground outside, and this kid is calling me a nerd, what should I do?' \"}, {\"end\": true, \"hint\": null, \"type\": null, \"offset\": 0, \"answers\": [], \"chatbox\": \"Awww okay :( see you next time then.' \"}, {\"end\": true, \"hint\": null, \"type\": null, \"offset\": 0, \"answers\": [], \"chatbox\": \"*crying* mwaahhhh *crying* mwahhhh *crying* :( That's not nice!' \"}, {\"end\": true, \"hint\": null, \"type\": null, \"offset\": 0, \"answers\": [], \"chatbox\": \"Ok! I'll try to ignore it\"}, {\"end\": true, \"hint\": null, \"type\": null, \"offset\": 0, \"answers\": [], \"chatbox\": \"Time to square him up, hopefully I don't come off second best...\"}, {\"end\": true, \"hint\": null, \"type\": null, \"offset\": 0, \"answers\": [], \"chatbox\": \"Okay, i'll be off home now - hopefully he doesn't follow me home\"}, {\"end\": true, \"hint\": null, \"type\": null, \"offset\": 0, \"answers\": [], \"chatbox\": \"Am I just going to let him be mean to me?\"}]",
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
