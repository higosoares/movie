<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_user', function (Blueprint $table) {
            $table->increments('id_user');
            $table->string('tx_name_user', 255);
            $table->string('tx_email_user', 255)->unique();
            $table->string('tx_password_user', 255);
            $table->tinyInteger('tp_situation_user');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('tb_movie', function (Blueprint $table) {
            $table->increments('id_movie');
            $table->string('tx_name_movie', 255);
            $table->string('tx_name_director', 255);
            $table->text('tx_description_movie');
            $table->time('qt_duration_movie');
            $table->date('qt_debut_movie');
            $table->year('qt_year_movie');
            $table->tinyInteger('tp_situation_movie');
            $table->timestamps();
        });

        Schema::create('tb_category', function (Blueprint $table) {
            $table->increments('id_category');
            $table->string('tx_name_category', 255);
            $table->timestamps();
        });

        Schema::create('ta_movie_category', function (Blueprint $table) {
            $table->integer('id_movie');
            $table->integer('id_category');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_user');
        Schema::dropIfExists('tb_movie');
        Schema::dropIfExists('tb_category');
        Schema::dropIfExists('ta_movie_category');
    }
}
