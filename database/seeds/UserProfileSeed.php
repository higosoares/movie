<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

/**
 * User: HIGO
 * Date: 23/03/2019
 * Time: 01:38
 */

class UserProfileSeed extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ta_user_profile')->insert(
            [
                'id_user' => 1,
                'id_profile' => 1,
                'created_at' => new \DateTime()
            ]
        );

        DB::table('ta_user_profile')->insert(
            [
                'id_user' => 2,
                'id_profile' => 2,
                'created_at' => new \DateTime()
            ]
        );
    }
}
