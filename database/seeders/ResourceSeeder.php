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
            'title' => 'Symptoms of Depression in Children',
            'content' => '<p class="my-4">Childhood depression differs from everyday emotions children exhibit when growing up. If your child is sad, it does not necessarily mean they are depressed. However, if the sadness becomes persistent or becomes to interfere with their everyday activies, schoolwork, family life or relationships, then it may in fact be depression.</p> <p class="my-4">How can you tell if your child is depressed? Some symptoms include:</p> <ul class="list-disc ml-4 mb-4"><li>anger,</li> <li>continous sadness,</li> <li>social withdrawal,</li> <li>changes in appetite,</li> <li>vocal outburts,</li> <li>fatigue,</li> <li>trouble concentrating,</li> <li>thoughts of suicide, and</li> <li>feelings of worthlessness or guilt</li> </ul> <p class="my-4>If these symptoms of depression have remained for at least 2 weeks, it is recommended you seek professional help either through Seedling Consultations or at a clinic who specialises in childrens mental health.</p> <p class="my-4">If you suspect your child is depressed, it is beneficial for parents to listen to their concerns. If you listen closely, you may be able to uncover the cause of your childs depression.</p> <p class="my-4">If your child appears to be severly depressed, parents should be particularly attentive for signs that indicate your child is at risk of suicide and seek help IMMEDIATELY.</p>',
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
