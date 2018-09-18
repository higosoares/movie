<?php
/**
 * Created by PhpStorm.
 * User: HIGO
 * Date: 17/09/2018
 * Time: 20:25
 */

class CategorySeed
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
                'id_user' => 1,
                'tx_name_category' => 'Ação',
                'created_at' => new \DateTime()
            ]
        );

        DB::table('tb_category')->insert(
            [
                'id_user' => 2,
                'tx_name_category' => 'Anime',
                'created_at' => new \DateTime()
            ]
        );

        DB::table('tb_category')->insert(
            [
                'id_user' => 3,
                'tx_name_category' => 'Clássicos',
                'created_at' => new \DateTime()
            ]
        );

        DB::table('tb_category')->insert(
            [
                'id_user' => 4,
                'tx_name_category' => 'Comédia stand-up',
                'created_at' => new \DateTime()
            ]
        );

        DB::table('tb_category')->insert(
            [
                'id_user' => 5,
                'tx_name_category' => 'Comédias',
                'created_at' => new \DateTime()
            ]
        );

        DB::table('tb_category')->insert(
            [
                'id_user' => 6,
                'tx_name_category' => 'Documentários',
                'created_at' => new \DateTime()
            ]
        );

        DB::table('tb_category')->insert(
            [
                'id_user' => 7,
                'tx_name_category' => 'Dramas',
                'created_at' => new \DateTime()
            ]
        );

        DB::table('tb_category')->insert(
            [
                'id_user' => 8,
                'tx_name_category' => 'Esportes',
                'created_at' => new \DateTime()
            ]
        );

        DB::table('tb_category')->insert(
            [
                'id_user' => 9,
                'tx_name_category' => 'Estrangeiros',
                'created_at' => new \DateTime()
            ]
        );

        DB::table('tb_category')->insert(
            [
                'id_user' => 10,
                'tx_name_category' => 'Fé e espiritualidade',
                'created_at' => new \DateTime()
            ]
        );

        DB::table('tb_category')->insert(
            [
                'id_user' => 11,
                'tx_name_category' => 'Ficcção científica e fantasia',
                'created_at' => new \DateTime()
            ]
        );

        DB::table('tb_category')->insert(
            [
                'id_user' => 12,
                'tx_name_category' => 'Filmes Brasileiros',
                'created_at' => new \DateTime()
            ]
        );

        DB::table('tb_category')->insert(
            [
                'id_user' => 13,
                'tx_name_category' => 'Independentes',
                'created_at' => new \DateTime()
            ]
        );

        DB::table('tb_category')->insert(
            [
                'id_user' => 14,
                'tx_name_category' => 'Infantins e para a família',
                'created_at' => new \DateTime()
            ]
        );

        DB::table('tb_category')->insert(
            [
                'id_user' => 15,
                'tx_name_category' => 'Música e musicais',
                'created_at' => new \DateTime()
            ]
        );

        DB::table('tb_category')->insert(
            [
                'id_user' => 16,
                'tx_name_category' => 'Policiais',
                'created_at' => new \DateTime()
            ]
        );

        DB::table('tb_category')->insert(
            [
                'id_user' => 17,
                'tx_name_category' => 'Premiados',
                'created_at' => new \DateTime()
            ]
        );

        DB::table('tb_category')->insert(
            [
                'id_user' => 18,
                'tx_name_category' => 'Romances',
                'created_at' => new \DateTime()
            ]
        );

        DB::table('tb_category')->insert(
            [
                'id_user' => 19,
                'tx_name_category' => 'Suspense',
                'created_at' => new \DateTime()
            ]
        );

        DB::table('tb_category')->insert(
            [
                'id_user' => 20,
                'tx_name_category' => 'Terror',
                'created_at' => new \DateTime()
            ]
        );



    }
}