<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('resources')->insert([
            'title' => 'Title 1',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut volutpat diam. Quisque ac elit nec orci mollis dictum at non ex. Cras at vestibulum eros, nec lacinia nunc. Vestibulum nulla augue, pulvinar vel vestibulum at, mollis sit amet ex. Maecenas sodales fermentum lorem, quis ultrices enim ultricies sed. Donec rhoncus, enim in mattis vulputate, orci neque tincidunt dui, nec convallis nulla elit egestas sapien. Mauris maximus rhoncus euismod.',
        ]);

        DB::table('resources')->insert([
            'title' => 'Title 2',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut volutpat diam. Quisque ac elit nec orci mollis dictum at non ex. Cras at vestibulum eros, nec lacinia nunc. Vestibulum nulla augue, pulvinar vel vestibulum at, mollis sit amet ex. Maecenas sodales fermentum lorem, quis ultrices enim ultricies sed. Donec rhoncus, enim in mattis vulputate, orci neque tincidunt dui, nec convallis nulla elit egestas sapien. Mauris maximus rhoncus euismod.',
        ]);

        DB::table('resources')->insert([
            'title' => 'Title 3',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut volutpat diam. Quisque ac elit nec orci mollis dictum at non ex. Cras at vestibulum eros, nec lacinia nunc. Vestibulum nulla augue, pulvinar vel vestibulum at, mollis sit amet ex. Maecenas sodales fermentum lorem, quis ultrices enim ultricies sed. Donec rhoncus, enim in mattis vulputate, orci neque tincidunt dui, nec convallis nulla elit egestas sapien. Mauris maximus rhoncus euismod.',
        ]);

        DB::table('resources')->insert([
            'title' => 'Title 4',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut volutpat diam. Quisque ac elit nec orci mollis dictum at non ex. Cras at vestibulum eros, nec lacinia nunc. Vestibulum nulla augue, pulvinar vel vestibulum at, mollis sit amet ex. Maecenas sodales fermentum lorem, quis ultrices enim ultricies sed. Donec rhoncus, enim in mattis vulputate, orci neque tincidunt dui, nec convallis nulla elit egestas sapien. Mauris maximus rhoncus euismod.',
        ]);
    }
}
