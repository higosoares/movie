<?php

use Illuminate\Database\Seeder;

/**
 * Created by PhpStorm.
 * User: HIGO
 * Date: 17/09/2018
 * Time: 20:25
 */

class MovieSeed extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_movie')->insert(
            [
                'id_movie' => 1,
                'tx_name_movie' => 'A Freira (The Nun)',
                'tx_name_director' => 'Corin Hardy',
                'tx_description_movie' => 'Presa em um convento na Romênia, uma freira comete suicídio. Para investigar o caso, o Vaticano envia um padre atormentado e uma noviça prestes a se tornar freira. Arriscando suas vidas, a fé e até suas almas, os dois descobrem um segredo profano e se confrontam com uma força do mal que toma a forma de uma freira demoníaca e transforma o convento num campo de batalha.',
                'qt_duration_movie' => '01:37:00',
                'qt_debut_movie' => '2018-09-06',
                'qt_year_movie' => '2018',
                'tp_situation_movie' => 1,
                'tx_url_imagem_movie' => 'img/the_nun.jpg',
                'tx_url_trailer_movie' => 'https://www.youtube.com/watch?v=deayNzQLqAg',
                'qt_star_rating_movie' => 5.7,
                'created_at' => new \DateTime()
            ]
        );

        DB::table('tb_movie')->insert(
            [
                'id_movie' => 2,
                'tx_name_movie' => 'O Predador',
                'tx_name_director' => 'Shane Black',
                'tx_description_movie' => 'Uma perseguição entre naves alienígenas traz à Terra um novo predador, que acaba sendo capturado por humanos. Antes disso, ele tem seu capacete e bracelete roubados por Quinn McKenna (Boyd Holbrook), um atirador de elite que estava em missão no local onde a nave caiu. A bióloga Casey Brackett (Olivia Munn) é então chamada para examinar o ser recém-descoberto, mas ele logo consegue escapar do laboratório em que é mantido cativeiro. Ao tentar recapturá-lo Casey encontra McKenna, que está em um ônibus repleto de ex-militares com problemas. Juntos, eles buscam um meio de sobreviver e, ao mesmo tempo, proteger o pequeno Rory (Jacob Tremblay), filho de McKenna, que está com os artefatos alienígenas pegos pelo pai.',
                'qt_duration_movie' => '01:47:00',
                'qt_debut_movie' => '2018-09-13',
                'qt_year_movie' => '2018',
                'tp_situation_movie' => 1,
                'tx_url_imagem_movie' => 'img/predador_2018.jpg',
                'tx_url_trailer_movie' => 'https://www.youtube.com/watch?v=c2MKYixgjj0',
                'qt_star_rating_movie' => 5.9,
                'created_at' => new \DateTime()
            ]
        );
    }
}