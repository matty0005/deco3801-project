<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array(
            array(
                "id" => 13,
                "name" => "Test User",
                "email" => "test@example.com",
                "email_verified_at" => NULL,
                "password" => '$2y$10$P5pPxto6BAqO/USIWiCLHuDUCx/GIyAGceDUeVzcOT9SAF70ImmEi',
                "two_factor_secret" => NULL,
                "two_factor_recovery_codes" => NULL,
                "remember_token" => NULL,
                "created_at" => "2021-07-31 04:14:24",
                "updated_at" => "2021-07-31 04:14:24",
            ),
        )
    );
        
    }
}
