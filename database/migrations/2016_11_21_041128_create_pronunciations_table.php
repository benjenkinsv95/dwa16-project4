<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePronunciationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pronunciations', function (Blueprint $table) {


            $table->increments('id');
            $table->timestamps();

            $table->string('word');
            # TODO(ben): phonemes()
            # TODO(ben): voices()

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pronunciations');
    }
}
