<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStampUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stamp_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('stamp_id')->index();
            $table
                ->foreign('stamp_id')
                ->references('id')
                ->on('stamps')
                ->onDelete('CASCADE');
            $table->unsignedBigInteger('user_id')->index();
            $table
                ->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('CASCADE');
            $table->unique(['user_id', 'stamp_id']); // User can only have a stamp once
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
        Schema::dropIfExists('stamp_user');
    }
}
