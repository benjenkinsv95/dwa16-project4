<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhonemesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phonemes', function (Blueprint $table) {

            $table->increments('id');
            $table->timestamps();

            $table->string('sound');
            $table->integer('stress_level');
            $table->integer('order');

            $table->integer('pronunciation_id')->unsigned();
            $table->foreign('pronunciation_id')->references('id')->on('pronunciations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('phonemes');
    }
}
