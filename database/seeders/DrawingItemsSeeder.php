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
                "item" => "cat",
            ),
            array(
                "id" => 2,
                "item" => "face",
            ),
            array(
                "id" => 3,
                "item" => "car",
            ),
            array(
                "id" => 4,
                "item" => "forrest",
            ),
            array(
                "id" => 5,
                "item" => "tree",
            ),
            array(
                "id" => 6,
                "item" => "beach",
            ),
            array(
                "id" => 7,
                "item" => "yourself",
            )


        
            
        )
    );
    }
}
