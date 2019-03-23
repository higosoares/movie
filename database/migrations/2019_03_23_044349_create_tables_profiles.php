<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablesProfiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_profile', function (Blueprint $table) {
            $table->increments('id_profile');
            $table->string('tx_name_profile', 255);
            $table->timestamps();
        });

        Schema::create('ta_user_profile', function (Blueprint $table) {
            $table->integer('id_user');
            $table->integer('id_profile');
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
        Schema::dropIfExists('tb_profile');
        Schema::dropIfExists('ta_user_profile');
    }
}
