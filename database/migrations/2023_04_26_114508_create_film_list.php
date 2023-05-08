<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('film_list', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->string('release_date');
            $table->text('genre');
            $table->string('img_cover', 255);
            $table->text('film_desc');
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
        Schema::dropIfExists('film_list');
    }
};
