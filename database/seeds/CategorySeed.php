<?php

use Illuminate\Database\Seeder;

/**
 * Created by PhpStorm.
 * User: HIGO
 * Date: 17/09/2018
 * Time: 20:25
 */

class CategorySeed extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_category')->insert(
            [
                'id_category' => 1,
                'tx_name_category' => 'Ação',
                'created_at' => new \DateTime()
            ]
        );

        DB::table('tb_category')->insert(
            [
                'id_category' => 2,
                'tx_name_category' => 'Anime',
                'created_at' => new \DateTime()
            ]
        );

        DB::table('tb_category')->insert(
            [
                'id_category' => 3,
                'tx_name_category' => 'Clássicos',
                'created_at' => new \DateTime()
            ]
        );

        DB::table('tb_category')->insert(
            [
                'id_category' => 4,
                'tx_name_category' => 'Comédia stand-up',
                'created_at' => new \DateTime()
            ]
        );

        DB::table('tb_category')->insert(
            [
                'id_category' => 5,
                'tx_name_category' => 'Comédias',
                'created_at' => new \DateTime()
            ]
        );

        DB::table('tb_category')->insert(
            [
                'id_category' => 6,
                'tx_name_category' => 'Documentários',
                'created_at' => new \DateTime()
            ]
        );

        DB::table('tb_category')->insert(
            [
                'id_category' => 7,
                'tx_name_category' => 'Dramas',
                'created_at' => new \DateTime()
            ]
        );

        DB::table('tb_category')->insert(
            [
                'id_category' => 8,
                'tx_name_category' => 'Esportes',
                'created_at' => new \DateTime()
            ]
        );

        DB::table('tb_category')->insert(
            [
                'id_category' => 9,
                'tx_name_category' => 'Estrangeiros',
                'created_at' => new \DateTime()
            ]
        );

        DB::table('tb_category')->insert(
            [
                'id_category' => 10,
                'tx_name_category' => 'Fé e espiritualidade',
                'created_at' => new \DateTime()
            ]
        );

        DB::table('tb_category')->insert(
            [
                'id_category' => 11,
                'tx_name_category' => 'Ficcção científica e fantasia',
                'created_at' => new \DateTime()
            ]
        );

        DB::table('tb_category')->insert(
            [
                'id_category' => 12,
                'tx_name_category' => 'Filmes Brasileiros',
                'created_at' => new \DateTime()
            ]
        );

        DB::table('tb_category')->insert(
            [
                'id_category' => 13,
                'tx_name_category' => 'Independentes',
                'created_at' => new \DateTime()
            ]
        );

        DB::table('tb_category')->insert(
            [
                'id_category' => 14,
                'tx_name_category' => 'Infantins e para a família',
                'created_at' => new \DateTime()
            ]
        );

        DB::table('tb_category')->insert(
            [
                'id_category' => 15,
                'tx_name_category' => 'Música e musicais',
                'created_at' => new \DateTime()
            ]
        );

        DB::table('tb_category')->insert(
            [
                'id_category' => 16,
                'tx_name_category' => 'Policiais',
                'created_at' => new \DateTime()
            ]
        );

        DB::table('tb_category')->insert(
            [
                'id_category' => 17,
                'tx_name_category' => 'Premiados',
                'created_at' => new \DateTime()
            ]
        );

        DB::table('tb_category')->insert(
            [
                'id_category' => 18,
                'tx_name_category' => 'Romances',
                'created_at' => new \DateTime()
            ]
        );

        DB::table('tb_category')->insert(
            [
                'id_category' => 19,
                'tx_name_category' => 'Suspense',
                'created_at' => new \DateTime()
            ]
        );

        DB::table('tb_category')->insert(
            [
                'id_category' => 20,
                'tx_name_category' => 'Terror',
                'created_at' => new \DateTime()
            ]
        );



    }
}