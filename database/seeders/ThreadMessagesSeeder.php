<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ThreadMessagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $thread_messages = array(
            array(
                "id" => 1,
                "thread_id" => 2,
                "user_id" => 13,
                "message" => "Mine's is that they are like a human calculator",
                "created_at" => "2021-09-18 16:59:35",
                "updated_at" => "2021-09-18 16:59:35",
            ),
            array(
                "id" => 2,
                "thread_id" => 5,
                "user_id" => 13,
                "message" => "Nope, but Good luck!",
                "created_at" => "2021-09-18 16:59:52",
                "updated_at" => "2021-09-18 16:59:52",
            ),
            array(
                "id" => 3,
                "thread_id" => 5,
                "user_id" => 15,
                "message" => "Have fun - but i found it useful to just burn all their energy before going somwhere",
                "created_at" => "2021-09-18 17:01:02",
                "updated_at" => "2021-09-18 17:01:02",
            ),
            array(
                "id" => 4,
                "thread_id" => 2,
                "user_id" => 15,
                "message" => "Mines a real gamer",
                "created_at" => "2021-09-18 17:01:30",
                "updated_at" => "2021-09-18 17:01:30",
            ),
            array(
                "id" => 5,
                "thread_id" => 5,
                "user_id" => 9,
                "message" => "Please dont worry too much, having two isn't double the trouble",
                "created_at" => "2021-09-18 17:02:55",
                "updated_at" => "2021-09-18 17:02:55",
            ),
        );

        \DB::table('thread_messages')->delete();
        \DB::table('thread_messages')->insert($thread_messages);  
        
    }
}
