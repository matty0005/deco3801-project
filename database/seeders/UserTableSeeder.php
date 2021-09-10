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

        $users = array(
            array(
                "id" => 1,
                "name" => "Test User",
                "email" => "test@example.com",
                "email_verified_at" => NULL,
                "password" => '$2y$10$P5pPxto6BAqO/USIWiCLHuDUCx/GIyAGceDUeVzcOT9SAF70ImmEi',
                "two_factor_secret" => NULL,
                "two_factor_recovery_codes" => NULL,
                "remember_token" => NULL,
                "address_infromation" => NULL,
                "notifications" => NULL,
                "created_at" => "2021-07-31 04:14:24",
                "updated_at" => "2021-07-31 04:14:24",
                "stripe_id" => NULL,
                "pm_type" => NULL,
                "pm_last_four" => NULL,
                "trial_ends_at" => NULL,
            ),
            array(
                "id" => 2,
                "name" => "Matt Gilpin",
                "email" => "matt@matthewgilpin.com",
                "email_verified_at" => NULL,
                "password" => '$2y$10$UZYNOGAVcR1aRLGBX3PudOfkhYPURicKKlhkWiKAiSbRBVaZr1.TC',
                "two_factor_secret" => NULL,
                "two_factor_recovery_codes" => NULL,
                "remember_token" => NULL,
                "address_infromation" => NULL,
                "notifications" => NULL,
                "created_at" => "2021-08-15 08:56:27",
                "updated_at" => "2021-08-15 08:56:27",
                "stripe_id" => NULL,
                "pm_type" => NULL,
                "pm_last_four" => NULL,
                "trial_ends_at" => NULL,
            ),
            array(
                "id" => 5,
                "name" => "Eliza Giater",
                "email" => "eg@gmail.com",
                "email_verified_at" => NULL,
                "password" => '$2y$10$FaKd8liEY1tCF4pRML6I1e09D3Bd3xuOi0tta0RLlpigo.4QIYRae',
                "two_factor_secret" => NULL,
                "two_factor_recovery_codes" => NULL,
                "remember_token" => NULL,
                "address_infromation" => NULL,
                "notifications" => NULL,
                "created_at" => "2021-09-09 06:33:20",
                "updated_at" => "2021-09-09 06:33:20",
                "stripe_id" => NULL,
                "pm_type" => NULL,
                "pm_last_four" => NULL,
                "trial_ends_at" => NULL,
            ),
            array(
                "id" => 6,
                "name" => "Clavin Met",
                "email" => "cm@gmail.com",
                "email_verified_at" => NULL,
                "password" => '$2y$10$xVgXVyiTV8hVH90exPHMA.kuk7ewblLqga1ads/20QTxFu1IC2rV6',
                "two_factor_secret" => NULL,
                "two_factor_recovery_codes" => NULL,
                "remember_token" => NULL,
                "address_infromation" => NULL,
                "notifications" => NULL,
                "created_at" => "2021-09-09 06:33:39",
                "updated_at" => "2021-09-09 06:33:39",
                "stripe_id" => NULL,
                "pm_type" => NULL,
                "pm_last_four" => NULL,
                "trial_ends_at" => NULL,
            ),
            array(
                "id" => 9,
                "name" => "Guinea Pig",
                "email" => "gp@gmail.com",
                "email_verified_at" => NULL,
                "password" => '$2y$10$f5S.w92oWOtMytn5O2mBy.7s/2p6Wr8EElDEKD1yTdZVxoMcr7YYe',
                "two_factor_secret" => NULL,
                "two_factor_recovery_codes" => NULL,
                "remember_token" => NULL,
                "address_infromation" => NULL,
                "notifications" => NULL,
                "created_at" => "2021-09-09 06:34:47",
                "updated_at" => "2021-09-09 06:34:47",
                "stripe_id" => NULL,
                "pm_type" => NULL,
                "pm_last_four" => NULL,
                "trial_ends_at" => NULL,
            ),
            array(
                "id" => 10,
                "name" => "Lucas Wright",
                "email" => "lw@gmail.com",
                "email_verified_at" => NULL,
                "password" => '$2y$10$N2f6mrt7rC4AVR.YkUi5RehQdVLK.seDwcMFWrnV0u4DuwF9qnhcC',
                "two_factor_secret" => NULL,
                "two_factor_recovery_codes" => NULL,
                "remember_token" => NULL,
                "address_infromation" => NULL,
                "notifications" => NULL,
                "created_at" => "2021-09-09 06:35:05",
                "updated_at" => "2021-09-09 06:35:05",
                "stripe_id" => NULL,
                "pm_type" => NULL,
                "pm_last_four" => NULL,
                "trial_ends_at" => NULL,
            ),
            array(
                "id" => 11,
                "name" => "Gideon Mill",
                "email" => "gm@gmail.com",
                "email_verified_at" => NULL,
                "password" => '$2y$10$QRcXnGJirBfIH8baJGNApOlv4XrhmCzEYoZc.3HN2C333fxxIuQjK',
                "two_factor_secret" => NULL,
                "two_factor_recovery_codes" => NULL,
                "remember_token" => NULL,
                "address_infromation" => NULL,
                "notifications" => NULL,
                "created_at" => "2021-09-09 06:35:20",
                "updated_at" => "2021-09-09 06:35:20",
                "stripe_id" => NULL,
                "pm_type" => NULL,
                "pm_last_four" => NULL,
                "trial_ends_at" => NULL,
            ),
            array(
                "id" => 12,
                "name" => "Ariel Merm",
                "email" => "am@gmail.com",
                "email_verified_at" => NULL,
                "password" => '$2y$10$eN2Rfcyk4./ZPppWL1JZAup1YdiLZiIkgaXOBdMlDFnI6CvdnbamO',
                "two_factor_secret" => NULL,
                "two_factor_recovery_codes" => NULL,
                "remember_token" => NULL,
                "address_infromation" => NULL,
                "notifications" => NULL,
                "created_at" => "2021-09-09 06:35:39",
                "updated_at" => "2021-09-09 06:35:39",
                "stripe_id" => NULL,
                "pm_type" => NULL,
                "pm_last_four" => NULL,
                "trial_ends_at" => NULL,
            ),
            array(
                "id" => 13,
                "name" => "Joshua Wallace",
                "email" => "jw@gmail.com",
                "email_verified_at" => NULL,
                "password" => '$2y$10$YzUz8goXEMa7QHmMVIQUzOdtcS/9.3XDfILA5i65BkejCet7wHa6a',
                "two_factor_secret" => NULL,
                "two_factor_recovery_codes" => NULL,
                "remember_token" => NULL,
                "address_infromation" => NULL,
                "notifications" => NULL,
                "created_at" => "2021-09-09 06:35:55",
                "updated_at" => "2021-09-09 06:35:55",
                "stripe_id" => NULL,
                "pm_type" => NULL,
                "pm_last_four" => NULL,
                "trial_ends_at" => NULL,
            ),
            array(
                "id" => 14,
                "name" => "Liam Portillo",
                "email" => "lp@gmail.com",
                "email_verified_at" => NULL,
                "password" => "$2y$10$2hde7qijRQtayGfwz/b7IOTDuKxqNOGUoog0Y6wtwcxevExHJNXDi",
                "two_factor_secret" => NULL,
                "two_factor_recovery_codes" => NULL,
                "remember_token" => NULL,
                "address_infromation" => NULL,
                "notifications" => NULL,
                "created_at" => "2021-09-09 06:36:21",
                "updated_at" => "2021-09-09 06:36:21",
                "stripe_id" => NULL,
                "pm_type" => NULL,
                "pm_last_four" => NULL,
                "trial_ends_at" => NULL,
            ),
            array(
                "id" => 15,
                "name" => "Sam Tran",
                "email" => "st@gmail.com",
                "email_verified_at" => NULL,
                "password" => '$2y$10$hCeQ98SMGfczrtdIuvblH.Pv0eCaE5w2oK2WKdfQ6ZkZB6EAT0sxi',
                "two_factor_secret" => NULL,
                "two_factor_recovery_codes" => NULL,
                "remember_token" => NULL,
                "address_infromation" => NULL,
                "notifications" => NULL,
                "created_at" => "2021-09-09 06:36:39",
                "updated_at" => "2021-09-09 06:36:39",
                "stripe_id" => NULL,
                "pm_type" => NULL,
                "pm_last_four" => NULL,
                "trial_ends_at" => NULL,
            ),
        );
       
        \DB::table('users')->insert($users);        
    }
}
