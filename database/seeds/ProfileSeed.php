<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

/**
 * User: HIGO
 * Date: 23/03/2019
 * Time: 01:38
 */

class ProfileSeed extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_profile')->insert(
            [
                'id_profile' => 1,
                'tx_name_profile' => 'Admin',
                'created_at' => new \DateTime()
            ]
        );

        DB::table('tb_profile')->insert(
            [
                'id_profile' => 2,
                'tx_name_profile' => 'User',
                'created_at' => new \DateTime()
            ]
        );
    }
}
