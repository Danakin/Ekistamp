<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStampsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stamps', function (Blueprint $table) {
            $table->id();
            $table->string('name_eng')->nullable();
            $table->string('name_jap')->nullable();
            $table->string('image');
            $table->boolean('approved')->default(false);
            $table->unsignedBigInteger('user_id')->index();
            $table
                ->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('CASCADE');
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
            $table->unsignedBigInteger('station_id')->index();
            $table
                ->foreign('station_id')
                ->references('id')
                ->on('stations')
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
        Schema::dropIfExists('stamps');
    }
}
