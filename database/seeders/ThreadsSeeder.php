<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ThreadsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $threads = array(
            array(
                "id" => 1,
                "user_id" => 1,
                "thread_topic_title" => "ADHD",
                "title" => "How to best calm my kid down",
                "comment" => "Hi, \nMy kid is doing my head in, how do i stop him from bashing my head into the wall...\nCheers",
                "anonymous" => 0,
                "doctors_only" => 0,
                'approved' => 1,
                "created_at" => "2021-09-18 16:49:43",
                "updated_at" => "2021-09-18 16:49:43",
            ),
            array(
                "id" => 2,
                "user_id" => 5,
                "thread_topic_title" => "Autism",
                "title" => "What is your kid's best attribute",
                "comment" => "Like, what is that one thing they are really good at?\nMine is good at __ .",
                "anonymous" => 0,
                "doctors_only" => 0,
                'approved' => 1,
                "created_at" => "2021-09-18 16:50:32",
                "updated_at" => "2021-09-18 16:50:32",
            ),
            array(
                "id" => 3,
                "user_id" => 11,
                "thread_topic_title" => "OCD",
                "title" => "This forum is killing my OCD, things are all out of order",
                "comment" => "please fix",
                "anonymous" => 0,
                "doctors_only" => 0,
                'approved' => 1,
                "created_at" => "2021-09-18 16:50:59",
                "updated_at" => "2021-09-18 16:50:59",
            ),
            array(
                "id" => 4,
                "user_id" => 5,
                "thread_topic_title" => "ADHD",
                "title" => "Is tourettes a normal side affect of this medication?",
                "comment" => "My kid just blurts out weird shit all the time",
                "anonymous" => 0,
                "doctors_only" => 1,
                'approved' => 1,
                "created_at" => "2021-09-18 16:52:30",
                "updated_at" => "2021-09-18 16:52:30",
            ),
            array(
                "id" => 5,
                "user_id" => 2,
                "thread_topic_title" => "ADHD",
                "title" => "Does anyone else have two or more kids with ADHD? How do you best handle them",
                "comment" => "My second child has just been diagnosed with ADHD, and wondered if theres any things we can prepare for",
                "anonymous" => 0,
                "doctors_only" => 0,
                'approved' => 1,
                "created_at" => "2021-09-18 16:56:04",
                "updated_at" => "2021-09-18 16:56:04",
            ),
        );

        \DB::table('threads')->delete();
        \DB::table('threads')->insert($threads);  

    }
}
