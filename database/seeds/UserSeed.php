<?php
/**
 * Created by PhpStorm.
 * User: HIGO
 * Date: 17/09/2018
 * Time: 20:25
 */

class UserSeed
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
                'id_user' => 1,
                'tx_name_user' => 'Higo Soares do Lago',
                'tx_email_user' => 'higo@gmail.com',
                'tx_password_user' => bcrypt('123456'),
                'tp_situation_user' => 1,
                'created_at' => new \DateTime()
            ]
        );
    }
}