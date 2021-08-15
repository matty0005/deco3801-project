<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ThreadTopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('thread_topics')->insert([
            'title' => 'Autism'
        ]);

        DB::table('thread_topics')->insert([
            'title' => 'ADHD'
        ]);

        DB::table('thread_topics')->insert([
            'title' => 'ODC'
        ]);

        DB::table('thread_topics')->insert([
            'title' => 'SLD'
        ]);
    }
}
