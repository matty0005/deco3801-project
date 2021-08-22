<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DrawingItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('drawing_items')->delete();
        
        \DB::table('drawing_items')->insert(array(
            array(
                "id" => 1,
                "item" => "a Cat",
            ),
            array(
                "id" => 2,
                "item" => "a Face",
            ),
            array(
                "id" => 3,
                "item" => "a Car",
            ),
            array(
                "id" => 4,
                "item" => "a Forrest",
            ),
            array(
                "id" => 5,
                "item" => "a Tree",
            ),
            array(
                "id" => 6,
                "item" => "the Beach",
            ),
            array(
                "id" => 7,
                "item" => "Yourself",
            ),
            array(
                "id" => 8,
                "item" => "your Parents",
            ),


        
            
        )
    );
    }
}
