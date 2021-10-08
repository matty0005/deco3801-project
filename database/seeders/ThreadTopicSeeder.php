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
            'title' => 'Autism',
            'short_description' => 'Lorem ipsum dolor sit amet.',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur lacus erat, efficitur et arcu sed, vestibulum eleifend dui. Morbi congue lectus et nunc accumsan, nec bibendum dui blandit. Suspendisse potenti. Vestibulum arcu nisi, semper eget tortor et, semper fermentum mi. Nunc in nulla suscipit, rutrum massa a, facilisis mi. Aenean quis ultricies purus, eu rutrum arcu. Vestibulum porttitor interdum lorem, nec convallis dui volutpat quis.'
        ]);

        DB::table('thread_topics')->insert([
            'title' => 'ADHD',
            'short_description' => 'Lorem ipsum dolor sit amet.',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur lacus erat, efficitur et arcu sed, vestibulum eleifend dui. Morbi congue lectus et nunc accumsan, nec bibendum dui blandit. Suspendisse potenti. Vestibulum arcu nisi, semper eget tortor et, semper fermentum mi. Nunc in nulla suscipit, rutrum massa a, facilisis mi. Aenean quis ultricies purus, eu rutrum arcu. Vestibulum porttitor interdum lorem, nec convallis dui volutpat quis.'
        ]);

        DB::table('thread_topics')->insert([
            'title' => 'OCD',
            'short_description' => 'Lorem ipsum dolor sit amet.',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur lacus erat, efficitur et arcu sed, vestibulum eleifend dui. Morbi congue lectus et nunc accumsan, nec bibendum dui blandit. Suspendisse potenti. Vestibulum arcu nisi, semper eget tortor et, semper fermentum mi. Nunc in nulla suscipit, rutrum massa a, facilisis mi. Aenean quis ultricies purus, eu rutrum arcu. Vestibulum porttitor interdum lorem, nec convallis dui volutpat quis.'
        ]);

        DB::table('thread_topics')->insert([
            'title' => 'SLD',
            'short_description' => 'Lorem ipsum dolor sit amet.',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur lacus erat, efficitur et arcu sed, vestibulum eleifend dui. Morbi congue lectus et nunc accumsan, nec bibendum dui blandit. Suspendisse potenti. Vestibulum arcu nisi, semper eget tortor et, semper fermentum mi. Nunc in nulla suscipit, rutrum massa a, facilisis mi. Aenean quis ultricies purus, eu rutrum arcu. Vestibulum porttitor interdum lorem, nec convallis dui volutpat quis.'
        ]);
    }
}
