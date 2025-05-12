<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGhibliFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ghibli_films', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('director');
            $table->integer('release_year');
            $table->integer('runtime')->comment('上映時間（分）');
            $table->bigInteger('box_office')->nullable();
            $table->boolean('is_classic')->default(false);
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
        Schema::dropIfExists('ghibli_films');
    }
}
