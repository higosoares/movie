<?php

use Illuminate\Database\Seeder;

/**
 * Created by PhpStorm.
 * User: HIGO
 * Date: 17/09/2018
 * Time: 20:25
 */

class MovieCategorySeed extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ta_movie_category')->insert(
            [
                'id_movie' => 1,
                'id_category' => 1,
                'created_at' => new \DateTime()
            ]
        );

        DB::table('ta_movie_category')->insert(
            [
                'id_movie' => 1,
                'id_category' => 11,
                'created_at' => new \DateTime()
            ]
        );

        DB::table('ta_movie_category')->insert(
            [
                'id_movie' => 2,
                'id_category' => 20,
                'created_at' => new \DateTime()
            ]
        );
    }
}