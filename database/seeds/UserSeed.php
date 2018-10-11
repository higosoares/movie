<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

/**
 * Created by PhpStorm.
 * User: HIGO
 * Date: 17/09/2018
 * Time: 20:25
 */

class UserSeed extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_user')->insert(
            [
                'id' => 1,
                'name' => 'Higo Soares do Lago',
                'email' => 'higo@gmail.com',
                'password' => Hash::make('123456'),
                'situation' => 1,
                'created_at' => new \DateTime()
            ]
        );
    }
}