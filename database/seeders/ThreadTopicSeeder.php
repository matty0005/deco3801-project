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
            'title' => 'General',
            'short_description' => 'Ask any community related questions, or get to know other users here.',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur lacus erat, efficitur et arcu sed, vestibulum eleifend dui. Morbi congue lectus et nunc accumsan, nec bibendum dui blandit. Suspendisse potenti. Vestibulum arcu nisi, semper eget tortor et, semper fermentum mi. Nunc in nulla suscipit, rutrum massa a, facilisis mi. Aenean quis ultricies purus, eu rutrum arcu. Vestibulum porttitor interdum lorem, nec convallis dui volutpat quis.'
        ]);

        DB::table('thread_topics')->insert([
            'title' => 'Behavioural',
            'short_description' => 'Behavioural disorders',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur lacus erat, efficitur et arcu sed, vestibulum eleifend dui. Morbi congue lectus et nunc accumsan, nec bibendum dui blandit. Suspendisse potenti. Vestibulum arcu nisi, semper eget tortor et, semper fermentum mi. Nunc in nulla suscipit, rutrum massa a, facilisis mi. Aenean quis ultricies purus, eu rutrum arcu. Vestibulum porttitor interdum lorem, nec convallis dui volutpat quis.'
        ]);

        DB::table('thread_topics')->insert([
            'title' => 'Mood',
            'short_description' => 'Mood disorders',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur lacus erat, efficitur et arcu sed, vestibulum eleifend dui. Morbi congue lectus et nunc accumsan, nec bibendum dui blandit. Suspendisse potenti. Vestibulum arcu nisi, semper eget tortor et, semper fermentum mi. Nunc in nulla suscipit, rutrum massa a, facilisis mi. Aenean quis ultricies purus, eu rutrum arcu. Vestibulum porttitor interdum lorem, nec convallis dui volutpat quis.'
        ]);

        DB::table('thread_topics')->insert([
            'title' => 'Anxiety',
            'short_description' => 'Anxiety disorders',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur lacus erat, efficitur et arcu sed, vestibulum eleifend dui. Morbi congue lectus et nunc accumsan, nec bibendum dui blandit. Suspendisse potenti. Vestibulum arcu nisi, semper eget tortor et, semper fermentum mi. Nunc in nulla suscipit, rutrum massa a, facilisis mi. Aenean quis ultricies purus, eu rutrum arcu. Vestibulum porttitor interdum lorem, nec convallis dui volutpat quis.'
        ]);

        DB::table('thread_topics')->insert([
            'title' => 'Developmental',
            'short_description' => 'Developmental disorders',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur lacus erat, efficitur et arcu sed, vestibulum eleifend dui. Morbi congue lectus et nunc accumsan, nec bibendum dui blandit. Suspendisse potenti. Vestibulum arcu nisi, semper eget tortor et, semper fermentum mi. Nunc in nulla suscipit, rutrum massa a, facilisis mi. Aenean quis ultricies purus, eu rutrum arcu. Vestibulum porttitor interdum lorem, nec convallis dui volutpat quis.'
        ]);

        DB::table('thread_topics')->insert([
            'title' => 'Eating',
            'short_description' => 'Eating Disorders',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur lacus erat, efficitur et arcu sed, vestibulum eleifend dui. Morbi congue lectus et nunc accumsan, nec bibendum dui blandit. Suspendisse potenti. Vestibulum arcu nisi, semper eget tortor et, semper fermentum mi. Nunc in nulla suscipit, rutrum massa a, facilisis mi. Aenean quis ultricies purus, eu rutrum arcu. Vestibulum porttitor interdum lorem, nec convallis dui volutpat quis.'
        ]);
    }
}
