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
                "data" => "[{\"hint\": null, \"type\": \"select\", \"offset\": 0, \"answers\": [\"Good\", \"Ok\", \"Bad\"], \"chatbox\": \"Hello {user_name} How are you feeling today\"}, {\"hint\": null, \"type\": \"select\", \"offset\": 2, \"answers\": [\"Sure\", \"Ok\", \"Not now\"], \"chatbox\": \"That's Great {user_name}, I'm feeling a bit sleepy, are you able to help me with something?\"}, {\"hint\": null, \"type\": \"select\", \"offset\": 1, \"answers\": [\"Sure\", \"Ok\", \"Not now\"], \"chatbox\": \"Hey {user_name}, I'm feeling a bit sleepy, are you able to help me with something?\"}, {\"hint\": null, \"type\": \"select\", \"offset\": 0, \"answers\": [\"Sure\", \"Ok\", \"Not now\"], \"chatbox\": \"Oh dear {user_name}, I'm also feeling a little bad too, are you able to help me with something?\"}, {\"hint\": null, \"type\": \"select\", \"offset\": 2, \"answers\": [\"Wait, you're a nerd?\", \"Don't listen to him\", \"Square him up\", \"Leave\", \"Nothing\"], \"chatbox\": \"Great, I'm in a playground outside, and this kid is calling me a nerd, what should I do?' \"}, {\"hint\": null, \"type\": \"select\", \"offset\": 1, \"answers\": [\"Wait, you're a nerd?\", \"Don't listen to him\", \"Square him up\", \"Leave\", \"Nothing\"], \"chatbox\": \"Great, I'm in a playground outside, and this kid is calling me a nerd, what should I do?' \"}, {\"end\": true, \"hint\": null, \"type\": null, \"offset\": 0, \"answers\": [], \"chatbox\": \"Awww okay :( see you next time then.' \"}, {\"end\": true, \"hint\": null, \"type\": null, \"offset\": 0, \"answers\": [], \"chatbox\": \"*crying* mwaahhhh *crying* mwahhhh *crying* :( That's not nice!' \"}, {\"end\": true, \"hint\": null, \"type\": null, \"offset\": 0, \"answers\": [], \"chatbox\": \"Ok! I'll try to ignore it\"}, {\"end\": true, \"hint\": null, \"type\": null, \"offset\": 0, \"answers\": [], \"chatbox\": \"Time to square him up, hopefully I don't come off second best...\"}, {\"end\": true, \"hint\": null, \"type\": null, \"offset\": 0, \"answers\": [], \"chatbox\": \"Okay, i'll be off home now - hopefully he doesn't follow me home\"}, {\"end\": true, \"hint\": null, \"type\": null, \"offset\": 0, \"answers\": [], \"chatbox\": \"Am I just going to let him be mean to me?\"}]",
            ),
        );


        \DB::table('kids_activities')->delete();
        \DB::table('kids_activities')->insert($kids_activities);  

        

    }
}
