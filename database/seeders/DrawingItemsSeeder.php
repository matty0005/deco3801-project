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
                "item" => "Cat",
            ),
            array(
                "id" => 2,
                "item" => "Face",
            ),
            array(
                "id" => 3,
                "item" => "Car",
            ),
            array(
                "id" => 4,
                "item" => "Forrest",
            ),
            array(
                "id" => 5,
                "item" => "Tree",
            ),
            array(
                "id" => 6,
                "item" => "Beach",
            ),
            array(
                "id" => 7,
                "item" => "You",
            ),
            array(
                "id" => 8,
                "item" => "Mum",
            ),


        
            
        )
    );
    }
}
