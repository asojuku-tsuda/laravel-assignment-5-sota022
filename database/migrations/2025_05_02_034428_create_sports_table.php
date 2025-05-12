<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('type')->comment('個人競技/チーム競技など');
            $table->integer('players_count')->comment('必要な選手数');
            $table->boolean('is_olympic')->default(false);
            $table->string('origin_country')->nullable();
            $table->integer('established_year')->nullable();
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
        Schema::dropIfExists('sports');
    }
}
