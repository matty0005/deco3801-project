<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ThreadLikesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $thread_likes = array(
            array(
                "id" => 1,
                "user_id" => 2,
                "thread_id" => 2,
                "liked" => 1,
                "created_at" => "2021-09-18 16:56:19",
                "updated_at" => "2021-09-18 16:56:19",
            ),
            array(
                "id" => 2,
                "user_id" => 2,
                "thread_id" => 5,
                "liked" => 1,
                "created_at" => "2021-09-18 16:56:22",
                "updated_at" => "2021-09-18 16:56:22",
            ),
            array(
                "id" => 3,
                "user_id" => 2,
                "thread_id" => 4,
                "liked" => 1,
                "created_at" => "2021-09-18 16:56:26",
                "updated_at" => "2021-09-18 16:56:26",
            ),
            array(
                "id" => 4,
                "user_id" => 13,
                "thread_id" => 5,
                "liked" => 1,
                "created_at" => "2021-09-18 16:59:09",
                "updated_at" => "2021-09-18 16:59:09",
            ),
            array(
                "id" => 5,
                "user_id" => 13,
                "thread_id" => 4,
                "liked" => 1,
                "created_at" => "2021-09-18 16:59:09",
                "updated_at" => "2021-09-18 16:59:09",
            ),
            array(
                "id" => 6,
                "user_id" => 13,
                "thread_id" => 2,
                "liked" => 1,
                "created_at" => "2021-09-18 16:59:15",
                "updated_at" => "2021-09-18 16:59:15",
            ),
            array(
                "id" => 7,
                "user_id" => 15,
                "thread_id" => 5,
                "liked" => 1,
                "created_at" => "2021-09-18 17:00:18",
                "updated_at" => "2021-09-18 17:00:18",
            ),
            array(
                "id" => 8,
                "user_id" => 15,
                "thread_id" => 2,
                "liked" => 1,
                "created_at" => "2021-09-18 17:01:21",
                "updated_at" => "2021-09-18 17:01:21",
            ),
            array(
                "id" => 9,
                "user_id" => 9,
                "thread_id" => 5,
                "liked" => 1,
                "created_at" => "2021-09-18 17:02:21",
                "updated_at" => "2021-09-18 17:02:21",
            ),
        );

        \DB::table('thread_likes')->delete();
        \DB::table('thread_likes')->insert($thread_likes);  

    }
}
