<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stations', function (Blueprint $table) {
            $table->id();
            $table->string('romaji');
            $table->string('kana');
            $table->string('kanji');
            $table->unsignedBigInteger('prefecture_id')->index();
            $table
                ->foreign('prefecture_id')
                ->references('id')
                ->on('prefectures')
                ->onDelete('CASCADE');
            $table->unsignedBigInteger('city_id')->index();
            $table
                ->foreign('city_id')
                ->references('id')
                ->on('cities')
                ->onDelete('CASCADE');
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
        Schema::dropIfExists('stations');
    }
}
