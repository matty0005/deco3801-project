<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ParentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('parents')->delete();

        \DB::table('parents')->insert(array(
            array(
                "id" => 1,
                "user_settings_id" => 1,
                "created_at" => "2021-07-31 04:14:24",
                "updated_at" => "2021-07-31 04:14:24",
            ),
            array(
                "id" => 2,
                "user_settings_id" => 2,
                "created_at" => "2021-07-31 04:14:24",
                "updated_at" => "2021-07-31 04:14:24",
            ),
            
            
        ));
    }
}
