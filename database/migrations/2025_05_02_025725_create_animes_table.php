<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('animes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('genre');
            $table->integer('episodes');
            $table->date('aired_from')->nullable();
            $table->date('aired_to')->nullable();
            $table->decimal('rating',3,1)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('animes');
    }
};
